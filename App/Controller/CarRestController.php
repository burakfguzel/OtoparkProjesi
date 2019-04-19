<?php

namespace App\Controller;

use App\Model\CarParking;
use App\Model\Cars;
use App\Model\Spaces;
use Swagger\Client\Api\DefaultApi;

class CarRestController
{
    public function entry()
    {
        $data = $this->apiClient(__DIR__."/../../public/test-car.jpg");

        $car = false;
        if($data)
        {
            $car = Cars::updateOrCreate(['plate_number' => $data['plate_number']],$data);
            $empty_space = Spaces::take(1)->whereDoesntHave('car_parking',function($query){
                $query->where('car_release_date',null);
            })->first();


            $car->parkings()->create([
                'parking_space_id' => $empty_space->id,
                'car_entry_date'   => date('Y-m-d H:i:s'),
            ]);
        }

        echo json_encode(['status' => $car ? true : false]);
    }

    public function exit_car()
    {
        $data = $this->apiClient(__DIR__."/../../public/test-car.jpg");

        $parking_space = false;
        if($data)
        {
            $parking_space = CarParking::where('car_release_date',null)->whereHas('car',function ($query) use ($data){
                $query->where('plate_number',$data['plate_number']);
            })->first();

            $parking_space->car_release_date = date('Y-m-d H:i:s');
            $parking_space->save();
        }

        echo json_encode(['status' => $parking_space ? true : false]);
    }

    private function apiClient($image)
    {
        $api_instance = new DefaultApi();
        $image_bytes = base64_encode(file_get_contents($image)); // string | The image file that you wish to analyze encoded in base64
        $secret_key = "sk_fe112a1b2ebe52f070adaebd"; // string | The secret key used to authenticate your account.  You can view your  secret key by visiting  https://cloud.openalpr.com/
        $country = "eu"; // string | Defines the training data used by OpenALPR.  \"us\" analyzes  North-American style plates.  \"eu\" analyzes European-style plates.  This field is required if using the \"plate\" task  You may use multiple datasets by using commas between the country  codes.  For example, 'au,auwide' would analyze using both the  Australian plate styles.  A full list of supported country codes  can be found here https://github.com/openalpr/openalpr/tree/master/runtime_data/config
        $recognize_vehicle = 1; // int | If set to 1, the vehicle will also be recognized in the image This requires an additional credit per request
        $state = ""; // string | Corresponds to a US state or EU country code used by OpenALPR pattern  recognition.  For example, using \"md\" matches US plates against the  Maryland plate patterns.  Using \"fr\" matches European plates against  the French plate patterns.
        $return_image = 0; // int | If set to 1, the image you uploaded will be encoded in base64 and  sent back along with the response
        $topn = 10; // int | The number of results you would like to be returned for plate  candidates and vehicle classifications
        $prewarp = ""; // string | Prewarp configuration is used to calibrate the analyses for the  angle of a particular camera.  More information is available here http://doc.openalpr.com/accuracy_improvements.html#calibration

        try {
            $result = $api_instance->recognizeBytes($image_bytes, $secret_key, $country, $recognize_vehicle, $state, $return_image, $topn, $prewarp);

            if($result['results'])
            {
                return [
                    'plate_number' => $result['results'][0]['plate'],
                    'color'     => isset($result['results'][0]['vehicle']['color']) ? $result['results'][0]['vehicle']['color'][0]['name'] : "",
                    'model'     => isset($result['results'][0]['vehicle']['make_model']) ? $result['results'][0]['vehicle']['make_model'][0]['name'] : "",
                    'body_type'     => isset($result['results'][0]['vehicle']['body_type']) ? $result['results'][0]['vehicle']['body_type'][0]['name'] : "",
                ];
            }

        } catch (Exception $e) {
        }

        return false;
    }

    public function deneme()
    {
        echo json_encode(['alındı']);exit;
    }
}
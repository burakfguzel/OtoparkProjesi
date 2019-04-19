<?php
if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];

    $value = explode(".", $_FILES['image']['name']);
    $file_ext = strtolower(array_pop($value));
    $expensions= array("jpeg","jpg");

    if(in_array($file_ext,$expensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG file.";
    }

    if($file_size > 2097152){
        $errors[]='File size must be excately 2 MB';
    }

    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"images/".$file_name);
        echo "Success";
    }else{
        print_r($errors);
    }
    //use SwaggerClient\Api;
    $secret_key = "sk_00b5ec3555fd24bc98e74787"; // string | The secret key used to authenticate your account.  You can view your \nsecret key by visiting \nhttps://cloud.openalpr.com/\n
    $tasks = 'plate'; // string[] | Tasks to execute.  You can choose to detect the license plate, \nas well as additional metadata about the vehicle.  Each additional \noption costs an API credit.  Valid values are: plate, color, make, makemodel.\nUse commas to specify multiple recognition types in one pass\n
    $gg='http://demo.suffescom.com/openalpr/images/'.$file_name;

    $deserialized1 = new \SplFileObject('C:\xampp\htdocs\openalpr\images\small-0.jpg');


    $image = $deserialized1; // \SplFileObject | The image file that you wish to analyze\nAt least one value for image, image_bytes, or image_url must be provided\n
    $image_bytes = ""; // string | The image file that you wish to analyze encoded in base64\nAt least one value for image, image_bytes, or image_url must be provided\n
    $image_url = ""; // string | A URL to an image that you wish to analyze\nAt least one value for image, image_bytes, or image_url must be provided\n
    $country = ""; // string | Defines the training data used by OpenALPR.  \"us\" analyzes \nNorth-American style plates.  \"eu\" analyzes European-style plates.\n\nThis field is required if using the \"plate\" task\n\nYou may use multiple datasets by using commas between the country \ncodes.  For example, 'au,auwide' would analyze using both the \nAustralian plate styles.  A full list of supported country codes \ncan be found here\nhttps://github.com/openalpr/openalpr/tree/master/runtime_data/config\n
    $state = ""; // string | Corresponds to a US state or EU country code used by OpenALPR pattern \nrecognition.  For example, using \"md\" matches US plates against the \nMaryland plate patterns.  Using \"fr\" matches European plates against \nthe French plate patterns.\n
    $return_image = 1; // int | If set to 1, the image you uploaded will be encoded in base64 and \nsent back along with the response\n
    $topn = 1; // int | The number of results you would like to be returned for plate \ncandidates and vehicle classifications\n
    $prewarp = ""; // string | Prewarp configuration is used to calibrate the analyses for the \nangle of a particular camera.  More information is available here\nhttp://doc.openalpr.com/accuracy_improvements.html#calibration\n

    $image_url='http://demo.suffescom.com/openalpr/images/'.$file_name;
    $secret_key='sk_00b5ec3555fd24bc98e74787';
    $country='us';



    try {
        $result = $dataResponse->recognizePost($secret_key, $tasks, $image, $image_bytes, $image_url, $country, $state, $return_image, $topn, $prewarp);
        print_r($result);
    }
    catch (Exception $e)
    {
        echo 'Exception when calling DefaultApi->recognizePost: ', $e->getMessage(), "\n";
    }
}
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit"/>
</form>

</body>
</html>
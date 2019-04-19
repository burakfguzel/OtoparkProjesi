<!-- /.content-wrapper-->
<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © Your Website 2017</small>
        </div>
    </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?= site_url("vendor/jquery/jquery.min.js");?>"></script>
<script src="<?= site_url("vendor/bootstrap/js/bootstrap.bundle.min.js");?>"></script>
<script src="<?= site_url("vendor/jquery-easing/jquery.easing.min.js");?>"></script>
<script src="<?= site_url("vendor/chart.js/Chart.min.js");?>"></script>
<script src="<?= site_url("vendor/datatables/jquery.dataTables.js");?>"></script>
<script src="<?= site_url("vendor/jquery/jquery.min.js");?>"></script>
<script src="<?= site_url("vendor/datatables/dataTables.bootstrap4.js");?>"></script>
<script src="<?= site_url("vendor/jquery/jquery.min.js");?>"></script>
<script src="<?= site_url("js/sb-admin.min.js");?>"></script>
<script src="<?= site_url("js/sb-admin-datatables.min.js");?>"></script>
<script src="<?= site_url("js/sb-admin-charts.min.js");?>"></script>

<script>
    $(document).ready(function(){


        var i = 0;

        setInterval(function(){
            if(i%2 == 0)
            {
                $('.new-parking-space').css("border","dashed");
            }
            else{
                $('.new-parking-space').css("border","none");
            }

            i++;
            }, 1000);



        if(typeof space_name !== "undefined")
        {
            $('.map').find(space_name).addClass("new-parking-space");
        }
        else{
            $('.map').append('<div class="parking-space new-parking-space"><h3></h3></div>');
        }

        $('input').on('input',function(){
            reDraw();
        });

        $('select').on('change',function(){
            reDraw();
        });

        function reDraw()
        {
            <?php foreach(\App\Core\Map::$types as $id=>$type):?>
                    if($('select[name="type"]').val() == "<?= $id;?>")
                    {
                        $('.map .new-parking-space').addClass("<?= $type['class'];?>");
                    }
                    else{
                        $('.map .new-parking-space').removeClass("<?= $type['class'];?>");
                    }
            <?php endforeach;?>

            $('.map .new-parking-space h3').html($('input[name="name"]').val());

            $('.map .new-parking-space').css({
                'width' : $('input[name="width"]').val()+"px",
                'height' : $('input[name="height"]').val()+"px",
                'left' : $('input[name="x_coord"]').val()+"px",
                'top' : $('input[name="y_coord"]').val()+"px"
            });
        }
    });
</script>
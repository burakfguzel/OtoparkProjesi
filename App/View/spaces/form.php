<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= site_url("");?>">Anasayfa</a>
                <a href="<?= site_url("space/index/".$params['plan_id']);?>">/ Krokiler</a>
            </li>
            <li class="breadcrumb-item active">Kroki İşlemleri</li>
        </ol>

        <div class="card-body">
            <form action="<?php echo isset($params['space']) ? site_url('space/update/'.$params['space']->id) : site_url('space/store');?>" method="post">
                <input type="hidden" name="plan_id" value="<?= $params['plan_id'];?>">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label for="exampleInputName">Alan Adı</label>
                            <input class="form-control" value="<?php echo isset($params['space']) ? $params['space']->name : "";?>" name="name" id="exampleInputName" type="text" aria-describedby="nameHelp">
                        </div>

                        <div class="col-md-12">
                            <label for="exampleInputName">En</label>
                            <input class="form-control" value="<?php echo isset($params['space']) ? $params['space']->width : "";?>" name="width" id="exampleInputName" type="text" aria-describedby="nameHelp">
                        </div>

                        <div class="col-md-12">
                            <label for="exampleInputName">Boy</label>
                            <input class="form-control" value="<?php echo isset($params['space']) ? $params['space']->height : "";?>" name="height" id="exampleInputName" type="text" aria-describedby="nameHelp">
                        </div>

                        <div class="col-md-12">
                            <label for="exampleInputName">X Koordinatı</label>
                            <input class="form-control" value="<?php echo isset($params['space']) ? $params['space']->x_coord : "";?>" name="x_coord" id="exampleInputName" type="text" aria-describedby="nameHelp">
                        </div>

                        <div class="col-md-12">
                            <label for="exampleInputName">Y Koordinatı</label>
                            <input class="form-control" value="<?php echo isset($params['space']) ? $params['space']->y_coord : "";?>" name="y_coord" id="exampleInputName" type="text" aria-describedby="nameHelp">
                        </div>

                        <div class="col-md-12">
                            <label for="exampleInputName">Obje Tipi</label>
                            <select name="type"  class="form-control">
                                <?php foreach(\App\Core\Map::$types as $id=>$type):?>
                                      <option value="<?= $id;?>" <?php echo isset($params['space']) && $params['space']->type == $id ? "selected='selected'" : "";?> ><?= $type['name'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>

                    </div>
                <button type="submit"  class="btn btn-success btn-block">Kaydet</button>
            </form>

        </div>

        <?php echo \App\Core\Map::draw($params['plan'],$params['plan']->spaces);?>
    </div>
</div>

<?php if(isset($params['space'])):?>
        <script>
            var space_name = "#space-<?= $params['space']->id;?>";
        </script>
<?php endif;?>
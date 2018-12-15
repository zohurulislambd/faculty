

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Update Awards</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Update Awards</div>
                <div class="panel-body">
<!--                    --><?//= !empty($message)? $message:''?>
<!--                    --><?//= validation_errors(); ?>
                    <div class="col-md-6">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Awards Short Name</label>
                                <input name="aw_short_name" class="form-control" type="text" value="<?= $editable->aw_short_name ?>" />
                            </div>
                            <div class="form-group">
                                <label>Awards Full Name</label>
                                <input name="aw_full_name" class="form-control" type="text" value="<?= $editable->aw_full_name ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Awards Short Description</label>
                                <textarea name="aw_description" class="form-control" id="" cols="30" rows="2"><?= $editable->aw_description ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Awards Image</label>
                                <input name="aw_image" type="file" /> <br>
                                <img src="<?= base_url('uploads/'.$editable->aw_image); ?>" width="150px" alt="">
                                <p class="help-block">Image destination must be max 800 * 600 and max size 1 mb</p>
                                <!--                                <p class="help-block">--><?php //echo $upload_error; ?><!--</p>-->
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <button type="reset" class="btn btn-default">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div><!--/.main-->

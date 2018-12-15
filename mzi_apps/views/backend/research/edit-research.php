

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Update Research Information</li>
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
                                <label for="title">Research Project Title </label>
                                <input name="title" id="title" class="form-control" type="text" value="<?= $editable->title ?>" />
                            </div>
                            <div class="form-group">
                                <label for="sub_title">Research Project Sub Title</label>
                                <input name="sub_title" class="form-control" id="sub_title" type="text" value="<?= $editable->sub_title ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="project_full_descrip">Research Project Full Description</label>
                                <textarea name="project_full_descrip" class="form-control" id="project_full_descrip" cols="30" rows="2"><?= $editable->project_full_descrip ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Project Image</label>
                                <input name="project_image" type="file"/> <br>
                                <img src="<?= base_url('uploads/'.$editable->project_image); ?>" width="150px" alt="">
                                <p class="help-block" style="color:#cc0000">Image destination must be max 800 * 600 and max size 1 mb</p>
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

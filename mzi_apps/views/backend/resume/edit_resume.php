

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Resume Add</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Post panel</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Change Resume content</div>
                <div class="panel-body">
                    <?= !empty($message)? $message:' '?>
                    <?= validation_errors(); ?>
                    <div class="col-md-6">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Resume Title</label>
                                <input name="title" id="title" class="form-control" type="text" value="<?= $editable->title ?>" />
                            </div>

                            <div class="form-group">
                                <label>Resume File</label>
                                <input name="resume_file" type="file" value="<?= $editable->resume_file; ?>"/> <br>
<!--                                <p class="help-block">Resume destination size must be </p>-->
                            </div>

                            <button type="submit" class="btn btn-primary">Update Project</button>
                            <button type="reset" class="btn btn-default">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div><!--/.main-->

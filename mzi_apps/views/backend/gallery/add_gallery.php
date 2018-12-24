

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Project Add</li>
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
                <div class="panel-heading">Change your website logo</div>
                <div class="panel-body">
                    <?= !empty($message)? $message:' '?>
<!--                    --><?//= validation_errors(); ?>
                    <div class="col-md-6">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Gallery Title </label>
                                <input name="title" id="title" class="error form-control" type="text" placeholder="project name"/>
                                <p class="error_p"> <?php echo validation_errors(); ?></p>
                                <style>
                                    .error_p+p{
                                        color: #ff0033;
                                    }
                                </style>
                            </div>
                            <div class="form-group">
                                <label for="project_link">Gallery link</label>
                                <input name="project_link" id="project_link" class="form-control" type="text" placeholder="project link"/>
                            </div>
                            <div class="form-group">
                                <label for="short_description">Gallery Sescription</label>
                                <textarea name="short_description" class="form-control" id="short_description" cols="30" rows="2" placeholder="project desc"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="gallery_feature">Featured Image</label>
                                <input name="gallery_feature" id="gallery_feature" type="file"/>
                                <p class="help-block">Gallery feature destination size must be max 600px*400px.</p>

<!--                                --><?php // echo $data['upload_error'];?>

                            </div>

                            <button type="submit" class="btn btn-primary">Add Project</button>
                            <button type="reset" class="btn btn-default">Cancel</button>
                    </form>
                    </div>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div><!--/.main-->

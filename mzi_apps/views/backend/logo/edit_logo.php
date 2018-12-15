

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Change-logo</li>
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
                    <div class="col-md-6">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Logo Title</label>
                                <input name="logo_title" type="text" value="<?= $editable->logo_title ?>">
                            </div>
                            <div class="form-group">
                                <label>Slogan</label>
                                <input name="slogan" type="text" value="<?= $editable->slogan ?>">
                            </div>
                            <div class="form-group">
                                <label>Featured Image</label>
                                <input name="image" type="file"  value="<?=base_url('/uploads/')?> <?= set_value("image",$editable->image) ?>" enctype="multipart/form-data"/>

                                <p class="help-block">Logo destination size must be max 160px*60px.</p>
                            </div>

                            <button type="submit" class="btn btn-primary">Upload</button>
                            <button type="reset" class="btn btn-default">Cancel</button>
                    </form>
                    </div>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div><!--/.main-->

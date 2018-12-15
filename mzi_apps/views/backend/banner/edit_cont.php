

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Banner</li>
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
                <div class="panel-heading">Change your website banner content</div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Banner Title</label>
                                <input name="title" type="text" class="form-control" value="<?= $editable->title ?>">
                            </div>
                            <div class="form-group">
                                <label>Banner Sub Title</label>
                                <input name="sub_title" type="text" class="form-control" value="<?= $editable->sub_title ?>">
                            </div>

                            <div class="form-group">
                                <label>Banner Body</label>
                                <textarea name="body" type="text" class="form-control"><?= $editable->body ?></textarea>
                            </div>
                           <!-- <div class="form-group">
                                <label>Banner BG Image</label>
                                <input name="image" type="file" value="<?/*= base_url("/././assets/images/$editable->logo_title") */?>">
                                <p class="help-block">Logo destination size must be max 160px*60px.</p>
                            </div>-->

                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-default">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div><!--/.main-->

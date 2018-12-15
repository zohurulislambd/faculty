

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
                <div class="panel-heading">Change your website's About content</div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>About Heading Title</label>
                                <input name="head_title" type="text" class="form-control" value="<?= $editable->head_title ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Section Sub Title</label>
                                <input name="title" type="text" class="form-control" value="<?= $editable->title ?>">
                            </div>
                            <div class="form-group">
                                <label>Main Details  content</label>
                                <textarea name="main_cont" type="text" class="form-control"><?= $editable->main_cont ?></textarea>
                            </div>
                            <div class="form-group">
                                 <label>Skills Title</label>
                                 <input name="skill_title" type="text" class="form-control" value="<?= $editable->skill_title ?>"/>
                             </div>
                            <div class="form-group">
                                 <label>Skills Tag Name</label>
                                 <input name="skill_tag" type="text" class="form-control" value="<?= $editable->skill_tag ?>"/>
                             </div>
                            <div class="form-group">
                                 <label>Figure Title</label>
                                 <input name="fig_title" type="text" class="form-control" value="<?= $editable->fig_title ?>"/>
                             </div>
                            <div class="form-group">
                                 <label>Figure Sub Title</label>
                                 <input name="fig_subtitle" type="text" class="form-control" value="<?= $editable->fig_subtitle ?>"/>
                             </div>

                             <div class="form-group">
                                <label>My feature image</label>
                                 <input name="my_feature" type="file"/> <br>
                                 <img src="<?= base_url('uploads/').$editable->my_feature; ?>" width="150px" alt=""/>
                                 <p class="help-block">Features Image destination size max 1200px*1600px.</p>
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

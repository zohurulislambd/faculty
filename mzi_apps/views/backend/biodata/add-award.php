
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Awards Section</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Add Awards </h2>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Awards Short Name </label>
                                <input class="form-control" name="aw_short_name" placeholder="awards short name"/>
                            </div>
                            <div class="form-group">
                                <label>Awards full Name</label>
                                <input class="form-control" name="aw_full_name" placeholder="awards full name"/>
                            </div>

                            <div class="form-group">
                                <label for="aw_image">Upload Awards Photo</label>
                                <input type="file" name="aw_image" id="aw_image">
                                <p class="help-block">Image destination must be max 800 * 600 and max size 1 mb</p>
                                <?php //echo $upload_error; ?>
                            </div>

                            <div class="form-group">
                                <label for="aw_desc">Awards Descritpions </label>
                                <textarea name="aw_description" id="aw_desc" class="form-control" cols="30" rows="5" placeholder="Awards Description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-default">Cancel</button>

                            <?php /*echo $message */?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->

</div><!--/.main-->
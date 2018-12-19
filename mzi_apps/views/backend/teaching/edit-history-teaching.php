

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Update History Teching Information</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Update Teching</div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Teching Title </label>
                                <input name="title" id="title" class="form-control" type="text" value="<?= $editable->title ?>" />
                            </div>
                            <div class="form-group">
                                <label for="start_year">Teaching Start Year </label>
                                <input name="start_year" id="start_year" class="form-control" type="text" value="<?= $editable->start_year ?>" />
                            </div>
                            <div class="form-group">
                                <label for="end_year">Teching End Year</label>
                                <input name="end_year" id="end_year" class="form-control" type="text" value="<?= $editable->end_year ?>" />
                            </div>
                            <div class="form-group">
                                <label for="short_descrip">Teching Short Description</label>
                                <textarea name="short_descrip" class="form-control" id="short_descrip" cols="30" rows="2"><?= $editable->short_descrip ?></textarea>
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

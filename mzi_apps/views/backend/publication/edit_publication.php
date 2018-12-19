

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Update Publication Information</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Update Publication</div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Publication Title </label>
                                <input type="text" id="title" class="form-control" name="title" value="<?= $editable->title; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="author">Author name</label>
                                <input id="author" class="form-control" name="author" value="<?= $editable->author; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" id="type" class="form-control" name="type" value="<?= $editable->type; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="book_info">Type</label>
                                <input type="text" id="book_info" class="form-control" name="book_info" value="<?= $editable->book_info; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="photo">Publication Image</label>
                                <input type="file" id="photo" name="photo"/>
                            </div>

                            <div class="form-group">
                                <label for="description">Publication Short Description </label>
                                <textarea name="description" id="description" class="form-control" cols="30" rows="5"><?= $editable->description; ?></textarea>
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

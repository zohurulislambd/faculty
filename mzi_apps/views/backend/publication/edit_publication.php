

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
                                <label for="type">Type Select</label>
                                <select name="type" id="type" style="padding: 7px 10px">
                                    <option value="Select" aria-selected="true"> Select Type</option>
                                    <option value="Book">Book</option>
                                    <option value="Journal Papers">Journal Papers</option>
                                    <option value="Conference Papers">Conference Papers</option>
                                    <option value="Book Chapters">Book Chapters</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="book_info">Type</label>
                                <input type="text" id="book_info" class="form-control" name="book_info" value="<?= $editable->book_info; ?>"/>
                            </div>

                            <div class="form-group">
                                <label for="sub_title">Sub Title</label>
                                <input type="text" class="form-control" name="sub_title" id="sub_title" value="<?= $editable->sub_title; ?>"/>
                            </div>

                            <div class="form-group">
                                <label for="photo">Publication Image</label>
<!--                                <input type="hidden"  id="photo"  name="photo"  value="--><?php //echo $editable['photo'] ?><!--">-->
                                <input type="file" id="photo" name="photo" value="<?= base_url('uploads/publications/'.$editable->photo); ?>"/>
                                <img src="<?= base_url('uploads/publications/'.$editable->photo); ?>" width="150px" alt="Image view">
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

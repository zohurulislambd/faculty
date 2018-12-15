
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
            <h2 class="page-header">Add Research Project Information</h2>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Research Project Title </label>
                                <input class="form-control" name="title" placeholder="Research Project Title" required/>
                            </div>
                            <div class="form-group">
                                <label>Research Project Sub Title</label>
                                <input class="form-control" name="sub_title" placeholder="Research Project Sub Title"/>
                            </div>

                            <div class="form-group">
                                <label for="project_image">Research Project Image</label>
                                <input type="file" name="project_image" id="project_image">
                                <p class="help-block">Image destination must be max 800 * 600 and max size 1 mb</p>
                                <?php //echo $upload_error; ?>
                            </div>

                            <div class="form-group">
                                <label for="project_full_descrip">Research Project Full Description </label>
                                <textarea name="project_full_descrip" id="project_full_descrip" class="form-control" cols="30" rows="5" placeholder="Research Project Description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-default">Cancel</button>

<!--                            --><?php //echo $message; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->

</div><!--/.main-->
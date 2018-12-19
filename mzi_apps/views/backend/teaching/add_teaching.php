
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
                                <label for="title">Teaching Title </label>
                                <input class="form-control" name="title" placeholder="Teaching Title" required/>
                            </div>
                            <div class="form-group">
                                <label>Teaching Start Year</label>
                                <input class="form-control" name="start_year" placeholder="year"/>
                            </div>
                            <div class="form-group">
                                <label>Teaching End Year</label>
                                <input class="form-control" name="start_year" placeholder="year "/>
                            </div>

                            <div class="form-group">
                                <label for="short_descrip">Research Project Full Description </label>
                                <textarea name="short_descrip" id="short_descrip" class="form-control" cols="30" rows="5" placeholder="Research Project Description"></textarea>
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

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Resume Section</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Add Resume Information</h2>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
<!--                        --><?php //echo $error;?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title"/>
                            </div>
                        <div class="form-group">
                            <label for="resume_file">Resume file</label>
                            <input name="resume_file" id="resume_file" type="file"/>
                            <p class="help-block">Resume file here</p>

                            <!--                                --><?php // echo $data['upload_error'];?>
                            <button type="submit" class="btn btn-sm btn-success" >Submit</button>
                            <button type="reset" class="btn btn-sm btn-warning">Cancel</button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->

</div><!--/.main-->
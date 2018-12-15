

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Education</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Employment section </h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Employment Update </div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Designation Title</label>
                                <input class="form-control" name="designation" value="<?= $editable->designation; ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Company Name</label>
                                <input class="form-control" name="company" value="<?= $editable->company; ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Job Start Year</label>
                                <input class="form-control" name="job_start_year" value="<?= $editable->job_start_year; ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Job End Year</label>
                                <input class="form-control" name="job_end_year" value="<?= $editable->job_end_year; ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Responsibility</label>
                                <input class="form-control" name="responsibility" value="<?= $editable->responsibility; ?>"/>
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

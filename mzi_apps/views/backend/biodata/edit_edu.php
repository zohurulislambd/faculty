

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
            <h1 class="page-header">Education section </h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Change education </div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Education Title</label>
                                <input class="form-control" name="edu_title" value="<?= $editable->edu_title; ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Intitution Name</label>
                                <input class="form-control" name="institute_name" value="<?= $editable->institute_name; ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Year</label>
                                <input class="form-control" name="year" value="<?= $editable->year; ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Field Of Study</label>
                                <input class="form-control" name="field_of_study" value="<?= $editable->field_of_study; ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Details </label>
                                <input class="form-control" name="details" value="<?= $editable->details; ?>"/>
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

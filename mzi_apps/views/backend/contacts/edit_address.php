

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
            <h1 class="page-header">Change address section </h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Change Contact address</div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Address Title</label>
                                <input class="form-control" name="title" value="<?= $editable->title ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Main Content</label>
                                <input class="form-control" name="main_cont" value="<?= $editable->main_cont ?>" />
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

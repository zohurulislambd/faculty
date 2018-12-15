

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">My Service </li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Services Panel </h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Service </div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Service fontawesome icon </label>
                                <input class="form-control" name="service_icon" value="<?= $editable->service_icon; ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Service Title</label>
                                <input class="form-control" name="title" value="<?= $editable->title; ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Service Sub Title</label>
                                <input class="form-control" name="subtitle" value="<?= $editable->subtitle; ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Service Details</label>
                                <input class="form-control" name="service_details" value="<?= $editable->service_details; ?>"/>
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



<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Banner</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Post panel</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Change your skills</div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Skill Title</label>
                                <input class="form-control" name="skill_progress_title" value="<?= $editable->skill_progress_title; ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Progress limit</label>
                                <input class="form-control" name="skill_progress_limit" value="<?= $editable->skill_progress_limit; ?>"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                            <button type="reset" class="btn btn-default">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div><!--/.main-->

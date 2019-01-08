

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Project Add</li>
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
                <div class="panel-heading">Change project content</div>
                <div class="panel-body">
                    <?/*= !empty($message)? $message:' '*/?><!--
                    --><?/*= validation_errors(); */?>
                    <div class="col-md-6">
                        <!--<form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Gallery Title</label>
                                <input name="title" class="form-control" type="text" value="<?/*= $editable->title */?>" />
                            </div>
                            <div class="form-group">
                                <label>Project link</label>
                                <input name="project_link" class="form-control" type="text" value="<?/*= $editable->project_link */?>"/>
                            </div>
                            <div class="form-group">
                                <label>Project decs</label>
                                <textarea name="short_description" class="form-control" id="" cols="30" rows="2"><?/*= $editable->short_description */?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Featured Image</label>
                                <input name="gallery_feature" type="file" /> <br>
                                <img src="<?/*= base_url('uploads/gallery/'.$editable->gallery_feature); */?>" width="150px" alt="">
                                <p class="help-block">Gallery feature destination size must be max 1920px*1600px.</p>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Project</button>
                            <button type="reset" class="btn btn-default">Cancel</button>
                        </form>-->
                        <form action="" method="post" enctype="multipart/form-data">
                            <label>Nama</label><br>
                            <input type="text" name="title" value="<?=$data->title?>"><br><br>
                            <label>Alamat</label><br>
                            <input name="project_link" type="text" value="<?=$data->project_link?>"><br><br>
                            <label>foto</label><br>
                            <input type="file" name="gallery_feature" ><br><br>

                            <!-- file lama -->
                            <input type="hidden" name="filename" value="<?=$data->gallery_feature?>">
                            <!-- ID -->
                            <input type="hidden" name="id" value="<?=$data->id?>">

                            <input type="submit" name="submit" value="Submit" class="btn btn-default">
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div><!--/.main-->

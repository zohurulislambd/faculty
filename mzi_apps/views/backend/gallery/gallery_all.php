
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Gallery-list</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Gallery list</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="col-md-6">
                    <div class="panel-heading"> Advanced Table </div>
                </div>
                <div class="col-md-6">
                    <div class="text-right">
                        <a href="<?= base_url('Gallery/add_gallery') ?>" class="text-right"><button type="button" class="btn btn-success btn-sm">Add Project</button></a>
                    </div>
                </div>

                <div class="panel-body">
                    <table data-toggle="table">
                        <thead>
                        <tr>
                            <th> ID</th>
                            <th>Gallery Title</th>
                            <th>Project web link </th>
                            <th>Gallery Details</th>
                            <th>Gallery Feature</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $srl = 1;
                        foreach ($gallery as $record): ?>
                            <tr>
                                <td><?= $srl++ ?></td>
                                <td><?= $record->title; ?></td>
                                <td><?= $record->project_link; ?></td>
                                <td><?= $record->short_description; ?></td>
                                <td><img height="50px" src="<?= base_url('uploads/gallery/') ?><?= $record->gallery_feature ?>" alt=""></td>
                                <td>
                                    <a href="<?= base_url('Gallery/edit_gallery/'.$record->id) ?>"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                                    <a href="<?= base_url('Gallery/del_gallery/'.$record->id) ?>"><button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are deleting this data!')">Delete</button></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div><!--/.main-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">post-list</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">project list</h1>
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
                        <a href="<?= base_url('Project/add_project') ?>" class="text-right"><button class="btn-success btn-small">Add Project</button></a>
                    </div>
                </div>

                <div class="panel-body">
                    <table data-toggle="table">
                        <thead>
                        <tr>
                            <th> ID</th>
                            <th>Project Title</th>
                            <th>Project web link </th>
                            <th>Project Details</th>
                            <th>Project Feature</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $srl = 1;
                        foreach ($projects as $record): ?>
                            <tr>
                                <td><?= $srl++ ?></td>
                                <td><?= $record->project_name; ?></td>
                                <td><?= $record->project_link; ?></td>
                                <td><?= $record->short_desc; ?></td>
                                <td><img height="50px" src="<?= base_url('uploads/') ?><?= $record->project_feature ?>" alt=""></td>
                                <td>
                                    <a href="<?= base_url('Project/edit_project/'.$record->id) ?>"><button class="btn-warning">Edit</button></a>
                                    <a href="<?= base_url('Project/del_project/'.$record->id) ?>"><button class="btn-danger" onclick="return confirm('Are deleting this data!')">Delete</button></a>
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
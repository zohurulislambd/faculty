
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Employment section</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Employment details </h2>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="col-md-6">
                    <div class="panel-heading">Advanced Table</div>
                </div>
                <div class="col-md-6">
                    <div class="text-right">
                        <a href="<?= base_url("Biodata/add_emp"); ?>"><button class="btn btn-warning btn-sm">Add Employment</button></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table data-toggle="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Designation Title</th>
                            <th>Company Name</th>
                            <th>Job Start year</th>
                            <th>Job End year</th>
                            <th>Job Responsibility</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $srl = 1;
                        foreach ($post as $record): ?>
                            <tr>
                                <td><?= $srl++ ?></td>
                                <td><?= $record->designation; ?></td>
                                <td><?= $record->company; ?></td>
                                <td><?= $record->job_start_year; ?></td>
                                <td><?= $record->job_end_year; ?></td>
                                <td><?= substr($record->responsibility,0,60); ?></td>
                                <td>
                                    <a href="<?= base_url('Biodata/edit_emp/'.$record->id) ?>"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                                    <a href="<?= base_url('Biodata/delete_emp/'.$record->id) ?>" onclick="return confirm('Your are deleting this item!')"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
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
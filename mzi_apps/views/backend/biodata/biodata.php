
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Education section</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Education details </h2>
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
                        <a href="<?= base_url("Biodata/add_edu"); ?>"><button class="btn btn-success">Add Education</button></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table data-toggle="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Education Title</th>
                            <th>Instition Name</th>
                            <th>Education year</th>
                            <th>Field Of Study</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $srl = 1;
                        foreach ($post as $record): ?>
                            <tr>
                                <td><?= $srl++ ?></td>
                                <td><?= $record->edu_title; ?></td>
                                <td><?= $record->institute_name; ?></td>
                                <td><?= $record->year; ?></td>
                                <td><?= $record->field_of_study; ?></td>
                                <td><?= substr($record->details,0,30); ?></td>
                                <td>
                                    <a href="<?= base_url('Biodata/edit_edu/'.$record->id) ?>"><button type="button" class="btn btn-warning btn-sm ">Edit</button></a>
                                    <a href="<?= base_url('Biodata/delete_edu/'.$record->id) ?>" onclick="return confirm('Your are deleting this item!')"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
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
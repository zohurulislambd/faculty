
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">History Teaching section</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">History Teaching List & details </h2>
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
                        <a href="<?= base_url("Teaching/add_history_teaching"); ?>"><button type="button" class="btn btn-sm btn-success">Add History Teaching</button></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table data-toggle="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Teaching Title</th>
                            <th>Start Year</th>
                            <th>End Year</th>
                            <th>Teaching Short Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $srl = 1;
                        foreach ($post as $record): ?>
                            <tr>
                                <td><?= $srl++ ?></td>
                                <td><?= $record->title; ?></td>
                                <td><?= $record->start_year; ?></td>
                                <td><?= $record->end_year; ?></td>
                                <td><?= substr($record->short_descrip,0,50); ?></td>
                                <td>
                                    <a href="<?= base_url('Teaching/edit_history_teaching/'.$record->id) ?>"><button type="button" class="btn btn-warning btn-sm ">Edit</button></a>
                                    <a href="<?= base_url('Teaching/del_history_teaching/'.$record->id) ?>" onclick="return confirm('Your are deleting this item!')"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
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
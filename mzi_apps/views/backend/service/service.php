
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">services</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Services page</h2>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="col-md-6">
                    <div class="panel-heading">Service list Table</div>
                </div>
                <div class="col-md-6">
                    <div class="text-right">
                        <a href="<?= base_url("Service/add_service"); ?>"><button class="btn-success btn-sm" >Add Service </button></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table data-toggle="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Service Icon FA class</th>
                            <th>Service Title</th>
                            <th>Service Subtitle</th>
                            <th>Service Details</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $srl = 1;
                        foreach ($post as $record): ?>
                            <tr>
                                <td><?= $srl++ ?></td>
                                <td><?= $record->service_icon; ?></td>
                                <td><?= $record->title; ?></td>
                                <td><?= $record->subtitle; ?></td>
                                <td><?= substr($record->service_details,0,60); ?></td>
                                <td>
                                    <a href="<?= base_url('Service/edit_service/'.$record->id) ?>"><button class="btn-warning">Edit</button></a>
                                    <a href="<?= base_url('Service/delete_service/'.$record->id) ?>" onclick="return confirm('Your are deleting this item!')"><button class="btn-danger">Delete</button></a>
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
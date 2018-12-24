
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">My address information</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">My address information </h2>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="col-md-6">
                    <div class="panel-heading">Advanced Table</div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="panel-heading"><a href="<?= base_url('Contact/add_cont_address'); ?>"><button type="button" class="btn btn-success btn-sm">Add New Address</button></a></div>
                </div>
                <div class="panel-body">
                    <table data-toggle="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Body</th>
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
                                <td><?= substr($record->main_cont,0,100); ?></td>
                                <td>
                                    <a href="<?= base_url('Contact/edit_cont_add/'.$record->id) ?>"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                                    <a href="<?= base_url('Contact/del_cont_add/'.$record->id) ?>" onclick="return confirm('Your are deleting this item!')"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
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

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
            <h2 class="page-header">Awards List & details </h2>
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
                        <a href="<?= base_url("Biodata/add_award_list"); ?>"><button type="button" class="btn btn-sm btn-success">Add Award</button></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table data-toggle="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Awards Short Title</th>
                            <th>Awards Full Name</th>
                            <th>Awards Photo</th>
                            <th>Awards Short Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $srl = 1;
                        foreach ($records as $record): ?>
                            <tr>
                                <td><?= $srl++ ?></td>
                                <td><?= $record->aw_short_name; ?></td>
                                <td><?= $record->aw_full_name; ?></td>
                                <td><img height="50px" src="<?= base_url('uploads/') ?><?= $record->aw_image ?>" alt="Awards image"></td>
                                <td><?= substr($record->aw_description,0,30); ?></td>
                                <td>
                                    <a href="<?= base_url('Biodata/aw_edit/'.$record->id) ?>"><button type="button" class="btn btn-warning btn-sm ">Edit</button></a>
                                    <a href="<?= base_url('Biodata/aw_del/'.$record->id) ?>" onclick="return confirm('Your are deleting this item!')"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
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
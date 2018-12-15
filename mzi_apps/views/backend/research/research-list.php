
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Research section</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Research List & details </h2>
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
                        <a href="<?= base_url("Research/add_research_item"); ?>"><button type="button" class="btn btn-sm btn-success">Add Research</button></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table data-toggle="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Project Title</th>
                            <th>Project Title</th>
                            <th>Project Sub Title</th>
                            <th>Project Full Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $srl = 1;
                        foreach ($records as $record): ?>
                            <tr>
                                <td><?= $srl++ ?></td>
                                <td><?= $record->title; ?></td>
                                <td><?= substr($record->sub_title,0,30); ?></td>
                                <td><img height="50px" src="<?= base_url('uploads/') ?><?= $record->project_image ?>" alt="Awards image"></td>
                                <td><?= substr($record->project_full_descrip,0,30); ?></td>
                                <td>
                                    <a href="<?= base_url('Research/eid_research_item/'.$record->id) ?>"><button type="button" class="btn btn-warning btn-sm ">Edit</button></a>
                                    <a href="<?= base_url('Research/del_research/'.$record->id) ?>" onclick="return confirm('Your are deleting this item!')"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
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
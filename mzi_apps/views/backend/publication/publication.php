
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Publication section</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Publication List & details </h2>
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
                        <a href="<?= base_url("Publication/add_publication"); ?>"><button type="button" class="btn btn-sm btn-success">Add Publication</button></a>
                    </div>
                </div>
                <div class="panel-body">
                    <table data-toggle="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Publication Title</th>
                            <th>Author Name and Details </th>
                            <th>Type </th>
                            <th>Book Information</th>
                            <th>Photo</th>
                            <th>Sub Title</th>
                            <th>Short Description</th>
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
                                <td><?= $record->author; ?></td>
                                <td><?= $record->type; ?></td>

                                <td><?= $record->book_info; ?></td>
                                <td><img src="<?php echo base_url('uploads/publications/').$record->photo; ?>" alt="Publication image" width="100px"></td>
                                <td><?= substr($record->sub_title,0,50); ?></td>
                                <td><?= substr($record->description,0,60); ?></td>
                                <td>
                                    <a href="<?= base_url('Publication/edit_publication/'.$record->id) ?>"><button type="button" class="btn btn-warning btn-sm ">Edit</button></a>
                                    <a href="<?= base_url('Publication/del_publication/'.$record->id) ?>" onclick="return confirm('Your are deleting this item!')"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
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
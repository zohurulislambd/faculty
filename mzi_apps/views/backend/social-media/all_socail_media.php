
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
            <h1 class="page-header">Socail media list</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Social media list </div>
                <div class="panel-body">
                    <table data-toggle="table">
                        <thead>
                        <tr>
                            <th> ID</th>
                            <th>Social Media Class</th>
                            <th>Social Media Link</th>
                            <th>Action</th>
                            <th><a href="<?php echo base_url('Social_media/add_socail_media_link');?>"><button type="button" class="btn btn-success btn-sm">Add Social Media Item</button></a></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $srl = 1;
                        foreach ($post as $record): ?>
                            <tr>
                                <td><?= $srl++ ?></td>
                                <td><?= $record->class_name; ?></td>
                                <td><?= $record->link; ?></td>
                                <td>
                                    <a href="<?= base_url('Social_media/edit_socail_media_link/'.$record->id) ?>"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                                    <a href="<?= base_url('Social_media/del_socail_media/'.$record->id) ?>" onclick="return confirm('Are you deleting data!!!')"><button type="button" class="btn btn-danger btn-sm">Detele</button></a>
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
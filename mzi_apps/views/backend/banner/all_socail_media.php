
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
                <div class="panel-heading">Socail media list </div>
                <div class="panel-body">
                    <table data-toggle="table">
                        <thead>
                        <tr>
                            <th> ID</th>
                            <th>Socail Media Class</th>
                            <th>Socail Media Link</th>
                            <th>Action</th>
                            <th><a href="<?php echo base_url('Banner/add_socail_media_link');?>"><button class="btn-small btn-success">Add Social Media Item</button></a></th>
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
                                    <a href="<?= base_url('Banner/edit_socail_media_link/'.$record->id) ?>"><button>Edit</button></a>
                                    <a href="<?= base_url('Banner/del_socail_media/'.$record->id) ?>" onclick="return confirm('Are you deleting data!!!')"><button>Detele</button></a>
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
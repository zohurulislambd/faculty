
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
            <h1 class="page-header">Post list</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Advanced Table</div>
                <div class="panel-body">
                    <table data-toggle="table">
                        <thead>
                        <tr>
                            <th> ID</th>
                            <th>Logo Title</th>
                            <th>Slogan </th>
                            <th>Logo Feature</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $srl = 1;
                        foreach ($post as $record): ?>
                            <tr>
                                <td><?= $srl++ ?></td>
                                <td><?= $record->logo_title; ?></td>
                                <td><?= $record->slogan; ?></td>
                                <td><img height="50px" src="<?= base_url("uploads/$record->image")?>" alt=""></td>
                                <td>
                                    <a href="<?= base_url('Logo/change_logo/'.$record->id) ?>"><button>Edit</button></a>
                                    <a href="<?= base_url('Logo/del_logo/'.$record->id) ?>"><button onclick="return confirm('Are deleting this data!')">Delete</button></a>
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
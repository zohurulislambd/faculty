
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">About section</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">About section</h1>
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
                            <th>ID</th>
                            <th>Head Title</th>
                            <th>Title</th>
                            <th>Main Content</th>
                            <th>Feature Photo</th>
                            <th>Photo Title</th>
                            <th>Photo Sub Title</th>
                            <th>Skill Title</th>
                            <th>Skill Tag Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $srl = 1;
                        foreach ($post as $record): ?>
                            <tr>
                                <td><?= $srl++ ?></td>
                                <td><?= $record->head_title; ?></td>
                                <td><?= $record->title; ?></td>
                                <td><?= substr($record->main_cont,0,60); ?></td>
                                <td><img height="50px" src="<?= base_url('uploads/') ?><?= $record->my_feature ?>" alt="Feature image"></td>
                                <td><?= $record->fig_title; ?></td>
                                <td><?= $record->fig_subtitle; ?></td>
                                <td><?= $record->skill_title; ?></td>
                                <td><?= $record->skill_tag; ?></td>
                                <td>
                                    <a href="<?= base_url('About/change_about_cont/'.$record->id) ?>"><button>Edit</button></a>
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
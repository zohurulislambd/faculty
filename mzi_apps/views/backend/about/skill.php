
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
            <h1 class="page-header">About section Skills</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="col-md-6">  Advanced Table</div>
                  <div class="col-md-6"><a href="<?= base_url('About/add_per_skill'); ?>"><button>Add Skill</button></a></div>
                </div>
                <div class="panel-body">
                    <table data-toggle="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Skill title</th>
                            <th>Skill progress</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $srl = 1;
                        foreach ($post as $record): ?>
                            <tr>
                                <td><?= $srl++ ?></td>
                                <td><?= $record->skill_progress_title;?></td>
                                <td><?= $record->skill_progress_limit; ?></td>
                                <td>
                                    <a href="<?= base_url('About/edit_skill/'.$record->id) ?>"><button>Edit</button></a>
                                    <a href="<?= base_url('About/delete_skill/'.$record->id) ?>" onclick="return confirm('Your are deleting this item!')"><button>Delete</button></a>
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
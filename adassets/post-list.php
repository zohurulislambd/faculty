
<?php include_once (__DIR__."/common/header.php" )?>
<?php include_once "common/sidebar.php" ?>
<?php
include_once __DIR__ . "/User_model.php";
if (!$mUser->isLogged()) {
    header("location:login.php");
}
  

include_once __DIR__."../../Blog_model.php";
$db = new Database();
$bg = new Blog_model();
?>

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
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Body</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $data = $bg->getAllPost();
                        foreach ($data as $post):?>
                            <tr>
                                <td><?= $post['id'] ?></td>
                                <td><?= substr($post['title'],0,30)?></td>
                                <td><?= substr($post['subtitle'],0, 50) ?></td>
                                <td><?= substr($post['body'],0,60)?></td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="edit-post.php?id=<?= $post['id'] ?>">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="?del_id=<?= $post['id'] ?>" onclick = "return confirm('Are you sure you want to delete this item?');"> Delete</a>
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

<?php include_once "common/footer.php"?>

<!--db delete code here-->
<?php
if(isset($_GET['del_id'])){
    $del_id =  $_GET['del_id'];
    $del_query = $db->query("DELETE FROM bg_post where id = '$del_id'");
    if($del_query == true){
        echo 'Deleted';
        echo "<meta http-equiv='refresh' content='0;url= post-list.php'>";
    }
}
?>
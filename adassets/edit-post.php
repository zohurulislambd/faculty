<?php
include_once __DIR__ . "/User_model.php";

if (!$mUser->isLogged()) {
    header("location:login.php");
}


include_once __DIR__."./../Blog_model.php";
$bg= new Blog_model();
$db= new Database();

$id = $_GET['id'];
 $q = $db->query("select * from bg_post where id = $id");
 $data = mysqli_fetch_assoc($q);

if (!empty($_POST)) {
    $title = htmlentities($_POST['title'], ENT_QUOTES);
    $subtitle = htmlentities($_POST['subtitle'], ENT_QUOTES);
    $body = htmlentities($_POST['body'], ENT_QUOTES);
    $dateTime = date("Y-m-d H:i:s");


    $image = $_FILES['image'];

    if(empty($data['image']) && !empty($image['name'])){
        $image_name = time()
            . '_' . rand(100000, 999999)
            . '' . rand(100000, 999999)
            . '_' . rand(100000, 999999)
            . '' . rand(100000, 999999)
            . '.'
            . pathinfo($image['name'], PATHINFO_EXTENSION);
    }else{
        $image_name = $data['image'];
    }

    if(!empty($image['name'])) {
        move_uploaded_file($image['tmp_name'], "../postimage/" . $image_name);
    }
    $q= $db->query( "update bg_post set
  title = '$title', 
  subtitle='$subtitle', 
  body='$body', 
  image = '$image_name'
    WHERE id = $id");

    header("location: post-list.php");

}
?>

<?php include_once (__DIR__."/common/header.php" )?>
<?php include_once "common/sidebar.php" ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">edit-post</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Post panel</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">edit  post</div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Post title</label>
                                <input name="title" value="<?= $data['title'] ?>" class="form-control" placeholder="Blog post title">
                            </div>

                            <div class="form-group">
                                <label>Subtitle</label>
                                <input name="subtitle" value="<?= $data['subtitle'] ?>" type="text" class="form-control" placeholder="Blog sub title">
                            </div>

                            <div class="form-group">
                                <label>Body</label>
                                <textarea name="body" class="form-control" rows="3"><?= $data['body'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Featured Image</label>
                                <input name="image" type="file">
                                <p class="help-block">Max size 1mb;</p>
                                <img width="250px" src="../postimage/<?= $data['image']?>"/>
                            </div>

                            <button type="submit" class="btn btn-primary">Post</button>
                            <button type="reset" class="btn btn-default">Cancel</button>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div><!--/.main-->

<?php include_once "common/footer.php"?>

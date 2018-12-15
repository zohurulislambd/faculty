
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin- Dashboard</title>

    <link href="<?php echo base_url()?>adassets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>adassets/css/datepicker3.css" rel="stylesheet">
    <link href="<?php echo base_url()?>adassets/css/bootstrap-table.css" rel="stylesheet">
    <link href="<?php echo base_url()?>adassets/css/styles.css" rel="stylesheet">
    <!--Icons-->
    <script src="<?php echo base_url()?>adassets/js/lumino.glyphs.js"></script>

    <!--[if lt IE 9]>
    <script src="<?php echo base_url()?>adassets/js/html5shiv.js"></script>
    <script src="<?php echo base_url()?>adassets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span>Zohurul </span>Admin</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
                        <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
                        <li><a href="<?= base_url('Authentication/logout')?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>
		
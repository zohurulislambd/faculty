
<body>

<div id="wrapper">
    <a href="#sidebar" class="mobilemenu"><i class="icon-reorder"></i></a>

    <div id="sidebar">
        <div id="main-nav">
            <div id="nav-container">
                <div id="profile" class="clearfix">
                    <div class="hidden-xs">
                        <img class="portrate" src="<?php echo base_url('uploads/').$post->image; ?>" alt="Profile image">
                    </div>
                    <div class="title">
                        <h2><?= $post->logo_title ?></h2>
                        <h3><?= $post->slogan ?></h3>
                    </div>

                </div>
                <ul id="navigation">
                    <li>
                        <a href="#biography">
                            <div class="icon icon-user"></div>
                            <div class="text">About Me</div>
                        </a>
                    </li>

                    <li>
                        <a href="#research">
                            <div class="icon icon-book"></div>
                            <div class="text">Research</div>
                        </a>
                    </li>

                    <li>
                        <a href="#publications">
                            <div class="icon icon-edit"></div>
                            <div class="text">Publications</div>
                        </a>
                    </li>

                    <li>
                        <a href="#teaching">
                            <div class="icon icon-time"></div>
                            <div class="text">Teaching</div>
                        </a>
                    </li>

                    <li>
                        <a href="#gallery">
                            <div class="icon icon-picture"></div>
                            <div class="text">Gallery</div>
                        </a>
                    </li>

                    <li>
                        <a href="#contact">
                            <div class="icon icon-calendar"></div>
                            <div class="text">Contact & Meet Me</div>
                        </a>
                    </li>

                    <li class="external">
                        <a href="#">
                            <div class="icon icon-download-alt"></div>
                            <div class="text">Download CV</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="social-icons">
            <ul>
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-linkedin"></i></a></li>
            </ul>
        </div>
    </div>

    <div id="main">

        <div id="biography" class="page home" data-pos="home">
            <div class="pageheader">
                <div class="headercontent">
                    <div class="section-container">

                        <div class="row">
                            <div class="col-sm-2 visible-sm"></div>
                            <div class="col-sm-8 col-md-5">
                                <div class="biothumb">
                                    <img alt="Feature image" src="<?= base_url('/uploads/').$about_content[0]->my_feature; ?>"   class="img-responsive">
                                    <div class="overlay">
                                        <h1><?php echo $about_content[0]->fig_title ?> </h1>
                                        <ul class="list-unstyled">
                                            <li><?= $about_content[0]->fig_subtitle ?></li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                            <div class="clearfix visible-sm visible-xs"></div>
                            <div class="col-sm-12 col-md-7">
                                <h3 class="title"><?php echo $about_content[0]->head_title; ?></h3>
                                <p><?= $about_content[0]->main_cont; ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!--start bio main part -->
            <div class="pagecontents">
                <div class="section color-1">
                    <div class="section-container">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="title text-center">
                                    <h3>Academic Positions</h3>
                                </div>
                                <ul class="ul-dates">

                                    <?php foreach ($employment as $job): ?>
                                        <li>
                                            <div class="dates">
                                                <span><?=  $job->job_start_year; ?></span>
                                                <span><?= $job->job_end_year; ?></span>
                                            </div>
                                            <div class="content">
                                                <h4><?= $job->designation; ?></h4>
                                                <p><em><?= $job->company; ?></em></p>
                                            </div>
                                        </li>

                                    <?php endforeach;?>

                                </ul>
                            </div>
                            <div class="col-md-5">
                                <div class="title text-center">
                                    <h3>Education & Training</h3>
                                </div>
                                <ul class="ul-card">
                                   <?php foreach ($education as $edu): ?>
                                    <li>
                                        <div class="dy">
                                            <span class="degree"><?= $edu->edu_title; ?></span><span class="year"><?= $edu->year; ?></span>
                                        </div>
                                        <div class="description">
                                            <p class="waht"><?= $edu->field_of_study; ?></p>
                                            <p class="where"><?= $edu->institute_name; ?></p>
                                        </div>
                                    </li>
                                   <?php endforeach; ?>
                                </ul>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="section color-2">
                    <div class="section-container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="title text-center">
                                    <h3>Honors, Awards and Grants</h3>
                                </div>
                                <ul class="timeline">
                                    <?php foreach ($awards as $award): ?>
                                        <li class="open">
                                            <div class="date"><?= $award->aw_short_name; ?></div>
                                            <div class="circle"></div>
                                            <div class="data">
                                                <div class="subject"><?= $award->aw_full_name; ?></div>
                                                <div class="text row">
                                                    <div class="col-md-2">
                                                        <img alt="image" class="thumbnail img-responsive" src="<?= base_url('/uploads/').$award->aw_image; ?>" >
                                                    </div>
                                                    <div class="col-md-10">
                                                        <p><?= $award->aw_description; ?></p>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                    <?php endforeach;  ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="research" class="page">
            <div class="pageheader">

                <div class="headercontent">

                    <div class="section-container">
                        <h2 class="title">Research Summary</h2>

                        <div class="row">
                            <div class="col-md-8">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                                </p> <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> </div>
                            <div class="col-md-4">
                                <div class="subtitle text-center">
                                    <h3>Interests</h3>
                                </div>
                                <ul class="ul-boxed list-unstyled">
                                    <?php foreach ( $interest as $data): ?>
                                        <li> <?php echo $data->name; ?> </li>
                                    <?php endforeach; ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagecontents">
                <!--<div class="section color-1">
                    <div class="section-container">
                        <div class="title text-center">
                            <h3>Laboratory Personel</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-8">

                                <div id="labp-heads-wrap">

                                    <div id="lab-carousel">
                                        <div><img alt="image" src="img/lab/lab5.jpg" width="120" height="120" class="img-circle lab-img" /></div>
                                        <div><img alt="image" src="img/lab/lab2.jpg" width="120" height="120" class="img-circle lab-img" /></div>
                                        <div><img alt="image" src="img/lab/lab1.jpg" width="120" height="120" class="img-circle lab-img" /></div>
                                        <div><img alt="image" src="img/lab/lab4.jpg" width="120" height="120" class="img-circle lab-img" /></div>
                                        <div><img alt="image" src="img/lab/lab3.jpg" width="120" height="120" class="img-circle lab-img" /></div>
                                        <div><img alt="image" src="img/lab/lab6.jpg" width="120" height="120" class="img-circle lab-img" /></div>
                                    </div>
                                    <div>
                                        <a href="#" id="prev"><i class="icon-chevron-sign-left"></i></a>
                                        <a href="#" id="next"><i class="icon-chevron-sign-right"></i></a>
                                    </div>
                                </div>

                                <div id="lab-details">
                                    <div>
                                        <h3>David A. Doe</h3>
                                        <h4>Postdoctoral fellow</h4>
                                        <a href="#" class="btn btn-info">+ Follow</a>
                                    </div>
                                    <div>
                                        <h3>James Doe</h3>
                                        <h4>Postdoctoral fellow</h4>
                                        <a href="#" class="btn btn-info">+ Follow</a>
                                    </div>
                                    <div>
                                        <h3>Nadja Sriram</h3>
                                        <h4>Postdoctoral fellow</h4>
                                        <a href="#" class="btn btn-info">+ Follow</a>
                                    </div>
                                    <div>
                                        <h3>Davide Doe</h3>
                                        <h4>Research Assistant</h4>
                                        <a href="#" class="btn btn-info">+ Follow</a>
                                    </div>
                                    <div>
                                        <h3>Pauline Doe</h3>
                                        <h4>Summer Intern</h4>
                                        <a href="#" class="btn btn-info">+ Follow</a>
                                    </div>
                                    <div>
                                        <h3>James Doe</h3>
                                        <h4>Postdoctoral fellow</h4>
                                        <a href="#" class="btn btn-info">+ Follow</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h3>Great lab Personel!</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>-->

                <div class="section color-2">
                    <div class="section-container">
                        <div class="title text-center">
                            <h3>Research Projects</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="ul-withdetails">
                                    <?php foreach ($research as $data): ?>
                                    <li>
                                        <div class="row">


                                            <div class="col-sm-6 col-md-3">
                                                <div class="image">
                                                    <img alt="image" src="<?= base_url('/uploads/').$data->project_image ?>"  class="img-responsive">
                                                    <div class="imageoverlay">
                                                        <i class="icon icon-search"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-9">
                                                <div class="meta">
                                                    <h3><?= $data->title; ?></h3>
                                                    <p><?= $data->sub_title; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <p><?= $data->project_full_descrip ?></p>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="publications" class="page">
            <div class="page-container">
                <div class="pageheader">
                    <div class="headercontent">
                        <div class="section-container">

                            <h2 class="title">Selected Publications</h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="pagecontents">

                    <div class="section color-1" id="filters">
                        <div class="section-container">
                            <div class="row">

                                <div class="col-md-3">
                                    <h3>Filter by type:</h3>
                                </div>
                                <div class="col-md-6">
                                    <select id="cd-dropdown" name="cd-dropdown" class="cd-select">
                                        <option class="filter" value="all" selected>All types</option>
                                        <option class="filter" value="Jounal Papers">Jounal Papers</option>
                                        <option class="filter" value="Conference Papers">Conference Papers</option>
                                        <option class="filter" value="Book Chapters">Book Chapters</option>
                                        <option class="filter" value="Book">Books</option>
                                        <!-- <option class="filter" value="report">Reports</option>
                                        <option class="filter" value="tpaper">Technical Papers</option> -->
                                    </select>
                                </div>

                                <div class="col-md-3" id="sort">
                                    <span>Sort by year:</span>
                                    <div class="btn-group pull-right">

                                        <button type="button" data-sort="data-year" data-order="desc" class="sort btn btn-default"><i class="icon-sort-by-order"></i></button>
                                        <button type="button" data-sort="data-year" data-order="asc" class="sort btn btn-default"><i class="icon-sort-by-order-alt"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section color-2" id="pub-grid">
                        <div class="section-container">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pitems">

                                        <?php foreach ($publication as $data ): ?>
                                            <div class="item mix <?= $data->type; ?>">
                                                <div class="pubmain">
                                                    <!--<div class="pubassets">

                                                        <a href="#" class="pubcollapse">
                                                            <i class="icon-expand-alt"></i>
                                                        </a>
                                                        <a href="http://www.sciencedirect.com/science/article/pii/S1057740812000290" class="tooltips" title="External link" target="_blank">
                                                            <i class="icon-external-link"></i>
                                                        </a>
                                                        <a href="http://faculty-gsb.stanford.edu/aaker/pages/documents/CultivatingAdmirationinBrands_JCP2012.pdf" class="tooltips" title="Download" target="_blank">
                                                            <i class="icon-cloud-download"></i>
                                                        </a>

                                                    </div>
-->
                                                    <h4 class="pubtitle"><?= $data->sub_title ?></h4>
                                                    <div class="pubauthor"><strong><?= $data->author; ?></strong></div>
                                                    <div class="pubcite"><span class="label label-warning"><?= $data->type; ?></span> <?= $data->book_info; ?></div>

                                                </div>
                                                <div class="pubdetails">
<!--                                                    <h4>Abstract</h4>-->
                                                    <img alt="image" src="<?= base_url("./uploads/publications/").$data->photo; ?>" width="200px"  style="padding:0 30px 30px 0;">
                                                    <p><?= $data->description ;?></p>
                                                </div>
                                            </div>


                                        <?php endforeach; ?>

                                        <!--<div class="item mix cpaper">
                                            <div class="pubmain">
                                                <div class="pubassets">

                                                    <a href="#" class="pubcollapse">
                                                        <i class="icon-expand-alt"></i>
                                                    </a>
                                                    <a href="http://www.sciencedirect.com/science/article/pii/S1057740812000290" class="tooltips" title="External link" target="_blank">
                                                        <i class="icon-external-link"></i>
                                                    </a>

                                                </div>

                                                <h4 class="pubtitle">
                                                   Zohurul_____ The Dragonfly Effect: Quick, Effective, and Powerful Ways To Use Social Media to Drive Social Change
                                                </h4>
                                                <div class="pubauthor"><strong>Jennifer Doe</strong>,  Emily N. Garbinsky, Kathleen D. Vohs</div>
                                                <div class="pubcite">
                                                    <span class="label label-primary">Book</span> John Wiley & Sons | September 28, 2010 | <strong>ISBN-10:</strong> 0470614153
                                                </div>

                                            </div>
                                            <div class="pubdetails">
                                                <img alt="image" src="http://placehold.it/150x200"  style="padding:0 30px 30px 0;">
                                                <h4>Proven strategies for harnessing the power of social media to drive social change</h4>
                                                <p>Many books teach the mechanics of using Facebook, Twitter, and YouTube to compete in business. But no book addresses how to harness the incredible power of social media to make a difference. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <ul>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                    <li>.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                    <li>Onsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                </ul>

                                            </div>
                                        </div>-->

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div id="teaching" class="page">
            <div class="pageheader">
                <div class="headercontent">
                    <div class="section-container">

                        <h2 class="title">Teaching</h2>

                        <div class="row">
                            <div class="col-md-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagecontents">
                <div class="section color-1">
                    <div class="section-container">
                        <div class="row">
                            <div class="title text-center">
                                <h3>Currrent Teaching</h3>
                            </div>
                            <ul class="ul-dates">
                                <?php foreach ($teaching as $data): ?>
                                    <li>
                                        <div class="dates">
                                            <span><?= $data->end_year; ?></span>
                                            <span><?= $data->start_year; ?></span>
                                        </div>
                                        <div class="content">
                                            <h4><?= $data->title; ?></h4>
                                            <p><?= $data->short_descrip; ?></p></div>
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="section color-2">
                    <div class="section-container">
                        <div class="row">
                            <div class="title text-center">
                                <h3>Teaching History</h3>
                            </div>
                            <ul class="ul-dates-gray">
                                <?php foreach ($history_teaching as $data): ?>
                                    <li>
                                        <div class="dates">
                                            <span><?= $data->end_year; ?></span>
                                            <span><?= $data->start_year; ?></span>
                                        </div>
                                        <div class="content">
                                            <h4><?= $data->title; ?></h4>
                                            <p><?= $data->short_descrip; ?></p></div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="gallery" class="page">
            <div class="pagecontents">

                <div class="section color-3" id="gallery-header">
                    <div class="section-container">
                        <div class="row">
                            <div class="col-md-3">
                                <h2>Gallery</h2>
                            </div>
                            <div class="col-md-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section color-3" id="gallery-large">
                    <div class="section-container">

                        <ul id="grid" class="grid">
                           <?php foreach ($gallery as $data): ?>
                               <li>
                                   <div>
                                       <img alt="image" src="<?= base_url("uploads/gallery/").$data->gallery_feature; ?>">
                                       <h2 style="font-size: 16px; padding-left: 5px; margin-top: 10px"><?= $data->title; ?></h2>
                                       <a href="<?= base_url("uploads/gallery/").$data->gallery_feature; ?>" class="popup-with-move-anim">
                                           <div class="over">
                                               <div class="comein">
                                                   <i class="icon-search" title="Full View"></i>
                                                   <div class="comein-bg"><a href="<?= $data->project_link; ?>" target="_blank" style="margin-top: 10px; margin-left: 10px"><?= $data->short_description; ?></a></div>
                                               </div>
                                           </div>
                                       </a>
                                   </div>
                               </li>
                            <?php endforeach; ?>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
        <div id="contact" class="page stellar">
            <div class="pageheader">
                <div class="headercontent">
                    <div class="section-container">

                        <h2 class="title">Contact & Meet Me</h2>

                        <div class="row">
                            <div class="col-md-8">
                                <p>I would be happy to talk to you if you need my assistance in your research or whether you need bussiness administration support for your company. Though I have limited time for students but I Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="col-md-4">
                                <div class="cotact_address">
                                   <?php foreach ($address as $data): ?>
                                       <h3 style="font-size: 18px"><?= $data->title; ?></h3>
                                       <ul>
                                           <li><?= $data->main_cont; ?></li>
                                       </ul>

                                   <?php endforeach; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagecontents">
                <div class="section contact-office" data-stellar-background-ratio="0.1">
                    <div class="section-container">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="title">At My Office</h2>
                                <p>You can find me at my office located at Stanford University Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <p>I am at my office every day from 7:00 until 10:00 am, but you may consider a call to fix an appointment.</p>
                            </div>
                            <div class="col-md-4 text-center hidden-xs hidden-sm">
                                <i class="icon-coffee icon-huge"></i>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="section color-1">
                    <div class="section-container">
                        <div class="row">
                            <div class="col-md-4 text-center hidden-xs hidden-sm">
                                <i class="icon-stethoscope icon-huge"></i>
                            </div>
                            <div class="col-md-8">
                                <h2 class="title">Tell Me your Opinion</h2>

                                    <form action="#" method="post">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Name : </label>
                                                    <input name="name" id="name" class="form-control" type="text" placeholder="Your Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email Address :</label>
                                                    <input name="email" class="form-control" type="text" placeholder="Your Email">
                                                </div>

                                            <div class="form-group">
                                                <label for="phone">Phone Number :</label>
                                                <input name="phone" id="phone" class="form-control" type="text" placeholder="Your phone number">
                                            </div>
                                            <div class="form-group">
                                                <label for="subject">Subject :</label>
                                            <input name="subject" id="subject" class="form-control" type="text" placeholder="Your Subject">
                                             </div>

                                           <div class="form-group">
                                               <label for="message"> Enter your opinion</label>
                                               <textarea name="message" id="message" class="form-control"  cols="10" rows="4" placeholder="Enter Message"></textarea>

                                               <br><button type="submit" class="btn btn-large btn-success">Submit </button>
                                           </div>
                                        </div>
                                    </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="section contact-lab" data-stellar-background-ratio="0.1">
                    <div class="section-container">
                        <div class="row">

                            <div class="col-md-8">
                                <h2 class="title">At My Lab</h2>
                                <p>You can find me at my office located at Stanford University Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <p>I am at my office every day from 7:00 until 10:00 am, but you may consider a call to fix an appointment.</p>
                            </div>
                            <div class="col-md-4 text-center hidden-xs hidden-sm">
                                <i class="icon-superscript icon-huge"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="overlay"></div>

    </div>
</div>

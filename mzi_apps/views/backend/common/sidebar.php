
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li class="active"><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>


        <li class="#"><a href="<?= base_url('Logo/logo_list');?>"> <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Logo</a></li>
        <li class="#"><a href="<?= base_url('Banner/banner_cont');?>"> <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Banner</a></li>
        <li class="#"><a href="<?= base_url('Social_media/get_socail_link');?>"> <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Socail Media</a></li>
<!--        <li class="#"><a href="--><?//= base_url('About/about_cont');?><!--"> <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> About </a></li>-->
        <li class="parent ">
            <a data-toggle="collapse" href="#sub-item-1">
                <span><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> About section
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li class="#"><a href="<?= base_url('About/about_cont'); ?>"><svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg>About me</a></li>
                <li>
                    <a class="" href="<?=base_url('About/personal_skill'); ?>">
                        <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Personal skill
                    </a>
                </li>
            </ul>
        </li>
        <li class="parent ">
            <a data-toggle="collapse" href="#sub-item-2">
                <span><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Resume / Bio Data
            </a>
            <ul class="children collapse" id="sub-item-2">
                <li class="#"><a href="<?= base_url('Biodata/bio_cont'); ?>"><svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg>Education</a></li>
                <li><a href="<?=base_url('Biodata/eployment_cont'); ?>"><svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg>Employment</a></li>
                <li><a href="<?=base_url('Biodata/award_list'); ?>"><svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg>Awards List</a></li>
            </ul>
        </li>
        <li class="#"><a href="<?= base_url('Research/all_research');?>"> <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Research List</a></li>
        <li class="#"><a href="<?= base_url('Research/all_interest');?>"> <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Interested List</a></li>
        <li class="#"><a href="<?= base_url('Publication/all_publication');?>"> <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Publications List</a></li>

        <li class="#"><a href="<?= base_url('Teaching/all_teaching');?>"> <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Current Teaching</a></li>
        <li class="#"><a href="<?= base_url('Teaching/all_history_teaching');?>"> <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Teaching History</a></li>

        <li class="#"><a href="<?= base_url('Gallery/all_gallery');?>"> <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Gallerys</a></li>
        <li class="#"><a href="<?= base_url('Service/service_cont');?>"> <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Services</a></li>

        <li class="parent">
            <a data-toggle="collapse" href="#sub-item-3">
                <span><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> My Contacts Section
            </a>
            <ul class="children collapse" id="sub-item-3">
                <li class="#"><a href="<?= base_url('Contact/contact_info');?>"> <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Contacts info</a></li>
                <li><a class="" href="<?=base_url('Contact/all_cont_add'); ?>"><svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg>Addresses</a>
                </li>
            </ul>
        </li>

        <li class="#"><a href="widgets.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widgets</a></li>
    </ul>
<!--    <div class="attribution"> Design  and Develop by <a href="#">Zohurul Islam</a></div>-->
</div><!--/.sidebar-->


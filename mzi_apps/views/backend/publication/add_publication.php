
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg>
                </a></li>
            <li class="active">Publication Section</li>
        </ol>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
<!--            <h2 class="page-header">Add Publication Information: --><?php //if($message != '') echo $message; ?><!--</h2>-->
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Publication Title </label>
                                <input type="text" id="title"  class="form-control" name="title" placeholder="Publication Title" required/>
                            </div>

                            <div class="form-group">
                                <label for="author">Author name</label>
                                <input id="author" class="form-control" name="author" placeholder="author name"/>
                            </div>
                            <div class="form-group">
                                <label for="type">Type Select</label>
<!--                                <input type="text" id="type" class="form-control" name="type" placeholder="type"/>-->
                                <select name="type" id="type" style="padding: 7px 10px">
                                    <option value="Select"> Select Type</option>
                                    <option value="Book">Book</option>
                                    <option value="Jounal Papers">Jounal Papers</option>
                                    <option value="Conference Papers">Conference Papers</option>
                                    <option value="Book Chapters">Book Chapters</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="book_info">Type / Book Information</label>
                                <input type="text" id="book_info" class="form-control" name="book_info" placeholder="Details of type "/>
                            </div>

                            <div class="form-group">
                                <label for="photo">Publication Image</label>
                                <input type="file" id="photo" name="photo"/>
                            </div>

                            <div class="form-group">
                                <label for="description">Publication Short Description </label>
                                <textarea name="description" id="description" class="form-control" cols="30" rows="5" placeholder="Publication Description"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-default">Cancel</button>

                            <!--                            --><?php //echo $message; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->

</div><!--/.main-->


<script src="<?php echo base_url()?>adassets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url()?>adassets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>adassets/js/chart.min.js"></script>
<script src="<?php echo base_url()?>adassets/js/chart-data.js"></script>
<script src="<?php echo base_url()?>adassets/js/easypiechart.js"></script>
<script src="<?php echo base_url()?>adassets/js/easypiechart-data.js"></script>
<script src="<?php echo base_url()?>adassets/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url()?>adassets/js/bootstrap-table.js"></script>
<script>
    $('#calendar').datepicker({
    });

    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
<!--image edit preview js-->
<script>
    function previewFile(){
        var preview = document.querySelector('img'); //selects the query named img
        var file    = document.querySelector('input[type=file]').files[0]; //sames as here
        var reader  = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file); //reads the data as a URL
        } else {
            preview.src = "";
        }
    }

    previewFile();  //calls the function named previewFile()
</script>

</body>

</html>

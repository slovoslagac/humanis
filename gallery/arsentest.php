<!DOCTYPE html>
<?php include(join(DIRECTORY_SEPARATOR, array('..', 'included', 'defaultValues.php'))); ?>
<html lang="en">
<head>
    <?php include(join(DIRECTORY_SEPARATOR, array('..', 'included', 'defaultHead.php'))); ?>
</head>

<script>
    $(document).ready(function(){
        $('ul.first').bsPhotoGallery({
            "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
            "hasModal" : true
        });
    });
</script>
<body>

<div id="container">
    <?php include(join(DIRECTORY_SEPARATOR, array('..', 'included', 'defaultHeader.php'))); ?>
    <ul id="mainBody">
        <ul class="row first">

            <?php $pictures = array("01 Arsen", "02 Arsen", "03 Arsen", "04 Arsen", "05 Arsen", "06 Arsen");
            foreach ($pictures as $pic) { ?>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="../img/arsen/<?php echo $pic ?>.jpg">
            </li>

            <?php } ?>

        </ul>
    </div>

<div class="modal fade" id="my<a href="http://www.jqueryscript.net/tags.php?/Modal/">Modal</a>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body"> </div>
    </div>
</div>
</div>


    <?php include(join(DIRECTORY_SEPARATOR, array('..', 'included', 'defaultFooter.php'))); ?>

</div>
</body>
</html>
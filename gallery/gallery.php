<!DOCTYPE html>
<?php include(join(DIRECTORY_SEPARATOR, array('..', 'included', 'defaultValues.php'))); ?>
<html lang="en">
<head>
    <?php include(join(DIRECTORY_SEPARATOR, array('..', 'included', 'defaultHead.php'))); ?>
</head>
<body>

<div id="container">
    <?php include(join(DIRECTORY_SEPARATOR, array('..', 'included', 'defaultHeader.php'))); ?>
    <div id="mainBody">
        <div id="pictures" class="row">
            <?php $pictures = array("Arsen1", "Arsen2", "Arsen3", "Arsen4", "Arsen5", "Arsen6");
            foreach ($pictures as $pic) { ?>
                <a href="#" data-toggle="modal" data-target=".<?php echo $pic ?>">
                    <div class="col-md-4">
                        <img src="../img/arsen/<?php echo $pic ?>.jpg" class="img-responsive img-rounded center-block" alt=""/>
                    </div>
                </a>


                <div class="modal fade <?php echo $pic ?>" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                <h4 class="modal-title" id="myLargeModalLabel-1">Arsen</h4>
                            </div>
                            <div class="modal-body active">
                                <img src="../img/arsen/<?php echo $pic ?>.jpg"
                                     class="img-responsive img-rounded center-block" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>

    <?php include(join(DIRECTORY_SEPARATOR, array('..', 'included', 'defaultFooter.php'))); ?>

</div>
</body>
</html>
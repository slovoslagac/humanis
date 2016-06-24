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
            <a href="arsen.php">
                <div class="col-md-4">
                    <h2>Arsen</h2>
                    <img src="../img/arsen/01 Arsen.jpg" class="img-responsive img-rounded center-block" alt=""/>
                </div>
            </a>

            <a href="natasa.php">

                <div class="col-md-4">
                    <h2>Nataša Kovačević</h2>
                    <img src="../img/natasa/Natasa2.jpg" class="img-responsive img-rounded center-block" alt=""/>
                </div>
            </a>


        </div>
    </div>

    <?php include(join(DIRECTORY_SEPARATOR, array('..', 'included', 'defaultFooter.php'))); ?>

</div>
</body>
</html>
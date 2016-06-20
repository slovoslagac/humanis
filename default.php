<!DOCTYPE html>
<?php include(join(DIRECTORY_SEPARATOR, array('included', 'defaultValues.php'))); ?>
<html lang="en">
<head>
    <?php include(join(DIRECTORY_SEPARATOR, array('included', 'defaultHead.php'))); ?>
</head>
<body>
<div id="wrapper">
    <div id="container">
        <?php include(join(DIRECTORY_SEPARATOR, array('included', 'defaultHeader.php'))); ?>
        <div id="mainBody">
            <br>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/arsen/Arsen2.jpg" alt="Arsen">
                    </div>

                    <div class="item">
                        <img src="img/arsen/Arsen3.jpg" alt="Arsen">
                    </div>

                    <div class="item">
                        <img src="img/arsen/Arsen4.jpg" alt="Arsen">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <?php include(join(DIRECTORY_SEPARATOR, array('included', 'defaultFooter.php'))); ?>
    </div>
</div>
</body>
</html>
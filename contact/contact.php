<!DOCTYPE html>
<?php include(join(DIRECTORY_SEPARATOR, array('..', 'included', 'defaultValues.php'))); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo $cssDefault ?>">
    <title>Humanis</title>
</head>

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var myLocation = new google.maps.LatLng(44.783269, 20.521412);
        var mapProp = {
            center: new google.maps.LatLng(44.783269, 20.521412),
            zoom: 17,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("contactMap"), mapProp);
        var marker = new google.maps.Marker({
            position: myLocation,
        });

        marker.setMap(map);

        var infowindow = new google.maps.InfoWindow({
            content: "Humanis :)"
        });

        infowindow.open(map, marker);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<body>

<div id="container">
    <?php include(join(DIRECTORY_SEPARATOR, array('..', 'included', 'defaultHeader.php'))); ?>

    <div id="mainBody">
        <div id="contactBody">
            <div id="contactDetails" class="left">
                <p><strong>Radno vreme:</strong> 08-16</p>
                <br/>
                <p><strong>Adresa:</strong> Bulevar Kralja Aleksandra 518V,<br/>11000 Belgrade, Serbia</p>
                <br/>
                <p><strong>Telefon:</strong> +381(11) 747-68-10</p>
                <br/>
                <p><strong>E-mail:</strong> office@humanis.rs</p>
            </div>
            <div id="contactMap">


            </div>

        </div>

    </div>

    <?php include(join(DIRECTORY_SEPARATOR, array('..', 'included', 'defaultFooter.php'))); ?>

</div>
</body>
</html>


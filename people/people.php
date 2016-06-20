<?php
/**
 * Created by PhpStorm.
 * User: petar
 * Date: 17.6.2016
 * Time: 14:36
 */
?>
<!DOCTYPE html>
<?php include(join(DIRECTORY_SEPARATOR, array('..', 'included', 'defaultValues.php'))); ?>
<html lang="en">

<head>
    <?php include(join(DIRECTORY_SEPARATOR, array('..', 'included', 'defaultHead.php'))); ?>
</head>

<script>
    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the link that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

</script>

<body>

<div id="container">
    <?php include(join(DIRECTORY_SEPARATOR, array('..', 'included', 'defaultHeader.php'))); ?>

    <div id="mainBody">
        <ul class="tab">
            <li><a href="#" class="tablinks" onclick="openCity(event, 'Marko')">Marko</a></li>
            <li><a href="#" class="tablinks" onclick="openCity(event, 'Paris')">Paris</a></li>
            <li><a href="#" class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a></li>
        </ul>

        <div id="Marko" class="tabcontent defaultcontact">
            <div class="_50">
                <h3><a href="https://rs.linkedin.com/in/marko-lukic-9a9a171b">Marko Lukić - Tehnički direktor</a></h3>
                <img src="../img/marko_profil.jpg" />

            </div>
            <div class="_50">
                <h4>Fuunder - Professional and Clinical Services at Humanis</h4>
                <p>April 2016 – Present (3 months)Belgrade</p>
                <h4>CPO/ Professional and Clinical Services at Otto Bock</h4>
                <p>Responsibilities<br />
                <p>- Advised physicians with regards to selection of prosthetic devices concerning new developments and sources of supply for the devices.</p>
                <p>- Advised patients and families of the patients regarding the use of prosthetic and sensory aids to eligible patients.</p>
                <p>- Interpreted medical prescriptions ensuring proper prosthetic devices are selected properly by the patient or it is selected for them.</p>
                <p>- Provided specialized care for disabled veterans.</p>
                <p>- Inspected prosthetic devices ensuring it efficiency and effectiveness.</p>
                <p>- Studied the newly developed Otto Bock prosthetic devices.</p>
                <p>- Facilitated technical and administrative advice and assistance of prosthetic problems.</p>
                <p>- Work with orthopedic tehnicans –transfer knowledge and tehnology.</p>
                <p>- Work on mioelectronic devices for upper extremity and with microprocessor prosthetic knees.</p>

            </div>

        </div>

        <div id="Paris" class="tabcontent">
            <h3>Paris</h3>
            <p>Paris is the capital of France.</p>
        </div>

        <div id="Tokyo" class="tabcontent">
            <h3>Tokyo</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>

    </div>

    <?php include(join(DIRECTORY_SEPARATOR, array('..', 'included', 'defaultFooter.php'))); ?>

</div>
</body>
</html>

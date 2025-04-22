<?php

?>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Web Page</title>
    
    <link rel="stylesheet" href="./css/style.css"> 
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    
    <style>
        #map {
            /* height: 400px;
            width: 400px; */
            border:0;
            height: 450px;
            width: min(600px, 80%);
        }
    </style>

</head>


<body id="<?php echo $id?>" class="custom-body text-white">    
    <!-- Navigation -->
    <?php
        include_once("nav.php");
    ?>





    <h1 class="ms-3 mt-2">This is my location</h1>
    <br>
    <div class="mt-1 mb-2 d-flex justify-content-center align-content-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2330.5521728143094!2d106.65780109684414!3d10.772508650619212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec2320c9225%3A0x80793f93865efd41!2zS2hvYSBL4bu5IFRodeG6rXQgSMOzYSBI4buNYyAtIMSQ4bqhaSBI4buNYyBCw6FjaCBLaG9h!5e0!3m2!1svi!2s!4v1744374102037!5m2!1svi!2s"  
            class="mb-4" style="border:0; height: 450px; width: min(600px, 80%);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- please u comment this if you want -->
    <!-- <div class="mt-1 mb-2 d-flex justify-content-center align-content-center">
        <div id="map"></div>        
    </div> -->


    <h2 class="ms-3 my-5">If you need anything just contact me. Any opinion is welcome.</h2>
    
    
    <script>
        var map = L.map('map').setView([10.7725, 106.6983], 12); // Default view in Ho Chi Minh City
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        fetch("get_locations.php")
            .then(response => response.json())
            .then(data => {
                data.forEach(location => {
                    L.marker([location.latitude, location.longitude])
                        .addTo(map)
                        .bindPopup(`<b>${location.name}</b><br>${location.description}`);
                });
            })
            .catch(error => console.log(error));
    </script>

    
    
    
    
    
    
    
    
    <?php
        include_once("footer.php");
    ?>


<!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>




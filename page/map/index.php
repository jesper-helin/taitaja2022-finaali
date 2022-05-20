<!DOCTYPE html>
<html lang="fi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./modal.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
    <title>Anne Setälä</title>
</head>
<body>
    <div id="map" style="height: 1000px"></div>
    <script>

        let locations = []

    </script>
    <?php
        require '../intra/connect.php';
        $pdo = connect();
        $sql = "SELECT * FROM liikuntamatkat";
        $stmt = $pdo->query($sql);
        $rows = $stmt->fetchAll();

        
        foreach($rows as $row) {
            $heading = $row['heading'];
            $lat = $row['latitude'];
            $lng = $row['longitude'];
            $description = $row['description'];
            $start = $row['start_date'];
            $end = $row['end_date'];
            echo "<script>locations.push(['$heading', $lat, $lng, '$description', '$start', '$end'])</script>";
        }
    ?>
    <script>
        console.log(locations);
        var map = L.map('map').setView([11.206051, 122.447886], 1);
        mapLink =
        '<a href="http://openstreetmap.org">OpenStreetMap</a>';
        L.tileLayer(
        'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; ' + mapLink + ' Contributors',
            maxZoom: 18,
        }).addTo(map);

        for (var i = 0; i < locations.length; i++) {
        marker = new L.marker([locations[i][1], locations[i][2]])
            .bindPopup(
                "<h3>" + locations[i][0] + "</h3>" +
                "<p>" + locations[i][4] + " - " + locations[i][5] + "</p>" +
                "<p>" + locations[i][3] + "</p>" + 
                "<form action='mail_handler.php' method='POST'>" +
                    "<label>Nimi</label><br />" + 
                    "<input type='text' placeholder='etu ja sukunimi' name='name'><br />" + 

                    "<label>Liikuntamatka</label><br />" + 
                    "<input type='text' name='trip-name' readonly value='" + locations[i][0] + "'><br />" + 

                    "<label>Sähköposti</label><br />" + 
                    "<input type='email' name='email' placeholder='Sähköposti'><br />" +

                    "<label>Osallistujamäärä</label><br />" +
                    "<input type='number' name='participants' /><br />" +

                    "<input type='submit' name='submit' value='Ilmoittaudu'>" +
                "</form>"
                )
            .addTo(map);
        } 
    </script>
</body>
</html>
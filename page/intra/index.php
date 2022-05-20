<?php
    require './connect.php';

    session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // -----------------------------
        // Login handler
        //
        if(isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            if($username == 'admin' && $password == 'taitaja2022') {
                $_SESSION['admin'] = "true";
            } else {
                echo 'Väärät kirjautumistiedot';
            }
        }

        // ----------------------------
        // Delete trip -handler
        //
        if(isset($_POST['delete-trip'])) {
            $tripId = $_POST['delete-trip'];

            $pdo = connect();
    
            $sql = "DELETE FROM liikuntamatkat WHERE id = $tripId";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        }
        // ----------------------------
        // Add trip -handler
        //
        if(isset($_POST["latitude"]) && isset($_POST["longitude"]) && isset($_POST["heading"]) && isset($_POST["description"]) && isset($_POST["start-date"]) && isset($_POST["end-date"]) && isset($_POST["trip-image"]) && isset($_POST["trip-pdf"])) {
            $data = [$_POST["latitude"], $_POST["longitude"], $_POST["heading"], $_POST["description"], $_POST["start-date"], $_POST["end-date"], $_FILES["trip-image"], $_FILES["trip-pdf"]];
            print_r($data);
            $pdo = connect();
            $sql = "INSERT INTO liikuntamatkat (latitude, longitude, heading, `description`, start_date, end_date, `image`, pdf) VALUES ($data[0], $data[1], '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]')";

            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['admin'])) {
    ?>
        <form method="POST" class="login-form">
        <label for="username">Käyttäjätunnus</label>
        <input type="text" id="username" name="username" class="username" />
        <label for="password">Salasana</label>
        <input type="password" id="password" name="password" class="password" />
        <input type="submit" value="Kirjaudu" />
    </form>
    <?php
        } else {
    ?>
        <!------------------------------------------------>
        <a href="logout.php">Kirjaudu ulos</a>
        <h2>Lisää matka</h2>
            <form method="POST" action="add-trip.php" enctype="multipart/form-data">
                <label for="latitude">Leveysaste</label><br />
                <input required type="text" name="latitude" /><br />

                <label for="longitude">Pituusaste</label><br />
                <input required type="text" name="longitude" /><br />

                <label for="heading">Otsikko</label><br />
                <input required type="text" name="heading" /><br />

                <label for="description"></label><br />
                <textarea name="description"></textarea><br />

                <label for="start-date">Aloituspäivämäärä</label><br />
                <input required type="text" name="start-date" /><br />

                <label for="end-date">Lopetuspäivämäärä</label><br />
                <input required type="text" name="end-date" /><br />

                <label for="trip-image">Kuva</label><br />
                <input required type="file" name="trip-image" id="trip-image" accept="image/jpg" /><br />

                <label for="trip-pdf">PDF</label><br />
                <input required type="file" name="trip-pdf" accept="application/pdf" /><br />

                <input type="submit" value="Lisää matka" onclick='return confirm(`Varmista kenttien tiedot.`)' />
            </form>

        <!------------------------------------------------>
        <h2>Poista matkoja</h2>
        <?php
            $pdo = connect();
            $sql = "SELECT id, heading FROM liikuntamatkat";
            $stmt = $pdo->query($sql);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <form method='POST'>
            <select name="delete-trip">
                <?php
                    foreach($rows as $row) {
                        echo $row["heading"];
                        echo "<option value=" . $row["id"] . ">" . $row["heading"] . "</option>";
                    }
                        echo "<input type='submit' value='Poista matka' onclick='return confirm(`Haluatko varmasti poistaa matkan?`)' />";
                        ?>
            </select>
        </form>
        <!------------------------------------------------>
        <h2>Muokkaa matkoja</h2>

        <?php
            $pdo = connect();

            $sql = "SELECT * FROM liikuntamatkat";
            $stmt = $pdo->query($sql);
            $rows = $stmt->fetchAll();

            echo "<table>";
            echo "<thead>";
            echo "<th>Liikuntamatka</th><th>Muokkaa</th>";
            echo "<thead>";
            echo "<tbody>";
            foreach($rows as $row) {
                echo "<tr>";
                echo "<td>" . $row['heading'] . "</td><td><a style='color: blue; text-decoration: underline;' href='edit-trip.php?id=" . $row['id'] . "'>Muokkaa</a></td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        ?>
        <!------------------------------------------------>
    <?php
        }
    ?>

</body>
</html>
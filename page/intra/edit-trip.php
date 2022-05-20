<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require "connect.php";
        $pdo = connect();
    
        $id = $_GET['id'];

        $sql = "SELECT * FROM liikuntamatkat WHERE id = $id";

        $stmt = $pdo->query($sql);
        $rows = $stmt->fetchAll();

        if(isset($_POST["submit"])) {
            $data = [$_POST["latitude"], $_POST["longitude"], $_POST["heading"], $_POST["description"], $_POST["start-date"], $_POST["end-date"], $_POST["trip-image"], $_POST["pdf"]];
            $sql = "UPDATE liikuntamatkat SET latitude = $data[0], longitude =  $data[1], heading = '$data[2]', `description` = '$data[3]', start_date = '$data[4]', end_date = '$data[5]', `image` = '$data[6]', pdf = '$data[7]' WHERE id = $id";
            
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            header("Location: ./");
        }

        echo '
           <form method="POST" action="" enctype="multipart/form-data">
                <label for="latitude">Leveysaste</label><br />
                <input required type="text" value=' . $rows[0]["latitude"] . ' name="latitude" /><br />

                <label for="longitude">Pituusaste</label><br />
                <input required type="text" value=' . $rows[0]["longitude"] . '  name="longitude" /><br />

                <label for="heading">Otsikko</label><br />
                <input required type="text" value=' . $rows[0]["heading"] . '  name="heading" /><br />

                <label for="description"></label><br />
                <textarea name="description" value=' . $rows[0]["description"] . ' ></textarea><br />

                <label for="start-date">Aloituspäivämäärä</label><br />
                <input required type="text" value=' . $rows[0]["start_date"] . '  name="start-date" /><br />

                <label for="end-date">Lopetuspäivämäärä</label><br />
                <input required type="text" value=' . $rows[0]["end_date"] . '  name="end-date" /><br />

                <label for="trip-image">Kuva</label><br />
                <input required type="file" value=' . $rows[0]["image"] . '  name="trip-image" id="trip-image" accept="image/jpg" /><br />

                <label for="trip-pdf">PDF</label><br />
                <input required type="file" value=' . $rows[0]["pdf"] . '  name="trip-pdf" accept="application/pdf" /><br />

                <input type="submit" name="submit" value="Muokkaa matkaa" onclick="return confirm(`Varmista kenttien tiedot.`)" />
            </form>
        '
    ?>
</body>
</html>
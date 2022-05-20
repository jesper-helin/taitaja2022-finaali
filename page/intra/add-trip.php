<?php
    // ----------------------------
    // Add trip -handler
    //
    require 'connect.php';
    // if(isset($_POST["latitude"]) && isset($_POST["longitude"]) && isset($_POST["heading"]) && isset($_POST["description"]) && isset($_POST["start-date"]) && isset($_POST["end-date"]) && isset($_POST["trip-image"]) && isset($_POST["pdf"])) {
        $data = [$_POST["latitude"], $_POST["longitude"], $_POST["heading"], $_POST["description"], $_POST["start-date"], $_POST["end-date"], $_FILES["trip-image"]["name"], $_FILES["trip-pdf"]["name"]];
        print_r($_FILES['trip-image']);
        print_r($data);
        $pdo = connect();
        $sql = "INSERT INTO liikuntamatkat (latitude, longitude, heading, `description`, start_date, end_date, `image`, pdf) VALUES ($data[0], $data[1], '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]')";

        
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

    // 

    mkdir(date("Y_m_d") . "_" . $_POST['heading'] . "/");
    $target_dir = date("Y_m_d") . "_" . $_POST['heading'] . "/";

    $target_file = $target_dir . basename($_FILES["trip-image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    } 

    // Check file size
    if ($_FILES["trip-image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "pdf") {
    echo "Sorry, only JPG & PDF files are allowed.";
    $uploadOk = 0;
    } 

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        header("Location: ./");
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["trip-image"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["trip-image"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    }
?>
<?php
    $target_dir = date("Y_m_d") . "_" . $_POST['heading'] . "/";

    $target_file = $target_dir . basename($_FILES["trip-pdf"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    } 

    // Check file size
    if ($_FILES["trip-pdf"]["size"] > 10000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "pdf") {
    echo "Sorry, only JPG & PDF files are allowed.";
    $uploadOk = 0;
    } 

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        header("Location: ./");
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["trip-pdf"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["trip-pdf"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    }

    header("Location: ./");
?>
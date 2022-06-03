<?php
    if(isset($_POST['submit'])) {
        $to = "jesper.helin@hotmail.fi";
        $from = $_POST['email'];
        $name = $_POST['name'];
        $trip = $_POST["trip-name"];
        $participants = $_POST['participants'];
        $subject = "Ilmoittautuminen liikuntamatkalle:" . $trip;
        $message = $name . " osallistui liikuntamatkalle" . $trip . ". Osallistujamäärä " . $participants;
    
        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);
        echo "Ilmoittautuminen lähetetty";
    }
?>

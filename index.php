<?php
try {
    $date = date('d/m/Y H:i:s', time());

    $myfile = fopen("../log.txt", "a");
    fwrite($myfile, $_SERVER['REMOTE_ADDR'] . ' ' . $date . ' - enter to site' . "\n");
    fclose($myfile);
} catch (Throwable $e) {

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico" type="image/gif" sizes="48x48">

    <title>CSA</title>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>


</head>
<body>
    <div class="wrapper">
    <div class="container">
        <h1>Welcome</h1>
        <h4>You can download the image from the email also here:</h4>
        <a href="https://csa.845.co.il/what.png" style="color: white; position: relative; z-index: 10; text-decoration: none;" target="_blank">https://csa.845.co.il/what.png</a>
        <form  class="form">
            <input type="text" name="flag" id="flag"  placeholder="put your flag here" autocomplete="off">
            <button type="button" id="submit-button" onclick="sendFlag($('#flag').val())" >Submit</button>
        </form>

        <br>
        <div id="answer">
        </div>

    </div>

    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

<script>
    $("#answer").hide()
</script>
</body>

</html>
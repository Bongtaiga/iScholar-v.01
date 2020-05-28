<?php
include "./nav.html";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/nav.css" >
</head>
<body>

<div class="container">
    <?php
    $keyword = $_GET["keyword"];
    $url = "http://scholar.pitchayakit.com/scholar?keyword=$keyword";

    /* Go from X=1 to X=1500 */
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    $jsonObj = json_decode($result);

    //echo gettype($jsonObj);
    for($i =0; $i <= count($jsonObj); $i++){
        ?>
        <ul>
            <?php
            echo "<li>" . $jsonObj[$i] -> summary;
            echo  "<li>" . $jsonObj[$i] -> title . "<br>";
            ?>
            <li> <a href =" <?php $jsonObj[$i] -> url ?>"> <?php echo $jsonObj[$i] -> url ?> </a> <br>
        </ul>
        <?php
    }
    ?>
</div>
</body>
</html>

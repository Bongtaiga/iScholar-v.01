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
    <link rel="stylesheet" type="text/css" href="./style/section.css" >
<!--    fonts-->
</head>
<body>
<?php
$url =  'http://ischolar.org/api/v1/sections';
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);
$jsonObj = json_decode($result);
$jsonArr = json_decode($result, true);
?>
<div class="flex-container">
<?php
foreach ($jsonArr as $item => $Section){
    ?>
    <div class="item">
        <a href="task.php?sectionID=<?php echo $Section['id'] ?>">
            <!--                    <img src="./message.png" width="150" height="150"/>-->
            <p><?php echo $Section['name'] ?></p>
        </a>
    </div>
    <?php
}
?>
</div>
</body>
</html>

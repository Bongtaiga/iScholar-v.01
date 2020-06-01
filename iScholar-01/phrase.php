<!--Lấy Phrase tương ứng-->

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
    <!--    fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./style/phrase.css?v=<?php echo time(); ?>">

</head>
<?php
if (isset($_GET['taskID'])) {
$id = $_GET['taskID'];
$url2 = "http://ischolar.df.r.appspot.com/api/v1/part/$id";
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_URL, $url2);
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
$result2 = curl_exec($ch2);
curl_close($ch2);
$jsonObj2 = json_decode($result2);
$listPhrases = $jsonObj2->listPhrases;
?>
<body>
<div class="phrases">
    <?php
    for ($i = 0; $i < count($listPhrases); $i++) {
        echo "<li>". $listPhrases[$i]->name ."</li>";
    }
    }else{
        echo "Select Task";
    }
    ?>
</div>
</body>
</html>
<!--http://localhost/AllFiles/task.php?sectionID=Sections-Abstract&phraseID={}-->

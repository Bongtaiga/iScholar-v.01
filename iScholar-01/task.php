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
    <link rel="stylesheet" type="text/css" href="./style/task.css" >
    <!--    fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Expanded:wght@300&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <script>
        $(document).ready(function(){
            $(".phraseID").click(function () {
                // alert($('div').length);
                var idValue = $(this).val();
                $.get("phrase.php",{taskID: idValue }, function (data) {
                    $("#phrase").html(data)
                });
            });
        });
    </script>
</head>
<?php
$sectionID = $_GET['sectionID'];
$url =  "http://ischolar.df.r.appspot.com/api/v1/sections";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);
$jsonArr = json_decode($result, true);
?>
<body>
<div class="container">
    <div class="header row">

        <div class="titleName col-md-4">
            <h3><b>Major Section</b></h3>
        </div>

        <div class="blank col-md-1"></div>

        <div class="titleName col-md-8">
            <h3><b>Phrases</b></h3>
        </div>

    </div>
    <div class="row taskAndPhrases">
        <div class="task col-md-4">
            <ul>
                <?
                foreach($jsonArr as  $section){
                    if ($sectionID == $section['id']){
                        foreach ($section['listPart'] as $task){
                            ?>
                            <li><button class="phraseID myBtn" value="<?php echo  $task['id'] ?>"><?php echo  $task['name']?></button></li>
                            <?php
                        }
                    }
                }
                ?>
            </ul>
        </div>
        <div class="blank col-md-1"></div>
        <div class="phrases col-md-8">
            <div id="phrase">
                ...
            </div>
        </div>
    </div>
</div>


</body>
</html>


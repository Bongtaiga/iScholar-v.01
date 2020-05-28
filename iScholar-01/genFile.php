<?php
$language = $_POST["language"];
$numOfSentences = $_POST["numOfSentences"];
$researchType = $_POST["researchType"];
$contentArray = array(
    "language" => $language,
    "numOfSentences" => $numOfSentences,
    "researchType" => $researchType,
    "organization" => $_POST["organization"],
    "type"=>$_POST["type"],
    "title" =>$_POST["title"],
    "author"=>$_POST["author"],
    "email"=>$_POST["email"],
    "affiliation"=>$_POST["affiliation"],
    "location"=>$_POST["location"],
    "year" => $_POST["year"],
    "keyword"=> $_POST["keyword"],
    "topic" =>  $_POST["topic"],
    "literature" => $_POST["literature"],
    "gap" => $_POST["gap"],
    "problem" => $_POST["problem"],
    "question" => $_POST["question"],
    "method" => $_POST["method"],
    "finding" => $_POST["finding"],
    "study" => $_POST["study"],
    "limit" =>  $_POST["limit"]
);

$content = json_encode($contentArray);
$opts = array(
    CURLOPT_URL => 'http://ischolar.org/api/v1/gendoc',
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $content,
    // Set The Response Format to Json
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
    CURLOPT_ENCODING => ''
);
$ch = curl_init();
curl_setopt_array($ch, $opts);
$result = curl_exec($ch);

if ($result === FALSE) {
    echo 'Curl error: ' . curl_error($ch);
}
curl_close($ch);

header('Content-Disposition: attachment; filename="File.docx"');
header("Cache-Control: no-cache");
echo $result;
exit;
?>
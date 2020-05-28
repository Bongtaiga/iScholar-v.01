<?php
include "./nav.html";
?>
<!doctype html>
<html lang="en">
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/nav.css" >
    <link rel="stylesheet" href="./style/form.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
<div class="container">
    <form action="genFile.php" method="post">
        <div class="right-content">
            <div class="content page-1 show">

                <h2>Basic information</h2>
                <div class="row">
                    <div class="col-md-6">
                        <label for="sel1">Doc Type:</label>
                        <select class="form-control" id="sel1" name="researchType">
                            <option value="1">Report</option>
                            <option value="1">Paper</option>
                        </select>
                        <div class="form-group">
                            <label>Organization: </label>
                            <input class="form-control" type="text" name="organization">
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <input class="form-control" type="text" name="type">
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" type="text" name="title">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Author</label>
                            <input class="form-control" type="text" name="author">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email">
                        </div>
                        <div class="form-group">
                            <label>Affiliation</label>
                            <input class="form-control" type="text" name="affiliation">
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <input class="form-control" type="text" name="location">
                        </div>
                        <div class="form-group">
                            <label>Year</label>
                            <input class="form-control" type="text" name="year">
                        </div>
                    </div>
                </div>
                <button class="btn next-btn " type="button">Next</button>
            </div>
            <div class="content page-2 ">
                <h2>Research</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Keyword: </label>
                            <input class="form-control" type="text" name="keyword">
                        </div>
                        <div class="form-group">
                            <label>Topic: </label>
                            <input class="form-control" type="text" name="topic">
                        </div>
                        <div class="form-group">
                            <label>Literature: </label>
                            <input class="form-control" type="text" name="literature">
                        </div>
                        <div class="form-group">
                            <label>Gap: </label>
                            <input class="form-control" type="text" name="gap">
                        </div>
                        <div class="form-group">
                            <label>Problems: </label>
                            <input class="form-control" type="text" name="problem">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Question: </label>
                            <input class="form-control" type="text" name="question">
                        </div>
                        <div class="form-group">
                            <label>Method: </label>
                            <input class="form-control" type="text" name="method">
                        </div>
                        <div class="form-group">
                            <label>Finding: </label>
                            <input class="form-control" type="text" name="finding">
                        </div>
                        <div class="form-group">
                            <label>Study: </label>
                            <input class="form-control" type="text" name="study">
                        </div>
                        <div class="form-group">
                            <label>Limit: </label>
                            <input class="form-control" type="text" name="limit">
                        </div>
                    </div>
                </div>

                <button class="btn prev-btn " type="button">Prev</button>
                <button class="btn next-btn " type="button">Next</button>
            </div>
            <div class="content page-3">
                <h2>Creation</h2>
                <div class="row">
                    <div class="col-md-6">
                        <label class="radio">
                            <input type="radio" name="language" value="1" >Vietnamese
                        </label>
                        <label class="radio">
                            <input type="radio" name="language" value="1">English
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label for="sel1">Number Of Sentences:</label>
                        <select class="form-control" name="numOfSentences">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <button class="btn prev-btn-3 " type="button">Prev</button>
                <button class ="btn gen-btn btn-primary" type="submit">Generate</button>
            </div>
        </div>
    </form>
</div>
</body>

<script type="text/javascript" src="form.js"></script>

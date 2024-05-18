<!DOCTYPE html>
<html lang="en">

<head>
    <title>NEWS FEEDS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<style>
    body {
        background-color: #fbeaeb;
        color: #2f3c7e;
        font-family: 'Times New Roman', Times, serif;
    }

    .Newsgrid {
        margin: 10px;
        border: 1px solid #fff;
        background-color: #fff;
    }

    #img1 {
        width: calc(100% - 0px);
        height: 180px;
    }

    .top {
        background-color: #2f3c7e;
        color: #fbeaeb;
        padding: 10px;
        margin-bottom:10px;
    }
    .card-img-top{
        width:"100%";
        height:"50%";
    }
    p{
        font-size:20px;
    }

</style>

<body>
    <?php
    $url = 'https://newsapi.org/v2/top-headlines?sources=the-times-of-india&apiKey=d093053d72bc40248998159804e0e67d';
    $response=file_get_contents($url);
    $newsdata=json_decode($response);
    ?>
    <div class="jumbotron mt-4" style="background-color: #fbeaeb;">
        <div class="container-fluid">
            <div class="text-center top">
                <h1>TODAY'S NEWS</h1>
            </div>
            <!--<div class="card mb-4 mt-4">
                <div class="card-body">
                    <h3 class="card-text text-center">Weather</h3>
                </div>
            </div>-->
            <div class="row">
             <?php
                foreach($newsdata->articles as $news)
                {              
            ?>
                <div class="card mb-3">
                    <img class="card-img-top" src="<?php echo $news->urlToImage ?>" style="height:400px;" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $news->title ?></h2>
                        <h4 class="card-title"><?php echo $news->description ?></h4>
                        <p class="card-text"><?php echo $news->content ?></p>
                        <br>
                        <p class="card-text" style="display:inline-block;"><?php echo $news->publishedAt ?></p>
                        <p class="card-title" style="display:inline-block;float:right;"><?php echo $news->author ?></p>
                    </div>
                </div>
            <?php
                }
            ?>

        </div>
    </div>


</body>

</html>
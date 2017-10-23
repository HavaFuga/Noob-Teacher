<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?> | Bbc MVC</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/style.css" type="text/css" rel="stylesheet">
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div class="logo" >
        <img id="logo" src="\images\Logo.png">
      </div>

    <div class="container">
        <?php if(!isset($is_home) || $is_home == false){ ?>
        <div class="content-right col-md-4">
            <nav class="navigation">
                <ul class="">
                    <a href="/"><li>Home</li></a>
                    <a href="/schueler"><li>Schüler</li></a>
                    <a href="/schueler/create"><li>Schüler erstellen</li></a>
                    <a href="/schueler/create"><li>Schüler erstellen</li></a>
                    <a href="/schueler/help"><li>Hilfe</li></a>
                </ul>
            </nav>
        </div>


    <h1><?= $heading ?></h1>
        <?php } ?>

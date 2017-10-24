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

    <!-- JS -->
      <script href="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
      <script language="javascript" type="text/javascript" src="/js/javascript.js"></script>
  </head>
  <body>
      <div class="logo" >
          <a href="/"><img id="logo" src="\images\Logo.png"></a>
      </div>

    <div class="container">
        <?php if(!isset($is_home) || $is_home == false){ ?>
        <div class="content-right col-md-4">
            <nav class="navigation" id="navi">
                <ul class="">
                    <a class="btn animated-button thar-three" href="/"><li>Home</li></a>
                    <a class="btn animated-button thar-three" href="/schueler"><li>Schüler</li></a>
                    <a class="btn animated-button thar-three" href="/schueler/create"><li>Schüler erstellen</li></a>
                    <a class="btn animated-button thar-three" href="/schueler/edit"><li>Schüler bearbeiten</li></a>
                    <a class="btn animated-button thar-three" href="/schueler/help"><li>Hilfe</li></a>
                </ul>
            </nav>
            <div id="hv"></div>
        </div>


    <h1><?= $heading ?></h1>
        <?php } ?>

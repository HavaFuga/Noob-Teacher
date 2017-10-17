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
        <div class="col-md-4">
          <nav class="navbar">
          <div class="container">
            <div class="">
              <a class="navbar-brand" href="/">Navigation</a>
            </div>
            <div id="" class="">
              <ul class="">
                <li><a href="/">Home</a></li>
                <li><a href="/user">Benutzer</a></li>
                <li><a href="/user/create">Benutzer erstellen</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
    </div>
    <div class="container col-md-8">

    <h1><?= $heading ?></h1>

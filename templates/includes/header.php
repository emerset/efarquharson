
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Emerset Farquharson</title>

    <!-- Bootstrap CSS -->
    <link href="templates/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="templates/css/custom.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
  <!-- Google Analytics -->
  <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-33582709-2', 'auto');
	  ga('send', 'pageview');
  </script>
  
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo BASE_URI ?>">Emerset Farquharson</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li<?php echo $home ?>><a href="<?php echo BASE_URI ?>">Home</a></li>
                <li<?php echo $about ?>><a href="<?php echo BASE_URI.'about.php'?>">About</a></li>
                <li><a href="https://github.com/emerset" target="_blank">GitHub</a></li>
                <li<?php echo $contact ?>><a href="<?php echo BASE_URI.'contact.php'?>">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
<div class="navbar-spacing">&nbsp;</div>
<!-- HEADER -->

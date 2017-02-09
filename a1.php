<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- validation error on the following line (09/16/2014)
    Bad value X-UA-Compatible for attribute http-equiv on element meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katherine de Bethune - csci e15 - p1 - September 2014</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- <link href="css/local_styles.css" rel="stylesheet"> -->
    
   <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <style>
      * {
      		/*border-width: 1px;*/
			/*border-style: dashed;*/
	  }
      body {
        font-family: 'Raleway', sans-serif;
      }
	
		h1, h2, h3, h4, p {
			text-align:center;
			/*border-width: 1px;*/
			/*border-style: dashed;*/
			
		}
	
		.container {
			width:50%;
			min-width:600px;
			margin-bottom:50px;
			/*border-width: 1px;
			border-style: solid;
			border-color: red; */
		}	
		
		img {
			display:block;
			margin:auto;
			width:75%;
			border: 4px solid #ddd;
		}
		
		.left h1,h2,h3,h4, p {
			text-align:left;
		}
		
		.callout {
			font-weight:bold;
			
		}
	
	</style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="container">
    <h1>Kate de Bethune <br/> Web Application & Programming Portfolio</h1>
    <img src = "img/Bach.jpg" alt="Bach 6" >
    <div class="left">
	<!-- php island added 2/8/2017 to create random quote generator -->
	<?php

		$quotes = ['When in the course of human events, it becomes necessary to . . .', 'Now the bright morning star, day\'s harbinger comes dancing from the East', 'To be or not to be, that is the question'];
		$counter = rand(0,2);
		echo($quotes[$counter]);
	?>
	<!-- END php island for random quote generator -->
	<h3 class="callout">A Personal Book Viewer</h3>
    <p><a href="http://e3p5.kdeb-csci-e15.me">URL</a> | <a href="https://github.com/katedebethune/e3p5">github</a> | description: A web application that uses the Google Books API to create a simple, but powerful personal book viewer. The application allows the end user to search
    Google books; select a title from a drop-down with the return values; see a description of the selected title and then open that volume in an embedded Google preview. Uses JavaScript, JSONP, AJAX, and Google Books APIs.</p>


    <h3 class="callout">Judith's Kitchen - Production Site</h3>
    <p><a href="http://judiths-kitchen.com">URL</a> | <a href="https://github.com/katedebethune/p4">github</a> | description: Judith's Kitchen - a website promoting a new cafe and prepared foods market opening in spring 2015. Responsive design makes use of a modified one-page Bootstrap template. Built using the Laravel MVC framework.</p>
    
    <h3 class="callout">Judith's Kitchen - Future Site</h3>
    <p><a href="http://p4.kdeb-csci-e15.me">URL</a> | <a href="https://github.com/katedebethune/jk_orig">github</a> | description: Judith's Kitchen - a website and online catering application for a new cafe.
	The cafe will also offer a catering menu, with online ordering, available through the Judith's Kitchen website.
	The site was built using PHP and the Laravel framework. It makes use of an elegant, responsive one-page Bootstrap template, modified to include subpages for the catering application.</p>

    <h3 class="callout">Kate de Bethune Cello Studio Site</h3>
    <p><a href="http://debethunecello.com">URL</a> | <a href="https://github.com/katedebethune/dbcello">github</a> | description: The website of the Kate de Bethune cello studio. Makes use of responsive Bootstrap template; built using the Laravel MVC framework.</p>

    <h3 class="callout">Web Developer Toolkit</h3>
    <p><a href="http://p3b.kdeb-csci-e15.me">URL</a> | <a href="https://github.com/katedebethune/p3b">github</a> | description: The Developer's Best Friend, a suite of tools for web development, including lorum ipsum, fake user, color palette, and XKCD-style password generators. This application was written in PHP using the Laravel framework. Demonstrates package integration using Composer.</p>

    <h3 class="callout">XKCD-style Password Generator</h3>
    <p><a href="http://p2.kdeb-csci-e15.me">URL</a> | <a href="https://github.com/katedebethune/p2">github</a> | description: an XKCD-style password generator.</p>
    
    <h3 class="callout">Example Programming Projects in Github</h3>
	<ul>
	<li>A <a href="https://github.com/katedebethune/lagrange">Java program</a> that uses recursive backtracking to calculate LaGrange sums.</li> <li>A <a href="https://github.com/katedebethune/ps5">C program</a> that uses linked lists to generate form letters from any number of widely formatted data sources.</li> <li>A <a href="https://github.com/katedebethune/hm">shell implementation</a> of the classic hangman game.</li>
	</ul>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

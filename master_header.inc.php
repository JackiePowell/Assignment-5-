<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    
    if ($page == "michelle") echo "Michelle Bushoy - ";
    else if ($page == "ben") echo "Ben Ackerman - ";
    else if ($page == "jackie") echo "Jackie Powell - ";
    
    ?>Assignment 5: Sydney</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/overrides.css">
  </head>
  
  <body>

    <header>
      <section>
          <nav class="main-menu">
              <ul>
                <li<?php if ($page == "home") echo " class=\"current\"" ?>><a href="index.php">Home</a></li>
                <li<?php if ($page == "michelle") echo " class=\"current\"" ?>><a href="michellebushoy.php">Michelle Bushoy</a></li>
                <li<?php if ($page == "ben") echo " class=\"current\"" ?>><a href="benackerman.php">Ben Ackerman</a></li>
                <li<?php if ($page == "jackie") echo " class=\"current\"" ?>><a href="jackiepowell.php">Jackie Powell</a></li>
              </ul>
          </nav>
      </section>
    </header>

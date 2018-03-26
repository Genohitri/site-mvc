<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Title      : Culinary
Version    : 1.0
Released   : 20100218
Description: A two-column fixed-width template suitable for small websites.

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Culinary by Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/template/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
  <div id="header">
    <div id="logo">
      <h1><a href="#">Culinary</a></h1>
      <h2><a href="http://www.freecsstemplates.org/">Template By Free CSS Templates</a></h2>
    </div>
    <!-- end div#logo -->
  </div>
  <!-- end div#header -->
  <div id="menu">
    <ul>
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Products</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <!-- end div#menu -->
  <div id="page">
    <div id="page-bgtop">
      <div id="content">
        
        <?php foreach ($newsList as $newsItem) : ?>

        <div class="post">
          <h2 class="title"><a href="/news/<?php echo $newsItem['id']; ?>"><?php echo $newsItem['title']; ?></a></h2>
          <p class="byline"><?php echo $newsItem['date']; ?></p>
          <div class="entry">
            <p><?php echo $newsItem['short_content']; ?></p>
          </div>
          <div class="meta">
            <p class="links"><a href="/news/<?php echo $newsItem['id']; ?>" class="comments">Read all (32)</a></p>
          </div>
        </div>
        
        <?php endforeach; ?>
      <!-- end div#content -->
      <div id="sidebar">
        <ul>
          <li id="search">
            <h2 class="search">Search</h2>
            <form method="get" action="">
              <fieldset>
              <input type="text" id="search-text" name="s" value="" />
              <input type="submit" id="search-submit" value="Search" />
              </fieldset>
            </form>
          </li>
          <li>
            <h2 class="categories">Lorem Ipsum</h2>
            <ul>
              <li><a href="#">Fusce dui neque fringilla</a></li>
              <li><a href="#">Eget tempor eget nonummy</a></li>
              <li><a href="#">Magna lacus bibendum mauris</a></li>
              <li><a href="#">Nec metus sed donec</a></li>
              <li><a href="#">Magna lacus bibendum mauris</a></li>
              <li><a href="#">Velit semper nisi molestie</a></li>
              <li><a href="#">Eget tempor eget nonummy</a></li>
            </ul>
          </li>
          <li>
            <h2>Volutpat Dolore</h2>
            <ul>
              <li><a href="#">Nec metus sed donec</a></li>
              <li><a href="#">Magna lacus bibendum mauris</a></li>
              <li><a href="#">Velit semper nisi molestie</a></li>
              <li><a href="#">Eget tempor eget nonummy</a></li>
              <li><a href="#">Nec metus sed donec</a></li>
              <li><a href="#">Magna lacus bibendum mauris</a></li>
              <li><a href="#">Velit semper nisi molestie</a></li>
            </ul>
          </li>
          <li>
            <h2>Bebindum Mauris </h2>
            <ul>
              <li><a href="#">Nec metus sed donec</a></li>
              <li><a href="#">Magna lacus bibendum mauris</a></li>
              <li><a href="#">Velit semper nisi molestie</a></li>
              <li><a href="#">Eget tempor eget nonummy</a></li>
              <li><a href="#">Nec metus sed donec</a></li>
              <li><a href="#">Velit semper nisi molestie</a></li>
              <li><a href="#">Eget tempor eget nonummy</a></li>
              <li><a href="#">Velit semper nisi molestie</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- end div#sidebar -->
      <div style="clear: both; height: 1px"></div>
    </div>
  </div>
  <!-- end div#page -->
  <div id="footer">
    <p>Copyright &copy; 2007 Culinary. All Rights Reserved. Designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.&nbsp;&nbsp;<a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
  </div>
  <!-- end div#footer -->
</div>
<!-- end div#wrapper -->
</body>
</html>

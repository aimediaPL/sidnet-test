<?php
  
  
?>



<!DOCTYPE HTML>
<html>
<head>
  <meta content="text/html; charset=utf-8" http-equiv="content-type">
  <style>
    body { font-family: Tahoma; font-size: 14px; color: #362f2d; background: #ebebeb; }
    h2 { font-size: 30px; margin: 10px 40px; }
    span {  }
    ul { list-style: none; }
    li { line-height: 40px; list-style: none; font-size: 15px; margin-bottom: 10px; }
    li a { color: #5c5c5c; background: #fbf9fa; border-radius:5px; display: block; width: 230px; height: 40px; border: 1px solid #cdc9ca; padding: 0 10px; text-decoration:none; }
    li a:hover { color: #303030; background: #f7f5e7; border: 1px solid #cdc9ca; }
    
    div.breadcrubs { height: 30px; line-height: 30px; font-size:14px; margin:0 0 20px 40px; }
    div.breadcrubs * { border-radius: 3px; display: inline-block; padding: 2px 2px; }
    div.breadcrubs a { color: #ed145b; text-decoration:none; }
    
    table.book-details { width: 500px; margin-left:40px; }
    
    .back { margin: 20px 40px; }
  </style>
<title>Books</title>
</head>
<body>

<h2>Biblioteka</h2>

<div id="content"></div>

<script type="text/template" id="tpl-book-list-item">
	<a href='#books/<%= id %>'><%= title %></a>
</script>

<script type="text/template" id="tpl-book-details">
  <div class="breadcrubs">Tutaj jestes: <a href="#">Ksiązki</a> &gt; <strong><%= title %></strong> </div>
  <table class="book-details">
    <tbody>
      <tr class="row head">
        <td class="label">Tytuł</td>
        <td class="value"><%= title %></td>
      </tr>
      <tr class="row">
        <td class="label">ID</td>
        <td class="value"><%= id %></td>
      </tr>
      <tr class="row">
        <td class="label">Autor</td>
        <td class="value"><%= author %></td>
      </tr>
      <tr class="row">
        <td class="label">Opis</td>
        <td class="value"><%= desc %></td>
      </tr>
    </tbody>
  </table>
    
    <a class="back" href='#'>Powrót</a>
</script>

<script src="http://aimedia.pl/test/js/lib/jquery.js"></script>
<script src="http://aimedia.pl/test/js/lib/underscore.js"></script>
<script src="http://aimedia.pl/test/js/lib/backbone.js"></script>
<script src="http://aimedia.pl/test/js/main.js"></script>   

</body>
</html>

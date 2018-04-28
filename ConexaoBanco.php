
<?php


$conexaoBanco = new mysqli("localhost", "root", "", "dbsabordamae");

mysqli_query($conexaoBanco, "SET NAMES 'utf8'");

mysqli_query($conexaoBanco, 'SET character_set_connection=utf8');

mysqli_query($conexaoBanco, 'SET character_set_client=utf8');

mysqli_query($conexaoBanco, 'SET character_set_results=utf8');




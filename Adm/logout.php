<?php

session_start();
session_destroy();

header("Location:http://localhost/SaborDaMae/adm/login.php");

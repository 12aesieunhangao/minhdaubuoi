<?php
include_once "DAO.php";
$id=$_GET['id'];
deleteBook($id);
header('Location: index.php');
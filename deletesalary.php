<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
include("connection.php");


$id = $_GET['salary_id'];


$result=mysqli_query($db, "DELETE FROM salary WHERE salary_id=$id");

header("Location:viewsalary.php");
?>


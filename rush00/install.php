#!/usr/bin/php
<?php
$servername = "localhost";
$username = "admin";
$password = "yolo";
$conn = mysqli_connect($servername, $username, $password);

//Connection  mysql
if (!$conn)
    die ("Fail conecting: ".mysqli_connect_error());

//Création BDD
$sql = "CREATE DATABASE IF NOT EXISTS shop;";
if (mysqli_query($conn, $sql))
	echo "Database created !";
else
	echo "Error creating database: ".mysqli_error($conn);

//Création table admin
$sql = "CREATE TABLE Admin (
	name VARCHAR(30) NOT NULL,
	passwd VARCHAR(30) NOT NULL)";
if (mysqli_query($conn, $sql))
	echo "Table Admin created successfully";
else
	echo "Error creating Admin table: ".mysqli_error($conn);

//Création table user
$sql = "CREATE TABLE User (
	name VARCHAR(30) NOT NULL,
	passwd VARCHAR(30) NOT NULL)";
if (mysqli_query($conn, $sql))
	echo "Table User created successfully";
else
	echo "Error creating User table: ".mysqli_error($conn);

//Création table produits
$sql = "CREATE TABLE Produit (
	name VARCHAR(30) NOT NULL,
	qt INT(8) NOT NUL,
	price FLOAT(8) NOT NULL,
	description TEXT)";
if (mysqli_query($conn, $sql))
	echo "Table Produit created successfully";
else
	echo "Error creating Produit table: ".mysqli_error($conn);

//Création table panier
$sql = "CREATE TABLE Panier (
	closed int(1) NOT NULL,
	description TEXT)";
if (mysqli_query($conn, $sql))
	echo "Table Panier created successfully";
else
	echo "Error creating Panier table: ".mysqli_error($conn);

//Création Produits
$sql = "INSERT INTO Produit (name, price, qt, description)
("Product 1", "10.00", "1", "empty"),
("Product 2", "10.00", "1", "empty"),
("Product 3", "10.00", "1", "empty"),
("Product 4", "10.00", "1", "empty"),
("Product 5", "10.00", "1", "empty"),
("Product 6", "10.00", "1", "empty")";

mysqli_close($conn);
?>


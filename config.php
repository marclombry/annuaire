<?php
$mysqli = new Mysqli('localhost', 'root', '', 'repertoire');
if ($mysqli->connect_error) {
    die('Erreur de connexion à la base de données' . $mysqli->connect_error);
}
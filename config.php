<?php
$mysqli = new Mysqli('localhost', 'root', '', 'repertoire');
if ($mysqli->connect_error) {
    die('Un probleme est survenue lors de la tentative de connexion a la BDD' . $mysqli->connect_error);
}
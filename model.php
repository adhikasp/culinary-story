<?php

function open_database_connection()
{
    $dbHostName   = 'localhost';
    $dbName       = 'kulinare_story';
    $dbUserName   = 'kulinare';
    $dbUserPasswd = 'makananEnakSedunia';

    try {
        $db = new PDO("mysql:host=$dbHostName;dbname=$dbName", $dbUserName, $dbUserPasswd);
        return $db;
    }
    catch (PDOEXCEPTION $e) {
        echo $e->getMessage();
    }
}

function insert_review(){
    $db      = open_database_connection();

    if(isset($_POST['nama_rm'])) {
        $sth = $db->prepare("INSERT INTO restaurant_reviews (nama_rm, review, timestamp) VALUES (?, ?, ?)");
        $data = [$_POST['nama_rm'], $_POST['review'], date('Y-m-d H:i:s')];
        $sth->execute($data);
    }
}


function get_all_reviews()
{
    $db      = open_database_connection();
    $reviews = $db->query("SELECT * FROM restaurant_reviews");

    return $reviews;
}
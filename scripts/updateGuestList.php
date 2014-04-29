<?php

$dbh = new PDO('mysql:host=localhost;dbname=wedding_db', 'root', 'root');

$response = $_POST['rsvp'];
$name = $_POST['name'];
$guests = $_POST['party'];
$password = $_POST['password'];
$insert = true;

if(!($password === '815')) {
    $insert = false;
}

if($insert === true) {
    $sth = $dbh->prepare('SELECT guest_name FROM guest_list');
    $sth->execute();
    $results = $sth->fetchAll();

    foreach($results as $result) {
        if(in_array($name, $result)) {
            $insert = false;
        }
    }
}

if($insert === true) {
    if($response === 'there') {
        $rsvp = 1;
    } elseif($response === 'square') {
        $rsvp = 0;
    } else {
        $rsvp = NULL;
    }

    $sth = $dbh->prepare('INSERT INTO guest_list (guest_name, rsvp, num_guests) VALUES(:name, :rsvp, :guests)');
    $params = array('name' => $name, 'rsvp' => $rsvp, 'guests' => $guests);
    $sth->execute($params);
    echo "Thank you!";
}

if($insert === false) {
    echo "That didn't work, please try again.";
}


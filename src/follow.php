<?php
    session_start();
    $db = new mysqli("localhost", "trevm12", "CxgY8Eb2tA006aAL", "faketwitter");

    if ($db->connect_errno)
    {
        echo "Sorry, this website is experiencing problems.";
        echo "Error: " . $mysqli->connect_error . "\n";
        exit;
    }

    $user = $_SESSION['username'];
    $followeduser = $_GET['followeduser'];

    $sql = "INSERT INTO followinfo (follower, followed) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("ss", $user, $followeduser);
    $stmt->execute();
    header("Location: /userpage.php?username=".$followeduser);
?>

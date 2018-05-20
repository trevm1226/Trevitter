<?php
    session_start();
    $db = new mysqli("localhost", "trevm12", "CxgY8Eb2tA006aAL", "faketwitter");

    $fields = array('twitinput');
    $formSubmitted = true;
    foreach($fields AS $field)
    {
     $$field = $_POST[$field];
     if(isset($_POST[$field]) == false)
     $formSubmitted = false;
    }
    if($formSubmitted)
    {
        $sql = "INSERT INTO tweetinfo (username, tweetcontent, numLikes) VALUES (?, ?, 0)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("ss", $_SESSION['username'], $twitinput);
        $stmt->execute();
        header("Location: /homepage.php");
    }
?>
<?php
    session_start();
    $_SESSION['error'] = NULL;
    $db = new mysqli("localhost", "trevm12", "CxgY8Eb2tA006aAL", "faketwitter");

    $fields = array('username', 'password');
    $formSubmitted = true;
    foreach($fields AS $field)
    {
        $$field = $_POST[$field];
        if(isset($_POST[$field]) == false)
        {
            $formSubmitted = false;
        }
    }
    if($formSubmitted)
    {
        $encrypted = password_hash($password, PASSWORD_DEFAULT);
        $sql = "SELECT userid, password FROM userinfo WHERE username=?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if (!$result)
        {
            echo "Sorry, this website is experiencing problems.";
            echo "Error: " . $db->error . "\n";
            exit;
        }
        if($result->num_rows == 0)
        {
            echo 'No username match found';
        }
        else
        {
            $user = $result->fetch_assoc();
            if(!password_verify($password, $user['password']))
            {
                $_SESSION['error'] = 'Password is incorrect!';
                header("Location: /logistration.php");
            }
            else
            {
                foreach($fields AS $field)
                    $$field = $_POST[$field];
                $_SESSION['username'] = $username;
                $_SESSION['error'] = NULL;
                header("Location: /homepage.php");
            }
        }
        //$stmt->close();``
    }
    else
    {
        header("Location: /logistration.php");
    }
?>

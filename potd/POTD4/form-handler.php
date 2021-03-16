<?php

    function valid_check()
    {
        if (!(empty($_POST['name']))&&!(empty($_POST['emailaddr']))&&!(empty($_POST['comment']))) {
            return true;
        }
        if (empty($_POST['name'])) {
            echo "missing name<br/>";
        }
        if (empty($_POST['emailaddr'])) {
            echo "missing email address<br/>";
        }
        if (empty($_POST['comment'])) {
            echo "missing comment<br/>";
        }
        return false;
    }

    $name = $_POST['name'];
    $email = $_POST['emailaddr'];
    $comment = $_POST['comment'];

    if (valid_check()) {
        echo "Thanks, $name, your comment has been sent to $email:<br/>$comment";
    }

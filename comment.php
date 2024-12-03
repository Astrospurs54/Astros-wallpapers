<?php
    $comment_ = $_POST['comment_']

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "yachani1";
    $dbname = "commentsection";

    // create connection
    
    $conn = new mysgli($host,$dbusername,$dbpassword,$dbname);
    echo"thank you for leaving a comment";

?>
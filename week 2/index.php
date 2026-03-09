<?php
require_once 'db.php';
require_once 'read.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>php test</h1>
    <form action="">
        <input type="text" name="author">
        <button>Filter</button>
    </form>




    <?php



    foreach ($rijen as $message) {
               $htmlString = "
    <div>
        <label>Author: </label>
        <p>" . $message['author'] . "</p>
        <label>Message: </label>
        <p>" . $message['message'] . "</p>

        <form action='update.php' method='post'>
            <input type='hidden' name='id' value='$message[id]'>
            <input type='text' name='message' value='" . htmlspecialchars($message['message']) . "'>
            <button>update</button>
        </form>

        <form action='delete.php' method='get'>
            <input type='hidden' name='id' value='$message[id]'>
            <button>delete</button>
        </form>
    </div> ";

    echo $htmlString;
        
    }

 
    ?>

    <h2>create a new message</h2>
    <form action="create.php" method="post">
        <input type="text" name="author" placeholder="your name">
        <textarea name="mes"></textarea>
        <button type="submit">post message</button>

    </form>
</body>

</html>
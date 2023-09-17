<?php
if (!empty($_POST['fruit']))
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=fruit;charset=utf8', '', 'root');
        
    }

    }catch(PDOException $e){
   die('Erreur : '.$e->getMessage());
}

    $query = $db->prepare('SELECT * FROM likes WHERE ip = ? AND fruit = ?');
    $query->execute([$_SERVER['REMOTE_ADDR'], $_POST['fruit']]);

    if (count($data) > 0)
    {
        $deleteQuery = $db->prepare('DELETE FROM likes WHERE ip = ? AND fruit = ?');
        $deleteQuery->execute([$_SERVER['REMOTE_ADDR'], $_POST['fruit']]);
    }

    else
    {
        $insertQuery = $db->prepare('INSERT INTO likes (ip, fruit) VALUES (?, ?)');
        $insertQuery->execute([$_SERVER['REMOTE_ADDR'], $_POST['fruit']]);
    }
}
?>
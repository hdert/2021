<!doctype html>

<html>
    
    <head>
        <meta charset="utf-8">
        <title>Boardgames</title>
    </head>
    
    <body>
        <h1>Boardgames</h1>        
        <div>
          <a href="table.php">Table</a>
          <a href="index.php">Home</a>
          <a href="gallery.php">Gallery</a>
          <a href="top.php">Top</a>
        </div>
        <table>
          <tr><th>Game</th><th>Cost</th><th>Rating</th><th>Image</th>
                
        <?php
            include "../includes/connect.php";
            $query = "SELECT game,cost,rating,images FROM `boardgames` ORDER BY game ASC";
            // Loop through the set of results, one record at a time
            foreach ($pdo->query($query) as $record) {
              print "<tr><td>".$record['game']."</td><td>".$record['cost']."</td><td>".$record['rating']."</td><td><img class='table' src='/img/optimized".strrchr($record['images'], '/')."'></td></tr>";
            }
        ?>
        </table>
        
    </body>
</html>
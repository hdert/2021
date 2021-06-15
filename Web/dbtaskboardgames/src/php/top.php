<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Boardgames</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <h1>Boardgames</h1>
        <div>
          <a href="table.php">Table</a>
          <a href="index.php">Home</a>
          <a href="gallery.php">Gallery</a>
          <a href="top.php">Top</a>
        </div>
                
        <?php
            include "../includes/connect.php";
            $query = "SELECT game,images,cost,rating FROM `boardgames` WHERE LENGTH(rating) >= 3 ORDER BY game ASC";
            // Loop through the set of results, one record at a time
            $x = 0;
            print "<div class='row'>";
            foreach ($pdo->query($query) as $record) {
              if ($x % 4 == 0 and $x != 0) {
                print "</div><div class='row'>";
              }
              print "<div class='card'>
                <p>".$record['game']."</p>
                <img class='top' src='/img/optimized".strrchr($record['images'], '/')."' alt='".$record['game']."'>
                <hr>
                <p>$".$record['cost']."</p>
                <p>".$record['rating']."</p>
              </div>";
              $x++;
            }
            if (($x - 1) % 4 != 0) {
              print "</div>";
            }
        ?>
        </table>
        
    </body>
</html>
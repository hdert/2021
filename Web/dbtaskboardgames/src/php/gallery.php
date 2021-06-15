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
            $query = "SELECT game,images FROM `boardgames` ORDER BY game ASC";
            // Loop through the set of results, one record at a time
            foreach ($pdo->query($query) as $record) {
              print "<img class='gallery' src='/img/optimized".strrchr($record['images'], '/')."' alt='".$record['game']."'>";
            }
        ?>
        </table>
        
    </body>
</html>
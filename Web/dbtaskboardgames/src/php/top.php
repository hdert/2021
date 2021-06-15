<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Boardgames</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
          .card {
            float: left;
            width: calc(25% - 2%);
            padding: 1%;
            margin-left: 1%;
            margin-top: 1%;
            box-sizing: border-box;
            box-shadow: 5px 5px 5px gray;
            border-radius: 5px;
            background-color: palegreen;
          }
          p {
            margin: 0;
          }
          img {
            width: 100%;
          }
          .row::after {
            content: "";
            clear: both;
            display: table;
          }
        </style>
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
                <img src='/img/optimized".strrchr($record['images'], '/')."' alt='".$record['game']."'>
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
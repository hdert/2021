<!doctype html>

<html>
    
    <head>
        <meta charset="utf-8">
        <title>Boardgames</title>
        <style>
          table{
            border: 1px solid black;
            background-color: palegreen;
          }
          img{
            box-shadow: 5px 5px 5px gray;
            border: 1px solid black;
            border-radius: 5px;
          }
          img:hover{
            transform: rotate(7deg);
          }
        </style>
    </head>
    
    <body>
        <h1>Boardgames</h1>        
        <table>
          <tr><th>Game</th><th>Cost</th><th>Rating</th><th>Image</th>
                
        <?php
            include "../includes/connect.php";
            $query = "SELECT game,cost,rating,images FROM `boardgames` ORDER BY game ASC";
            // Loop through the set of results, one record at a time
            foreach ($pdo->query($query) as $record) {
              print "<tr><td>".$record['game']."</td><td>".$record['cost']."</td><td>".$record['rating']."</td><td><img src='/img/optimized".strrchr($record['images'], '/')."'></td></tr>";
            }
        ?>
        </table>
        
    </body>
</html>
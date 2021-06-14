<!doctype html>

<html>
    
    <head>
        <meta charset="utf-8">
        <title>Boardgames</title>
    </head>
    
    <body>
        <h1>Boardgames</h1>        
        <table>
          <tr><th>Game</th><th>Cost</th>
                
        <?php
            include "../includes/connect.php";
            $query = "SELECT game,cost FROM `boardgames` ORDER BY game ASC";
            // Loop through the set of results, one record at a time
            foreach ($pdo->query($query) as $record) {
              print "<tr><td>".$record['game']."</td><td>".$record['cost']."</td></tr>";
            }
        ?>
        </table>
        
    </body>
</html>
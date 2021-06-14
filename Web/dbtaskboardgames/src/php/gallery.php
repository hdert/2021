<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Boardgames</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
          img {
            float: left;
            width: 25%;
            padding-left: 1%;
            padding-top: 1%;
            box-sizing: border-box;
            box-shadow: 5px 5px 5px gray;
          }
        </style>
    </head>
    
    <body>
        <h1>Boardgames</h1>        
                
        <?php
            include "../includes/connect.php";
            $query = "SELECT game,images FROM `boardgames` ORDER BY game ASC";
            // Loop through the set of results, one record at a time
            foreach ($pdo->query($query) as $record) {
              print "<img src='/img/optimized".strrchr($record['images'], '/')."' alt='".$record['game']."'>";
            }
        ?>
        </table>
        
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'components/boot.php'; ?>
    <?php require_once  'actions/db_connect.php' ;  ?>

    <title>Details</title>
</head>
<body>
    <?php
        $sql = "SELECT description FROM `dishes` WHERE dishID = {$_GET['id']} ;";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        // echo "<br>dishID in URL: {$_GET['id']}";
        // echo "<pre>";
        // var_dump($row);
        // echo "</pre>";

        $tableBody = 
                "<tr>
                  <td>{$row['description']}</td>
                </tr>";
    ?>
    <div class="container">
        <?= $tableBody ?>
    </div>
</body>
</html>
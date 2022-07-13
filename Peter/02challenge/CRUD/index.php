<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once  'actions/db_connect.php' ;  ?>
    <?php include 'components/boot.php'; ?>
    <link rel="stylesheet" href="styles/styles.css">
    <title>Document</title>
</head>
<body>
  
<?php
        $sql = "SELECT * FROM `dishes`;";
        $result = mysqli_query($connect, $sql);
        $tableBody = '';

        if(mysqli_num_rows($result)> 0){
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $tableBody .= 
                "<tr>
                <td><img src='{$row['image']}' class='delicious float-start'> </td>
                <td>{$row['name']} </td>
                <td>{$row['price']}</td>
                <td><a href='details.php?id={$row['dishID']}' target='_blank'>  <button type='button' class='button btn-success'>Details</button></a> </td>
                
                </tr>";
            };
        } else {
            $tableBody = "<tr><td colspan='5'><center>No Data Available</center></td></tr>";
        };
    ?>
    
    <div class="container w-75 d-flex flex-column text-center">
        <p class="h3">Our Dishes</p>
        <table class="table table-striped">
            <thead class="table-info">
                <tr>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <?= $tableBody; ?>
            </tbody>
        </table>


    </div>
    

</body>
</html>
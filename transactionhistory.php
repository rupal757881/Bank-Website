<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style type="text/css">
        body{
          
            background-size: cover;
            background-attachment: fixed;
            }
          .container h2{
            color: black;
            font-size: 38px;
           
          }
          .container th, td{
            color: black;
            font-size: 25px;
            background-color: lightskyblue;
          }
          .container th{
            font-size: 24px;
          }
          .container tr.data:hover{
            background-color: lightgray;
            color: black;
          } 
          
    </style>

</head>

<body>
   <br>
   <br>
   <?php include 'navbar.php';?>

<main>
	<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

        <h2 class="text-center pt-4">Transfer History</h2>
        <br>
        <br>
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                
            </tr>
        </thead>
        <tbody>

        <?php

            include 'connection.php';

            $sql ="select * from transaction";

            $query =mysqli_query($con, $sql);

            while($res = mysqli_fetch_assoc($query))
            {
        ?>

            <tr class="data">
            
           
            <td class="py-2"><?php echo $res['sender']; ?></td>
            <td class="py-2"><?php echo $res['receiver']; ?></td>
            <td class="py-2"><?php echo $res['balance']; ?> </td>
            
        <?php
            }
        ?>
        </tbody>
    </table>

    </div>
</div>
</main>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include 'footer.php';?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
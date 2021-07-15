<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from user where id=$from";
    $query = mysqli_query($con,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from user where id=$to";
    $query = mysqli_query($con,$sql);
    $sql2 = mysqli_fetch_array($query);


    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! You Enter wrong values")';
        echo '</script>';
    }
    
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo " alert('Yo Don't Have Sufficient Balance')"; 
        echo '</script>';
    }
    
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


      else {
        
                
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE user set balance=$newbalance where id=$from";
                mysqli_query($con,$sql);
             

                
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE user set balance=$newbalance where id=$to";
                mysqli_query($con,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($con,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='transactionhistory.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style type="text/css">
    	body{
            
            background-size: cover;
            background-attachment: fixed;
            }
        .heading{
            color: black;
            font-size: 40px;
          
        }
        
        .container tr.data:hover{
           
            color: black;
          } 
        .container table tr th{
            color: black;
            font-size: 25px;
            background-color: lightskyblue;
        }

        .container table tr td{
            color: black;
            font-size: 25px;
        }
        .container label{
            color: black;
            padding: 10px;
            font-size: 25px;
           

        }

#myBtn{
  height: 50px;
  width: 170px;
  position: relative;
  color: black;
  font-size: 30px;
  background-color: lightblue;
  text-decoration: none;
  border: 3px solid white;
  border-radius: 30px;
  text-transform: unset;
  overflow: hidden;
  transition: 1s all ease;
  padding: 3px;


}
</style>
</head>

<body>

<?php include 'navbar.php';?>

    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2 class="heading text-center pt-4">Transaction</h2>
        <br>
    
    
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  user where id=$sid";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($con);
                }
                $res=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>

                 <tr class="data">
                    <td class="py-2"><?php echo $res['id'] ?></td>
                    <td class="py-2"><?php echo $res['name'] ?></td>
                    <td class="py-2"><?php echo $res['email'] ?></td>
                    <td class="py-2"><?php echo $res['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <label><b>Transfer To:</b></label>

        <select name="to" class="form-control" required>
            <option value="" disabled selected>Select</option>
            
            
            <?php
                include 'connection.php';
                
                $sid=$_GET['id'];
                
                $sql = "SELECT * FROM user where id!=$sid";
                
                $result=mysqli_query($con,$sql);
                
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($con);
                }
                while($res = mysqli_fetch_assoc($result)) {
            ?>
                
                <option class="table" value="<?php echo $res['id'];?>" >
                
                    <?php echo $res['name'] ;?> (Balance: 
                    <?php echo $res['balance'] ;?> ) 
               
                </option>

            <?php 
                } 
            ?>

        <div>
        </select>
        <br>
        <br>
            
            <label><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
            <div class="text-center">
               <button class="mt-3 btn btn4 bttnn" name="submit" type="submit" id="myBtn">Transfer</button>
               <br>
               <br>
               <br>
            </div>
        </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <br>
    <br>
    <br>
    <br>
    <?php include 'footer.php'; ?>
</body>
</html>
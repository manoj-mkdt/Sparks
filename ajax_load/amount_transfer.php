<?php

  include 'connect.php';

  //Getting the file information

  $sender = mysqli_real_escape_string($con,trim($_POST['sender']));

  $reciver = mysqli_real_escape_string($con,trim($_POST['reciver']));

  $amount = mysqli_real_escape_string($con,trim($_POST['amount']));


      // Validating Unique Certificate

      $check1 = mysqli_query($con,"SELECT * FROM `customer_details` WHERE Name ='$sender'");
      $check2 = mysqli_query($con,"SELECT * FROM `customer_details` WHERE	Name ='$reciver'");

      $count1 = mysqli_num_rows($check1);
      $count2 = mysqli_num_rows($check2);
      $row = mysqli_fetch_array($check1);
      $dbAMout=$row['Balance'];

      // echo $dbAMout;

      if($count1!=1 || $count2!=1){

        echo 'no_user';

      }
      else if ($amount>$dbAMout){

        echo "exter_amount";

      }
      else{

        $sql="UPDATE `customer_details` SET `Balance`= Balance + $amount WHERE Name = '$reciver'";
        $sql1="UPDATE `customer_details` SET `Balance`= Balance - $amount WHERE Name = '$sender'";
        $sql2="INSERT INTO `transaction_details`(`Debitedf_from`,`Credited_to`,`Amount`) VALUES(?,?,?)";

        $result = mysqli_prepare($con,$sql);
        $result1 = mysqli_prepare($con,$sql1);
        $result2 = mysqli_prepare($con,$sql2);
          // Upload file to server

            if($result && $result1 && $result2){
              //bind parameter

              mysqli_stmt_bind_param($result2,"sss",$sender,$reciver,$amount);
              // Execute the result

              mysqli_stmt_execute($result);
              mysqli_stmt_execute($result1);
              mysqli_stmt_execute($result2);
              echo "successfully";
              // Close the Statement

              mysqli_stmt_close($result);
              mysqli_stmt_close($result1);
              mysqli_stmt_close($result2);
            }
            else{
              echo 'failed';
            }

      }

?>

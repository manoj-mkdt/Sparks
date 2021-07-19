$(document).ready(function () {

	$('#transferButton').on('click', function(e){

    e.preventDefault();

    var transfer = new Object();



    transfer.sender = $('#sender').val();

    transfer.reciver = $('#reciver').val();

    transfer.amount = $('#amount').val();

    if(transfer.sender!="" && transfer.reciver!="" &&  transfer.amount!="")

    {

      $.ajax({

              type: 'POST',

              url: 'ajax_load/amount_transfer.php',

              data: transfer,

              cache: false,



              success: function(dataResult){

                           if(dataResult=="successfully"){

                            document.getElementById("transactionForm").reset();

                              location.reload();

                           }

                           else if(dataResult=="no_user"){

                            alert("Sender or reciver does not exisits");

                           }
                           else if (dataResult=="exter_amount"){

                             alert("Insufficient balance");

                           }

                           else if(dataResult=="failed"){

                            document.getElementById("transactionForm").reset();

                            alert("Error occured!!! Try Again");

                           }

                           else{

                              console.log(dataResult);

                           }

              }

     });

     }

     else{

       alert("Please Complete the fields");

     }

   });

});

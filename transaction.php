<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Font Awesome CDN Link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <!-- Select CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">



    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="layout/css/stylesheet.css">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SPARKS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
</nav>
<div class="text-center my-4">

  </div>

    <section id='transaction_admin'>
     <?php
      include("ajax_load/connect.php");
      $sql = "SELECT * FROM `transaction_details` WHERE 1 ORDER BY No DESC";
      $check = mysqli_query($con,$sql);

      ?>
       <div class="">
        <h1 class="text-center font3">All Transaction</h1>
          <div class="tablemr">
            <table class="table caption-top">
              <caption class="font2">List of all transactions</caption>
                <thead class="font1">
                  <tr>
                    <th scope="col">Transaction Date</th>
                    <th scope="col">Transaction Time</th>
                    <th scope="col">Debit From</th>
                    <th class="size" scope="col">Cerdit To</th>
                    <th class="size" scope="col">Amount</th>
                  </tr>
               </thead>
               <tbody class="font7">
                 <?php while($row = mysqli_fetch_array($check)){
                  ?>
                <tr>
                  <td><?php echo($row["Transaction_date"]);?></td>
                  <td><?php echo($row["Transaction_time"]);?></td>
                  <td><?php echo($row["Debitedf_from"]);?></td>
                  <td><?php echo($row["Credited_to"]); ?></td>
                  <td><?php echo($row["Amount"]); ?></td>
                </tr>
              <?php }
               ?>
              </tbody>
            </table>
          </div>
      </div>

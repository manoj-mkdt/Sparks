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

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddMoreModal">Fund Transfer</button>

  </div>

    <section id='project_admin'>
     <?php
      include("ajax_load/connect.php");
      $sql = "SELECT * FROM `customer_details`";
      $check = mysqli_query($con,$sql);

      ?>
       <div class="">
        <h1 class="text-center font3">All accounts</h1>
          <div class="tablemr">
            <table class="table caption-top">
              <caption class="font2">List of all the Customers</caption>
                <thead class="font1">
                  <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail Id</th>
                    <th class="size" scope="col">Balance</th>
                  </tr>
               </thead>
               <tbody class="font7">
                 <?php while($row = mysqli_fetch_array($check)){
                  ?>
                <tr>
                  <td><?php echo($row["Sr.No"]);?></td>
                  <td><?php echo($row["Name"]);?></td>
                  <td><?php echo($row["E-mail Id"]);?></td>
                  <td><?php echo($row["Balance"]); ?></td>
                </tr>
              <?php }
               ?>
              </tbody>
            </table>
          </div>
      </div>
      <div class="modal fade" id="AddMoreModal" tabindex="-1" aria-labelledby="AddMoreModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">

      <div class="modal-dialog">

        <div class="modal-content">

          <div class="modal-header">

            <h3 class="modal-title font4" id="AddMoreModalLabel">Transfer Money</h3>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          </div>

          <!---Start of ADD DETAILS MODAL BODY---->

          <div class="modal-body">

            <form name="transactionForm" id="transactionForm">

              <div class="form-group">

                <label for="sender" class="font5">Send from</label>

                <input type="text" id="sender" name="sender" class="form-control font2"   value="">

              </div>

              <div class="form-group">

                <label for="reciver" class="font5">Transfer to</label>

                <input type="text" id="reciver" name="reciver" class="form-control font2" value="">

              </div>

              <div class="form-group">

                <label for="amount" class="font5">Amount</label>

                <input type="text" id="amount" name="amount" class="form-control font2" value="">

              </div>

            </form>

          </div>

          <!---  End of ADD DETAILS MODAL BODY ----->

          <div class="text-center my-4">

            <button type="submit" id="transferButton" data-toggle="modal" class="btn btn-success">Transfer</button>

            <!-- data-target="#mailmodal" data-dismiss="modal" -->

          </div>

        </div>

      </div>

    </div>

  </div>

    </section>
    <!-- JQuery CDN Link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Bootstrap Bundle JS CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Select JS CDN LINK -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Owl Carousel CDN Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <!-- Custom JS Link -->
    <script src="js/custom.js"></script>

    <!-- Custom JS Link -->
    <script src="js/ajax.js"></script>
  </body>
</html>

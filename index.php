<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cong. Marcelino Nonoy Libanan | Official Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/MCL_Logo_h_32.png" rel="icon">
  <link href="assets/img/MCL_Logo_h_180.png" rel="apple-touch-icon">






  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />


  <!-- External QR code library -->
  <!--This is the liberary which helps 
        to convert simple data to the images-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js">
  </script>


</head>

<body>

  <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">


  <div class="row">
    <div class="col-12 col-md-5 d-flex align-items-center justify-content-center flex-column " >
      <div class="container d-flex align-items-center justify-content-center mb-3" >

        <img src="assets/imgs/logo/4pslogo.png" alt="4PS Logo" style="max-width: 100px; margin-right: 20px;">
        <img src="assets/imgs/logo/mclreplogo.png" height="" width="200px" alt="MCLR EP Logo">

      </div>

      <div class="sqrcode "></div>
      <div class="qrcode my-4"></div>
    </div>


    <div class="col-12 col-md-7 d-flex align-items-center justify-content-center flex-column p-5">

        <div class="jumbotron text-center">
        </div>
        <h2 class="display-5 fw-bold mb-5 text-center" style="color: #113570;">REGISTRATION SUCCESSFUL!
        </h2>
        <p class="lead "><strong class="fw-bold">Congratulations!</strong> Welcome to <span class=" fw-bold">MCL CARES</span> Official website. Your registration is complete, and you are now part of our community striving to make a difference.</p>

        <div class="div ">
        <p ><li class="lead"><strong>Save this QR Code</strong>: Take a screenshot or save the image on your device for future reference.</li></p>

        <p ><li class="lead"><strong>Scan the QR Code</strong>: Use any QR code scanner app on your smartphone to scan this code.
        </li></p>
        </div>


        <hr>
        <p>
          Having trouble? <a href="index.php#contact">Contact us</a>
        </p>
        <p class="lead">
          <a class="btn btn-primary btn-sm" href="profile.html" role="button">Check Application Status</a>
        </p>
     


    </div>
  </div>


  </div>









  <script>
    // Create a new QRCode instance
    let qrcode = new QRCode(document.querySelector(".qrcode"));

    // Function to generate QR code
    function generateQr() {
      const url = "http://localhost/Felip/qr.php";
      qrcode.makeCode(url);
    }

    // Generate QR code on page load
    window.onload = generateQr;
  </script>


</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <!-- AOS  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

</head>

<body style="background-color : #FFDAB9;">

  <!-- loader for splash screen -->
  <div id="loading"></div>

    <?php
     include 'navbar.php';
    
    ?>
    

    <!-- here content starts here -->
    <div class="container-fluid hero-content">
      <div class="row align-items-center">
        <div class="col-md-12 col-sm-20 text-center" data-aos="fade-down"><br>
		<h1><p style="color:black"><b>WELCOME TO MODERN BANK</b></p></h1>
          <h3><p class="lead muted">We care Dil se; we make you feel Richer</p></h3>
          <div class="row activity text-center">
		  <div class="col-md act">
                  <br>
                 
                    <img src="https://akm-img-a-in.tosshub.com/sites/btmt/images/stories/bad-bank_660_061118064321_061418070633.jpg"> 
                    <br>
                    
                    <a href="transfermoney.php"><br><button style="background-color : green;">Customers</button></a>
                  </div>
                  <div class="col-md act"><br>
                    <img src="https://d3mvlb3hz2g78.cloudfront.net/wp-content/uploads/2016/12/thumb_720_450_Money_Can_a_Bank_Holddreamstime_xxl_2116072.jpg">
                    <br><br>
                    <a href="transactionhistory.php"><button style="background-color : green;">All Transactions</button></a>
                  </div>
            </div>
      </div>
    </div>
    <!-- here content ends here -->


    <!-- footer starts here -->
    <footer class="text-center mt-5 py-2">
        <p>This project is made by Rahul &copy 2021 @ Sparks Foundation.<br><ul class="social-icons">
              Contact Me:
              <a target="_blank" class="github" href="https://github.com/Rahul-0311"><i class="fab fa-github fa-2x"></i></a>
              
              <a target="_blank" class="linkedin" href="https://www.linkedin.com/in/rahul-jain-515595192/"><i class="fab fa-linkedin fa-2x"></i></a>   
            </ul></p>
      </footer>
      
    <!-- footer ends here -->

    <!-- spalsh screen js -->
    <script>
      var preloader = document.getElementById("loading");
      function loader(){
        preloader.style.display = 'none';
      }
    </script>

    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>

    <!-- aos data  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 700,
      });
    </script>
    
</body>
</html>

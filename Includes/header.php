  <link href="css/css-projeto.css?v=12345678" rel="stylesheet">
  <!-- <link href="css/css2.css" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
    rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body style="margin-top: 0;">

  <section class="section-barra">
    <nav class="barra">
      <a class="brand-barra" href="index.php"><i class="fas fa-bolt"
          style="font-size: 20px; color: rgb(250, 188, 96)"></i> ThunderStream</a>
      <?php 
        if (isset($_SESSION["UserId"]))
        {
          echo "<a class='link-barra' href='LogOut.php'>Log Out</a>
                <a class='link-barra' href='MyProfile.php'>My Profile</a>";
        }
        else
        {
          echo "<a class='link-barra' href='LogIn.php'>Log In</a>
                <a class='link-barra' href='SignUp.php'>Sign Up</a>";
        }
      ?>    
      
    </nav>
  </section>
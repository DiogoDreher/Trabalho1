<!DOCTYPE html>
<html>

    <head>
        <title>Watch /Fill Blank/</title>
        <link href="css/css-projeto.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="css/bootstrap.css" rel="stylesheet">
    </head>
  
    <body style="margin-top: 0;">
  
      <section class="section-barra">
        <nav class="barra">
          <a class="brand-barra" href="index.html"><i class="fas fa-bolt" style="font-size: 20px; color: rgb(250, 188, 96)"></i> ThunderStream</a>
          <a class="link-barra" href="LogIn.html">Log In</a>
          <a class="link-barra" href="SignUp.html">Sign Up</a>
        </nav>
      </section>

      <section class="page-container">
        <section class="content-wrap">
            <section class="container">

              <section class="info-watch">

              </section>
              <section class="player-watch">
                <div style="text-align: center; margin-top: 75px;">
                  <div style="display: inline-block; margin: 10px">
                      <a class="botaoplayer" id="sd">Resolution 1</a>
                  </div>
                  <div style="display: inline-block; margin: 10px">
                      <a class="botaoplayer" id="hd">Resolution 2</a>
                  </div>
              </div>
              <br><br>
              <div style="text-align: center">
                  <video controls id="video" height="auto" width="100%">
                      <source src="" type="video/mp4" id="videosrc">
                  </video>
                  <script>
                      
                      var mudar_sd = document.getElementById("sd");
                      var mudar_hd = document.getElementById("hd");
                      var video = document.getElementById("video");
                      var source = document.getElementById("videosrc");
      
                      function play_sd() {
      
                      source.setAttribute("src", "res1");
                      video.load();
                      }
      
                      function play_hd() {
      
                      source.setAttribute("src", "res2");
                      video.load();
      
                      }
      
                      mudar_sd.addEventListener("click", play_sd);
                      mudar_hd.addEventListener("click", play_hd);
          
                  </script>
              </div>
              </section>

            </section>
        </section>
      </section>

    </body>

</html>
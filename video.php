<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
    
    <link href="Footer_nav.css" rel="stylesheet">
    <title>動態影像</title>
    <style>
      
    </style>
  </head>
  <body>
    <!-- 選單 -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><p class="NavText">Danny Lin</p></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><p class="nav_title">平面影像</p></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="video.php"><p class="nav_title">動態影像</p></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><p class="nav_title">contact</p></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- 影片內容 -->
    <div class="video_content">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-7">
                    <div class="ratio ratio-16x9">
                        <iframe width="1903" height="768" src="https://www.youtube.com/embed/Q_nXTU2xQA4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="ratio ratio-16x9">
                        <iframe width="1903" height="768" src="https://www.youtube.com/embed/YolNhBpPiCE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <!-- 頁尾 -->
    <footer class="footer" id="footer" >
      <div class="container">
          <a href="https://www.facebook.com/dannyhomboy"><img src="ICON/social_media/facebook.png" class="social_icon" width="40px" height="40px"></a>
          <a href="https://www.instagram.com/dannylindaily/"><img src="ICON/social_media/instagram-logo.png" class="social_icon" width="40px" height="40px"></a>
          <a href="https://www.youtube.com/channel/UCePfnASFseh4ZJh1-zS6bpw"><img src="ICON/social_media/youtube.png" class="social_icon" width="50px" height="50px"></a>
          <a href="https://www.behance.net/dannylinphotography"><img src="ICON/social_media/behance.png" class="social_icon" width="50px" height="50px"></a>
          <p class="text_footer">© 2023 by The Art of Food. Proudly created with Wix.com</p>
      </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap@5.0.0-beta2/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
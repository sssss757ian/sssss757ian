<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="Footer_nav.css">
        <link rel="stylesheet" href="contact.css">
        <title>contact us</title>
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
    <!-- 內容 -->
    <div class="container-fluid" style="background: rgb(241, 243, 246); margin-top:100px">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="https://picsum.photos/seed/picsum/960/1080" class="w-100">
            </div>
            <div class="col-12 col-md-6">
                <!-- 表單標題 -->
                <h1 class="contact">GET IN TOUCH</h1>
                <h2 class="subcontact">I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.</h2>
                <h2 class="contact_info">Tel: 09xx-xxxxxx  |  Email: fordanny2017@gmail.com</h2>
                <!-- 表單 -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">First Name*</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Name...">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Last Name*</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Name...">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email*</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Subject*</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Name...">
                </div>  
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Message*</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                </div>
            </div>
        </div>
    </div>
    <!-- test -->
    <form action="php.php" method="post">
　  文字輸入欄位: <input type="test" name="YourName">
　  <input type="submit" value="送出表單">
    </form>
    <a href="php.php">78979</a>
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
    <script src="bootstrap-5.0.0-beta2-dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
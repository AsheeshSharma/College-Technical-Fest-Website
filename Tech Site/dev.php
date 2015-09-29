<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.css">
      
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.js"></script>
     <link href="css/style.css" rel="stylesheet">
    <script src="js/respond.js"></script>
    <script>
        $(document).ready(function() {
    $('.hover').bind('touchstart touchend', function(e) {
        e.preventDefault();
        $(this).toggleClass('hover_effect');
    });
});
 $('#dev1').hover(function () {
        this.src = '/img/dev_4.png';
    }, function () {
        this.src = '/mg/dev_2.png';
    });
    </script>
</head>
<body>
    <div data-role="page" id="p1">
         <a href="index.php"><img src="img/logoFU.png" id="lg" onmouseover="this.src='img/logoF.png'" onmouseout="this.src='img/logoFU.png'"></a> 
            <header class="row">
           <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 ">
               <center><img src="img/dev_1.png" id="im1"></center>
               </div>
            </header>
         <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                 <img src="img/dev_2.png" id="dev1" onmouseover="this.src='img/dev_4.png'" onmouseout="this.src='img/dev_2.png'" style="float: right">
             </div>
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                 <img src="img/dev_3_r.png" id="dev2" onmouseover="this.src='img/dev_5_r.png'" onmouseout="this.src='img/dev_3_r.png'">
             </div>
         </div>
         <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-push-4 col-md-push-11">
                   <a href="https://plus.google.com/u/0/104329515934228595893/posts"><img src="img/gp.png" id="gp"></a>
                   <a href="https://in.linkedin.com/pub/asheesh-sharma/a5/446/7b1" ><img src="img/link.png" id="link"></a>
                   <a href="https://www.facebook.com/asheesh.sharma.37"><img src="img/fb.png" id="fb"></a>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-push-1">
                 <a href="plus.google.com/108531313819611306827"><img src="img/gp.png" id="gp2"></a>
                 <a href="in.linkedin.com/in/merajahmadsiddiqui"><img src="img/link.png" id="link2"></a>
                   <a href="facebook.com/msiddiqui.jmi"><img src="img/fb.png" id="fb2"></a>
             </div> 
         </div>
    </div>
</body>
</html>
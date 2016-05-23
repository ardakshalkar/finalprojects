<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="icon" href="images/favicon.ico">

<link rel="shortcut icon" href="images/favicon.ico">

<link rel="stylesheet" href="css/style1.css">

<link rel="stylesheet" href="css/slider.css">

<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/sForm.js"></script>
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 700,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
});
$(window).load(function () {
    $('.carousel1').carouFredSel({
        auto: false,
        prev: '.prev',
        next: '.next',
        width: 1400,
        items: {
            visible: { 
                min: 1,
                max: 4
            },
            height: 'auto',
            width: 240,
        },
        responsive: false,
        scroll: 1,
        mousewheel: false,
        swipe: {
            onMouse: false,
            onTouch: false
        }
    });
});
</script>
</head>
<body>

<body style="background color:lightblue">

<?php
include("header.php");
?>

<div id="nav">
<div class="menuitem">
<a href="project.php">Main</a><br></div>
<div class="menuitem">
<a href="4444.php">Diamonds</a><br></div>

<div class= "menuitem">
<a href="jewellery.php">Weddings</a><br></div>
<div class="menuitem">
<a href="watches.php">Watches</a><br></div>
<div class="menuitem">
<a href="sale.php">Sale</a>
</div>
</div>

  
  <div class="slider-relative">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="images/watch.jpg"></li>
          <li><img src="images/diamond.jpg" ></li>
          <li class="mb0"><img src="images/wedding.jpg" alt=""></li>
        </ul>
      </div>
    </div>
  </div>

<div class="brand0"><a href="link111.php">
<img src="http://www.goldsmiths.co.uk/medias/?context=bWFzdGVyfHJvb3R8MTQ4MTF8aW1hZ2UvanBlZ3xoZjYvaGMyLzg4NTgwNzQwMjE5MTguanBnfDdlNWMwYjdkMmRiOTlhMjRhZjI2YTYzNWZkZjVmM2VmNDgxZDUxNjljZWE0N2E0ODFjMWYwNTVhZjlkYjU1ODc" width="250"></a></div>
<div class="brand11"><a href="link444.php">
<img src="http://www.goldsmiths.co.uk/medias/?context=bWFzdGVyfHJvb3R8MTEwODF8aW1hZ2UvanBlZ3xoZmIvaDhjLzg4NTgwNzUzNjU0MDYuanBnfGFmNjUzYjg4NDAwYzIwNzFlMzkzZWY4ZGEyMTU3MzQzNjlkOWQ2YTFmYTRlNjhjOTg0MjAwMzU3YTgzMDVkYmM" width="250"></a></div>
<div class="brand22"><a href="link333.php">
<img src="http://www.goldsmiths.co.uk/medias/?context=bWFzdGVyfHJvb3R8MTA4ODN8aW1hZ2UvanBlZ3xoNmUvaGRlLzg4NTgwNzYzODEyMTQuanBnfGUzZTczODA2YWU1YTIwYzdhOTRmMTlhOGUyYzdhN2VkODI1OWQzYTBiYjA4ZGUwMDBiYTQ2ZDAxNzhkMTE0YzI" width="250"></a></div>
<div class="brand33"><a href="link222.php">
<img src="http://www.goldsmiths.co.uk/medias/?context=bWFzdGVyfHJvb3R8MjcwNDF8aW1hZ2UvanBlZ3xoOTQvaDM1Lzg5MDk2MTY2MTEzNTguanBnfDk3NDNkMDRhNWEwYTlhOGUyZmEzM2ExODY0NDQyYjJlMDFjZDI5OTZmYmQyMGFhMDU4YTYwYjYxOTIwZWJhZDM" width="250"></a></div>



<?php
include("footer2.php");
?>

</body>
</html>  

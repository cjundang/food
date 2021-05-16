<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Product example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">

    

    <!-- Bootstrap core CSS -->
<link href="<?php echo base_url(); ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">

    

    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
  </head>
  <body>
    
<header class="site-header sticky-top py-1">
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2" href="#" aria-label="Product">
      <img src="<?php echo base_url()?>assets/header/logo.jpg" " height="50px" fill="none">
      <div class="d-flex align-items-center">
      <form class="w-100 me-3">
        <input type="search" class="form-control" placeholder="Search...">
      </form>
      <div class="flex-shrink-0 dropdown">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>
    </div>
    </a>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="navbarsExample08">
        <ul class="navbar-nav">
        <?php
          // print_r($menu);
          foreach($menu as $item){
            echo "<li class='nav-item'>";
            echo "<a class='nav-link active' aria-current='page'";
            echo " href='". base_url(). "index.php/". $item['link']  ."'> ";
            echo "<i class='bi bi-" . $item['icon'] . "'></i> ";
            echo  $item['title'] ."</a></li>";
          }
        ?>
        </ul>
      </div>
    </div>
  </nav>
</header>
<main>
  <div class="">
    <img src="<?php echo base_url()?>assets/header/header.jpg" width="100%" height="100%">
  </div>
  <div class="">
    <img src="<?php echo base_url()?>assets/header/recommended.jpg" width="100%" height="100%">
  </div>
  <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row" id="lineRecommended"></div>
        </div>
        <div class="col-md-4 bg-light">
          <div class="row" id="topFourCafe"></div>
    </div>
  </div>

  <div class="">
    <img src="<?php echo base_url()?>assets/header/top8.jpg" width="100%" height="100%">
  </div>

    <div class="container">
        <div class="row" id="TopEightRecommend"></div>
    </div>    
    <br/>
    
    
  <br/>
        

  <div class="container">
        <div class="row" id="LastSixCafe"> </div>
    </div>
    <div class="">
        <img src="<?php echo base_url()?>assets/header/newreview.jpg" width="100%" height="100%">
    </div>
    <div class="container">
        <div class="row" id="LastReivew">
        </div>
    </div>
        
</main>

<br/>
<!--
  <footer class="  site-header">
    <div class="container">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
    </div>
    <div class="col-6 col-md">
      <h5>Features</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Cool stuff</a></li>
        <li><a class="link-secondary" href="#">Random feature</a></li>
        
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Resource name</a></li>
        <li><a class="link-secondary" href="#">Resource</a></li>
        
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Business</a></li>
        <li><a class="link-secondary" href="#">Education</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Team</a></li>
        <li><a class="link-secondary" href="#">Locations</a></li>
      </ul>
    </div>
  </div>
</div>
</footer>
        -->
    <script src="<?php echo base_url(); ?>assets/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
      $(()=>{
        loadLastArticle();
        loadTopFourCafe();
        loadTopEightRecommend();
        loadLastSixCafe();
        loadLastReivew();
       });

      function loadLastArticle(){
        var url = "http://localhost/index.php/api/getLastArticle";
        $.ajax({
          type: "GET",
          url: url,
          success: function(data){
            var month = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
            var items = JSON.parse(data);
            var line = "";
            $("#lineRecommended").empty();
            $.each(items, (k, v)=>{
              line += "<div class='col-md-6'>";
              line += "<div class='card'>"; 
              line += "<a href='"+ v.link +"'><img src='<?php echo base_url()?>assets/main_page/recommend/"+ v.caption+"' width='100%' height='180'></a>";
              line += "<div class='card-body'>";          
              line += "<h5 class='card-title'>"+ v.title +"</h5>";
              var d = new Date(v.update);
              dline = d.getDate() + " " + month[d.getMonth()] + " " + (543+d.getFullYear());
              line += "<p class='card-text'>"+ v.content +"</p>";
              line += "<p class='card-text'>ข้อมูล ณ วันที่ "+ dline +"</p>";
              line += "</div></div></div>";
            });
            $("#lineRecommended").append(line);
          }
        });
      }

      function loadTopFourCafe(){
        var url = "http://localhost/index.php/api/getTopFourCafe";
        $.ajax({
          type: "GET",
          url: url,
          success: function(data){
            var items = JSON.parse(data);
            var line = "";
            $("#topFourCafe").empty();
            $.each(items, (k, v)=>{
              line += "<div class='card'>";
              line += "<a href='"+ v.link +"'>";
              line += "<img src='<?php echo base_url()?>assets/main_page/cafe/"+ v.caption +"' width='100%' height='200'>";
              line += "</a></div>";
            });
            $("#topFourCafe").append(line);
          }
        });
      }
      function loadTopEightRecommend(){
        var url = "http://localhost/index.php/api/getTopEightRecommend";
        $.ajax({
          type: "GET",
          url: url,
          success: function(data){
            var items = JSON.parse(data);
            var line = "";
            $("#TopEightRecommend").empty();
            $.each(items, (k, v)=>{
              line += "<div class='col-md-3'>";
              line +=  "<div class='card'>";
              line += "<a href='"+ v.link +"'>";
              line += "<img src='<?php echo base_url()?>assets/main_page/top8/"+ v.caption +"' width='100%' height='180'>";
              line += "</a></div></div>";
            });
            $("#TopEightRecommend").append(line);
          }
        });
      }

      function loadLastSixCafe(){
        var url = "http://localhost/index.php/api/getLastSixCafe";
        $.ajax({
          type: "GET",
          url: url,
          success: function(data){
            var month = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
            var items = JSON.parse(data);
            var line = "";
            $("#LastSixCafe").empty();
            $.each(items, (k, v)=>{
              line += "<div class='col-md-6'>";
              line += "<div class='card'>"; 
              line += "<a href='"+ v.link +"'><img src='<?php echo base_url()?>assets/main_page/cafe/"+ v.caption+"' width='100%' height='180'></a>";
              line += "<div class='card-body'>";          
              line += "<h5 class='card-title'>"+ v.title +"</h5>";
              var d = new Date(v.update);
              dline = d.getDate() + " " + month[d.getMonth()] + " " + (543+d.getFullYear());
              line += "<p class='card-text'>"+ v.content +"</p>";
              line += "<p class='card-text'>ข้อมูล ณ วันที่ "+ dline +"</p>";
              line += "</div></div></div>";
            });
            $("#LastSixCafe").append(line);
          }
        });
      }

      function loadLastReivew(){
        var url = "http://localhost/index.php/api/getLastReivew";
        $.ajax({
          type: "GET",
          url: url,
          success: function(data){
            var items = JSON.parse(data);
            var line = "";
            $("#LastReivew").empty();
            $.each(items, (k, v)=>{
              line += "<div class='col-md-3'>";
              line +=  "<div class='card'>";
              line += "<a href='"+ v.link +"'>";
              line += "<img src='<?php echo base_url()?>assets/main_page/last_reviews/"+ v.caption +"' width='100%' height='180'>";
              line += "</a></div></div>";
            });
            $("#LastReivew").append(line);
          }
        });
      }
 
 

    </script>
  </body>
</html>

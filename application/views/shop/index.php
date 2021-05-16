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
      <img src="<?php echo base_url()?>assets/header/shop.png" width="100%" height="100%">
    </div>
    <div class="">
      <img src="<?php echo base_url()?>assets/header/bestres.png" width="100%" height="100%">
    </div>

    <div class="container">
      <!-- Last article -->
      <div class="row">
        <div class="col-md-8">
          <div class="row" id="last_article"></div>
        </div>
        
        <!-- คาเฟ่ Top 4 -->
        <div class="col-md-4 bg-light">
          <form class="w-100 me-3" >
            <input type="search" style="margin-top: 10px;margin-bottom: 10px" class="form-control" placeholder="Search...">
          </form>
          <div class="row" id="topFourCafe"></div>
        </div>
      </div>
    </div>

    <!-- ดูรีวิวล่าสุด -->
    <div class="container">
      <div class="">
          <img src="<?php echo base_url()?>assets/header/newreview.jpg" width="100%" height="100%" />
      </div>
      <div class="row" id="LastReivew">
    </div>
        
</main>
 
    <script src="<?php echo base_url(); ?>assets/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
      $(()=>{
        loadAll();
        loadTopFourCafe();
        loadLastReivew();
       });

      function loadAll(){
        var url = "http://localhost/index.php/shopapi/getall";
        $.ajax({
          type: "GET",
          url: url,
          success: function(data){
            var month = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
            var items = JSON.parse(data);
            var line = "";
            $("#last_article").empty();
            $.each(items, (k, v)=>{
              line += "<div class='col-md-6' >";
              line += "<div class='card' style='margin:1px;'>"; 
              line += "<a href='"+ v.link +"'><img src='"+ v.caption+"' width='100%'></a>";
              line += "<div class='card-body'>";          
              line += "<h5 class='card-title'>"+ v.heading +"</h5>";
              var d = new Date(v.update);
              dline = d.getDate() + " " + month[d.getMonth()] + " " + (543+d.getFullYear());
              console.log(v.update);
              line += "<p class='card-text'>"+ v.content +"</p>";
              line += "<p class='card-text'>ข้อมูล ณ วันที่ "+ dline +"</p>";
              line += "</div></div></div>";
            });
            $("#last_article").append(line);
          }
        });
      }

      function loadTopFourCafe(){
        var url = "http://localhost/index.php/shopapi/gettopfour";
        $.ajax({
          type: "GET",
          url: url,
          success: function(data){
            var items = JSON.parse(data);
            var line = "";
            $("#topFourCafe").empty();
            $.each(items, (k, v)=>{
              line += "<div style='margin:1px'>";
              line += "<a href='"+ v.link +"'>";
              line += "<img src='"+ v.caption +"' width='100%'>";
              line += "</a></div>";
            });
            $("#topFourCafe").append(line);
          }
        });
      }
  

      function loadLastReivew(){
        var url = "http://localhost/index.php/shopapi/getlastreview";
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
              line += "<img src='"+ v.caption +"' width='100%'>";
              line += "</a></div></div>";
            });
            $("#LastReivew").append(line);
          }
        });
      }
 
 

    </script>
  </body>
</html>

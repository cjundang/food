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
  
    <script type='text/javascript' src='http://www.x3dom.org/download/x3dom.js'> </script> 
    <link rel='stylesheet' type='text/css' href='http://www.x3dom.org/download/x3dom.css'></link> 
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
    <!-- img src="<?php echo base_url()?>assets/header/header.jpg" width="100%" height="100%" -->
  </div>
  <div class="">
    <!-- img src="<?php echo base_url()?>assets/header/recommended.jpg" width="100%" height="100%" -->
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <img src="<?php echo base_url()?>assets/header/bestfood.png" width="100%" height="100%">
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="row" id="tools_list"></div>
      </div>
      <div class="col-md-4 bg-light" id="cavas">
              <x3d width='95%' height='300px' style="background-color:#ffffff;margin:10px;">
                <scene>
                <viewpoint id="model_link2" position="0 0 20" orientation="0.0 0.0 0.0 0.0"></viewpoint>
                <Inline id="model_link" nameSpaceName="" mapDEFToID="true" onclick='redNose();' url="" />
                </scene>
            </x3d>    
            <h4> <span id='tools_header'></span></h4>
            <span style='font-size:small' id='tools_content'></span>
        </div>
    </div>

  </div>
   
        
</main>
 
    <script src="<?php echo base_url(); ?>assets/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
    var items;
      $(()=>{
          loadTools();
       });
       function render_click(){
         var id = this.id.split('_');
          v = items[id[1]-1];
          $("#tools_header").text(v.caption);
          $("#tools_content").text(v.content);
          $("#model_link2").attr('position', "0 0 20");
          $("#model_link2").attr('orientation', "0.0 0.0 0.0 0.0");
          $("#model_link").attr('nameSpaceName', id[0]);
          $("#model_link").attr('url', 'http://localhost/model/'+id[0]+'/model.x3d');
        }

      function redNose(){
        if(document.getElementById('Deer__MA_Nose').getAttribute('diffuseColor')!= '1 0 0')
            document.getElementById('Deer__MA_Nose').setAttribute('diffuseColor', '1 0 0');
        else
            document.getElementById('Deer__MA_Nose').setAttribute('diffuseColor', '0 0 0');
        }
      

    function loadTools(){
        var url = "http://localhost/index.php/tools/getall";
        $.ajax({
          type: "GET",
          url: url,
          success: function(data){
            items = JSON.parse(data);
            var line = "";
            $("#tools_list").empty();
            $.each(items, (k, v)=>{
              line +='<div class="col-md-2" style="border: 2px solid #dddddd; border-radius: 10px; margin:2px;">';
              line +='<div class="row">';
              line +='<img class="render" id="'+v.tools+'_'+ v.id +'" src="http://localhost/model/'+v.tools+'/cover.png" />';
              line +='</div>';
              line +='<div class="row" style="text-align:center">';
              line +='<h5>'+v.caption+'</h5>';
              line +='</div></div>';
            });
            $("#tools_list").append(line);
            $(".render").click(render_click);
          }
        });
      }



       


    </script>
  </body>
</html>

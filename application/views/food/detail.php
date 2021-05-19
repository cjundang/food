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
      <img src="<?php echo base_url()?>assets/header/logo.jpg" " height="50px" fill="none" />
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
          //print_r($menu);
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
<!--    
  <div class="">
    <img src="<?php echo base_url()?>assets/header/food.png" width="100%" >
  </div>
  <div class="">
    <img src="<?php echo base_url()?>assets/header/bestfood.png" width="100%" height="100%">
  </div>
        -->
<div class="container">
    <div class="row" style="margin-top:20px;">
        <div class="col-md-9">
            <div class="row" style="margin-top:20px;border: 2px solid orange;border-radius:10px; padding:10px; width:100%">
                <div class="col-md-12">
                    <input type="hidden" id="fid" value="<?php echo $id;?>" />
                    <h5 id="heading"></h5>
                    
                </div>
            </div>
            
            <div class="row" style="margin-top:10px;border: 2px solid orange;border-radius:10px; padding:10px; width:100%">
                <div class="col-md-6">
                <h5>ส่วนผสม</h5>
                <table class="table">
                    <tbody id="ingredient">
                    </tbody>
                </table>
                </div>
                <div class="col-md-6">
                  <p id="content"></p>
                </div>
                
            </div>
            <div id='render' class="row" style="margin-top:10px;border: 2px solid orange;border-radius:10px; padding:10px; width:100%">
                <div class="col-md-6">
                    <img id="caption" style="width:100%" src="" />
                </div>
                <div class="col-md-6 bg-light" id="cavas">
                  <x3d width='95%' height='300px' style="margin:10px;">
                    <scene>
                    <viewpoint id="model_link2" position="0 0 20" orientation="0.0 0.0 0.0 0.0"></viewpoint>
                    <Inline id="model_link" nameSpaceName="" mapDEFToID="true" onclick='redNose();' url="" />
                    </scene>
                  </x3d>    
                </div>
            </div>

            <div class="row" style="margin-top:10px;border: 2px solid orange;border-radius:10px; padding:10px; width:100%">
                <div class="col-md-12">
                    <h5>สรรพคุณ</h5>
                    <p id="medical"></p>    
                </div>
            </div>
            
            
        </div>
        <div class="col-md-3 bg-light">
          <form class="w-100 me-3" >
            <input type="search" style="margin-top: 10px;margin-bottom: 10px" class="form-control" placeholder="Search...">
          </form>
          
          <div class="row" id="topFourCafe">

          
          </div>
    </div>

</div>
    
 

</main>
 

<br/>
 
    <script src="<?php echo base_url(); ?>assets/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
      $(()=>{
        //$("#cavas").hide();
        loadFood();
        loadShopByMenu('<?php echo $id;?>');
        
      });
       
       
      function redNose()
      {
        if(document.getElementById('Deer__MA_Nose').getAttribute('diffuseColor')!= '1 0 0')
            document.getElementById('Deer__MA_Nose').setAttribute('diffuseColor', '1 1 0');
        else
            document.getElementById('Deer__MA_Nose').setAttribute('diffuseColor', '0 1 0');
      }


      function loadFood(){
        var id = $("#fid").val()
        var url = "http://localhost/index.php/foodapi/get/"+id;
        $.ajax({
          type: "GET",
          url: url,
          success: function(data){
            var items = JSON.parse(data)[0];
            console.log(items);
            $("#heading").text(items.title);
            $("#content").text(items.content);
            var line = "";
            ind = items.ingredient;
            var medical = "";
            $.each(ind, (k,v)=>{
                    line += '<tr>';
                    line += '<td style="font-size:small; width:70%">'+v.name+'</td>';
                    line += '<td style="font-size:small; width:30%; text-align: right">'+v.portion + ' ' + v.unit+'</td>';
                    line += '</tr>';
                    if( v.medical != ""){
                        medical += "<p><b>" + v.name + "</b>: " + v.medical + "</p>";
                    }
            });

            $("#ingredient").append(line);
            $("#caption").attr('src', items.caption);
            $("#medical").html(medical);

            $("#model_link2").attr('position', items.models.position );
            $("#model_link2").attr('orientation', "0.0 0.0 0.0 0.0");
            $("#model_link").attr('nameSpaceName', $("#fid").val());
            $("#model_link").attr('url', 'http://localhost/assets/model_food/'+ items.models.name +'/model.x3d');

          }
        });
      }

      function loadShopByMenu(id){
        var url = "http://localhost/index.php/shopapi/getshopbymenu/"+id;
        $.ajax({
          type: "GET",
          url: url,
          success: function(data){
            var items = JSON.parse(data);
            var line = "";
            $("#topFourCafe").empty();
            $.each(items, (k, v)=>{
              line += '<div class="col-md-12" style="margin:5px">';
              line += '<a href="'+v.link+'">';
              line += '<img src="'+ v.caption+'" style="width:100%"/></a></div>';
            });
            $("#topFourCafe").append(line);
          }
        });
      }


    </script>
  </body>
</html>

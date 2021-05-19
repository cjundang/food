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

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/star-rating-svg-master/src/css/star-rating-svg.css">
    <script src="<?php echo base_url()?>assets/star-rating-svg-master/src/jquery.star-rating-svg.js"></script>
  </head>
  <style>
    .container-img {
      position: relative;
      text-align: center;
      color: white;
    }

    /* Centered text */
  .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  </style>
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
                    <div class="row">
                      <div class="col-md-7">
                      <img src="<?php echo base_url()?>assets/upload/shop/1006/KanomjeenPoonim.jpg" width="100%" height="100%">
                      </div>
                      <div class="col-md-5">
                      <div class="row">
                      <div class="col-md-12"><img src="<?php echo base_url()?>assets/upload/shop/1001/Untitled 4.003.jpeg" width="100%" height="100%"></div>
                      <div class="col-md-12 container-img">                      
                          <img src="<?php echo base_url()?>assets/upload/shop/1006/Untitled 4.004.jpeg" alt="Snow" style="width:100%;">
                      </div>
                      </div>
                      </div>
                    </div>
                    <h4 id="heading">ขนมจีนครูพร</h4>
                    <div class="row">
                      <div class="col-md-8"><div class='my-rating jq-stars' data-rating='4.0'></div></div>
                      <div class="col-md-4">34 เรตติ้ง (26 รีวิว)</div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">อาหารทะเลอาหารไทย</div>
                      <div class="col-md-4">
                        <span class="">เปิดอยู่</span><span class="">จนถึง 21:30</span></div>
                    </div>
                    <p id="content"></p>
                </div>
                <div type="horizontal" class="Gap-sc-1mxsfv9 o34rrr-4 gEhnIt"><button class="sc-fznyAO jIBjZY"><div type="horizontal" class="Gap-sc-1mxsfv9 Wrapper-sc-z4g2el bQIYzO"><svg height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="Icon-sc-mxq1mx jWUGgw"><path d="M10.613 18.893l.507-.322-.177-.278h-.33v.6zm1.154 1.817l.506-.322-.506.322zm.844 0l-.507-.322.507.322zm1.153-1.817v-.6h-.33l-.176.278.506.322zM3.6 6.995a3.4 3.4 0 013.4-3.4v-1.2a4.6 4.6 0 00-4.6 4.6h1.2zm0 7.898V6.995H2.4v7.898h1.2zm3.4 3.4a3.4 3.4 0 01-3.4-3.4H2.4a4.6 4.6 0 004.6 4.6v-1.2zm3.613 0H7v1.2h3.613v-1.2zm1.66 2.095l-1.153-1.817-1.013.643 1.153 1.817 1.013-.643zm-.169 0a.1.1 0 01.17 0l-1.014.643a1.1 1.1 0 001.857 0l-1.013-.643zm1.154-1.817l-1.154 1.817 1.013.643 1.154-1.817-1.013-.643zm3.809-.278h-3.303v1.2h3.303v-1.2zm3.4-3.4a3.4 3.4 0 01-3.4 3.4v1.2a4.6 4.6 0 004.6-4.6h-1.2zm0-7.898v7.898h1.2V6.995h-1.2zm-3.4-3.4a3.4 3.4 0 013.4 3.4h1.2a4.6 4.6 0 00-4.6-4.6v1.2zM7 3.595h10.067v-1.2H7v1.2z" fill="#000"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M16.55 10a.639.639 0 00-.615-.458h-1.57c-.562 0-1.056-.37-1.229-.918l-.488-1.54a.639.639 0 00-.615-.459.639.639 0 00-.615.458l-.488 1.54a1.293 1.293 0 01-1.227.919H8.065A.639.639 0 007.45 10a.663.663 0 00.235.742l1.337.952c.453.338.641.93.468 1.478l-.488 1.54a.663.663 0 00.615.871.632.632 0 00.38-.129l1.277-.952a1.261 1.261 0 011.518 0l1.277.952c.115.086.248.13.38.13a.663.663 0 00.615-.871l-.488-1.541a1.336 1.336 0 01.47-1.478l1.27-.952A.663.663 0 0016.55 10z" fill="#FF672B"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M16.55 10a.639.639 0 00-.615-.458h-1.57c-.562 0-1.056-.37-1.229-.918l-.488-1.54a.639.639 0 00-.615-.459.639.639 0 00-.615.458l-.488 1.54a1.293 1.293 0 01-1.227.919H8.065A.639.639 0 007.45 10a.663.663 0 00.235.742l1.337.952c.453.338.641.93.468 1.478l-.488 1.54a.663.663 0 00.615.871.632.632 0 00.38-.129l1.277-.952a1.261 1.261 0 011.518 0l1.277.952c.115.086.248.13.38.13a.663.663 0 00.615-.871l-.488-1.541a1.336 1.336 0 01.47-1.478l1.27-.952A.663.663 0 0016.55 10z" fill="#FF672B"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M16.55 10a.639.639 0 00-.615-.458h-1.57c-.562 0-1.056-.37-1.229-.918l-.488-1.54a.639.639 0 00-.615-.459.639.639 0 00-.615.458l-.488 1.54a1.293 1.293 0 01-1.227.919H8.065A.639.639 0 007.45 10a.663.663 0 00.235.742l1.337.952c.453.338.641.93.468 1.478l-.488 1.54a.663.663 0 00.615.871.632.632 0 00.38-.129l1.277-.952a1.261 1.261 0 011.518 0l1.277.952c.115.086.248.13.38.13a.663.663 0 00.615-.871l-.488-1.541a1.336 1.336 0 01.47-1.478l1.27-.952A.663.663 0 0016.55 10z" fill="url(#review_colorful_paint0_linear)"></path><defs><linearGradient id="review_colorful_paint0_linear" x1="12" y1="-0.094" x2="12" y2="15.583" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"></stop><stop offset="1" stop-color="#fff" stop-opacity="0"></stop></linearGradient></defs></svg><span class="sc-AxirZ cseIA-d">เขียนรีวิว</span></div></button><button class="sc-fznyAO jIBjZY"><div type="horizontal" class="Gap-sc-1mxsfv9 Wrapper-sc-z4g2el bQIYzO"><svg height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="Icon-sc-mxq1mx jWUGgw"><g clip-path="url(#camera_colorful_clip0)"><path d="M3.943 7.168h.33l.198-.264 1.223-1.63a.44.44 0 01.352-.176h6.146a.44.44 0 01.352.176l1.223 1.63.198.264h3.37a.44.44 0 01.44.44V19.9a.44.44 0 01-.44.44H.903a.44.44 0 01-.44-.44V7.608a.44.44 0 01.44-.44h3.04z" stroke="#232729" stroke-width="1.32"></path><circle cx="9.119" cy="13.754" r="4.516" stroke="#232729" stroke-width="1.32"></circle><circle cx="9.119" cy="13.754" r="2.588" fill="#FF672B"></circle><circle cx="9.119" cy="13.754" r="2.588" fill="url(#camera_colorful_paint0_linear)"></circle><rect x="16.253" y="2" width="2.742" height="9.631" rx="1.371" fill="#FF672B"></rect><rect x="16.253" y="2" width="2.742" height="9.631" rx="1.371" fill="url(#camera_colorful_paint1_linear)"></rect><rect x="22.439" y="5.444" width="2.742" height="9.631" rx="1.371" transform="rotate(90 22.439 5.444)" fill="#FF672B"></rect><rect x="22.439" y="5.444" width="2.742" height="9.631" rx="1.371" transform="rotate(90 22.439 5.444)" fill="url(#camera_colorful_paint2_linear)"></rect></g><defs><linearGradient id="camera_colorful_paint0_linear" x1="9.119" y1="7.284" x2="9.119" y2="16.341" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"></stop><stop offset="1" stop-color="#fff" stop-opacity="0"></stop></linearGradient><linearGradient id="camera_colorful_paint1_linear" x1="17.623" y1="-5.223" x2="17.623" y2="11.631" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"></stop><stop offset="1" stop-color="#fff" stop-opacity="0"></stop></linearGradient><linearGradient id="camera_colorful_paint2_linear" x1="23.809" y1="-1.779" x2="23.809" y2="15.075" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"></stop><stop offset="1" stop-color="#fff" stop-opacity="0"></stop></linearGradient><clipPath id="camera_colorful_clip0"><path fill="#fff" transform="translate(-.615)" d="M0 0h24v24H0z"></path></clipPath></defs></svg><span class="sc-AxirZ cseIA-d">เพิ่มรูป</span></div></button><button class="sc-fznyAO jIBjZY o34rrr-9 ePsJkJ"><div type="horizontal" class="Gap-sc-1mxsfv9 Wrapper-sc-z4g2el bQIYzO"><svg height="20" viewBox="0 0 24 24" fill="none" class="Icon-sc-mxq1mx jWUGgw"><circle cx="12" cy="9" r="2.5" fill="#FF672B"></circle><circle cx="12" cy="9" r="2.5" fill="url(#checkin-colorful__paint0_linear)"></circle><path d="M17.4 9.4c0 2.177-1.377 4.436-2.86 6.216A23.731 23.731 0 0112 18.214a23.727 23.727 0 01-2.54-2.598C7.978 13.836 6.6 11.576 6.6 9.4c0-3.24 2.454-5.8 5.4-5.8s5.4 2.56 5.4 5.8z" stroke="#232729" stroke-width="1.2"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M9.873 18.094C7.047 18.352 5 19.108 5 20c0 1.105 3.134 2 7 2s7-.895 7-2c0-.892-2.047-1.648-4.873-1.906A25.23 25.23 0 0112 20s-.938-.724-2.127-1.906z" fill="#FF672B"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M9.873 18.094C7.047 18.352 5 19.108 5 20c0 1.105 3.134 2 7 2s7-.895 7-2c0-.892-2.047-1.648-4.873-1.906A25.23 25.23 0 0112 20s-.938-.724-2.127-1.906z" fill="url(#checkin-colorful__paint1_linear)"></path><defs><linearGradient id="checkin-colorful__paint0_linear" x1="12" y1="2.75" x2="12" y2="11.5" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"></stop><stop offset="1" stop-color="#fff" stop-opacity="0"></stop></linearGradient><linearGradient id="checkin-colorful__paint1_linear" x1="12" y1="15" x2="12" y2="22" gradientUnits="userSpaceOnUse"><stop stop-color="#fff"></stop><stop offset="1" stop-color="#fff" stop-opacity="0"></stop></linearGradient></defs></svg><span class="sc-AxirZ cseIA-d">เช็คอิน</span></div></button></div>
            </div>
            <div class="row" style="margin-top:10px;border: 2px solid orange;border-radius:10px; padding:10px; width:100%">
              <div class="col-md-12">
              <h5>เมนูแนะนำ</h5>
              </div>  
                  <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                      <img src="<?php echo base_url()?>assets/upload/shop/1006/Untitled 4.011.jpeg" class="card-img-top" alt="..." >
                        <div class="card-body">
                          <p class="card-text">ขนมจีนน้ำยาปู</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                      <img src="<?php echo base_url()?>assets/upload/shop/1006/Untitled 4.012.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">ขนมจีนน้ำยาปูนิ่มทอด</p>
                        </div>
                      </div>
                    </div>    
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                      <img src="<?php echo base_url()?>assets/upload/shop/1006/Untitled 4.013.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">ข้าวคลุกกระปิ</p>
                        </div>
                      </div>
                    </div>    
             
              </div>

            <div class="row" style="margin-top:10px;border: 2px solid orange;border-radius:10px; padding:10px; width:100%">
                <div class="col-md-12">
                    <h5>สถานที่และเส้นทาง</h5>
                    <div class="row">
                    <div class="col-md-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.5847254531545!2d99.90735269409596!3d8.825823705999651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3053778222aff127%3A0xa47482eef74dec27!2z4Lir4LiZ4Lih4LiI4Li14LiZ4LiE4Lij4Li54Lie4LijIOC4guC4meC4oeC4iOC4teC4meC4meC5ieC4s-C4ouC4suC4m-C4ueC4meC4tOC5iOC4oSBCeSBTYWxhIENhZmUn!5e0!3m2!1sth!2sth!4v1621366566046!5m2!1sth!2sth" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-9">
                      <ul class="list-group">                      
                        <li class="list-group-item">
                        <a href="https://g.page/KanomjeenPoonim?share" target="_blank">
                          
                        <div class="row">
                          
                        <div class="col-md-1"><i class="fas fa-map-marker-alt"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/>
  <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/>
</svg></div>
                          <div class="col-md-8"><i class="bi bi-pin-map-fill"></i>169 ตำบล กลาย อำเภอท่าศาลา นครศรีธรรมราช 80160</div>
                          <div class="col-md-3"><button type="button" class="btn btn-primary">ดูเส้นทาง</button></div>
                        </div>
        </a>
                        </li>
                        <li class="list-group-item">
                        <a href="tel:089-099-8888">
                        <div class="row">
                        <div class="col-md-1"><i class="bi bi-telephone-fill"></i></div>
                          <div class="col-md-8">075-393-999, 089-099-8888</div>
                          <div class="col-md-3"><button type="button" class="btn btn-primary">โทร</button></div>
                        </div>
                        </a>
                        </li>
        
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
            <!--
            <div class="row" style="margin-top:10px;border: 2px solid orange;border-radius:10px; padding:10px; width:100%">
            <div class="col-md-12">
                    <h5>เมนูที่แนะนำโดยสมาชิก</h5>
                    <p id="medical"></p>    
                </div>
            </div>-->
        </div>
                      
        <div class="col-md-3 bg-light">
          <form class="w-100 me-3" >
            <input type="search" style="margin-top: 10px;margin-bottom: 10px" class="form-control" placeholder="Search...">
          </form>
          
          <div class="row" id="topFourCafe"></div>
        </div>
  </div>

</main>
 

<br/>
 
    <script src="<?php echo base_url(); ?>assets/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
      $(()=>{
        loadTopFood();
        loadFood();
        rating();
       });

      function loadTopFood(){
        var url = "http://localhost/index.php/foodapi/getall";
        $.ajax({
          type: "GET",
          url: url,
          success: function(data){
            var month = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
            var items = JSON.parse(data);
            var line = "";
            $("#lineRecommended").empty();
            $.each(items, (k, v)=>{
                  var d = new Date(v.update);
                  dline = d.getDate() + "/" + (1+d.getMonth()) + "/" + (543+d.getFullYear());
                  line +="<div class='col-md-4' style='margin-top:10px'>";
                  line +="  <div style='border:2px solid #dddddd;border-radius: 10px;'>";
                  line +="      <div class='row'>";
                  line +="          <a href=\"<?php echo site_url('food/details/"+v.link+"');?>\"><img src='"+ v.caption +"' width='100%'></a>";
                  line +="      </div>";
                  line +="      <div class='row' style='padding:5px'>";
                  line +="          <div class='col-md-8'>";
                  line +="             <h5>"+ v.title +"</h5>";
                  line +="              <span style='font-size:x-small; text-color:#dddddd'><i class='bi bi-clock'></i> อัพเดทเมื่อ "+dline+"</span>";
                  line +="          </div>";
                  line +="          <div class='col-md-4' style='text-align:center;'>";
                  line +="              <span style='font-size:x-small;'>อ่าน "+ v.read +" ครั้ง </span><br/>";
                  line +="              <span style='font-size:x-small;'>ถูกใจ "+ v.like+" ครั้ง</span>";
                  line +="          </div>";
                  line +="      </div>";
                  line +="  </div>";
                  line +="</div>";
                  
            });
            $("#lineRecommended").append(line);
            rating();
          }
        });
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
            $("#heading").text(items.heading);
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


            
          }
        });
      }

      function rating(){
        $(".my-rating").starRating({
            totalStars: 5,
            starShape: 'rounded',
            starSize: 25,
            //emptyColor: 'lightgray',
            //hoverColor: 'salmon',
            //activeColor: 'crimson',
            //useGradient: false
        });
      }
    </script>
  </body>
</html>

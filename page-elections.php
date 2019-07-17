<?php
/**
 * Template Name: Elections
 */
get_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elections</title>
    
   <style>
   html{
     scroll-behavior: smooth;
   }
   .banner{
       background-image: url('bggardient.jpg');
       background-size: cover;
   }
   .display-2.text-capitalize.text-center {
 left: -0.43749px;
 position: relative;
 top: -180px;
}

.btn.btn-warning.btn-lg.px-4.m-3.align-items-center.text-uppercase.font-weight-bold {
 position: relative;
 top: 160px;
}
#logo{
    width: 244px;
 height: 254px;
 position: relative;
 left: -23.5px;
 top: -127px;
}
#img{
    border-radius: 1000px;
}
.display-2.text-capitalize.text-center {
 position: relative;
 left: -0.43749px;
 top: -267.5px;
}

.btn.btn-warning.btn-lg.px-4.m-3.align-items-center.text-uppercase.font-weight-bold {
 position: relative;
 top: 160.5px;
}


.logo {
 position: relative;
 top: -109.5px;
}

.jumbotron.jumbotron-fluid {
 opacity: 0.82;
 font-family: "Roboto Condensed";
}

.display-4 {
 opacity: 0.2;
 background-blend-mode: normal;
}

.container:nth-child(1) > div:nth-child(1) {
 position: relative;
 top: -30.5px;
}

#mnc {
 position: relative;
 left: -0.43749px;
 top: 23px;
}

.col-md-6.col-sm-10.mb-3:nth-child(1) > p:nth-child(3) {
 position: relative;
 top: 34px;
 border: 1px solid #ccc;
 padding: 5px;
}

.col-md-6.col-sm-10.mb-3:nth-child(2) > p:nth-child(3) {
 position: relative;
 top: 28px;
 border: 1px solid #ccc;
 padding: 5px;
}

#mn {
 position: relative;
 top: 25px;
}

.btn.btn-warning.btn-lg.px-4.m-3.align-items-center.text-capitalize.font-weight-bold {
 position: relative;
 top: 34px;
}

#img {
 width: 253px;
 height: 226px;
}

.display-4.text-danger {
 position: relative;
 top: -57.5px;
 color: rgb(231, 28, 28);
 opacity: 1;

}

.lead {
 position: relative;
 top: -97.5px;
}

.btn.btn-dark.btn-md {
 position: relative;
 top: 10px;
}

   </style>
   </head>
   <body>
<!--banner start-->
<section id="home">
    <div class="container-fluid " >
    <div class="row bg-dark banner justify-content-center align-items-center " style="height: 300vh;">
    <div class="col-sm-10 text-center">
     
     <h1 class="display-2 text-capitalize text-center"><span class="text-warning ">Online</span> <span class="text-dark font-weight-bold ">Election</span></h1>
    <div class="logo">
        <img id="logo" src="pc.png" alt="pc">
        <div class="focus">
                <div class="container">
                    <div>
                  <h1 class="display-4 text-danger">"Hasta La Vista Ballets"<br><br></h1>
                  <p class="lead">छोड़ो अपने सारे काम। <br>पहले चलो करें मतदान।।</p>
                </div>
                <div class="container">
                          <button type="button" class="btn btn-dark btn-md" data-toggle="collapse" data-target="#demo">
                            <span class="glyphicon glyphicon-collapse-down"></span> Read more
                          </button>
                        <div id="demo" class="collapse text-capitalize text-grey display-5">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab pariatur in, expedita libero quasi qui mollitia temporibus itaque eaque recusandae, ratione voluptatum quas sint? Blanditiis placeat eos quia nostrum. Cum harum tempore dolore possimus illo quibusdam, aliquid eligendi minima doloribus ea, recusandae quos magnam itaque ipsam sunt voluptatem corporis? Eius?
                        </div><hr>
                    </div>
                      <div class="row text-center">
                            <div class="col-md-6 col-sm-10 mb-3 justify-content-center">
                                <img  id="img" src="campus.jpg" alt="campus">
                              <h2 id="mn" class="font-weight-bold text-black text-uppercase">campus level</h2>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptatibus tenetur quaerat rerum sit quidem porro quibusdam pariatur harum ipsam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur totam unde error deleniti explicabo mollitia sint dolor molestiae animi magni minus ut inventore excepturi nemo, modi impedit, aliquam autem velit architecto voluptatum repellat? Fugit quibusdam rem ullam in perspiciatis culpa aut itaque! Vero, recusandae. Ipsa deleniti atque asperiores libero cumque perspiciatis sunt dolore, ea deserunt dolores dolor obcaecati blanditiis minus?</p>  
                              <a href="" class="btn btn-warning btn-lg px-4 m-3 align-items-center text-capitalize font-weight-bold">Conduct Elections</a>
                            </div>
                            <div class="col-md-6 col-sm-10 mb-3 justify-content-center">
                                <img  id="img" src="mnc.jpg" alt="mnc">
                              <h2 id="mnc"class="font-weight-bold text-black text-uppercase">management level</h2>
                              <p style="line-height:1.6;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dolore sequi laborum fugit illo? Tenetur odio veritatis culpa eligendi ea, corrupti rerum exercitationem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, laudantium culpa, omnis nemo expedita reprehenderit deserunt atque voluptas, eum vitae corporis unde est a tenetur! Voluptate a officiis veniam laborum accusantium aperiam cumque omnis eaque nostrum nisi ipsa nobis, exercitationem illum ipsum et nulla perferendis optio atque perspiciatis ab iusto obcaecati repellendus. Laborum minima vitae nihil quaerat magnam, illum dicta.</p>
                              <a href="" class="btn btn-warning btn-lg px-4 m-3 align-items-center text-capitalize font-weight-bold">Conduct Elections</a>
                            
                            </div>
                            
                        </div>
                        </div>
          </div>
           
                      </div>
                      
                      <script>
                      $(document).ready(function(){
                        $("#demo").on("hide.bs.collapse", function(){
                          $(".btn").html('<span class="glyphicon glyphicon-collapse-down"></span> Open');
                        });
                        $("#demo").on("show.bs.collapse", function(){
                          $(".btn").html('<span class="glyphicon glyphicon-collapse-up"></span> Close');
                        });
                      });
                      </script>
                      
                </div>
              </div>
    </div>
    </div></div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php
get_footer();
?>
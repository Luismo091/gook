<!-- / ACA EMPIEZA GOOK -->
            <div class="col-12 col-lg-9">
              <div class="card-header">
                <strong class="card-title">Aclamados por la critica</strong>
              </div>
              <div class="row">
                <div class="container swiper">
                  <div class="slide-container">
                    <div class="card-wrapper swiper-wrapper">
                    <?php

// $sql = $conexion->query("SELECT * from Libro order by lecturas DESC");
 //while ($datos = $sql->fetch_object()) {
 ?>
   <div class="card swiper-slide">
     <div class="image-box">
       <img src="data:image/jpg;base64,<?php //echo base64_encode($datos->imagen) ?>" alt="" />
     </div>
     <div class="profile-details">
       <img src="data:image/jpg;base64,<?php //echo base64_encode($datos->imagen) ?>" alt="" />
       <div class="name-job">
         <h3 class="name"><?= $datos->titLib ?></h3>
         <h4 class="name"><?= $datos->fecPub ?></h4>
         <a class="nav-link text-muted my-2" href="fichabook.php?variable=<?= $datos->idLib ?>" class="subtitle"><span class="fe fe-arrow-right fe-16"></span></a>
       </div>
     </div>
   </div>
 <?php }
 ?>
</div>
</div>
<div class="swiper-button-next swiper-navBtn"></div>
<div class="swiper-button-prev swiper-navBtn"></div>
<div class="swiper-pagination"></div>
</div>
</div>
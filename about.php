<?php
require_once('admin/ayarlar/baglan.php');

$about=$db->prepare("SELECT * FROM about where about_id=:id");
      $about->execute(array(
        'id'=>0
      ));
      $aboutcek=$about->fetch(PDO::FETCH_ASSOC);

$ayarlar=$db->prepare("SELECT * FROM ayarlar where ayarlar_id=:id");
      $ayarlar->execute(array(
        'id'=>0
      ));
      $ayarlarcek=$ayarlar->fetch(PDO::FETCH_ASSOC);

require_once('includes/header.php');


require_once("includes/navbar.php"); ?>

<main class="main ">
            <!--about-us-->
            <section class=" mt-90 mb-10">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-xl-9 m-auto">
                            <div class="about-us">
                                <div class="about-us-image">
                                    <img src="<?php echo $aboutcek['about_img'] ?>" alt="">
                                </div>
                                <div class="description">
                                    <p><?php echo html_entity_decode($aboutcek['about_text']) ?></p>
                       
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
    </section>

            <?php require_once("includes/footer.php"); ?>
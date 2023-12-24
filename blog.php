<?php
require_once('admin/ayarlar/baglan.php');

$sorgu=$db->prepare("SELECT * FROM blog where blog_id=:id");
$sorgu->execute(array(
  'id'=>$_GET['blog_id']
));
$blogcek=$sorgu->fetch(PDO::FETCH_ASSOC);


$yorumlar=$db->prepare("SELECT * FROM yorumlar WHERE blog_id=:id and yorumlar_status='1'");
$yorumlar->execute(array(
  'id'=>$_GET['blog_id']
));


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
                                    <img src="<?php echo $ayarlarcek['ayarlar_url'] ?><?php echo $blogcek['blog_img'] ?>" alt="">
                                </div>
                                <div class="description">
                                    <h3><?php echo $blogcek['blog_title'] ?></h3>
                                    <p><?php echo html_entity_decode($blogcek['blog_icerik']) ?></p>
                       
                                </div>
                                <div class="widget-form">
                                    <div class="title">
                                        <h5>Yorum Yazın</h5>
                                    </div>
                                    <form class="widget-contact-form" action="<?php echo $ayarlarcek['ayarlar_url'] ?>admin/ayarlar/islem.php" method="POST">
                                        <p>Mail adresiniz gizli tutulur.</p>

                                        <div class="alert alert-success contact_msg" style="display: none" role="alert">
                                            Yorum başarıyla gönderildi.
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="yorumlar_icerik" cols="30" rows="5" class="form-control" placeholder="Mesajınız*" required="required"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="yorumlar_ad" class="form-control" placeholder="Adınız*" required="required">
                                                </div>
                                            </div>
                                     
                                     
                                            <div class="col-12">
                                                <button type="submit" name="yorumlarekle" class="btn-custom">
                                                    Paylaş
                                                </button>
                                            </div> 
                                        </div>
                                        <input type="hidden" name="blog_id" value="<?php echo $blogcek['blog_id'] ?>">

                                    </form>
                                </div>

                                <div class="widget mb-50 mt-3">
                                <div class="widget-comments">
                                    <div class="title">
                                        <h5>Yorumlar</h5>
                                    </div>

                                    <ul class="widget-comments-items">

                                    <?php foreach ($yorumlar as $yorumlarcek) { ?>
                                        <li class="comment-item">
                                            <img src="https://ui-avatars.com/api/?name=<?php echo $yorumlarcek["yorumlar_ad"] ?>&color=7F9CF5&background=EBF4FF&rounded=true">
                                            <div class="content">
                                                <ul class="info list-inline">
                                                    <li><?php echo $yorumlarcek["yorumlar_ad"] ?></li>
                                                    <li class="dot"></li>
                                                    <li> <?php echo $yorumlarcek["yorumlar_tarih"] ?></li>
                                                </ul>
                                                <p><?php echo $yorumlarcek["yorumlar_icerik"] ?>
                                                </p>
                                            </div>
                                        </li>
                                   
                                    <?php } ?>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    
                </div>
    </section>

            <?php require_once("includes/footer.php"); ?>
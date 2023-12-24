<?php
require_once('admin/ayarlar/baglan.php');



$ayarlar=$db->prepare("SELECT * FROM ayarlar where ayarlar_id=:id");
      $ayarlar->execute(array(
        'id'=>0
      ));
      $ayarlarcek=$ayarlar->fetch(PDO::FETCH_ASSOC);

require_once('includes/header.php');


require_once("includes/navbar.php"); ?>

        <main class="main">
            <!--contact us-->
            <section class="mt-90">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="contact">
                           
                                <form action="admin/ayarlar/islem.php" method="POST" class="widget-form">
                                    <h5>Benimle iletişime geçin.</h5>

                                    <?php if($_GET["islem"]=="basarili"){ ?> 
                                    <div class="alert alert-success contact_msg" role="alert">
                                    Mesajınız başarıyla gönderildi.
                                    </div>    
                                    <?php } ?>

                                    <div class="form-group">
                                        <input type="text" name="mesajlar_ad" class="form-control" placeholder="Adınız*" required="required">
                                    </div>
                                
                                    <div class="form-group">
                                        <input type="email" name="mesajlar_mail" class="form-control" placeholder="E-Mail Adresiniz*" required="required">
                                    </div>
                                
                                    <div class="form-group">
                                        <input type="text" name="mesajlar_konu" class="form-control" placeholder="Konu*" required="required">
                                    </div>
                                
                                    <div class="form-group">
                                        <textarea name="mesajlar_mesaj" cols="30" rows="5" class="form-control" placeholder="Mesajınız*" required="required"></textarea>
                                    </div>
                                
                                    <button type="submit" name="contact" class="btn-custom">Gönder</button>
                                </form>
                            </div> 
                        </div>
                    
                    </div>
                
                </div>
            </section>        

            <?php require_once("includes/footer.php"); ?>
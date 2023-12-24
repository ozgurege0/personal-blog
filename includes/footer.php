<div class="footer mt-5">
    <div class="container">
        <div class="row">
        <div class="d-flex flex-row bd-highlight mb-3">

            <div class="col-md-12">
              <div class="d-flex flex-column bd-highlight mb-3 mt-4" >
                <div class="footertext text-center">
                    <div class="p-2 bd-highlight"><h5>Sayfalar</h5></div>
                <a target="_blank" href="<?php echo $ayarlarcek['ayarlar_url'] ?>about.php"><div class="p-2 bd-highlight">Hakkımızda</div></a>
                <a target="_blank" href="<?php echo $ayarlarcek['ayarlar_url'] ?>contact.php"><div class="p-2 bd-highlight">İletişim</div></a>
              </div>
            </div>





   <!--newslettre-->
   <section class="newslettre">
                <div class="container-fluid">
       
                        <div class="col-md-12">
                            <div class="newslettre-width text-center">
                                <div class="newslettre-info">
                                    <h3 class="title">
                                    Mail Aboneliği</h3>
                                    <p> Tamamen ücretsiz bir şekilde mail bültenimize abone olarak bloglarımızdan anında haberdar olabilirsiniz. </p>
                                </div>
                                <form action="<?php echo $ayarlarcek['ayarlar_url'] ?>admin/ayarlar/islem.php" method="post" class="newslettre-form">
                                    <div class="form-flex">
                                        <div class="form-group">
                                            <input type="email" name="abonelik_mail" class="form-control" placeholder="E-mail adresiniz" required="required">
                                        </div>
                                        <button class="submit-btn" name="abonelikekle" type="submit">Gönder</button>
                                    </div>
                                </form>
                                <div class="social-icones">
                                    <ul class="list-inline">
                                    <?php 
      while ($accountcek=$account->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <li>
                                            <a href="<?php echo $accountcek['account_link'] ?>">
                                                <i class="<?php echo $accountcek['account_icon'] ?>"></i><?php echo $accountcek['account_platform'] ?></a>
                                        </li>
                                        <?php
      }
                ?>
                         
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </section>
        </main>


    
        <!--footer-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright">
                            <p>© 2023 Developed By <a href="https://t.me/erosdeveloper" target="_blank">Ozgur Medya</a></p>
                        </div>
                        <div class="back">
                            <a href="#" class="back-top">
                                <i class="fas fa-arrow-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--Search-form-->
        <div class="search">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 m-auto col-md-8 col-sm-11">
                        <div class="search-width  text-center">
                            <button type="button" class="close">
                                <i class="fas fa-times"></i>
                            </button>
                            <form class="search-form" action="<?php echo $ayarlarcek['ayarlar_url'] ?>sonuc" method="GET">
                                <input type="search" name="kelime" value="" placeholder="Ne arıyorsun?">
                                <button type="submit" class="search-btn">Ara</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--/-->
    </div>

    
    <!--plugins -->
    <script src="<?php echo $ayarlarcek['ayarlar_url'] ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo $ayarlarcek['ayarlar_url'] ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $ayarlarcek['ayarlar_url'] ?>assets/js/popper.min.js"></script>
    <script src="<?php echo $ayarlarcek['ayarlar_url'] ?>assets/js/swiper.min.js"></script>
    <script src="<?php echo $ayarlarcek['ayarlar_url'] ?>assets/js/masonry.min.js"></script>
    <script src="<?php echo $ayarlarcek['ayarlar_url'] ?>assets/js/theia-sticky-sidebar.min.js"></script>
    <script src="<?php echo $ayarlarcek['ayarlar_url'] ?>assets/js/ajax-contact.js"></script>
    <script src="<?php echo $ayarlarcek['ayarlar_url'] ?>assets/js/switch.js"></script>
 
    <!-- JS main  -->
    <script src="<?php echo $ayarlarcek['ayarlar_url'] ?>assets/js/main.js"></script>


</body>

</html>
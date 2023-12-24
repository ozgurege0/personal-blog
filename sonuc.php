<?php
require_once('admin/ayarlar/baglan.php');



$ayarlar=$db->prepare("SELECT * FROM ayarlar where ayarlar_id=:id");
      $ayarlar->execute(array(
        'id'=>0
      ));
      $ayarlarcek=$ayarlar->fetch(PDO::FETCH_ASSOC);

   
require_once('includes/header.php');


require_once("includes/navbar.php"); ?>
<?php
function seo($s) {
    $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',','?');
    $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','');
    $s = str_replace($tr,$eng,$s);
    $s = strtolower($s);
    $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
    $s = preg_replace('/\s+/', '-', $s);
    $s = preg_replace('|-+|', '-', $s);
    $s = preg_replace('/#/', '', $s);
    $s = str_replace('.', '', $s);
    $s = trim($s, '-');
    return $s;
   }
?>
        <main class="main">
            <!--grid-layout-->
            <section class="mt-90">
                <div class="container-fluid">
                <h2 class="text-center mt-3 mb-5" >Aramanıza Dair Sonuçlar</h2>

                    <div class="row">

                    <?php 
                    if($_GET){
                        $kelime = $_GET['kelime'];
                        if(!$kelime){
                            echo "Arama yapabilmek için bir kelime yazmanız gereklidir.";
                        }else{
                            $blog=$db->prepare("SELECT * FROM blog WHERE blog_title LIKE :blog_title");
                            $blog->execute(array(':blog_title' => '%'.$kelime.'%'));
                    foreach ($blog as $blogcek) { 
                        $kategoriler=$db->prepare("SELECT * FROM kategoriler where kategoriler_id=:id");
                        $kategoriler->execute(array(
                          'id'=>$blogcek["kategoriler_id"]
                        ));
                        $kategoricek=$kategoriler->fetch(PDO::FETCH_ASSOC);
                        ?>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <!--Post-1-->
                            <div class="post-card">
                                <div class="post-card-image">
                                    <a href="<?php echo $ayarlarcek['ayarlar_url'] ?><?=seo($blogcek["blog_title"]).'/'.$blogcek["blog_id"]?>">
                                        <img src="<?php echo $ayarlarcek['ayarlar_url'] ?><?php echo $blogcek["blog_img"] ?>" alt="">
                                    </a>
                                </div>
                                <div class="post-card-content">
                                    <div class="entry-cat">
                                        <a class="categorie"> <?php echo $kategoricek["kategoriler_ad"] ?></a>
                                    </div>

                                    <h5 class="entry-title">
                                        <a href="<?php echo $ayarlarcek['ayarlar_url'] ?><?=seo($blogcek["blog_title"]).'/'.$blogcek["blog_id"]?>"><?php echo $blogcek["blog_title"] ?></a>
                                    </h5>

                                    <div class="post-exerpt">
                                        <p><?php echo html_entity_decode($blogcek["blog_description"]); ?> </p>
                                    </div>

                                </div>
                            </div>
                            <!--/-->
                        </div>
                   <?php } } }?>


                        <!--pagination-->
                        <div class="col-lg-12">
                            <div class="pagination">
                                <ul class="list-inline">
                                <?php 

if($sayfa < 2){
  echo "";
}else{ ?>
 <li><a href="<?php echo $ayarlarcek["ayarlar_url"] ?>?sayfa=<?php echo $sayfa - 1 ?>"><i class="fas fa-arrow-left"></i></a> </li>
<?php 
}
?>

      <?php
for($i = $sayfa - $forlimit; $i<$sayfa + $forlimit +1; $i++){
  if($i>0 && $i<= $sayfa_sayisi){
      if($i == $sayfa){ ?>
      <li class="active"><a><?php echo $i; ?></a></li>
      <?php
      }else{ ?>
        <li><a href="<?php echo $ayarlarcek["ayarlar_url"] ?>?sayfa=<?php echo $i ?>"><?php echo $i ?></a></li>
        <?php
      }
  }
}

?>


  <?php 

if($sayfa != $sayfa_sayisi){ ?>
    <li><a href="<?php echo $ayarlarcek["ayarlar_url"] ?>?sayfa=<?php echo $sayfa + 1 ?>"><i class="fas fa-arrow-right"></i></a> </li>

<li class='page-item'>
  <a class='page-link' href='?sayfa=".($sayfa +1)."'>Sonraki</a>
</li>
<?php
}

?>
                                
                                </ul>
                            </div> 
                        </div>
                    </div>
                </div>
            </section>
            <!--/-->

         <?php require_once("includes/footer.php"); ?>
<?php
require_once("includes/session.php");
?>
<?php
require_once('ayarlar/baglan.php');
$sorgu=$db->prepare("SELECT * FROM blog where blog_id=:id");
$sorgu->execute(array(
  'id'=>$_GET['blog_id']
));
$vericek=$sorgu->fetch(PDO::FETCH_ASSOC);

$kategoriler=$db->prepare("SELECT * FROM kategoriler");
  $kategoriler->execute();
  

require_once('includes/header.php');
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
require_once('includes/sidebar.php');
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                require_once('includes/navbar.php');
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Blog Düzenle</h1>

                    <form action="ayarlar/islem.php" enctype="multipart/form-data" method="post">

                    <div class="row">
                    <div class="col-md-12">
                    <label>Blogunuzun Başlığı:</label>
                    <input type="text" class="form-control rounded" value="<?php echo $vericek["blog_title"] ?>" name="blog_title">
                    </div>
                    </div>

                    <div class="row mt-5">
                  <div class="col-md-12">
                  <p><label>Blog Açıklaması:</label></p>
                  <textarea id="summernote1" class="form-control" name="blog_description"><?php echo $vericek["blog_description"] ?></textarea>
    <script>
      $('#summernote1').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });
    </script>

 </div>
 </div>

<div class="row mt-3">
<div class="col-md-12">
<p><label>Mevcut Resim: <img src="../<?php echo $vericek["blog_img"] ?>" alt="" class="img-fluid rounded" width="250px"></label></p>
<input type="file" name="blog_img">
</div>
</div>

<div class="row mt-5">
                  <div class="col-md-12">
                  <p><label>Blog İçeriğiniz:</label></p>
                  <textarea id="summernote" class="form-control" name="blog_icerik"><?php echo $vericek["blog_icerik"] ?></textarea>
    <script>
      $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });
    </script>

 </div>
 </div>


<div class="row mt-3">
<label>Blogunuzun Kategorisi:</label>
<div class="col-md-12">
 <div class="form-group">
 
                <select name="kategoriler_id" class="form-control">

                  <?php 
                   while ($kategorilercek=$kategoriler->fetch(PDO::FETCH_ASSOC)) {

                  if($vericek["kategoriler_id"]==$kategorilercek["kategoriler_id"]){
                    echo '<option selected value="'.  $kategorilercek['kategoriler_id'] .'">'. $kategorilercek['kategoriler_ad'] .'</option>';
                  }else{
                    echo '<option value="'.  $kategorilercek['kategoriler_id'] .'">'. $kategorilercek['kategoriler_ad'] .'</option>';
                  }
                 
                 
                  
                  ?>
<?php
                   }
?>
                </select>
              </div>
              </div>
              </div>

 <div class="row mt-3">
 <div class="col-md-12">

 <label>Yayın Durumu:</label>   
 <div class="form-group">
                <select name="blog_status" class="form-control">
                  <?php 
                  if($vericek["blog_status"]==1){
                    echo '<option value="1">Aktif</option value="0"><option>Pasif</option>';
                  }
                  elseif($vericek["blog_status"]==0){
                    echo '<option value="0">Pasif</option><option value="1">Aktif</option>';
                  }
                  
                  ?>
                </select>
              </div>

 </div>
 </div>

<div class="row mt-3">
<div class="col-md-12">
<label>Seo Dostu Blog Açıklaması:</label>   
<div class="form-floating">
  <textarea class="form-control" name="blog_seodescription" id="floatingTextarea2" style="height: 100px"><?php echo $vericek["blog_seodescription"] ?></textarea>
</div>
</div>
</div>

<div class="row mt-3">
<div class="col-md-12">
<label>Seo Dostu Anahtar Kelimeler:</label>   
<div class="form-floating">
  <textarea class="form-control"  name="blog_seokeywords" id="floatingTextarea2" style="height: 100px"><?php echo $vericek["blog_seokeywords"] ?></textarea>
</div>
</div>
</div>

<div class="row mt-3">
<div class="col-md-12">
<label>Blog'un Yazarı:</label>   
<input class="form-control rounded" value="<?php echo $vericek["blog_seoauthor"] ?>" name="blog_seoauthor">
</div>
</div>


<button name="blogduzenle" class="btn btn-success mt-5">Düzenle</button>
               
            <input type="hidden" name="blog_id" value="<?php echo $vericek['blog_id'] ?>">
              <input type="hidden" name="blog_img" value="<?php echo $vericek['blog_img'] ?>">
                    </form>

                
                    <div class="d-flex flex-row-reverse">
  <a href="blog.php"><div class="p-1"><button class="btn btn-danger">GERİ</button></div></a>
</div>
               
              
                  
                    <?php 
            
            if(@$_GET["islem"]=="basarili"){
                echo '<div class="alert alert-success solid alert-dismissible fade show mt-5">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                <strong>Başarılı!</strong> Tebrikler, veri Güncellendi.
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
            </div>';
            }elseif(@$_GET["islem"]=="basarisiz"){
                echo ' <div class="alert alert-danger solid alert-dismissible fade show mt-5">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                <strong>Başarısz!</strong> İşlem başarısız oldu. Lütfen tekrar deneyiniz.
                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
            </div>';
            }
            
            ?>
           
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

                 <!-- Footer -->
                 <?php
require_once('includes/footer.php');
         ?>
            <!-- Footer Bitiş --> 
            <script>
    $('#summernote').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>

<script>
    $('#summernote1').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>
</body>

</html>

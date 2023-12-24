<?php
require_once('admin/ayarlar/baglan.php');

$account=$db->prepare("SELECT * FROM account");
$account->execute();
$account2=$db->prepare("SELECT * FROM account");
$account2->execute();
$sorgu=$db->prepare("SELECT * FROM seoayar where seoayar_id=:id");
      $sorgu->execute(array(
        'id'=>0
      ));
      $seoayarcek=$sorgu->fetch(PDO::FETCH_ASSOC);

      $ayarlar=$db->prepare("SELECT * FROM ayarlar where ayarlar_id=:id");
      $ayarlar->execute(array(
        'id'=>0
      ));
      $ayarlarcek=$ayarlar->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
    <link rel="icon" sizes="16x16" href="<?php echo $ayarlarcek['ayarlar_url'] ?><?php echo $ayarlarcek['ayarlar_favicon'] ?>">

  
      <?php if(basename($_SERVER['PHP_SELF'])=="blog.php"){ ?> 
        <meta name="description" content="<?php echo $blogcek['blog_seodescription'] ?>">
    <meta name="keywords" content="<?php echo $blogcek['blog_seokeywords'] ?>">
    <meta name="author" content="<?php echo $blogcek['blog_seoauthor'] ?>">  
    <title><?php echo $blogcek['blog_title'] ?></title>

      <?php }else{ ?> 
        <meta name="description" content="<?php echo $seoayarcek['seoayar_description'] ?>">
    <meta name="keywords" content="<?php echo $seoayarcek['seoayar_keywords'] ?>">
    <meta name="author" content="<?php echo $seoayarcek['seoayar_author'] ?>">
    <title><?php echo $seoayarcek['seoayar_title'] ?></title>
      <?php } ?>


     <!--Stylesheets -->
     <link rel="stylesheet" type="text/css" href="<?php echo $ayarlarcek['ayarlar_url'] ?>assets/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="<?php echo $ayarlarcek['ayarlar_url'] ?>assets/css/all.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" type="text/css" href="<?php echo $ayarlarcek['ayarlar_url'] ?>assets/css/swiper.min.css">
 
     <!-- main style -->
     <link rel="stylesheet" type="text/css" href="<?php echo $ayarlarcek['ayarlar_url'] ?>assets/css/style.css">
     <link rel="stylesheet" type="text/css" href="<?php echo $ayarlarcek['ayarlar_url'] ?>assets/css/custom.css">
 </head>
 
 <body>

    <!-- wrapper -->
    <div id="wrapper" class="wrapper">
        <!--loading -->
        <div class="loading">
            <div class="circle"></div>
        </div>
        <!--/-->
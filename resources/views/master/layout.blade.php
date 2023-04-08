<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>gestion_stagiaire</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
     
     
    
      <!-- Favicons -->
      <link href="/storage/asset/img/genie.jpeg" rel="icon">
      <link href="/storage/asset/img/genie.jpeg" rel="apple-touch-icon">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
      <!-- Vendor CSS Files -->
      <link href="/storage/asset/vendor/animate.css/animate.min.css" rel="stylesheet">
      <link href="/storage/asset/vendor/aos/aos.css" rel="stylesheet">
      <link href="/storage/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="/storage/asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="/storage/asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="/storage/asset/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="/storage/asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    
      <!-- Template Main CSS File -->
      <link href="/storage/asset/css/style.css" rel="stylesheet">

</head>
<body>
    @include('master.navbar')
    <div>
       @yield('content')  
    </div>
   
    @include('master.footer')



    



    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    <!-- Vendor JS Files -->
    <script src="/storage/asset/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/storage/asset/vendor/aos/aos.js"></script>
    <script src="/storage/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/storage/asset/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/storage/asset/vendor/php-email-form/validate.js"></script>
  
    <!-- Template Main JS File -->
    <script src="/storage/asset/js/main.js"></script>
</body>
</html>
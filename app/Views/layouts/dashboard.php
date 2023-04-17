<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduSystem - Dashboard</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url() ?>assets/img/brand/favicon.ico" type="image/x-icon"/>

    <!-- Title -->
    <title>Spruha - Bootstrap Premium HTML Dashboard Template</title>

    <!-- Bootstrap css-->
    <link  id="style" href="<?= base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Icons css-->
    <link href="<?= base_url() ?>assets/plugins/web-fonts/icons.css" rel="stylesheet"/>
    <link href="<?= base_url() ?>assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/plugins/web-fonts/plugin.css" rel="stylesheet"/>

    <!-- Style css-->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/boxed.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/dark-boxed.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/skins.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/dark-style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/colors/default.css" rel="stylesheet">

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= base_url() ?>assets/css/colors/color.css">

    <!-- Select2 css -->
    <link href="<?= base_url() ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet">

</head>
<body class="horizontalmenu">
    <div id="global-loader">
        <img src="<?= base_url() ?>assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>

    <?= $this->renderSection('content') ?>

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

    <!-- Jquery js-->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Perfect-scrollbar js -->
    <script src="<?= base_url() ?>assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!-- Sidebar js -->
    <script src="<?= base_url() ?>assets/plugins/sidebar/sidebar.js"></script>

    <!-- Select2 js-->
    <script src="<?= base_url() ?>assets/plugins/select2/js/select2.min.js"></script>
    <script src="<?= base_url() ?>assets/js/select2.js"></script>

    <!-- Sticky js -->
    <script src="<?= base_url() ?>assets/js/sticky.js"></script>

    <!-- Custom js -->
    <script src="<?= base_url() ?>assets/js/custom.js"></script>
</body>
</html>
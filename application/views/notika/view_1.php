<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Start Head -->
    <?php $this->load->view("notika/_partials/head.php") ?>
    <!-- End Head -->
</head>

<body>
    <!-- Start Header Top Area -->
    <?php $this->load->view("notika/_partials/header_top.php") ?>
    <!-- End Header Top Area -->

    <!-- Menu Mobile start -->
    <?php $this->load->view("notika/_partials/menu_mobile.php") ?>
    <!-- Menu Mobile end -->

    <!-- Menu Main area start-->
    <?php $this->load->view("notika/_partials/menu_main.php") ?>
    <!-- Menu Main area End-->

    <!-- Start Konten -->
    <?php echo $contents; ?>
    <!-- End Konten -->

    <!-- Start Footer area-->
    <?php $this->load->view("notika/_partials/footer.php") ?>
    <!-- End Footer area-->

    <!-- Start Java Script -->
    <?php $this->load->view("notika/_partials/java_script.php") ?>
    <!-- End Java Script -->

</body>

</html>
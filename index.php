<?php 

session_start();
    include_once ("admin/class/adminback.php");
    $obj = new adminback();

    $cata_info = $obj-> p_display_catagory();
    $cataDatas = array();
    while($data = mysqli_fetch_assoc($cata_info)){
        $cataDatas[]=$data;
    }

  







?>




<?php
include_once("includes/head.php");
?>

<body class="biolife-body">
    <!-- Preloader -->

    <?php
    // include_once("includes/preloader.php");
    ?>

    <!-- HEADER -->
    <header id="header" class="header-area style-01 layout-03">

        <?php
        include_once("includes/header_top.php");
        ?>

        <?php
        include_once("includes/header_middle.php");
        ?>

        <?php
        include_once("includes/header_bottom.php");
        ?>

    </header>

    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <!--Block 01: Main Slide-->

            <?php
            include_once("includes/slider_main.php")
            ?>

            <!-- Top Categories -->
            <section id="top-categories" class="mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h2 class="text-uppercase text-center">Our Top Categories</h2>
                            <p class="text-center">Let's explore our Top Categories and shop for your needed products in
                                these categories.</p>
                        </div>
                    </div>
                    <div class="row">

                        <?php 
            foreach($cataDatas as $cataData){
        ?>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card fixed-size-card">
                                <div class="card-content">
                                    <div class="media d-flex">
                                        <div class="align-self-center"></div>
                                        <div class="media-body">
                                            <a
                                                href="catagory.php?status=catView&&id=<?php echo $cataData['ctg_id']; ?>">
                                                <h3><?php echo $cataData['ctg_name']; ?></h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php } ?>

                    </div>
                </div>
            </section>
            <!-- Top Categories -->











            <!--Block 02: Banners-->

            <?php
            include_once("includes/banner_slider.php")
            ?>

            <!--Block 03: Product Tabs-->
            <?php
            include_once("includes/home_related_product.php")
            ?>


            <!--Block 06: Products-->
            <div class="Product-box sm-margin-top-96px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-6">

                            <?php
                            include_once("includes/deals_ofthe_day.php");
                            ?>

                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-6">


                            <?php
                            include_once("includes/top_rated_product.php")

                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!--Block 07: Brands-->
            <?php
            include_once("includes/brands.php");
            ?>

            <?php
            include_once("includes/faq.php");
            ?>


        </div>
    </div>

    <!-- FOOTER -->

    <?php
    include_once("includes/footer.php");
    ?>

    <!--Footer For Mobile-->
    <?php
    include_once("includes/mobile_footer.php");
    ?>

    <?php
    include_once("includes/mobile_global.php")
    ?>


    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    <?php
    include_once("includes/script.php")
    ?>
</body>

</html>
<?php

session_start();
include_once("admin/class/adminback.php");
$obj = new adminback();

$cata_info = $obj->p_display_catagory();
$cataDatas = array();
while ($data = mysqli_fetch_assoc($cata_info)) {
    $cataDatas[] = $data;
}




$pdt_info = $obj->view_all_product();

$pdt_datas = array();
        
while($pdt_ftecth = mysqli_fetch_assoc($pdt_info)){
            $pdt_datas[] = $pdt_ftecth;
}




?>


<?php
include_once("includes/head.php");
?>

<body class="biolife-body">
    <!-- Preloader -->

    <?php
    include_once("includes/preloader.php");
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

            <!--Hero Section-->



            <!--Navigation section-->



            <!-- Product -->
            <div class="container">

                <div class="product-category grid-style">

                    <div class="row">
                        <ul class="products-list">

                            <?php
                            foreach ($pdt_datas as $pdt_data) {
                            ?>

                            <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="contain-product layout-default border mt-4 mb-3">
                                    <div class="product-thumb">
                                        <a href="single_product.php?status=singleproduct&&id=<?php echo $pdt_data['pdt_id'] ?>"
                                            class="link-to-product">
                                            <img src="admin/uploads/<?php echo $pdt_data['pdt_img'] ?>" alt="dd"
                                                width="270" height="270" class="product-thumnail">
                                        </a>
                                        <a class="lookup btn_call_quickview"
                                            href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_one['pdt_id'] ?>"><div class="eye-icon">&#128065;</div></a>
                                    </div>
                                    <div class="info">
                                        <b class="categories"> <?php echo $pdt_data['ctg_name'] ?> </b>

                                        <h4 class="product-title"><a
                                                href="single_product.php?status=singleproduct&&id=<?php echo $pdt_data['pdt_id'] ?>"
                                                class="pr-name"><?php echo $pdt_data['pdt_name'] ?></a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">$
                                                    </span><?php echo $pdt_data['pdt_price'] ?></span></ins>

                                        </div>
                                        <div class="shipping-info">
                                            <p class="shipping-day">3-Day Shipping</p>
                                            <p class="for-today">Free Pickup Today</p>
                                        </div>
                                        <div class="slide-down-box">
                                            <p class="message">All products are carefully selected to ensure food
                                                safety.</p>

                                        </div>
                                    </div>
                                </div>
                            </li>

                            <?php } ?>


                        </ul>
                    </div>

                    <!-- Pagination block -->

                    <div class="biolife-panigations-block">
                        <ul class="panigation-contain">
                            <li><span class="current-page">1</span></li>
                            <li><a href="#" class="link-page">2</a></li>
                            <li><a href="#" class="link-page">3</a></li>
                            <li><span class="sep">....</span></li>
                            <li><a href="#" class="link-page">20</a></li>
                            <li><a href="#" class="link-page next"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>

                </div>

                <div class="biolife-service type01 biolife-service__type01 sm-margin-top-4 xs-margin-top-45px">
                    <b class="txt-show-01">100% Quality</b>
                    <i class="txt-show-02">100% Quality Products</i>
                    <ul class="services-list mt-4">
                        <li>
                            <div class="service-inner color-reverse">
                                <span class="number">1</span>
                                <span class="biolife-icon icon-beer"></span>
                                <a class="srv-name" href="#">Full Stamped Products</a>
                            </div>
                        </li>
                        <li>
                            <div class="service-inner color-reverse">
                                <span class="number">2</span>
                                <span class="biolife-icon icon-schedule"></span>
                                <a class="srv-name" href="#">Place and Delivery on time</a>
                            </div>
                        </li>
                        <li>
                            <div class="service-inner color-reverse">
                                <span class="number">3</span>
                                <span class="biolife-icon icon-car"></span>
                                <a class="srv-name" href="#">Free shipping in the city</a>
                            </div>
                        </li>
                    </ul>
                </div>





            </div>
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
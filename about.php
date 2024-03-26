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

            <div class="hero-section hero-background">
                <h1 class="page-title">
                    About Us
                </h1>
            </div>

            <section class="company-section">
                <h2>Who We Are</h2>
                <p>
                    MRK Associates Inc. is a leading E-commerce company based in Canada, dedicated to providing a
                    diverse range of high-quality products across multiple categories. Established with a commitment to
                    excellence, MRK Associates Inc. places customer satisfaction and product quality as its top
                    priorities. MRK Associates Inc. is driven by a passion for excellence, and we look forward to being
                    your go-to destination for all your online shopping needs.
                </p>
                <h2 class="mt-3">Our Physical Presence</h2>




                <div class="mission-vision-goals">

                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="admin/uploads/about1.png" class="w-100 shadow-1-strong rounded mb-4"
                            alt="Boat on Calm Water" />


                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="admin/uploads/about2.png" class="w-100 shadow-1-strong rounded mb-4"
                            alt="Waves at Sea" />


                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="admin/uploads/about3.png" class="w-100 shadow-1-strong rounded mb-4"
                            alt="Waves at Sea" />


                    </div>
                </div>
                <div class="location-section">
                    <div class="icon-text-container">
                        <span class="location-icon">&#128205;</span>
                        <!-- Unicode for location icon, adjust as needed -->
                        <p>51 Cityside Green NE
                            Calgary
                            T3N 1H9
                            AB
                            CA</p> <!-- Add your actual address here -->
                    </div>
                </div>
                <!-- Gallery -->

                <div class="mvgo-box">
                    <h2>Our Mission <span class="mission-icon"></span></h2>
                    <p>
                        At MRK Associates Inc., our mission is to enrich the lives of our customers by delivering a
                        seamless online shopping experience. We strive to offer a comprehensive selection of premium
                        products, ensuring that our customers find everything they need in one convenient place.
                    </p>
                </div>

                <div class="mvgo-box">
                    <h2>Our Vision <span class="vision-icon"></span></h2>
                    <p>
                        Our vision at MRK Associates Inc. is to be the preferred destination for online shoppers,
                        recognized for our commitment to quality, reliability, and innovation. We aspire to create a
                        digital marketplace that not only meets the diverse needs of our customers but also fosters a
                        sense of trust and loyalty.
                    </p>
                </div>

                <div class="mvgo-box">
                    <h2>Our Goals <span class="goals-icon"></span></h2>
                    <p>
                        At MRK Associates Inc., our primary goals revolve around ensuring unparalleled customer
                        satisfaction, maintaining a catalog of high-quality products, embracing innovation, engaging
                        with communities, and promoting sustainability. We are committed to delivering exceptional
                        service, curating top-notch products, and providing customer satisfaction.
                    </p>
                </div>
        </div>



        </section>




    </div>

    <div class="biolife-service type01 biolife-service__type01 sm-margin-top-4 xs-margin-top-45px container mb-5">
        <b class="txt-show-01">Our Quality</b>
        <i class="txt-show-02">Customers Satisfaction Is Our Priority</i>
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
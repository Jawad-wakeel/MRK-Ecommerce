<?php
$pdt_info = $obj->display_product_byCata(1);
$pdt_datas = array();
while ($pdt_ftecth = mysqli_fetch_assoc($pdt_info)) {
    $pdt_datas[] = $pdt_ftecth;
}
?>

<div class="col-12 mt-3 mb-1">
    <h2 class="text-uppercase text-center">Our Special Items</h2>
    
</div>
<div class="special-slide ">
    <div class="container">
        <ul class="biolife-carousel dots_ring_style border round"
            data-slick='{"arrows": true, "dots": true, "slidesMargin": 30, "slidesToShow": 1, "infinite": true, "speed": 600, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 1}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":20, "dots": false}},{"breakpoint":480, "settings":{ "slidesToShow": 1}}]}'>

            <?php
            foreach ($pdt_datas as $pdt_data) {
            ?>


            <li>

                <div class="slide-contain biolife-banner__special">
                    <div class="banner-contain mb-3">
                        <div class="media">
                            <a href="single_product.php?status=singleproduct&&id=<?php echo $pdt_data['pdt_id'] ?>"
                                class="bn-link">
                                <figure><img src="admin/uploads/<?php echo $pdt_data['pdt_img'] ?>" width="616"
                                        height="483" alt=""></figure>
                            </a>
                        </div>
                        <a href="single_product.php?status=singleproduct&&id=<?php echo $pdt_data['pdt_id'] ?>">
                            <div class="text-content">
                                <b class="first-line">Special Items</b>
                                <span class="second-line"><?php echo $pdt_data['pdt_name'] ?></span>

                                <div class="product-detail ">

                                    <div class="price price-contain">
                                        <ins><span class="price-amount"><span class="currencySymbol">$
                                                </span><?php echo $pdt_data['pdt_price'] ?></span>
                                            </ins>
                                            


                                    </div>



                                </div>


                            </div>

                        </a>
                    </div>
                </div>


            </li>
            <?php } ?>


        </ul>
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
<?php 
  $five_catagory_result = $obj->display_five_catagory();

  $five_catagories = array();

  while($cata = mysqli_fetch_assoc($five_catagory_result)){
      $five_catagories[]=$cata;
  }

  $array_collum = array_column($five_catagories, "ctg_name");

  $eight_pdt_form_ctg_one = $obj->display_five_products(1);
  $eight_pdt_form_ctg_two = $obj->display_five_products(2);
  $eight_pdt_form_ctg_three = $obj->display_five_products(3);
  $eight_pdt_form_ctg_four = $obj->display_five_products(4);
  $eight_pdt_form_ctg_five = $obj->display_five_products(5);  
?>



<div class="product-tab z-index-20 sm-margin-top-193px xs-margin-top-30px">
    <div class="container">
        <div class="biolife-title-box">
            <span class="subtitle">All the best item for You</span>
            <h3 class="main-title">Related Products</h3>
        </div>
        <div class="biolife-tab biolife-tab-contain sm-margin-top-34px ">
            <div class="tab-head tab-head__icon-top-layout icon-top-layout">
                <ul class="tabs md-margin-bottom-35-im xs-margin-bottom-40-im">
                    <li class="tab-element active">
                        <a href="#tab01_1st" class="tab-link"><span
                                class="biolife-icon icon-like"></span><p style="font-size:20px"><?php echo $array_collum['0']; ?></p></a>
                    </li>
                    <li class="tab-element">
                        <a href="#tab01_2nd" class="tab-link"><span
                                class="biolife-icon icon-clock"></span><p style="font-size:20px"><?php echo $array_collum['1']; ?></p></a>
                    </li>
                    <li class="tab-element">
                        <a href="#tab01_3rd" class="tab-link"><span
                                class="biolife-icon icon-healthy-about"></span><p style="font-size:20px"><?php echo $array_collum['2']; ?></p></a>
                    </li>
                    <li class="tab-element">
                        <a href="#tab01_4th" class="tab-link"><span
                                class="biolife-icon icon-fresh-juice"></span><p style="font-size:20px"><?php echo $array_collum['3']; ?></p></a>
                    </li>
                    <li class="tab-element">
                        <a href="#tab01_5th" class="tab-link"><span
                                class="biolife-icon icon-head-phone"></span><p style="font-size:20px"><?php echo $array_collum['4']; ?></p></a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">

                <div id="tab01_1st" class="tab-contain active">
                    <div class="row">
                        <?php while ($eight_pdt_ctg_one = mysqli_fetch_assoc($eight_pdt_form_ctg_one)) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-item tab01_1st-item">
                                <div class="contain-product layout-default border mb-3">
                                    <div class="product-thumb">
                                        <a href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_one['pdt_id'] ?>"
                                            class="link-to-product">
                                            <img src="admin/uploads/<?php echo $eight_pdt_ctg_one['pdt_img'] ?>"
                                                alt="Vegetables" class="img-fluid product-thumnail">
                                        </a>
                                        <a class="lookup btn_call_quickview"
                                            href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_one['pdt_id'] ?>"><div class="eye-icon">&#128065;</div></a>
                                                
                                    </div>
                                    <div class="info">
                                        <b class="categories"><?php echo $eight_pdt_ctg_one['ctg_name'] ?></b>
                                        <h4 class="product-title"><a
                                                href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_one['pdt_id'] ?>"
                                                class="pr-name"><?php echo $eight_pdt_ctg_one['pdt_name'] ?></a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">$
                                                    </span><?php echo $eight_pdt_ctg_one['pdt_price'] ?></span></ins>
                                        </div>
                                        <div class="slide-down-box">
                                            <p class="message">All products are carefully selected to ensure 
                                               customer satisfaction.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>


                <div id="tab01_2nd" class="tab-contain">
                    <div class="row">
                        <?php while ($eight_pdt_ctg_two = mysqli_fetch_assoc($eight_pdt_form_ctg_two)) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-item tab01_2nd-item">
                                <div class="contain-product layout-default border mb-3">
                                    <div class="product-thumb">
                                        <a href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_two['pdt_id'] ?>"
                                            class="link-to-product">
                                            <img src="admin/uploads/<?php echo $eight_pdt_ctg_two['pdt_img'] ?>"
                                                alt="Vegetables" class="img-fluid product-thumnail">
                                        </a>
                                        
                                        <a class="lookup btn_call_quickview"
                                            href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_one['pdt_id'] ?>"><div class="eye-icon">&#128065;</div></a>
                                    </div>
                                    <div class="info">
                                        <b class="categories"><?php echo $eight_pdt_ctg_two['ctg_name'] ?></b>
                                        <h4 class="product-title"><a
                                                href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_two['pdt_id'] ?>"
                                                class="pr-name"><?php echo $eight_pdt_ctg_two['pdt_name'] ?></a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">$
                                                    </span><?php echo $eight_pdt_ctg_two['pdt_price'] ?></span></ins>
                                        </div>
                                        <div class="slide-down-box">
                                            <p class="message">All products are carefully selected to ensure 
                                               customer satisfaction.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>


                <!-- Tab 3 -->
                <div id="tab01_3rd" class="tab-contain">
                    <div class="row">
                        <?php while ($eight_pdt_ctg_three = mysqli_fetch_assoc($eight_pdt_form_ctg_three)) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-item tab01_3rd-item">
                                <div class="contain-product layout-default border mb-3">
                                    <div class="product-thumb">
                                        <a href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_three['pdt_id'] ?>"
                                            class="link-to-product">
                                            <img src="admin/uploads/<?php echo $eight_pdt_ctg_three['pdt_img'] ?>"
                                                alt="Vegetables" class="img-fluid product-thumnail">
                                        </a>
                                        <a class="lookup btn_call_quickview"
                                            href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_one['pdt_id'] ?>"><div class="eye-icon">&#128065;</div></a>
                                    </div>
                                    <div class="info">
                                        <b class="categories"><?php echo $eight_pdt_ctg_three['ctg_name'] ?></b>
                                        <h4 class="product-title"><a
                                                href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_three['pdt_id'] ?>"
                                                class="pr-name"><?php echo $eight_pdt_ctg_three['pdt_name'] ?></a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">$
                                                    </span><?php echo $eight_pdt_ctg_three['pdt_price'] ?></span></ins>
                                        </div>
                                        <div class="slide-down-box">
                                            <p class="message">All products are carefully selected to ensure 
                                               customer satisfaction.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>


                <div id="tab01_4th" class="tab-contain">
                    <div class="row">
                        <?php while ($eight_pdt_ctg_four = mysqli_fetch_assoc($eight_pdt_form_ctg_four)) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-item tab01_4th-item">
                                <div class="contain-product layout-default border mb-3">
                                    <div class="product-thumb">
                                        <a href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_four['pdt_id'] ?>"
                                            class="link-to-product">
                                            <img src="admin/uploads/<?php echo $eight_pdt_ctg_four['pdt_img'] ?>"
                                                alt="Vegetables" class="img-fluid product-thumnail">
                                        </a>
                                        <a class="lookup btn_call_quickview"
                                            href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_one['pdt_id'] ?>"><div class="eye-icon">&#128065;</div></a>
                                    </div>
                                    <div class="info">
                                        <b class="categories"><?php echo $eight_pdt_ctg_four['ctg_name'] ?></b>
                                        <h4 class="product-title"><a
                                                href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_four['pdt_id'] ?>"
                                                class="pr-name"><?php echo $eight_pdt_ctg_four['pdt_name'] ?></a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">$
                                                    </span><?php echo $eight_pdt_ctg_four['pdt_price'] ?></span></ins>
                                        </div>
                                        <div class="slide-down-box">
                                            <p class="message">All products are carefully selected to ensure 
                                               customer satisfaction.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <div id="tab01_5th" class="tab-contain active">
                    <div class="row">
                        <?php while ($eight_pdt_ctg_five = mysqli_fetch_assoc($eight_pdt_form_ctg_five)) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-item tab01_5th-item">
                                <div class="contain-product layout-default border mb-3">
                                    <div class="product-thumb">
                                        <a href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_five['pdt_id'] ?>"
                                            class="link-to-product">
                                            <img src="admin/uploads/<?php echo $eight_pdt_ctg_five['pdt_img'] ?>"
                                                alt="Vegetables" class="img-fluid product-thumnail">
                                        </a>
                                        <a class="lookup btn_call_quickview"
                                            href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_one['pdt_id'] ?>"><div class="eye-icon">&#128065;</div></a>
                                    </div>
                                    <div class="info">
                                        <b class="categories"><?php echo $eight_pdt_ctg_five['ctg_name'] ?></b>
                                        <h4 class="product-title"><a
                                                href="single_product.php?status=singleproduct&&id=<?php echo $eight_pdt_ctg_five['pdt_id'] ?>"
                                                class="pr-name"><?php echo $eight_pdt_ctg_five['pdt_name'] ?></a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">$
                                                    </span><?php echo $eight_pdt_ctg_five['pdt_price'] ?></span></ins>
                                        </div>
                                        <div class="slide-down-box">
                                            <p class="message">All products are carefully selected to ensure 
                                               customer satisfaction.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
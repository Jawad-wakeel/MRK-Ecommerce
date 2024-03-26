<style>
.product-countdown {
            font-size: 14px;
            text-align: center;
            margin-top: 10px;
            color: white;
            background-color: salmon;
            padding: 5px;
            border-radius: 5px;
        }

        .product-countdown span {
            margin: 0 5px;
            font-weight: bold;
        }
</style>


<div class="advance-product-box">
    <div class="biolife-title-box bold-style biolife-title-box__bold-style">
        <h3 class="title">Deals of the day</h3>
    </div>
    <ul class="products biolife-carousel nav-top-right nav-none-on-mobile"
        data-slick='{"arrows":true, "dots":false, "infinite":false, "speed":400, "slidesMargin":30, "slidesToShow":1}'>
        <?php
            foreach ($pdt_datas as $pdt_data) {
                // Manually calculating discounted percentage
                $discounted_percentage = 50; // Change this based on your logic

                // Placeholder values for deal price and regular price
                $deal_price = 85.00;
                $regular_price = $pdt_data['pdt_price'] + $pdt_data['pdt_price'];

        ?>
        <li class="product-item">
            <div class="contain-product deal-layout contain-product__deal-layout">
                <div class="product-thumb">
                    <a href="single_product.php?status=singleproduct&&id=<?php echo $pdt_data['pdt_id'] ?>"
                        class="link-to-product">
                        <img src="admin/uploads/<?php echo $pdt_data['pdt_img']; ?>"
                            alt="<?php echo $pdt_data['pdt_name']; ?>" width="330" height="330"
                            class="product-thumnail">
                    </a>
                    <div class="labels">
                        <span class="sale-label">-<?php echo $discounted_percentage; ?>%</span>
                    </div>
                </div>
                <div class="info">
                <div class="product-countdown" data-datetime="2024-02-15 12:00:00"></div>

                    <b class="categories"><?php echo $pdt_data['ctg_name']; ?></b>

                    <b class="categories"><?php echo $pdt_data['ctg_name']; ?></b>
                    <h4 class="product-title"><a href="#" class="pr-name"><?php echo $pdt_data['pdt_name']; ?></a></h4>
                    <div class="price ">
                        <ins><span class="price-amount"><span
                                    class="currencySymbol">$</span><?php echo $pdt_data['pdt_price']; ?></span></ins>
                        <del><span class="price-amount"><span
                                    class="currencySymbol">$</span><?php echo $regular_price; ?></span></del>
                    </div>
                    <div class="slide-down-box">
                        <p class="message"><?php echo $pdt_data['product_description']; ?></p>
                        <div class="buttons">
                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            <a href="single_product.php?status=singleproduct&&id=<?php echo $pdt_data['pdt_id'] ?>"
                                class="btn add-to-cart-btn">add to cart</a>
                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>
<script>
    // Update all countdowns every 1 second
    var x = setInterval(function () {

// Get the current date and time
var now = new Date().getTime();

// Update each countdown
document.querySelectorAll('.product-countdown').forEach(function (countdown) {
    // Get the datetime from the data attribute
    var countDownDate = new Date(countdown.getAttribute('data-datetime')).getTime();

    // Calculate the remaining time
    var distance = countDownDate - now;

    if (distance > 0) {
        // Calculate days, hours, minutes, and seconds only if the countdown is not expired
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the countdown in the current product countdown element
        countdown.innerHTML =
            "<span>" + days + "</span>d " +
            "<span>" + hours + "</span>h " +
            "<span>" + minutes + "</span>m " +
            "<span>" + seconds + "</span>s ";
    } else {
        // If the countdown is over, display a message
        countdown.innerHTML = "EXPIRED";
    }
});
}, 1000);
</script>
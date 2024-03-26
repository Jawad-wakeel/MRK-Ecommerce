<?php 
$obj= new adminback();
    $links = $obj->display_links();
    $link = mysqli_fetch_assoc($links);
   

?>
<footer id="footer" class="footer layout-03">
    <div class="footer-content background-footer-03">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-9">
                    <section class="footer-item">
                        <!--  -->
                        <div class="footer-phone-info">
                            <i class="biolife-icon icon-head-phone"></i>
                            <p class="r-info">
                                <span>Got Questions ?</span>
                                <span class="h4"> <a class="fa fa-envelope" href="#"
                                        style="color: gray; font-size:20px"> &nbsp;
                                        <?php 
                            
                            
                             echo $link['phone'];

                             ?>


                                    </a></span>
                            </p>
                        </div>
                        <div class="newsletter-block layout-01">
                            <h4 class="title">Newsletter Signup</h4>
                            <div class="form-content">
                                <form action="#" name="new-letter-foter" id="subscribeForm">
                                    <input type="email" class="input-text email" value=""
                                        placeholder="Your email here..." id="emailInput">
                                    <button type="submit" class="bnt-submit" name="ok">Sign up</button>
                                </form>
                            </div>
                        </div>
                    </section>
                    <script>
                    document.getElementById('subscribeForm').addEventListener('submit', function(event) {
                        event.preventDefault(); // Prevent the form from submitting

                        var emailInput = document.getElementById('emailInput');
                        console.log('Email input value before clearing:', emailInput.value);

                        var emailValue = emailInput.value
                            .trim(); // Trim removes leading and trailing whitespaces

                        if (emailValue === '') {
                            alert('Please fill the email field.');
                        } else {
                            alert('Subscribed Successfully!');
                            // Clear the input field after successful subscription
                            document.getElementById('emailInput').value = '';
                            console.log('Email input value after clearing:', emailInput.value);
                            // You can add additional logic here, for example, sending the form data to a server using AJAX
                        }
                    });
                    </script>




                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                    <section class="footer-item">
                        <h3 class="section-title">Useful Links</h3>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-xs-6">
                                <div class="wrap-custom-menu vertical-menu-2">
                                    <ul class="menu">
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="about.php">About Our Shop</a></li>
                                        <li><a href="all_product.php">Secure Shopping</a></li>
                                        <li><a href="about.php">Delivery infomation</a></li>
                                        <li><a href="about.php">Privacy Policy</a></li>
                                        <li><a href="contact.php">Our Sitemap</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-xs-6">
                                <div class="wrap-custom-menu vertical-menu-2">
                                    <ul class="menu">
                                        <li><a href="contact.php">Who We Are</a></li>
                                        <li><a href="all_product.php">Our Products</a></li>
                                        <li><a href="about.php">Our Mission</a></li>
                                        <li><a href="contact.php">Contacts Us</a></li>
                                        <li><a href="about.php">Our Vision</a></li>
                                        <li><a href="about.php">Our Goals</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                    <section class="footer-item">
                        <h3 class="section-title">Transport Offices</h3>
                        <div class="contact-info-block footer-layout xs-padding-top-10px">
                            <ul class="contact-lines">
                                <li>
                                    <p class="info-item">
                                        <i class="biolife-icon icon-location"></i>
                                        <b class="desc">51 Cityside Green NE,
                                            Calgary
                                            T3N 1H9,
                                            AB,
                                            CA </b>
                                    </p>
                                </li>
                                <li>
                                    <p class="info-item">
                                        <i class="biolife-icon icon-phone"></i>
                                        <b class="desc">Phone: <?php echo $link['phone'] ?></b>
                                    </p>
                                </li>
                                <li>
                                    <p class="info-item">
                                        <i class="biolife-icon icon-letter"></i>
                                        <b class="desc">Email: <?php echo $link['email'] ?></b>
                                    </p>
                                </li>
                                <li>
                                    <p class="info-item">
                                        <i class="biolife-icon icon-clock"></i>
                                        <b class="desc">Hours: 7 Days a week from 10:00 am</b>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="biolife-social inline">
                            <ul class="socials">
                                <li><a href="<?php echo $link['tweeter'] ?>" title="twitter" class="socail-btn"><i
                                            class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo $link['fb_link'] ?>" title="facebook" class="socail-btn"><i
                                            class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo $link['pinterest'] ?>" title="pinterest" class="socail-btn"><i
                                            class="fa fa-pinterest" aria-hidden="true"></i></a></li>

                            </ul>
                        </div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="separator sm-margin-top-62px xs-margin-top-40px"></div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="copy-right-text">
                        <p>WE ACCEPT</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="payment-methods">
                        <ul>
                            <li><a href="#" class="payment-link"><img src="assets/images/card1.jpg" width="51"
                                        height="36" alt=""></a></li>
                            <li><a href="#" class="payment-link"><img src="assets/images/card2.jpg" width="51"
                                        height="36" alt=""></a></li>
                            <li><a href="#" class="payment-link"><img src="assets/images/card3.jpg" width="51"
                                        height="36" alt=""></a></li>
                            <li><a href="#" class="payment-link"><img src="assets/images/card4.jpg" width="51"
                                        height="36" alt=""></a></li>
                            <li><a href="#" class="payment-link"><img src="assets/images/card5.jpg" width="51"
                                        height="36" alt=""></a></li>
                        </ul>
                    </div>
                    

                </div>
                

            </div>
            
        </div>
    </div>
    <div class="container-fluid text-center py-3 footer layout-03 ">
                    © 2024 Copyright:
                    <a style="color:black; font-weight:bold;"  href="index.php">MRK Associates Inc.</a>
                </div>
</footer>
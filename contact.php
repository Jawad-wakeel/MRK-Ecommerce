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
                    Contact Us
                </h1>
            </div>
            <h2 style="text-align:center ">Get In Touch With Us</h2>
            <div id="contact-info" class="section mt-4 ">
                <div class="container">
                    <div class="info-box" id="email-box">
                    <span class="email-icon">&#128231;</span>
                        <p>info@mrkassociatesinc.com</p>
                    </div>
                    <div class="info-box" id="address-box">
                    <span class="address-icon">&#128205;</span>
                        <p> 51 Cityside Green NE
                            Calgary
                            T3N 1H9
                            AB
                            CA</p>
                    </div>
                    <div class="info-box" id="phone-box">
                    <span class="phone-icon">&#128222;</span>
                        <p> +1 (737) 2825412</p>
                    </div>
                </div>
            </div>
            <h2 class="mt-3" style="text-align:center">Quick Contact</h2>

            <div id="email-form" class="sectionn">
                <div class="container">
                    <form id="form" action="" method="post">
                        <div class="field">
                            <label for="from_name">Name</label>
                            <input type="text" name="from_name" id="from_name" placeholder="Your Name">
                        </div>
                        <div class="field">
                            <label for="to_namee">Email</label>
                            <input type="text" name="to_namee" id="to_namee" placeholder="Your Email">
                        </div>
                        <div class="field">
                            <label for="message">Subject</label>
                            <input type="text" name="message" id="message" placeholder="Subject">
                        </div>
                        <div class="field">
                            <label for="reply_to">Message</label>
                            <input type="text" name="reply_to" id="reply_to" placeholder="Your Message">
                        </div>
                        <input type="submit" id="button" value="Send Email">
                    </form>
                </div>
            </div>

            <h2 style="text-align:center">Find Us on Map</h2>


            <div id="map-container" class="section">
                <div id="map">
                    <!-- Your Google Maps iframe here -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2502.9390294953196!2d-113.96650542414791!3d51.14647543700684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537163dd742c7265%3A0x1682b88fd1a108a2!2s51%20Cityside%20Rise%20NE%2C%20Calgary%2C%20AB%20T3N%201B4%2C%20Canada!5e0!3m2!1sen!2s!4v1707349336266!5m2!1sen!2s"
                        width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>



            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
            </script>

            <script type="text/javascript">
            emailjs.init('kR0LNjmgLiR3wDPiA')
            </script>
            <script>
            const btn = document.getElementById('button');

            document.getElementById('form').addEventListener('submit', function(event) {
                event.preventDefault();

                // Validate form fields
                const name = document.getElementById('from_name').value.trim();
                const email = document.getElementById('to_namee').value.trim();
                const subject = document.getElementById('message').value.trim();
                const message = document.getElementById('reply_to').value.trim();

                if (!name || !email || !subject || !message) {
                    alert('Please fill in all fields before sending the email.');
                    return;
                }

                btn.value = 'Sending...';

                const serviceID = 'default_service';
                const templateID = 'template_q51oddj';

                emailjs.sendForm(serviceID, templateID, this)
                    .then(() => {
                        btn.value = 'Send Email';
                        alert(
                            'Email sent successfully! Our Support Team Will Contact You Soon about your Queries you post. Thank You!'
                        );

                        // Clear fields after successful email send
                        document.getElementById('from_name').value = '';
                        document.getElementById('to_namee').value = '';
                        document.getElementById('message').value = '';
                        document.getElementById('reply_to').value = '';
                    }, (err) => {
                        btn.value = 'Send Email';
                        alert('Error sending email. Please try again.');
                    });
            });
            </script>




        </div>

        <div class="biolife-service type01 biolife-service__type01 sm-margin-top-4 xs-margin-top-45px container">
            <b class="txt-show-01">Easy Access</b>
            <i class="txt-show-02">Get In Touch With Us</i>
            <ul class="services-list mt-4 mb-4">
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
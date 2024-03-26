<?php 
$obj= new adminback();
    $links = $obj->display_links();
   

?>



<div class="header-top bg-main hidden-xs border">
            <div class="container">
                <div class="top-bar left">
                    <ul class="horizontal-menu">
                        <?php 
                        while( $link = mysqli_fetch_assoc($links)){?>

                                  
<li>
<a href="">
    <span style="font-family: Arial; font-size: 15px;">
        <i class="fa fa-envelope"></i>&nbsp; <?php echo $link['email']; ?>
    </span>
</a>


</li>


                   
                        </li>
                        <!-- <li><a href="#">Free Shipping on order greater than 1000$</a></li> -->
                    </ul>
                </div>
                <div class="top-bar right">
                    <ul class="social-list">
                        <li><a href="#<?php  echo $link['tweeter'];  ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#<?php  echo $link['fb_link'];  ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#<?php  echo $link['pinterest'];  ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                               <?php } ?>

                    </ul>
                    <ul class="horizontal-menu">

                        <li><a href="user_login.php" class="login-link"><i class="biolife-icon icon-login"></i>
                        <?php 
                        if(isset($_SESSION['username'])){
                            echo $_SESSION['username'];
                        }else{
                            echo "Login";
                        }
                        ?>
                        </a></li>

                       
                    </ul>
                </div>
            </div>
        </div>
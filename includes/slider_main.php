<div class="main-slide block-slider nav-change">
    <ul class="biolife-carousel" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800, "autoplay": true, "autoplaySpeed": 3000}' >

    <?php 
        $obj = new adminback();

        $rows =  $obj->SlideShow();

        while ($row = mysqli_fetch_assoc($rows)){
            
    ?>
    
    <li>
        <div class="slide-contain slider-opt03__layout02 slide_animation type_02">
            <div class="media background-geen-01" style="background-image: url('admin/uploads/<?php echo $row["slider_img"]?>');"></div>
            <div class="text-content">
                <i class="first-line"><?php echo $row['first_line']; ?></i>
                <h3 class="second-line"> <?php echo $row['second_line']; ?> </h3>
                <p class="third-line"><?php echo $row['third_line']; ?></p>
                <p class="buttons">
                    <a href="./all_product.php" class="btn btn-bold"><?php echo $row['btn_left']; ?></a>
                    <a href="#" class="btn btn-thin"><?php echo $row['btn_right']; ?></a>
                </p>
            </div>
        </div>
    </li>

    <?php 
        }
    ?>

    </ul>
</div>

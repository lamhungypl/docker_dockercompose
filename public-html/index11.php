<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">


    <title>Martplace - Home</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/lnr-icon.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/trumbowyg.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="sass/style.css">
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
</head>

<body class="preload home1 mutlti-vendor">

    <?php include("includes/header.php"); ?>

    <!--================================
    START HERO AREA
=================================-->
    <section class="hero-area bgimage">
        <div class="bg_image_holder">
            <img src="assests/bg-hero-1.jpg" alt="background-image">
        </div>
        <!-- start hero-content -->
        <div class="hero-content content_above">
            <!-- start .contact_wrapper -->
            <div class="content-wrapper">
                <!-- start .container -->
                <div class="container">
                    <!-- start row -->
                    <div class="row">
                        <!-- start col-md-12 -->
                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h1>
                                    <span class="light">Zen Audio</span>
                                    <span class="bold">The sound of the woods.</span>
                                </h1>
                                <p class="tagline">Post Crispum eum privato inquit Caesarem et paludamento muros est passurum inpositum die carpento oppidum regiis inpositum haec</p>
                            </div>

                            <!-- start .hero__btn-area-->
                            <div class="hero__btn-area">
                                <a href="all-products.php" class="btn btn--round btn--lg">View All Products</a>
                                <a href="all-products.php" class="btn btn--round btn--lg">Popular Products</a>
                            </div>
                            <!-- end .hero__btn-area-->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end .contact_wrapper -->
        </div>
        <!-- end hero-content -->

        <!--start search-area -->
        <div class="search-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .container -->
                <div class="row">
                    <!-- start .col-sm-12 -->
                    <div class="col-sm-12">
                        <!-- start .search_box -->
                        <div class="search_box">
                            <form action="#">
                                <input type="text" class="text_field" placeholder="Search your products...">
                                <div class="search__select select-wrap">
                                    <select name="category" class="select--field" id="blah">
                                        <option value="">All Categories</option>
                                        <option value="">PSD</option>
                                        <option value="">HTML</option>
                                        <option value="">WordPress</option>
                                        <option value="">All Categories</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                                <button type="submit" class="search-btn btn--lg">Search Now</button>
                            </form>
                        </div>
                        <!-- end ./search_box -->
                    </div>
                    <!-- end /.col-sm-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!--start /.search-area -->
    </section>
    <!--================================
    END HERO AREA
=================================-->

    <!--================================
    START FEATURE AREA
=================================-->
    <section class="features section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img src="images/feature1.png" alt="feature">
                        </div>
                        <div class="feature__title">
                            <h3>Best UX Research</h3>
                        </div>
                        <div class="feature__desc">
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->

                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img src="images/feature2.png" alt="feature">
                        </div>
                        <div class="feature__title">
                            <h3>Fully Responsive</h3>
                        </div>
                        <div class="feature__desc">
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->

                <!-- start search-area -->
                <div class="col-lg-4 col-md-6">
                    <div class="feature">
                        <div class="feature__img">
                            <img src="images/feature3.png" alt="feature">
                        </div>
                        <div class="feature__title">
                            <h3>Buy & Sell Easily</h3>
                        </div>
                        <div class="feature__desc">
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                    </div>
                    <!-- end /.feature -->
                </div>
                <!-- end /.col-lg-4 col-md-6 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END FEATURE AREA
=================================-->


    <!--================================
    START FEATURED PRODUCT AREA
=================================-->
    <section class="featured-products bgcolor  section--padding">
        <!-- start /.container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area ">
                        <div class="product__title">
                            <h2>Weekly Featured Products</h2>
                        </div>

                        <div class="product__slider-nav rounded">
                            <span class="lnr lnr-chevron-left nav_left"></span>
                            <span class="lnr lnr-chevron-right nav_right"></span>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>

        <!-- start .featured-product-slider -->



        <div class="container">
            <div class="row">
                <div class="col-md-12 no0-padding">
                    <div class="featured-product-slider prod-slider1">

                        <?php
                        include 'includes/db.php';


                        $product_query = "SELECT SanPham.name,SanPham.description,SanPham.id,image FROM SanPham WHERE SanPham.id BETWEEN 0 AND 4";
                        $run_query = mysqli_query($con, $product_query);
                        if (mysqli_num_rows($run_query) > 0) {
                            $temp = 1;
                            while ($row = mysqli_fetch_array($run_query)) {

                                // $pro_cat   = $row['product_cat'];
                                // $pro_brand = $row['product_brand'];
                                $pro_id    = $row['id'];
                                $pro_name = $row['name'];
                                $pro_description = $row['description'];

                                // $image_query = sprintf("SELECT images.source FROM  images  WHERE images.item_id = %s", $pro_id);
                                // $run_image_query = mysqli_query($con, $image_query);

                                // $rowImage = mysqli_fetch_array($run_image_query);
                                $imageSource =  $row['image'];
                                list($dir, $_postname) = explode('_', $imageSource);
                                // $cat_name = $row["cat_title"];
                                // $arr = array(1, 2, 3, 4);
                                // foreach ($arr as $value) {

                                echo "
				
                                            <div class='featured__single-slider'>
                                            <div class='featured__preview-img'>
                                                <img width ='555' height ='450'src='assests/product_images/$dir/$imageSource.jpg' style='object-fit: cover;' alt='Featured products'>
                                                <div class='prod_btn'>
                                                    <a href='single-product.php' class='transparent btn--sm btn--round'>More Info</a>
                                                    <a href='single-product.php' class='transparent btn--sm btn--round'>Live Demo</a>
                                                </div>
                                            </div>
                                            <!-- end /.featured__preview-img -->
                
                                            <div class='featured__product-description'>
                                                <div class='product-desc desc--featured'>
                                                    <a href='single-product.php' class='product_title'>
                                                        <h4>$pro_name</h4>
                                                    </a>
                                                    <ul class='titlebtm'>
                                                        <li>
                                                            <img class='auth-img' src='images/auth.jpg' alt='author image'>
                                                            <p>
                                                                <a href='#'>AazzTech</a>
                                                            </p>
                                                        </li>
                                                        <li class='product_cat'>
                                                            <a href='#'>
                                                                <span class='lnr lnr-book'></span> WordPress</a>
                                                        </li>
                                                    </ul>
                                                    <!-- end /.titlebtm -->
                
                                                    <p>$pro_description</p>
                                                </div>
                                                <!-- end /.product-desc -->
                
                                                <div class='product_data'>
                                                    <div class='tags tags--round'>
                                                        <ul>
                                                            <li>
                                                                <a href='#'>website</a>
                                                            </li>
                                                            <li>
                                                                <a href='#'>plugin</a>
                                                            </li>
                                                            <li>
                                                                <a href='#'>landing page</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- end /.tags -->
                                                    <div class='product-purchase featured--product-purchase'>
                                                        <div class='price_love'>
                                                            <span>$10 - $50</span>
                                                            <p>
                                                                <span class='lnr lnr-heart'></span> 90</p>
                                                        </div>
                                                        <div class='sell'>
                                                            <p>
                                                                <span class='lnr lnr-cart'></span>
                                                                <span>16</span>
                                                            </p>
                                                        </div>
                
                                                        <div class='rating product--rating'>
                                                            <ul>
                                                                <li>
                                                                    <span class='fa fa-star'></span>
                                                                </li>
                                                                <li>
                                                                <span class='fa fa-star'></span>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                            
                                                </div>
                                            </div>
                                         
                                        </div>
                                
						
                               
							
                        
			";
                            };
                        }
                        // }
                        ?>




                        <!--end /.featured__single-slider-->
                    </div>
                </div>
            </div>
            <!-- end /.featured__preview-img -->
        </div>
        <!-- end /.featured-product-slider -->
    </section>
    <!--================================
    END FEATURED PRODUCT AREA
=================================-->


    <!--================================
    START PRODUCTS AREA
=================================-->
    <section class="products section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area">
                        <div class="product__title">
                            <h2>Newest Release Products</h2>
                        </div>

                        <div class="filter__menu">
                            <p>Filter by:</p>
                            <div class="filter__menu_icon">
                                <a href="#" id="drop1" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="svg" src="images/svg/menu.svg" alt="menu icon">
                                </a>

                                <ul class="filter_dropdown dropdown-menu" aria-labelledby="drop1">
                                    <li>
                                        <a href="#">Trending items</a>
                                    </li>
                                    <li>
                                        <a href="#">Best seller</a>
                                    </li>
                                    <li>
                                        <a href="#">Best rating</a>
                                    </li>
                                    <li>
                                        <a href="#">Low price</a>
                                    </li>
                                    <li>
                                        <a href="#">High price</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start row -->
            <div class="row">
                <!-- start .col-md-12 -->
                <div class="col-md-12">
                    <div class="sorting">
                        <ul>
                            <?php




                            $arr = array(1, 2, 3, 4, 5, 6, 7, 8);
                            foreach ($arr as $value) {


                                //         echo '
                                //     <li>
                                //     <a href="#">Plugins</a>
                                // </li>
                                //     ';
                            }

                            ?>



                        </ul>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start .row -->
            <div class="row">

                <?php
                include 'includes/db.php';
                $product_query = "SELECT SanPham.name,SanPham.description,SanPham.id,Sanpham.image FROM SanPham WHERE SanPham.id limit 0,6";
                $run_query = mysqli_query($con, $product_query);
                if (mysqli_num_rows($run_query) > 0) {
                    $temp = 1;
                    while ($row = mysqli_fetch_array($run_query)) {

                        // $pro_cat   = $row['product_cat'];
                        // $pro_brand = $row['product_brand'];
                        $pro_id    = $row['id'];
                        $pro_name = $row['name'];
                        $pro_description = $row['description'];

                        // $image_query = sprintf("SELECT images.source FROM  images  WHERE images.item_id = %s", $pro_id);
                        // $run_image_query = mysqli_query($con, $image_query);

                        // $rowImage = mysqli_fetch_array($run_image_query);
                        $imageSource =  $row['image'];
                        list($dir, $_postname) = explode('_', $imageSource);
                        // $cat_name = $row["cat_title"];
                        // $arr = array(1, 2, 3, 4);
                        // foreach ($arr as $value) {
                        // echo $dir;

                        echo "
                        <!-- start .col-md-4 -->
                        <div class='col-lg-4 col-md-6'>
                            <!-- start .single-product -->
                            <div class='product product--card'>
        
                                <div class='product__thumbnail'>
                                    <img src='assests/product_images/$dir/$imageSource.jpg' alt='Product Image' style='width:361px;height:230px;object-fit: cover;'>
                                    <div class='prod_btn'>
                                        <a href='single-product.php' class='transparent btn--sm btn--round'>More Info</a>
                                        <a href='single-product.php' class='transparent btn--sm btn--round'>Live Demo</a>
                                    </div>
                                    <!-- end /.prod_btn -->
                                </div>
                                <!-- end /.product__thumbnail -->
        
                                <div class='product-desc'>
                                    <a href='single-product.php' class='product_title'>
                                        <h4>MartPlace Extension Bundle</h4>
                                    </a>
                                    <ul class='titlebtm'>
                                        <li>
                                            <img class='auth-img' src='images/auth.jpg' alt='author image'>
                                            <p>
                                                <a href='#'>AazzTech</a>
                                            </p>
                                        </li>
                                        <li class='product_cat'>
                                            <a href='#'>
                                                <span class='lnr lnr-book'></span>Plugin</a>
                                        </li>
                                    </ul>
        
                                    <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                        leo quam aliquet congue.</p>
                                </div>
                                <!-- end /.product-desc -->
        
                                <div class='product-purchase'>
                                    <div class='price_love'>
                                        <span>$10 - $50</span>
                                        <p>
                                            <span class='lnr lnr-heart'></span> 90</p>
                                    </div>
                                    <div class='sell'>
                                        <p>
                                            <span class='lnr lnr-cart'></span>
                                            <span>16</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- end /.product-purchase -->
                            </div>
                            <!-- end /.single-product -->
                        </div>
                        <!-- end /.col-md-4 -->
                        
                        
                        ";
                    }
                }


                // $arr = array(1, 2, 3, 4, 5, 6);
                // foreach ($arr as $value) {


                //     echo '

                //             ';
                // }

                ?>



            </div>
            <!-- end /.row -->

            <!-- start .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="more-product">
                        <a href="all-products.php" class="btn btn--lg btn--round">All New Products</a>
                    </div>
                </div>
                <!-- end ./col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END PRODUCTS AREA
=================================-->


    <!--================================
 =================================-->

    <!--================================
    START COUNTER UP AREA
=================================-->

    <!--================================
    END COUNTER UP AREA
=================================-->


    <section class="why_choose section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Why Choose
                            <span class="highlighted">MartPlace</span>
                        </h1>
                        <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats. Lid
                            est laborum dolo rumes fugats untras.</p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start row -->
            <div class="row">
                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .reason -->
                    <div class="feature2">
                        <span class="feature2__count">01</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-license pcolor"></span>
                            <h3 class="feature2-title">One Time Payment</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">02</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-magic-wand scolor"></span>
                            <h3 class="feature2-title">Quality Products</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">03</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-lock mcolor1"></span>
                            <h3 class="feature2-title">100% Secure Paymentt</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">04</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-chart-bars mcolor2"></span>
                            <h3 class="feature2-title">Well Organized Code</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">05</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-leaf mcolor3"></span>
                            <h3 class="feature2-title">Life Time Free Update</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .feature2 -->
                    <div class="feature2">
                        <span class="feature2__count">06</span>
                        <div class="feature2__content">
                            <span class="lnr lnr-phone mcolor4"></span>
                            <h3 class="feature2-title">Fast and Friendly Support</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis,
                                leo quam aliquet diam congue is laoreet elit metus.</p>
                        </div>
                        <!-- end /.feature2__content -->
                    </div>
                    <!-- end /.feature2 -->
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END COUNTER UP AREA
=================================-->

    <!--================================
    START SELL BUY
=================================-->

    <!--================================
    END SELL BUY
=================================-->

    <!--================================
    START TESTIMONIAL
=================================-->

    <!--================================
    END TESTIMONIAL
=================================-->

    <!--================================
    START LATEST NEWS
=================================-->

    <!--================================
    END LATEST NEWS
=================================-->

    <!--================================
    START SPECIAL FEATURES AREA
=================================-->
    <section class="special-feature-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="special-feature feature--1">
                        <img src="images/spf1.png" alt="Special Feature image">
                        <h3 class="special__feature-title">30 Days Money Back
                            <span class="highlight">Guarantee</span>
                        </h3>
                    </div>
                </div>
                <!-- end /.col-md-6 -->
                <div class="col-md-6">
                    <div class="special-feature feature--2">
                        <img src="images/spf2.png" alt="Special Feature image">
                        <h3 class="special__feature-title">Fast and Friendly
                            <span class="highlight">Support</span>
                        </h3>
                    </div>
                </div>
                <!-- end /.col-md-6 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END SPECIAL FEATURES AREA
=================================-->

    <!--================================
    START CALL TO ACTION AREA
=================================-->
    <section class="call-to-action bgimage">
        <div class="bg_image_holder">
            <img src="assests/bg-hero-foot.jpg" style="object-fit: cover;" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-wrap">
                        <h1 class="text--white">Ready to Join Our Marketplace!</h1>
                        <h4 class="text--white">Over 25,000 designers and developers trust the MartPlace.</h4>
                        <a href="#" class="btn btn--lg btn--round btn--white callto-action-btn">Join Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
    END CALL TO ACTION AREA
=================================-->

    <?php include("includes/footer.php"); ?>

    <!--//////////////////// JS GOES HERE ////////////////-->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
    <!-- inject:js -->
    <script src="js/vendor/jquery/jquery-1.12.3.js"></script>
    <script src="js/vendor/jquery/popper.min.js"></script>
    <script src="js/vendor/jquery/uikit.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/chart.bundle.min.js"></script>
    <script src="js/vendor/grid.min.js"></script>
    <script src="js/vendor/jquery-ui.min.js"></script>
    <script src="js/vendor/jquery.barrating.min.js"></script>
    <script src="js/vendor/jquery.countdown.min.js"></script>
    <script src="js/vendor/jquery.counterup.min.js"></script>
    <script src="js/vendor/jquery.easing1.3.js"></script>
    <script src="js/vendor/owl.carousel.min.js"></script>
    <script src="js/vendor/slick.min.js"></script>
    <script src="js/vendor/tether.min.js"></script>
    <script src="js/vendor/trumbowyg.min.js"></script>
    <script src="js/vendor/waypoints.min.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/main.js"></script>
    <script src="js/map.js"></script>
    <!-- endinject -->
</body>

</html>

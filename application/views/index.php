<style>
    .top-right {
        position: absolute;
        top: 30px;
        right: 40px;

    }

    .photo {
        position: relative;
        color: white;
    }

    .shoe {
        height: auto;
        min-height: 385px;
        max-height: 385px;
    }

    .ppp2 {
        width: 60px;
        height: 60px;
        border-radius: 100%;
        background-color: #ffffff;
        border: 2px solid #DDDDDD;
        margin-top: 5px;
        font-size: 30px;
        color: #DDDDDD;
    }

    .ppp2:hover {
        width: 60px;
        height: 60px;
        border-radius: 100%;
        background-color: #ffffff;
        border: 2px solid #DDDDDD;
        margin-top: 5px;
        font-size: 30px;
        color: #185BC3;
    }


    

    .nnn2 {
        width: 60px;
        height: 60px;
        border-radius: 100%;
        background-color: #ffffff;
        border: 2px solid #DDDDDD;
        margin-top: 5px;
        font-size: 30px;
        color: #DDDDDD;
    }
    
    .nnn2:hover {
        width: 60px;
        height: 60px;
        border-radius: 100%;
        background-color: #ffffff;
        border: 2px solid #DDDDDD;
        margin-top: 5px;
        font-size: 30px;
        color: #185BC3;
    }

   
</style>

<section>
    <div class="container mt-4">
        <div class="row">
            <div class=col-4>
                <h2 style="font-weight:bold;">Browse Categories of<br>The Store</h2>
            </div>
        </div>
        <div class="row">

            <div class="col-xl-5 col-lg-5 col-sm-12 col-12">
                <div class="row">
                    <div class="col-12 ">
                        <div class="photo p-2">
                            <img class="w-100" src="<?php echo base_url('assets/img/clothes.png') ?>" style="border-radius: 30px;">
                            <div class="top-right"><b>Fashion</b>
                                <p>30,000 items</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="photo p-2">
                            <img class="w-100" src="<?php echo base_url('assets/img/cream.png') ?>" style="border-radius: 30px;">
                            <div class="top-right"><b>Skincare</b>
                                <p>2,000 items</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-7 col-lg-7 col-sm-12 col-12">
                <div class="row">
                    <div class="col-5">
                        <div class="photo p-xl-2 p-lg-2 p-0">
                            <img class="w-100 shoe" src="<?php echo base_url('assets/img/shoe.png') ?>" style="border-radius: 30px;">
                            <div class="top-right"><b>Shoes</b>
                                <p>10,000 items</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-7">
                        <div class="photo p-xl-2 p-lg-2 p-0">
                            <img class="w-100 shoe" src="<?php echo base_url('assets/img/ipad.png') ?>" style="border-radius: 30px; ">
                            <div class="top-right"><b>Electronic</b>
                                <p>10,000 items</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- <div class="row mt-3 mb-5">
            <div class="col-4 photo">
                <img src="<?php echo base_url('assets/img/clothes.png') ?>" style="border-radius: 30px;">
                <div class="top-right"><b>Fashion</b>
                    <p>30,000 items</p>
                </div>
                <img src="<?php echo base_url('assets/img/cream.png') ?>" style="border-radius: 30px; margin-top: 25px;">
                <div class="bottom-right"><b>Skincare</b>
                    <p>2,000 items</p>
                </div>
            </div>

            <div class="col-4 photo">
                <img src="<?php echo base_url('assets/img/shoe.png') ?>" style="border-radius: 30px; margin-left: 106px;">
                <div class="top-right-shoe"><b>Shoes</b>
                    <p>10,000 items</p>
                </div>
            </div>

            <div class="col-4 photo">
                <img src="<?php echo base_url('assets/img/ipad.png') ?>" style="border-radius: 30px; ">
                <div class="top-right-ipad"><b>Electronic</b>
                    <p>10,000 items</p>
                </div>
            </div>
        </div> -->

        <div class="row pt-5" style="text-align: center;">
            <h2 style="font-weight: bold;">Why Choose Ba<span style="color: #3C9379;">chira</span>?</h2>
        </div>

        <div class="row mt-5  mb-5">
            <div class="col-4" style="text-align: center;">
                <i class="fa-solid fa-truck-fast" style="color: #3C9379; font-size: 40px; margin-bottom: 20px;"></i>
                <br>
                <b>Free Delivery</b>
                <p>Lorem ipsum dolor sit amet, consectetu<br>adipiscing elit, sed do eiusmod tempor</p>
            </div>

            <div class="col-4" style="text-align: center;">
                <i class="fa-regular fa-handshake" style="color: #3C9379; font-size: 40px; margin-bottom: 20px;"></i>
                <br>
                <b>Trusted Platfrom</b>
                <p>Lorem ipsum dolor sit amet, consectetu<br>adipiscing elit, sed do eiusmod tempor</p>
            </div>

            <div class="col-4" style="text-align: center;">
                <i class="fa-regular fa-handshake" style="color: #3C9379; font-size: 40px; margin-bottom: 20px;"></i>
                <br>
                <b>Here For You</b>
                <p>Lorem ipsum dolor sit amet, consectetu<br>adipiscing elit, sed do eiusmod tempor</p>
            </div>
        </div>

        <div class="row pt-5 mb-5">
            <div class="col-4">
                <h2 style="font-weight:bold;">Populer Products From<br>All Brands</h2>
            </div>
        </div>

        <div class="col-12 mb-5">
            <div class="slick-controls">
                <button class="ppp2"> < </button>
                <button class="nnn2"> > </button>
            </div>
        </div>


        <div class="slide_detail">
        <?php foreach ($result->products as $key => $product_list) { ?>
            <div class="p-2">
            <a href="<?php echo base_url('products/products_detail/') . $product_list->id ?>">
                <img class="w-100" src="<?php echo $product_list->thumbnail ?>" style="border-radius: 30px;">
                <br>
                <div class="product_title"><?php echo $product_list->title ?></div>
                <div class="product_price"><?php echo $product_list->price ?></div>
            </a>
            </div> 
            <?php } ?>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.slide_detail').slick({
                prevArrow: $(".ppp2"),
                nextArrow: $(".nnn2"),
                arrows: true,
                infinite: false,
                autoplay: true,
                autoplaySpeed: 4000,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        });
    </script>

</section>
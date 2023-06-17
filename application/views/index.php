<style>
    .top-right {
        position: absolute;
        top: 15px;
        right: 0px;

    } 

    .top-right-ipad {
        position: absolute;
        top: 15px;
        right: 100px;

    }

    .top-right-shoe {
        position: absolute;
        top: 15px;
        right: 70px;

    }

    .photo {
        position: relative;

        color: white;
    }

    .bottom-right {
        position: absolute;
        bottom: 100px;
        right: 16px;
    }
</style>

<section>
    <div class="container mt-4">
        <div class="row">
            <div class=col-4>
                <h2 style="font-weight:bold;">Browse Categories of<br>The Store</h2>
            </div>
        </div>

        <div class="row mt-3 mb-5">
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
        </div>

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

        <div class="row pt-5 mb-3">
            <div class="col-4">
                <h2 style="font-weight:bold;">Populer Products From<br>All Brands</h2>
            </div>
        </div>




        <div class="row slide_detail">
        <button type="button" class="slick-prev">Previous</button>
        <button type="button" class="slick-next">Next</button>

            <div class="col-3">
                <img src="<?php echo base_url('assets/img/nike.png') ?>" style="border-radius: 30px; margin-bottom: 20px;">
                <br>
                <b>Nike Air Force</b>
                <p>Rp 2.999.999</p>
            </div>
            <div class="col-3">
                <img src="<?php echo base_url('assets/img/hood.png') ?>" style="border-radius: 30px; margin-bottom: 20px;">
                <br>
                <b>White Sweter</b>
                <p>Rp 299.999</p>
            </div>
            <div class="col-3">
                <img src="<?php echo base_url('assets/img/clock.png') ?>" style="border-radius: 30px; margin-bottom: 20px;">
                <br>
                <b>Android Smartwatch</b>
                <p>Rp 1.399.999</p>
            </div>
            <div class="col-3">
                <img src="<?php echo base_url('assets/img/airpod.png') ?>" style="border-radius: 30px; margin-bottom: 20px;">
                <br>
                <b>Apple Airpods</b>
                <p>Rp 2.599.999</p>
            </div>
            <div class="col-3">
                <img src="<?php echo base_url('assets/img/airpod.png') ?>" style="border-radius: 30px; margin-bottom: 20px;">
                <br>
                <b>Apple Airpods</b>
                <p>Rp 2.599.999</p>
            </div>
            <div class="col-3">
                <img src="<?php echo base_url('assets/img/airpod.png') ?>" style="border-radius: 30px; margin-bottom: 20px;">
                <br>
                <b>Apple Airpods</b>
                <p>Rp 2.599.999</p>
            </div>
            <div class="col-3">
                <img src="<?php echo base_url('assets/img/airpod.png') ?>" style="border-radius: 30px; margin-bottom: 20px;">
                <br>
                <b>Apple Airpods</b>
                <p>Rp 2.599.999</p>
            </div>
            

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.slide_detail').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
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
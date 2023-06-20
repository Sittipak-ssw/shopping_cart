<style>
    .product_picture {
        border-radius: 5%;
        margin-left: 18%;
        margin-bottom: 10%;

    }

    .detail {}

    .detail_price {
        padding-right: 8%;
    }

    .product_stock {
        border: none;
        text-decoration: none;
        background-color: #008000;
        color: white;
        font-weight: 300;
        font-size: 20px;
    }

    .product_heading {
        margin-top: 20px;
        font-size: 40px;
        font-weight: 500;
    }

    .product_price {
        margin-top: 26px;
        font-size: 20px;
        font-weight: 300 !important;
    }

    .product_price span {
        margin-top: 26px;
        font-size: 16px;
        color: #8A8A8A;
    }

    .product_description {
        margin-bottom: 20px;
    }

    .addto_cart {}

    .quantity {
        display: flex;
        align-items: center;
        justify-content: start;
        padding: 0;
    }

    .quantity__minus,
    .quantity__plus {
        display: block;
        width: 22px;
        height: 23px;
        margin: 0;
        background: white;
        text-decoration: none;
        text-align: center;
        line-height: 23px;
    }

    .quantity__minus:hover,
    .quantity__plus:hover {
        background: #575b71;
        color: #fff;
    }

    .quantity__minus {
        border-radius: 3px 0 0 3px;
    }

    .quantity__plus {
        border-radius: 0 3px 3px 0;
    }

    .quantity__input {
        width: 32px;
        height: 19px;
        margin: 0;
        padding: 0;
        text-align: center;
        border-top: 2px solid #dee0ee;
        border-bottom: 2px solid #dee0ee;
        border-left: 1px solid #dee0ee;
        border-right: 2px solid #dee0ee;
        background: #fff;
        color: #8184a1;
    }

    .quantity__minus:link,
    .quantity__plus:link {
        color: #8184a1;
    }

    .quantity__minus:visited,
    .quantity__plus:visited {
        color: #fff;
    }

    .add_product {
        border: none;
        text-decoration: none;
        background-color: black;
        border-radius: 7px;
        color: white;
        font-weight: 300;
        font-size: 15px;
        width: 67%;
        margin-left: 2%;
        padding-top: 3px;
        padding-bottom: 3px;
    }

    .buy_product {
        border: none;
        text-decoration: none;
        background-color: black;
        border-radius: 7px;
        color: white;
        font-weight: 300;
        font-size: 15px;
        width: 100%;
        margin-top: 15px;
        padding-top: 8px;
        padding-bottom: 8px;
    }

    .content_verify {
        margin-top: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .icon_verify {
        color: #008000;
        font-size: 24px;

    }

    .detail {}

    .tag {
        font-size: 13px;
        margin-top: 3%;
    }

    .tag_name {
        background-color: white;
        border: 1px solid black;
        padding: 3px 35px;
    }

    .tab_content {
        margin-top: 50px;
        margin-left: 0 !important;
        padding-left: 0;
    }

    .head_tab {
        margin-top: 20px;
        background-color: white;
        border: 1px solid black;
        padding: 3px 35px;
    }

    .nav-pills a {
        background-color: white;
        text-decoration: none;
        border: 1px solid black;
        width: 100%;
        padding: 10px 20px;
        color: #000000;
    }

    /* กำหนดสีพื้นหลังของแท็บที่เลือก */
    .nav-pills .active a {
        background-color: black;
        color: white;
    }


    .tab-pane p {
        margin-top: 40px;
        font-family: Arial, sans-serif;

        color: #000000;
    }

    .line {
        margin-top: 9px;
        border-width: 1px;
        border-color: black !important;
        opacity: 1;
    }

    
</style>

<section>
    <div class="container mt-5">
        <div class="row">

            <div class="col-sm-12 col-md-7">
                <img class="product_picture" src="<?php echo base_url('/assets/img/product1.png'); ?>" alt="product"
                    width="50%">
            </div>

            <div class="detail_price col-sm-12 col-md-5">
                <button class="product_stock">In Stock</button>
                <div class="product_heading">Nike Air Force</div>
                <div class="product_price"><span><strike>9.99</strike></span> 7.99 USD</div>
                <hr>
                <p class="product_description">Cras id felis tincidunt, molestie lacus ac, lobortis nisl. Nam
                    scelerisque eget mauris sed venenatis. Sed laoreet non velit nec volutpat. Fusce feugiat ornare
                    purus. Nulla tempor nibh gravida dapibus commodo.</p>
                <div class="addto_cart">
                    <div class="quantity">
                        &ensp; &ensp;QTY :
                        <a href="#" class="quantity__minus"><span>-</span></a>
                        <input name="quantity" type="text" class="quantity__input" value="1">
                        <a href="#" class="quantity__plus"><span>+</span></a>
                        <button class="add_product">Add To Cart</button>
                    </div>
                </div>
                <div class="">
                    <button class="buy_product">Buy Now</button>
                </div>

                <div class="content_verify">
                    <i class="fa-solid icon_verify fa-circle-check"></i>
                    &ensp;&ensp;Verify Product&ensp;&ensp;
                    <i class="fa-solid icon_verify fa-truck"></i>
                    &ensp;&ensp;Fast-Delivery

                </div>
            </div>

            <div class="detail">
                <div class="tag">
                    TAGS : &ensp;<button class="tag_name">NIKE</button>
                </div>
                <div id="exTab3" class="tab_content">
                    <ul class="nav nav-pills">
                        <li class="nav_button nav-pills active">
                            <a href="#1b" data-toggle="tab">DESCRIPTION</a>
                        </li>
                        <li class="nav_button nav-pills">
                            <a href="#2b" data-toggle="tab">PRODUCT DETAIL</a>
                        </li>
                        <li class="nav_button nav-pills">
                            <a href="#3b" data-toggle="tab">HOW TO GUIDE</a>
                        </li>

                    </ul>
                    <hr class="line">
                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="1b">
                            <p>Donec sit amet faucibus ligula, sed pulvinar dui. Nulla magna leo, efficitur quis est
                                at, congue suscipit tellus. Ut vitae leo at lectus vulputate tempus. Aliquam sit amet
                                elementum enim, quis sagittis nibh. Proin in pretium justo, ac pellentesque metus. Morbi
                                eget augue consectetur, semper elit eget, dapibus elit. Praesent suscipit ut odio quis
                                tincidunt. Nam et risus eleifend, pretium diam sit amet, gravida odio. Fusce malesuada
                                nunc sit amet eros tincidunt, ut ultrices diam vehicula. Fusce tempus luctus mi nec
                                suscipit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                turpis egestas. Duis lacinia odio lorem, sed efficitur metus euismod vitae. Donec
                                scelerisque dignissim vestibulum. Suspendisse scelerisque nunc nisi, nec varius turpis
                                dignissim ac. Vestibulum pretium tellus malesuada dui laoreet malesuada. Fusce mattis
                                commodo dui, sit amet dictum nunc.
                            </p>
                        </div>
                        <div class="tab-pane" id="2b">
                            <p>We use the class nav-pills instead of nav-tabs which automatically creates a background
                                color for the tab</p>
                        </div>
                        <div class="tab-pane" id="3b">
                            <p>We applied clearfix to the tab-content to rid of the gap between the tab and the content
                            </p>
                        </div>

                    </div>



                </div>
            </div>
        </div>
</section>

<script>
    $(document).ready(function () {
        const minus = $('.quantity__minus');
        const plus = $('.quantity__plus');
        const input = $('.quantity__input');
        minus.click(function (e) {
            e.preventDefault();
            var value = input.val();
            if (value > 1) {
                value--;
            }
            input.val(value);
        });

        plus.click(function (e) {
            e.preventDefault();
            var value = input.val();
            value++;
            input.val(value);
        })
    });


    <script>

        const tabLinks = document.querySelectorAll('.nav-pills a');
    tabLinks.forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault();

                // เคลียร์สีพื้นหลังแท็บทั้งหมด
                tabLinks.forEach(link => {
                    link.parentNode.classList.remove('active');
                });

                // กำหนดสีพื้นหลังและสีตัวอักษรของแท็บที่ถูกคลิก
                this.parentNode.classList.add('active');

                // เปิดแท็บที่เกี่ยวข้อง
                const target = this.getAttribute('href');
                const tabContent = document.querySelector(target);
                const allTabContent = document.querySelectorAll('.tab-pane');
                allTabContent.forEach(content => {
                    content.classList.remove('active');
                });
                tabContent.classList.add('active');
            });
    });
</script>

</script>
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

    .product_outstock {
        border: none;
        text-decoration: none;
        background-color: red;
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
                <img class="product_picture" src="<?php echo $result_list[0]->thumbnail ?>" alt="product" width="50%">
            </div>

            <div class="detail_price col-sm-12 col-md-5">
                <?php if ($result_list[0]->stock >= 1) { ?>
                    <button class="product_stock">In Stock</button>
                <?php } else { ?>
                    <button class="product_outstock">Out of Stock</button>
                <?php } ?>

                <div class="product_heading">
                    <?php echo $result_list[0]->title ?>
                </div>
                <div class="product_price"><span><strike><?php echo $result_list[0]->price ?></strike></span>&ensp;<?php echo number_format($result_list[0]->price-(($result_list[0]->price*$result_list[0]->discountPercentage)/100),2)  ?></div>
                <hr>
                <p class="product_description"><?php echo $result_list[0]->description ?></p>
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
                    TAGS : &ensp;<button class="tag_name"><?php echo $result_list[0]->brand ?></button>
                </div>
                <div id="exTab3" class="tab_content">
                    <ul class="nav nav-pills">
                        <li class="nav_button nav-pills active">
                            <a href="#description" data-toggle="tab">DESCRIPTION</a>
                        </li>
                        <li class="nav_button nav-pills">
                            <a href="#product_detail" data-toggle="tab">PRODUCT DETAIL</a>
                        </li>
                        <li class="nav_button nav-pills">
                            <a href="#howtoguide" data-toggle="tab">HOW TO GUIDE</a>
                        </li>

                    </ul>
                    <hr class="line">
                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="description">
                            <p><?php echo $result_list[0]->description ?></p>
                        </div>
                        <div class="tab-pane" id="product_detail">
                            <p>We use the class nav-pills instead of nav-tabs which automatically creates a background
                                color for the tab</p>
                        </div>
                        <div class="tab-pane" id="howtoguide">
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


   

</script>
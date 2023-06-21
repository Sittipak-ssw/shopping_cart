<style>
    .heading {
        font-size: 30px;
        font-weight: 700;
        padding-top: 20px;

    }

    .product_content {
        margin: auto;
    }

    .product_content a {
        color: black;
        text-decoration: none;
    }

    .product_picture {
        border-radius: 5%;
        width: 100%;
    }

    .product_title {
        padding-top: 24px;
        font-weight: 700;
    }

    .product_price {
        font-size: 15px;
        font-weight: 400;
    }

    .navi_page,
    .navi_page:hover {
        margin-left: 15px;
        margin-right: 15px;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #BDBDBD;
        font-size: 20px;
        font-weight: 800;
    }

    .navi_page .active {
        background-color: #008000;
        color: white;
    }
</style>

<section>
    <div class="container">
        <div class="row">
            <h1 class="heading">All Brands</h1>
            <div class="container">
                <div class="col-12 content mt-3">
                    <div class="row justify-content-center">

                        <?php foreach ($result->products as $key => $product_list) { ?>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 product_content mx-auto pt-4">
                                <a href="<?php echo base_url('products/products_detail/') . $product_list->id ?>">
                                    <img class="product_picture" src="<?php echo $product_list->thumbnail ?>" alt="product">
                                    <div class="product_title"><?php echo $product_list->title ?></div>
                                    <div class="product_price"><?php echo $product_list->price ?></div>

                                </a>
                            </div>
                        <?php } ?>


                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center mt-5">
                                <li class="page-item disabled">
                                    <a class="page-link navi_page" href="#" tabindex="-1" aria-disabled="true">
                                        <</a>
                                </li>
                                <li class="page-item"><a class="page-link navi_page" href="#">1</a></li>
                                <li class="page-item"><a class="page-link navi_page" href="#">2</a></li>
                                <li class="page-item"><a class="page-link navi_page" href="#">3</a></li>
                                <li class="page-item ">
                                    <a class="page-link navi_page" href="#">></a>
                                </li>
                            </ul>
                        </nav>




                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@extends('master')

@section('content')
<!-- hero section -->
<div class="hero">
    <div class="slider">
        <div class="container">
            <!-- slide item -->
            <div class="slide active">
                <div class="info">
                    <div class="info-content">
                        <h3 class="top-down">
                            JBL TUNE 750TNC
                        </h3>
                        <h2 class="top-down trans-delay-0-2">
                            Next-gen design
                        </h2>
                        <p class="top-down trans-delay-0-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolor commodi dignissimos culpa, eaque eos necessitatibus possimus veniam, cupiditate rerum deleniti? Libero, ducimus error? Beatae velit dolore sint explicabo! Fugit.
                        </p>
                        <div class="top-down trans-delay-0-6">
                            <button class="btn-flat btn-hover">
                                <span>shop now</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="img top-down">
                    <img src="../web/images/JBL_E55BT_KEY_RED_6063_FS_x1-1605x1605px.webp" alt="">
                </div>
            </div>
            <!-- end slide item -->
            <!-- slide item -->
            <div class="slide">
                <div class="info">
                    <div class="info-content">
                        <h3 class="top-down">
                            JBL Quantum ONE
                        </h3>
                        <h2 class="top-down trans-delay-0-2">
                            Ipsum dolor
                        </h2>
                        <p class="top-down trans-delay-0-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A optio, voluptatum aperiam nobis quis maxime corporis porro alias soluta sunt quae consectetur aliquid blanditiis perspiciatis labore cumque, ullam, quam eligendi!
                        </p>
                        <div class="top-down trans-delay-0-6">
                            <button class="btn-flat btn-hover">
                                <span>shop now</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="img right-left">
                    <img src="../web/images/JBL_E55BT_KEY_BLACK_6175_FS_x1-1605x1605px.png" alt="">
                </div>
            </div>
            <!-- end slide item -->
            <!-- slide item -->
            <div class="slide">
                <div class="info">
                    <div class="info-content">
                        <h3 class="top-down">
                            JBL JR 310BT
                        </h3>
                        <h2 class="top-down trans-delay-0-2">
                            Consectetur Elit
                        </h2>
                        <p class="top-down trans-delay-0-4">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo aut fugiat, libero magnam nemo inventore in tempora beatae officiis temporibus odit deserunt molestiae amet quam, asperiores, iure recusandae nulla labore!
                        </p>
                        <div class="top-down trans-delay-0-6">
                            <button class="btn-flat btn-hover">
                                <span>shop now</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="img left-right">
                    <img src="../web/images/JBL_JR 310BT_Product Image_Hero_Skyblue.png" alt="">
                </div>
            </div>
            <!-- end slide item -->
        </div>
        <!-- slider controller -->
        <button class="slide-controll slide-next">
            <i class='bx bxs-chevron-right'></i>
        </button>
        <button class="slide-controll slide-prev">
            <i class='bx bxs-chevron-left'></i>
        </button>
        <!-- end slider controller -->
    </div>
</div>
<!-- end hero section -->

<!-- promotion section -->
<div class="promotion">
    <div class="row">
        <div class="col-4 col-md-12 col-sm-12">
            <div class="promotion-box">
                <div class="text">
                    <h3>Headphone & Earbuds</h3>
                    <button class="btn-flat btn-hover"><span>shop collection</span></button>
                </div>
                <img src="../web/images/JBLHorizon_001_dvHAMaster.png" alt="">
            </div>
        </div>
        <div class="col-4 col-md-12 col-sm-12">
            <div class="promotion-box">
                <div class="text">
                    <h3>JBL Quantum Series</h3>
                    <button class="btn-flat btn-hover"><span>shop collection</span></button>
                </div>
                <img src="../web/images/kisspng-beats-electronics-headphones-apple-beats-studio-red-headphones.png" alt="">
            </div>
        </div>
        <div class="col-4 col-md-12 col-sm-12">
            <div class="promotion-box">
                <div class="text">
                    <h3>True Wireless Earbuds</h3>
                    <button class="btn-flat btn-hover"><span>shop collection</span></button>
                </div>
                <img src="../web/images/JBL_TUNE220TWS_ProductImage_Pink_ChargingCaseOpen.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- end promotion section -->

<!-- product list -->
<div class="section">
    <div class="container">
        <div class="section-header">
            <h2>Wireless product</h2>
        </div>
        <div class="row" id="latest-products">
            <div class="col-3 col-md-6 col-sm-12">
                <div class="product-card">
                    <div class="product-card-img">
                        <img src="../web/images/JBL_Quantum_400_Product Image_Hero 02.png" alt="">
                        <img src="../web/images/JBL_Quantum_400_Product Image_Hero Mic Up.webp" alt="">
                    </div>
                    <div class="product-card-info">
                        <div class="product-btn">
                            <button class="btn-flat btn-hover btn-shop-now">shop now</button>
                            <button class="btn-flat btn-hover btn-cart-add">
                                <i class='bx bxs-cart-add'></i>
                            </button>
                            <button class="btn-flat btn-hover btn-cart-add">
                                <i class='bx bxs-heart'></i>
                            </button>
                        </div>
                        <div class="product-card-name">
                            JBL Quantum 400
                        </div>
                        <div class="product-card-price">
                            <span><del>$300</del></span>
                            <span class="curr-price">$200</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-footer">
            <a href="./products.html" class="btn-flat btn-hover">view all</a>
        </div>
    </div>
</div>
<!-- end product list -->
<div class="section">
    <div class="container">
        <div class="section-header">
            <h2>Inear Headphone</h2>
        </div>
        <div class="row" id="latest-products">
            <div class="col-3 col-md-6 col-sm-12">
                <div class="product-card">
                    <div class="product-card-img">
                        <img src="../web/images/JBL_Quantum_400_Product Image_Hero 02.png" alt="">
                        <img src="../web/images/JBL_Quantum_400_Product Image_Hero Mic Up.webp" alt="">
                    </div>
                    <div class="product-card-info">
                        <div class="product-btn">
                            <button class="btn-flat btn-hover btn-shop-now">shop now</button>
                            <button class="btn-flat btn-hover btn-cart-add">
                                <i class='bx bxs-cart-add'></i>
                            </button>
                            <button class="btn-flat btn-hover btn-cart-add">
                                <i class='bx bxs-heart'></i>
                            </button>
                        </div>
                        <div class="product-card-name">
                            JBL Quantum 400
                        </div>
                        <div class="product-card-price">
                            <span><del>$300</del></span>
                            <span class="curr-price">$200</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-footer">
            <a href="./products.html" class="btn-flat btn-hover">view all</a>
        </div>
    </div>
</div>
<!-- end product list -->
<div class="section">
    <div class="container">
        <div class="section-header">
            <h2>overear headphone</h2>
        </div>
        <div class="row" id="latest-products">
            <div class="col-3 col-md-6 col-sm-12">
                <div class="product-card">
                    <div class="product-card-img">
                        <img src="../web/images/JBL_Quantum_400_Product Image_Hero 02.png" alt="">
                        <img src="../web/images/JBL_Quantum_400_Product Image_Hero Mic Up.webp" alt="">
                    </div>
                    <div class="product-card-info">
                        <div class="product-btn">
                            <button class="btn-flat btn-hover btn-shop-now">shop now</button>
                            <button class="btn-flat btn-hover btn-cart-add">
                                <i class='bx bxs-cart-add'></i>
                            </button>
                            <button class="btn-flat btn-hover btn-cart-add">
                                <i class='bx bxs-heart'></i>
                            </button>
                        </div>
                        <div class="product-card-name">
                            JBL Quantum 400
                        </div>
                        <div class="product-card-price">
                            <span><del>$300</del></span>
                            <span class="curr-price">$200</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-footer">
            <a href="./products.html" class="btn-flat btn-hover">view all</a>
        </div>
    </div>
</div>
<!-- end product list -->
<div class="section">
    <div class="container">
        <div class="section-header">
            <h2>sport headphone</h2>
        </div>
        <div class="row" id="latest-products">
            <div class="col-3 col-md-6 col-sm-12">
                <div class="product-card">
                    <div class="product-card-img">
                        <img src="../web/images/JBL_Quantum_400_Product Image_Hero 02.png" alt="">
                        <img src="../web/images/JBL_Quantum_400_Product Image_Hero Mic Up.webp" alt="">
                    </div>
                    <div class="product-card-info">
                        <div class="product-btn">
                            <button class="btn-flat btn-hover btn-shop-now">shop now</button>
                            <button class="btn-flat btn-hover btn-cart-add">
                                <i class='bx bxs-cart-add'></i>
                            </button>
                            <button class="btn-flat btn-hover btn-cart-add">
                                <i class='bx bxs-heart'></i>
                            </button>
                        </div>
                        <div class="product-card-name">
                            JBL Quantum 400
                        </div>
                        <div class="product-card-price">
                            <span><del>$300</del></span>
                            <span class="curr-price">$200</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-footer">
            <a href="./products.html" class="btn-flat btn-hover">view all</a>
        </div>
    </div>
</div>
<!-- end product list -->





@endsection

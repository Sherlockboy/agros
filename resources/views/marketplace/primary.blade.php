@extends('layouts.app')

@section('content')
    <section>
        <img class="breadcrumb_shap" style="height: 500px; width: 100%; margin-top:85px; object-fit: cover;"
            src="{{ asset('media/bazar.jpg') }}" alt="">
        <div class="container mt-5 mb-5">
            <div class="breadcrumb_content text-center">
                <h1 class="f_p f_700 f_size_50 l_height50 mb_20">Goods produced by Farmers</h1>
                <p class="f_400 f_size_16 l_height26">Why I say old chap that is spiffing off his nut arse pear
                    shaped plastered<br> Jeffrey bodge barney some dodgy.!!</p>
            </div>
        </div>
    </section>
    <div class="hr"></div>
    <section class="shop_grid_area pb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-5">
                    <div class="shop_menu_left">
                        <p>Showing 1–14 of 22 results</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-7">
                    <div class="shop_menu_right d-flex align-items-center justify-content-end">
                        <h5>Sort by </h5>
                        <form method="get" action="#">
                            <select class="selectpickers">
                                <option value="menu_order">Default Sorting</option>
                                <option value="popularity">Popularity</option>
                                <option value="rating">Average rating</option>
                                <option value="date">Feature</option>
                                <option value="date">Newness</option>
                            </select>
                        </form>
                        <div class="view-style shop_grid">
                            <div class="list-style">
                                <a href="#"><i class="ti-layout-grid2"></i></a>
                            </div>
                            <div class="grid-style active">
                                <a href="#"><i class="ti-menu-alt"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4">
                    <div class="single_product_item">
                        <div class="product_img">
                            <img class="img-fluid" src="{{ asset('media/karam.jpg') }}" alt="">
                            <div class="hover_content">
                                <a href="#"><i class="ti-heart"></i></a>
                                <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                <a href="#"><i class="ti-eye"></i></a>
                            </div>
                        </div>
                        <div class="single_pr_details">
                            <a href="#">
                                <h3 class="f_p f_500 f_size_16">Linear Stem Cushion</h3>
                            </a>
                            <div class="price">
                                <del><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                <ins><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                            </div>
                            <div class="ratting">
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="single_product_item">
                        <div class="product_img">
                            <img class="img-fluid" src="{{ asset('media/loviya.jpg') }}" alt="">
                            <div class="hover_content">
                                <a href="#"><i class="ti-heart"></i></a>
                                <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                <a href="#"><i class="ti-eye"></i></a>
                            </div>
                        </div>
                        <div class="single_pr_details">
                            <a href="#">
                                <h3 class="f_p f_500 f_size_16">Linear Stem Cushion</h3>
                            </a>
                            <div class="price">
                                <del><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                <ins><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                            </div>
                            <div class="ratting">
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="single_product_item">
                        <div class="product_img">
                            <img class="img-fluid" src="{{ asset('media/tomato.jpg') }}" alt="">
                            <div class="hover_content">
                                <a href="#"><i class="ti-heart"></i></a>
                                <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                <a href="#"><i class="ti-eye"></i></a>
                            </div>
                        </div>
                        <div class="single_pr_details">
                            <a href="#">
                                <h3 class="f_p f_500 f_size_16">Linear Stem Cushion</h3>
                            </a>
                            <div class="price">
                                <del><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                <ins><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                            </div>
                            <div class="ratting">
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="single_product_item">
                        <div class="product_img">
                            <img class="img-fluid" src="{{ asset('media/carrot.jpg') }}" alt="">
                            <div class="hover_content">
                                <a href="#"><i class="ti-heart"></i></a>
                                <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                <a href="#"><i class="ti-eye"></i></a>
                            </div>
                        </div>
                        <div class="single_pr_details">
                            <a href="#">
                                <h3 class="f_p f_500 f_size_16">Linear Stem Cushion</h3>
                            </a>
                            <div class="price">
                                <del><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                <ins><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                            </div>
                            <div class="ratting">
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="single_product_item">
                        <div class="product_img">
                            <img class="img-fluid" src="{{ asset('media/tomato.jpg') }}" alt="">
                            <div class="hover_content">
                                <a href="#"><i class="ti-heart"></i></a>
                                <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                <a href="#"><i class="ti-eye"></i></a>
                            </div>
                        </div>
                        <div class="single_pr_details">
                            <a href="#">
                                <h3 class="f_p f_500 f_size_16">Linear Stem Cushion</h3>
                            </a>
                            <div class="price">
                                <del><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                <ins><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                            </div>
                            <div class="ratting">
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="single_product_item">
                        <div class="product_img">
                            <img class="img-fluid" src="{{ asset('media/potato.jpg') }}" alt="">
                            <div class="hover_content">
                                <a href="#"><i class="ti-heart"></i></a>
                                <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                <a href="#"><i class="ti-eye"></i></a>
                            </div>
                        </div>
                        <div class="single_pr_details">
                            <a href="#">
                                <h3 class="f_p f_500 f_size_16">Linear Stem Cushion</h3>
                            </a>
                            <div class="price">
                                <del><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                <ins><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                            </div>
                            <div class="ratting">
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="single_product_item">
                        <div class="product_img">
                            <img class="img-fluid" src="{{ asset('media/carrot.jpg') }}" alt="">
                            <div class="hover_content">
                                <a href="#"><i class="ti-heart"></i></a>
                                <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                <a href="#"><i class="ti-eye"></i></a>
                            </div>
                        </div>
                        <div class="single_pr_details">
                            <a href="#">
                                <h3 class="f_p f_500 f_size_16">Linear Stem Cushion</h3>
                            </a>
                            <div class="price">
                                <del><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                <ins><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                            </div>
                            <div class="ratting">
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <div class="single_product_item">
                        <div class="product_img">
                            <img class="img-fluid" src="{{ asset('media/balgar.jpg') }}" alt="">
                            <div class="hover_content">
                                <a href="#"><i class="ti-heart"></i></a>
                                <a href="#" title="Add to cart"><i class="ti-bag"></i></a>
                                <a href="#"><i class="ti-eye"></i></a>
                            </div>
                        </div>
                        <div class="single_pr_details">
                            <a href="#">
                                <h3 class="f_p f_500 f_size_16">Linear Stem Cushion</h3>
                            </a>
                            <div class="price">
                                <del><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                                <ins><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                            </div>
                            <div class="ratting">
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hr"></div>
                <div class="col-lg-12">
                    <ul class="list-unstyled page-numbers shop_page_number">
                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="next page-numbers" href="#"><i class="ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

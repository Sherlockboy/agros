@extends('layouts.app')

@section('content')
    <section class="product_details_area bg_color sec_pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product_slider">
                        <div class="pr_image owl-carousel">
                            <div class="item">
                                <img src="{{ asset('media/fertilizers.png') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('media/fertilizer-1.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('media/fertilizer-2.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('media/fertilizer-3.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pr_details">
                        <a href="#" class="pr_title f_size_22 f_500 f_p">
                            AppArt - App Landing Theme
                        </a>
                        <div class="ratting review">
                            <div class="star-rating">
                            </div>
                            <a href="#reviews" class="woocommerce-review-link" rel="nofollow">
                                <span class="count">2</span> Review
                            </a>
                        </div>
                        <div class="price">
                            <del><span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>18.00</span></del>
                            <ins><span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>16.00</span></ins>
                        </div>
                        <span class="stock">in stock</span>
                        <p class="f_400 f_size_15">The full monty brilliant young delinquent burke naff baking cakes the
                            wireless argy-bargy smashing, squiffy chimney pot I he nicked it twit brolly spend a penny he
                            legged it, cup of tea is ruddy grub.!</p>
                        <div class="product-qty">
                            <button class="ar_top" type="button"><i class="ti-angle-up"></i></button>
                            <input type="number" name="qty" id="qty" value="1" title="Quantity:" class="manual-adjust">
                            <button class="ar_down" type="button"><i class="ti-angle-down"></i></button>
                        </div>
                        <div class="cart_button">
                            <a href="#" class="cart_btn">Add to Cart</a>
                            <a href="#" class="wish_list" data-toggle="tooltip" data-placement="top"
                                title="ADD WISH LIST"><i class="ti-heart"></i></a>
                        </div>
                        <div class="pr_footer mt_40 mb-30">
                            <ul class="product_meta list-unstyled">
                                <li><span>SKU:</span>SaLD445</li>
                                <li><span>Category:</span>website,app,saasland</li>
                                <li><span>Tags:</span><a href="#">app,</a><a href="#">web,</a><a href="#">landing page</a>
                                </li>
                            </ul>
                            <div class="share-link">
                                <label>Share ON: </label>
                                <ul class="social-icon list-unstyled">
                                    <li><a class="facebook" title="Facebook" href="#"><i class="ti-facebook">
                                            </i></a></li>
                                    <li><a class="twitter" title="Twitter" href="#"><i class="ti-twitter">
                                            </i></a></li>
                                    <li><a class="linkedin" title="Linkedin" href="#"><i class="ti-pinterest">
                                            </i></a></li>
                                    <li><a class="rss" title="RSS" href="#"><i class="ti-linkedin"> </i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pr_details_area">
        <div class="container">
            <div class="product_info_details">
                <ul class="nav nav-tabs pr_tab mb_50" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab"
                            aria-controls="description" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab"
                            aria-controls="review" aria-selected="false">Reviews (1)</a>
                    </li>
                </ul>
                <div class="tab-content service_tab_content" id="myTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel"
                        aria-labelledby="description-tab">
                        <div class="aditional_info">
                            <h6 class="f_p f_500 f_size_18 mb_20">Introduction</h6>
                            <p class="f_p f_size_15 f_400">Why I say old chap that is spiffing fantastic cockup arse over
                                tit butty baking cakes, up the kyver the BBC golly gosh morish it's all gone to pot blatant
                                A bit of how's your father knackered ruddy tinkety tonk old fruit I. My lady some dodgy chav
                                hunky-dory gosh blow off golly gosh the little rotter twit say cack cockup are you taking
                                the piss.!</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                        <ul class="comment-box list-unstyled mb_60">
                            <li class="post-comment">
                                <div class="comment-content">
                                    <a href="#" class="avatar"><img src="{{ asset('media/balgar.jpg') }}"
                                            alt="review-img"></a>
                                    <div class="post-body">
                                        <div class="comment-header">
                                            <a href="#">Penny Tool</a>2 days ago
                                        </div>
                                        <div class="ratting">
                                            <a href="#"><i class="icon_star"></i></a>
                                            <a href="#"><i class="icon_star"></i></a>
                                            <a href="#"><i class="icon_star"></i></a>
                                            <a href="#"><i class="icon_star"></i></a>
                                            <a href="#"><i class="icon_star"></i></a>
                                        </div>
                                        <p class="f_p f_size_15 f_400">Dis congue ultricies iste repellat tincidunt viverra
                                            dui iure quas tristique augue aute nam?</p>
                                        <div class="hr mt_30 mb-0"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="car_get_quote_content comments_form">
                            <h2 class="f_500 f_p f_size_18 mb_20">Add your Review</h2>
                            <form class="get_quote_form row" action="#" method="post">
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" id="name" placeholder="NAME">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" id="email" placeholder="EMAIL">
                                </div>
                                <div class="col-md-12 form-group mb-0">
                                    <textarea class="form-control message" placeholder="MESSAGE"></textarea>
                                </div>
                                <div class="col-md-12 mt_30">
                                    <div class="ratting float-left">
                                        <span>Your Rating:</span>
                                        <a href="#"><i class="icon_star"></i></a>
                                        <a href="#"><i class="icon_star"></i></a>
                                        <a href="#"><i class="icon_star"></i></a>
                                        <a href="#"><i class="icon_star"></i></a>
                                        <a href="#"><i class="icon_star"></i></a>
                                    </div>
                                    <button class="agency_banner_btn" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shop_grid_area sec_pad">
        <div class="container">
            <div class="sec_title text-center mb_70">
                <h2 class="f_p f_size_30 l_height50 f_600 t_color3">Related products</h2>
                <p class="f_400 f_size_16 mb-0">Bender cobblers chap grub sloshed up the duff I fantastic <br> owt to do
                    with me at public school.!</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-3 col-sm-4">
                    <div class="single_product_item">
                        <div class="product_img">
                            <img class="img-fluid" src="{{ asset('media/fertilizer-1.jpg') }}" alt="">
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
                            <img class="img-fluid" src="{{ asset('media/fertilizer-2.jpg') }}" alt="">
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
                            <img class="img-fluid" src="{{ asset('media/fertilizer-3.jpg') }}" alt="">
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
                            <img class="img-fluid" src="{{ asset('media/fertilizer-4.jpg') }}" alt="">
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
            </div>
        </div>
    </section>
@endsection

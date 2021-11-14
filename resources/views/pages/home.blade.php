@extends('layouts.app')

@section('content')
    <section class="support_home_area">
        <div class="banner_top" style="padding-top: 110px">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center">
                        <h2 class="f_p f_size_40 l_height60 wow fadeInUp" data-wow-delay="0.3s">Solid. Simple.<br>Built for
                            the
                            <span class="f_700">farm</span>
                        </h2>
                        <p class="f_size_18 l_height30 wow fadeInUp" data-wow-delay="0.5s">Agros manages all the phases of
                            agricultural processes.</p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <div class="support_home_img wow fadeInUp m-0" data-wow-delay="0.9s">
                            <img loading="lazy" src="media/hero-farmers.jpg" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="support_partner_logo_area">
        <div class="container">
            <h4 class="f_size_18 f_400 f_p text-center l_height28 mb_50">Market leaders use app to enrich their brand &amp;
                business.</h4>
            <div class="row partner_info align-items-center">
                <div class="logo_item pl-4 pr-4">
                    <a href="#"><img loading="lazy" src="https://uzinfocom.uz/img/logo.c1ee5acb.svg" alt=""></a>
                </div>
                <div class="logo_item pl-4 pr-4">
                    <a href="#"><img loading="lazy"
                            src="https://bepro.uz/wp-content/uploads/2019/03/logotype-horizontal.png" alt=""></a>
                </div>
                <div class="logo_item pl-4 pr-4">
                    <a href="#"><img loading="lazy" src="https://amity.uz/wp-content/uploads/2021/03/logo.png" alt=""></a>
                </div>
                <div class="logo_item pl-4 pr-4">
                    <a href="#"><img loading="lazy" src="https://uztelecom.uz/images/logo.svg" alt=""></a>
                </div>
                <div class="logo_item pl-4 pr-4">
                    <a href="#"><img loading="lazy" src="https://aloqabank.uz/images/logo.png" alt=""></a>
                </div>
            </div>
            <div class="border_bottom"></div>
        </div>
    </section>
    <section class="support_integration_area">
        <div class="container">
            <div class="sec_title text-center mb_70 wow fadeInUp" data-wow-delay="0.3s">
                <h2 class="f_p f_size_30 l_height50 f_600 t_color3">AgroS modules</h2>
                <p class="f_400 f_size_16 mb-0">Why I say old chap that is spiffing lavatory chip shop gosh off his nut,
                    smashing boot<br> are you taking the piss posh loo brilliant matie boy.!</p>
            </div>
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-md-10 col-sm-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <a href="{{ route('investment.index') }}" class="s_integration_item">
                                <div class="icon">
                                    <img src="img/Home-color/user.png" alt="">
                                </div>
                                <h5>Investment</h5>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <a href="{{ route('marketplace.primary') }}" class="s_integration_item">
                                <img src="img/new-home/metorik.png" alt="">
                                <h5>Marketplace</h5>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <a href="#" class="s_integration_item">
                                <img src="img/new-home/nicereply-1.png" alt="">
                                <h5>Tech Renting</h5>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <a href="#" class="s_integration_item">
                                <img src="img/new-home/kissmetrics.png" alt="">
                                <h5>Farm Management Software</h5>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <a href="#" class="s_integration_item">
                                <img src="img/new-home/webhooks.png" alt="">
                                <h5>Collobration</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-12">
                    <img class="integration_img" src="img/new-home/tree.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="software_promo_area sec_pad">
        <div class="container">
            <div class="sec_title text-center wow fadeInUp" data-wow-delay="0.3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <h2 class="f_p f_size_30 l_height50 f_600 t_color">Software Integrations</h2>
                <p class="f_400 f_size_18 l_height34">Why I say old chap that is spiffing lavatory chip shop gosh off his
                    nut, smashing boot<br> are you taking the piss posh loo brilliant matie boy.!</p>
            </div>
            <div class="round_shape mt_30">
                <div class="symbols-pulse active">
                    <div class="pulse-1"></div>
                    <div class="pulse-2"></div>
                    <div class="pulse-3"></div>
                    <div class="pulse-4"></div>
                    <div class="pulse-x"></div>
                </div>
                <div class="s_promo_info r_shape r_shape_five">
                    <span class="text promo_item">
                        <a href="#"><img loading="lazy" src="img/new-home/kissmetrics.png" alt=""></a>
                    </span>
                </div>
                <div class="s_promo_info">
                    <div class="promo_item item_one scroll_animation">
                        <div class="text">
                            <img loading="lazy" src="img/new-home/metorik.png" alt="">
                        </div>
                    </div>
                    <div class="promo_item item_two scroll_animation">
                        <div class="text">
                            <img loading="lazy" src="img/new-home/nicereply-1.png" alt="">
                        </div>
                    </div>
                    <div class="promo_item item_three scroll_animation">
                        <div class="text">
                            <img loading="lazy" src="img/Home-color/user.png" alt="">
                        </div>
                    </div>
                    <div class="promo_item item_four scroll_animation">
                        <div class="text">
                            <img loading="lazy" src="img/new-home/webhooks.png" alt="">
                        </div>
                    </div>
                    <div class="promo_item item_five scroll_animation bg-primary">
                        <div class="text">
                            <img loading="lazy" src="https://www.uzgps.uz/themes/uzgps/assets/images/footer-logo.png"
                                alt="">
                        </div>
                    </div>
                    <div class="promo_item item_six scroll_animation">
                        <div class="text">
                            <img loading="lazy" src="https://uztelecom.uz/images/logo.svg" alt="">
                        </div>
                    </div>
                    <div class="promo_item item_seven scroll_animation">
                        <div class="text">
                            <img loading="lazy" src="https://aloqabank.uz/images/logo.png" alt="">
                        </div>
                    </div>
                    <div class="promo_item item_eight scroll_animation">
                        <div class="text">
                            <img loading="lazy" src="https://data.gov.uz/img/logo.png" alt="">
                        </div>
                    </div>
                    <div class="promo_item item_nine scroll_animation">
                        <div class="text">
                            <img loading="lazy" src="https://uzinfocom.uz/img/logo.c1ee5acb.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="support_subscribe_area sec_pad">
        <img class="h_leaf one wow fadeInUp" data-wow-delay="0.4s" src="img/new-home/tree-left.png" alt="">
        <img class="h_leaf two wow fadeInUp" data-wow-delay="0.6s" src="img/new-home/tree-right.png" alt="">
        <div class="container">
            <div class="sec_title text-center mb_50 wow fadeInUp" data-wow-delay="0.3s">
                <h2 class="f_p f_size_30 l_height50 f_600 t_color3">Newsletter Personalized for You</h2>
            </div>
            <form action="#" class="support_subscribe mailchimp" method="post" novalidate="true">
                <input type="text" name="EMAIL" class="form-control memail" placeholder="E-Mail Address">
                <button class="btn btn-submit" type="submit"><i class="ti-arrow-right"></i></button>
                <p class="mchimp-errmessage" style="display: none;"></p>
                <p class="mchimp-sucmessage" style="display: none;"></p>
            </form>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('content')
    <section class="checkout_area bg_color sec_pad">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="checkout_content">
                        <div class="return_customer">
                            <i class="icon_error-circle_alt"></i>
                            Returning customer? <a data-toggle="collapse" href="#coupon" aria-expanded="false"
                                class="collapsed">Click here to login</a>
                        </div>
                        <div class="collapse tab_content" id="coupon">
                            <p class="f_p f_400">If you have shopped with us before, please enter your details
                                below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                            <div class="login_form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="text" class="form-control"
                                            placeholder="Username or Email">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" name="EMAIL" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="login_button">
                                            <input type="checkbox" value="None" id="squared1" name="check">
                                            <label class="l_text" for="squared1">Remember Me</label>
                                            <button class="btn login_btn" type="submit">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="return_customer">
                            <i class="icon_error-circle_alt"></i>
                            Have a coupon? <a data-toggle="collapse" href="#coupon_two" aria-expanded="false"
                                class="collapsed">Click here to enter your code</a>
                        </div>
                        <div class="collapse tab_content" id="coupon_two">
                            <p class="f_p f_400">If you have a coupon code, please apply it below.</p>
                            <div class="login_form coupon_form">
                                <input type="text" name="text" class="form-control" placeholder="Coupon code">
                                <button class="btn login_btn" type="submit">Applycoupon</button>
                            </div>
                        </div>
                        <h3 class="checkout_title f_p f_600 f_size_20 mb_40">
                            Billing Address
                        </h3>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Last Name">
                            </div>
                            <div class="col-md-12">
                                <input type="text" placeholder="Company Name (optional)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Country<abbr class="required" title="required">*</abbr></label>
                                <select class="selectpickers">
                                    <option value="menu_order">United Kingdom (UK)</option>
                                    <option value="popularity">United Kingdom (UK)</option>
                                    <option value="rating">Usa</option>
                                    <option value="date">Rsa</option>
                                    <option value="date">Canada</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Address<abbr class="required" title="required">*</abbr></label>
                                <input type="text" placeholder="House number and street name">
                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                <input type="text" placeholder="Town / City">
                                <select class="selectpickers">
                                    <option value="menu_order">District</option>
                                    <option value="popularity">Dhaka</option>
                                    <option value="rating">Usa</option>
                                    <option value="date">Rsa</option>
                                    <option value="date">Canada</option>
                                </select>
                                <input type="text" placeholder="Postcode / ZIP (optional)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Email address">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Phone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-20 mb-20">
                                <input type="checkbox" value="None" id="squared2" name="check">
                                <label class="l_text" for="squared2">create an account?</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>Order Notes</label>
                                <textarea placeholder="Notes about your arder, e.g. special notes for delivery"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt-20 mb-40">
                                <input type="checkbox" value="None" id="squared3" name="check">
                                <label class="l_text" for="squared3">Ship to a different address?</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cart_total_box">
                        <h3 class="checkout_title f_p f_600 f_size_20 mb_20">
                            Your order
                        </h3>
                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <table class="shop_table woocommerce-checkout-review-order-table">
                                <tbody>
                                    <tr class="order_item">
                                        <td>Critical Cycles Harper Single </td>
                                        <td class="price">$345.00</td>
                                    </tr>
                                    <tr class="order_item">
                                        <td>Sample Product Model</td>
                                        <td class="price">$270.00</td>
                                    </tr>
                                    <tr class="subtotal">
                                        <td class="price">Subtotal</td>
                                        <td class="price">$615.00</td>
                                    </tr>
                                    <tr class="subtotal">
                                        <td class="price">Shipping </td>
                                        <td>Free Shipping</td>
                                    </tr>
                                    <tr class="subtotal order">
                                        <td class="price">Order totals</td>
                                        <td class="total">$870.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <section class="mapbox">
                                <div id="mapBox" class="row m0" data-lat="40.701083" data-lon="-74.1522848"
                                    data-zoom="10" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                                    data-mlat="40.701083" data-mlon="-74.1522848">
                                </div>
                            </section>
                            <ul class="list-unstyled payment_list">
                                <li class="payment">
                                    <div class="radio-btn">
                                        <input type="checkbox" value="None" id="squaredsix" name="check">
                                        <label for="squaredsix"></label>
                                    </div>
                                    <h6>Direct Bank Transfer</h6>
                                    <div class="note">
                                        Make your payment directty into our bank account. Please use your Order ID as
                                        the payment reference. Your arder won't be shipped until the funds have cleared
                                        in our account.
                                    </div>
                                </li>
                                <li class="payment">
                                    <div class="radio-btn">
                                        <input type="checkbox" value="None" id="squaredseven" name="check">
                                        <label for="squaredseven"></label>
                                    </div>
                                    <h6>Check Payment</h6>
                                </li>
                                <li class="payment">
                                    <div class="radio-btn">
                                        <input type="checkbox" value="None" id="squaredeight" name="check">
                                        <label for="squaredeight"></label>
                                    </div>
                                    <h6>Cash on Delivery</h6>
                                </li>
                            </ul>
                            <div class="condition">
                                <p>Your personal data will be used to process your order, support your experience
                                    throughout this website, and for other purposes described in our privacy policy.</p>
                                <input type="checkbox" value="None" id="squarednine" name="check">
                                <label class="l_text" for="squarednine">I have read and agree to the website
                                    terms and conditions <span>*</span></label>
                            </div>
                            <button type="button" class="button" id="submit-btn">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCO2fJ8DfdyKRIvmxp96MAG6BeNiCX27lQ&callback=initMap">
    </script>
    <script src="{{ asset('js/gmaps.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- contact js -->
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            $('#submit-btn').on('click', function(e) {
                e.preventDefault();
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Your order successfully recorded!',
                    footer: '<a href="">Have a question?</a>'
                })
            })
        });
    </script>
@endsection

@extends('layouts.app')

@section('content')
    <section class="breadcrumb_area">
        <img class="breadcrumb_shap" src="{{ asset('img/breadcrumb/banner_bg.png') }}" alt="">
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1 class="f_p f_700 f_size_50 w_color l_height50 mb_20">Portfolio of Jeffery Way.</h1>
                <p class="f_400 w_color f_size_16 l_height26">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Distinctio, facere. Ex, iste quos earum, cumque consectetur, voluptates ab sit exercitationem doloribus
                    ea nihil maiores. Ab libero perferendis sed ratione aliquid.</p>
            </div>
        </div>
    </section>
    <section class="portfolio_details_area sec_pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="portfolio_details_gallery gallery_two">
                        <img class="img-fluid mb_20" src="{{ asset('media/portfolio-1.jpg') }}" alt="">
                        <img class="img-fluid mb_20" src="{{ asset('media/portfolio-2.jpg') }}" alt="">
                        <img class="img-fluid mb_20" src="{{ asset('media/portfolio-3.jpg') }}" alt="">
                        <img class="img-fluid mb_20" src="{{ asset('media/portfolio-4.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="portfolio_details_info pr_50 pl_100">
                        <h5 class="f_700 f_p f_size_20 t_color3 mb-30">Portfoil works</h5>
                        <p class="f_400 f_size_15 mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea
                            expedita quam odio, tempore inventore obcaecati distinctio alias recusandae architecto totam
                            rerum officia. Quod aliquam sed quibusdam voluptatem illum, molestias quisquam!
                        </p>
                        <div class="portfolio_category mt_60">
                            <div class="p_category_item mb-30">
                                <h6 class="f_p f_size_15 f_400 t_color3 mb-0 l_height28">Farmer: </h6>
                                <p class="f_size_15 f_400 mb-0">Jeffery Way</p>
                            </div>
                            <div class="p_category_item mb-30">
                                <h6 class="f_p f_size_15 f_400 t_color3 mb-0 l_height28">Date: </h6>
                                <p class="f_size_15 f_400 mb-0">March, 2018</p>
                            </div>
                            <div class="p_category_item mb-30">
                                <h6 class="f_p f_size_15 f_400 t_color3 mb-0 l_height28">Website: </h6>
                                <p class="f_size_15 f_400 mb-0">Jeffery-Way.com</p>
                            </div>
                            <div class="p_category_item mb-30">
                                <h6 class="f_p f_size_15 f_400 t_color3 mb-0 l_height28">Field: </h6>
                                <p class="f_size_15 f_400 mb-0">Farming and Gardening</p>
                            </div>
                            <div class="my-3">
                                <canvas id="farmer-background-chart"></canvas>
                            </div>
                            <div class="p_category_item">
                                <p class="f_400 f_size_15 mb-0">Share on</p>
                                <div class="social_icon">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter-alt"></i></a>
                                    <a href="#"><i class="ti-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio_pagination portfolio_pagination_two mt_100">
                            <a href="#" class="prev"><i class="ti-arrow-left"></i>Prev Farmer</a>
                            <a href="#" class="next">Next Farmer<i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
        var barChartData = {
            labels: [
                "Last 4 year",
                "Last 3 year",
                "Last 2 yera",
                "Last year",
                "This year",
            ],
            datasets: [{
                    label: "$ Invested",
                    backgroundColor: "pink",
                    borderColor: "red",
                    borderWidth: 1,
                    data: [3, 5, 6, 10, 8]
                },
                {
                    label: "$ Resturned",
                    backgroundColor: "lightblue",
                    borderColor: "blue",
                    borderWidth: 1,
                    data: [4, 7, 7, 10, 15]
                }
            ]
        };

        var chartOptions = {
            responsive: true,
            legend: {
                position: "top"
            },
            title: {
                display: true,
                text: "Past 5 year information"
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }

        window.onload = function() {
            var ctx = document.getElementById("farmer-background-chart").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: "bar",
                data: barChartData,
                options: chartOptions
            });
        };
    </script>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Zion Markets | Home</title>
    <script src="{{asset('frontend-asstets/assets/js/smooth-scroll.min.js')}}"></script>
    @include('user.partials.head')



</head>

<body>
    <!----------------------------------------top area start---------------------------------------->
    @include('user.partials.nav')
    <!----------------------------------------top area end---------------------------------------->

    <!--top slider start-->
    <section class="slider-area">
        <div  class="sliders owl-carousel wd_scroll_wrap">
            <div class="single-slider" id="Home"
                style="background-image: url({{asset('frontend-asstets/assets/image/banner/banner1.png')}});">

                <!--top slider animation start-->
                <div class="area">
                    <ul class="circles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <!--top slider animation end-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-slider-content">
                                <h1>Experience, Investment & Innovation</h1>
                                <p>Quantum Markets provides a full investment management solution for individuals and
                                    firms seeking to add value to their portfolios.</p>
                                <button> <a href="#">Request Information</a> <i class="ti-arrow-right"></i></button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider"
                style="background-image: url({{asset('frontend-asstets/assets/image/banner/banner2.png')}});">
                <!--top slider animation start-->
                <div class="area">
                    <ul class="circles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <!--top slider animation end-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-slider-content">

                                <h1>Experience, Investment & Innovation</h1>
                                <p>Quantum Markets provides a full investment management solution for individuals and
                                    firms seeking to add value to their portfolios.</p>
                                <button> <a href="#">Request Information</a> <i class="ti-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider"
                style="background-image: url({{asset('frontend-asstets/assets/image/banner/banner3.png')}});">
                <!--top slider animation start-->
                <div class="area">
                    <ul class="circles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <!--top slider animation end-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-slider-content">
                                <h1>Experience, Investment & Innovation</h1>
                                <p>Quantum Markets provides a full investment management solution for individuals and
                                    firms seeking to add value to their portfolios. </p>
                                <button> <a href="#">Request Information</a> <i class="ti-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--top slider end-->

    <!--main area start-->
    <main class="main-area">
        <!--Top-Features-start-->
        <div class="container" id="Features">
            <div class="row">
                <div class="Top-Features">
                    <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="left-features">
                            <div class="title">
                                <h2>
                                    OUR Features
                                </h2>
                            </div>
                            <div class="top-features-content">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries, but also the
                                    leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6  col-lg-12  col-md-12 col-sm-12">
                        <div class="right-features">
                            <div class="features-single-box" data-aos="flip-down" data-aos-duration="1000">
                                <img src="{{asset('frontend-asstets/assets/image/features/1.svg')}}" alt="">
                                <p>There is no setup fee, management fee or hidden costs. We will only get a share of
                                    your monthly profits which means we are biased to ensure we successfully deliver
                                    positive results. </p>
                            </div>
                            <div class="features-single-box" data-aos="flip-down" data-aos-duration="1000">
                                <img src="{{asset('frontend-asstets/assets/image/features/2.svg')}}" alt="">
                                <p>There is no lock-in period; you can withdraw your money whenever you want.</p>
                            </div>
                            <div class="features-single-box" data-aos="flip-down" data-aos-duration="1000">
                                <img src="{{asset('frontend-asstets/assets/image/features/3.svg')}}" alt="">
                                <p>We have a proven and verified track record that shows consistent returns month after
                                    month.</p>
                            </div>
                            <div class="features-single-box" data-aos="flip-down" data-aos-duration="1000">
                                <img src="{{asset('frontend-asstets/assets/image/features/4.svg')}}" alt="">
                                <p>We currently service over 150 clients globally including professional, retail and
                                    institutional clients.
                                    <p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Top-Features-end-->

        <!--Who-is-this-for-start-->
        <div class="top-wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#10122d" fill-opacity="1" d="M0,192L13.3,186.7C26.7,181,53,171,80,144C106.7,117,133,75,160,53.3C186.7,32,213,32,240,53.3C266.7,75,293,117,320,138.7C346.7,160,373,160,400,149.3C426.7,139,453,117,480,90.7C506.7,64,533,32,560,53.3C586.7,75,613,149,640,165.3C666.7,181,693,139,720,138.7C746.7,139,773,181,800,170.7C826.7,160,853,96,880,80C906.7,64,933,96,960,112C986.7,128,1013,128,1040,117.3C1066.7,107,1093,85,1120,90.7C1146.7,96,1173,128,1200,117.3C1226.7,107,1253,53,1280,37.3C1306.7,21,1333,43,1360,64C1386.7,85,1413,107,1427,117.3L1440,128L1440,320L1426.7,320C1413.3,320,1387,320,1360,320C1333.3,320,1307,320,1280,320C1253.3,320,1227,320,1200,320C1173.3,320,1147,320,1120,320C1093.3,320,1067,320,1040,320C1013.3,320,987,320,960,320C933.3,320,907,320,880,320C853.3,320,827,320,800,320C773.3,320,747,320,720,320C693.3,320,667,320,640,320C613.3,320,587,320,560,320C533.3,320,507,320,480,320C453.3,320,427,320,400,320C373.3,320,347,320,320,320C293.3,320,267,320,240,320C213.3,320,187,320,160,320C133.3,320,107,320,80,320C53.3,320,27,320,13,320L0,320Z"></path>
              </svg>
        </div>
        <section class="who-is-this-for-area pt-20 pb-50" style="
        background: #10122d;">
            <div class="container" id="ForYou">
                <div class="row">
                    <div class="title-dark">
                        <h2>
                            Who is this for
                        </h2>
                        <div class="title-content">
                            <p>From strategy creation to strategy optimisation, we ensure longevity in what we do.</p>
                        </div>
                    </div>
                </div>
                <div class="all-box-thisfor">
                    <div class="row">
                        <!--single-box-start-->
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-box-thisfor" data-aos="flip-down" data-aos-duration="1000">
                                <div class="thisfor-content-img">
                                    <img src="{{asset('frontend-asstets/assets/image/banner/who_is_this_for/1.svg')}}"
                                        alt="">
                                </div>
                                <div class="thisfor-content">
                                    <p>You know the potential of the markets but know where your limits are; be it in
                                        experience or emotional involvement when trading and prefer trading to be
                                        handled by professionals.</p>
                                </div>
                            </div>
                        </div>
                        <!--single-box-end-->
                        <!--single-box-start-->
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-box-thisfor" data-aos="flip-down" data-aos-duration="1000">
                                <div class="thisfor-content-img">
                                    <img src="{{asset('frontend-asstets/assets/image/banner/who_is_this_for/2.svg')}}"
                                        alt="">
                                </div>
                                <div class="thisfor-content">
                                    <p>You want to use your time on other endeavours and don’t have the time to analyse
                                        the markets 24/7.</p>
                                </div>
                            </div>
                        </div>
                        <!--single-box-end-->
                        <!--single-box-start-->
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-box-thisfor" data-aos="flip-down" data-aos-duration="1000">
                                <div class="thisfor-content-img">
                                    <img src="{{asset('frontend-asstets/assets/image/banner/who_is_this_for/3.svg')}}"
                                        alt="">
                                </div>
                                <div class="thisfor-content">
                                    <p>You understand that the market is setup for 98% of traders to fail. Usually, it
                                        is you against your OWN broker.</p>
                                </div>
                            </div>
                        </div>
                        <!--single-box-end-->
                        <!--single-box-start-->
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-box-thisfor" data-aos="flip-down" data-aos-duration="1000">
                                <div class="thisfor-content-img">
                                    <img src="{{asset('frontend-asstets/assets/image/banner/who_is_this_for/4.svg')}}"
                                        alt="">
                                </div>
                                <div class="thisfor-content">
                                    <p>Retail Investors, Professional Investors and Institutional Investors are all
                                        welcome.</p>
                                </div>
                            </div>
                        </div>
                        <!--single-box-end-->
                    </div>
                </div>
            </div>

        </section>
        <div class="top-wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#10122d" fill-opacity="1" d="M0,192L13.3,186.7C26.7,181,53,171,80,144C106.7,117,133,75,160,53.3C186.7,32,213,32,240,53.3C266.7,75,293,117,320,138.7C346.7,160,373,160,400,149.3C426.7,139,453,117,480,90.7C506.7,64,533,32,560,53.3C586.7,75,613,149,640,165.3C666.7,181,693,139,720,138.7C746.7,139,773,181,800,170.7C826.7,160,853,96,880,80C906.7,64,933,96,960,112C986.7,128,1013,128,1040,117.3C1066.7,107,1093,85,1120,90.7C1146.7,96,1173,128,1200,117.3C1226.7,107,1253,53,1280,37.3C1306.7,21,1333,43,1360,64C1386.7,85,1413,107,1427,117.3L1440,128L1440,0L1426.7,0C1413.3,0,1387,0,1360,0C1333.3,0,1307,0,1280,0C1253.3,0,1227,0,1200,0C1173.3,0,1147,0,1120,0C1093.3,0,1067,0,1040,0C1013.3,0,987,0,960,0C933.3,0,907,0,880,0C853.3,0,827,0,800,0C773.3,0,747,0,720,0C693.3,0,667,0,640,0C613.3,0,587,0,560,0C533.3,0,507,0,480,0C453.3,0,427,0,400,0C373.3,0,347,0,320,0C293.3,0,267,0,240,0C213.3,0,187,0,160,0C133.3,0,107,0,80,0C53.3,0,27,0,13,0L0,0Z"></path>
              </svg>
        </div>
        <!--Who-is-this-for-end-->


        <!--works-area-start-->
        <section class="works pt-50 pb-100 bgcolor text-center">
            <div class="container" id="Works">
                <div class="row">
                    <div class="title-dark">
                        <h2 style="
                       
                        display: inline-block;
                        padding: 8px 15px;">
                            How It Works
                        </h2>
                    </div>
                </div>
                <div class="all-work-box">
                    <div class="row">
                        <!--single-work-box-start-->
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-box-work" data-aos="flip-right" data-aos-duration="1000">
                                <div class="work-img">
                                    <img src="{{asset('frontend-asstets/assets/image/work_box/1.svg')}}" alt="">
                                </div>
                                <h4>
                                    Deposit
                                </h4>
                                <p>
                                    You will deposit funds into your own account with a regulated third-party broker
                                    which we will provide a referral ID for. </p>
                                <div class="box-number">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                        <!--single-work-box-end-->
                        <!--single-work-box-start-->
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-box-work" data-aos="flip-right" data-aos-duration="1000">
                                <div class="work-img">
                                    <img src="{{asset('frontend-asstets/assets/image/work_box/2.svg')}}" alt="">
                                </div>
                                <h4>
                                    Deposit
                                </h4>
                                <p>
                                    You will deposit funds into your own account with a regulated third-party broker
                                    which we will provide a referral ID for.</p>
                                <div class="box-number">
                                    <span>2</span>
                                </div>
                            </div>
                        </div>
                        <!--single-work-box-end-->
                        <!--single-work-box-start-->
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-box-work" data-aos="flip-right" data-aos-duration="1000">
                                <div class="work-img">
                                    <img src="{{asset('frontend-asstets/assets/image/work_box/3.svg')}}" alt="">
                                </div>
                                <h4>
                                    Deposit
                                </h4>
                                <p>
                                    You will deposit funds into your own account with a regulated third-party broker
                                    which we will provide a referral ID for. </p>
                                <div class="box-number">
                                    <span>3</span>
                                </div>
                            </div>
                        </div>
                        <!--single-work-box-end-->
                        <!--single-work-box-start-->
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-box-work" data-aos="flip-right" data-aos-duration="1000">
                                <div class="work-img">
                                    <img src="{{asset('frontend-asstets/assets/image/work_box/4.svg')}}" alt="">
                                </div>
                                <h4>
                                    Deposit
                                </h4>
                                <p>
                                    You will deposit funds into your own account with a regulated third-party broker
                                    which we will provide a referral ID for.</p>
                                <div class="box-number">
                                    <span>4</span>
                                </div>
                            </div>
                        </div>
                        <!--single-work-box-end-->
                        <!--single-work-box-start-->
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-box-work" data-aos="flip-right" data-aos-duration="1000">
                                <div class="work-img">
                                    <img src="{{asset('frontend-asstets/assets/image/work_box/5.svg')}}" alt="">
                                </div>
                                <h4>
                                    Deposit
                                </h4>
                                <p>
                                    You will deposit funds into your own account with a regulated third-party broker
                                    which we will provide a referral ID for. </p>
                                <div class="box-number">
                                    <span>5</span>
                                </div>
                            </div>
                        </div>
                        <!--single-work-box-end-->
                        <!--single-work-box-start-->
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-box-work" data-aos="flip-right" data-aos-duration="1000">
                                <div class="work-img">
                                    <img src="{{asset('frontend-asstets/assets/image/work_box/6.svg')}}" alt="">
                                </div>
                                <h4>
                                    Deposit
                                </h4>
                                <p>
                                    You will deposit funds into your own account with a regulated third-party broker
                                    which we will provide a referral ID for. </p>
                                <div class="box-number">
                                    <span>6</span>
                                </div>
                            </div>
                        </div>
                        <!--single-work-box-end-->
                    </div>
                    <div class="row">
                        <div class="work-content">
                            <p>Another major advantage of a Managed Account is the fact that you as an investor have
                                complete control of your deposits, withdrawals and can start and stop when you like. Not
                                everyone understands this. </p>
                            <p>When you open a Managed Account, you control the amount of funds you deposit. There may
                                well be a minimum account opening balance, but at the end of the day, you have control
                                of how much you deposit above the initial entry
                                amount.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--works-area-end-->
        <!--home-Statistics-area-start-->
        <div class="top-wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#10122d" fill-opacity="1" d="M0,192L13.3,186.7C26.7,181,53,171,80,144C106.7,117,133,75,160,53.3C186.7,32,213,32,240,53.3C266.7,75,293,117,320,138.7C346.7,160,373,160,400,149.3C426.7,139,453,117,480,90.7C506.7,64,533,32,560,53.3C586.7,75,613,149,640,165.3C666.7,181,693,139,720,138.7C746.7,139,773,181,800,170.7C826.7,160,853,96,880,80C906.7,64,933,96,960,112C986.7,128,1013,128,1040,117.3C1066.7,107,1093,85,1120,90.7C1146.7,96,1173,128,1200,117.3C1226.7,107,1253,53,1280,37.3C1306.7,21,1333,43,1360,64C1386.7,85,1413,107,1427,117.3L1440,128L1440,320L1426.7,320C1413.3,320,1387,320,1360,320C1333.3,320,1307,320,1280,320C1253.3,320,1227,320,1200,320C1173.3,320,1147,320,1120,320C1093.3,320,1067,320,1040,320C1013.3,320,987,320,960,320C933.3,320,907,320,880,320C853.3,320,827,320,800,320C773.3,320,747,320,720,320C693.3,320,667,320,640,320C613.3,320,587,320,560,320C533.3,320,507,320,480,320C453.3,320,427,320,400,320C373.3,320,347,320,320,320C293.3,320,267,320,240,320C213.3,320,187,320,160,320C133.3,320,107,320,80,320C53.3,320,27,320,13,320L0,320Z"></path>
              </svg>
        </div>
        <section class="" style="background: #10122d;">
            <div class="container" id="Chart">
                <div class="row">
                    <div class="col-xl-6 col-md-12 col-sm-12">
                        <div class="bar-chart">
                            <h4> Pie Chart</h4>
                            <span>Pie Chart</span>
                        </div>
                        <canvas id="myChart2" style="max-width: 600px; max-height: 400px;"></canvas>
                        <script>
                            var urll = "{{url('stock/piechartjson')}}";
                            var Pielabel = new Array();
                            var Pielabels = new Array();
                            var Piedata = new Array();
                            $(document).ready(function () {
                                $.get(urll, function (response) {
                                    response.forEach(function (data) {
                                        Pielabel.push(data.label_1);
                                        Pielabels.push(data.labels_1);
                                        Piedata.push(data.data_1);
                                    });
                                    var ctx = document.getElementById('myChart2').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'pie',
                                        data: {
                                            labels: Pielabels,
                                            datasets: [{
                                                label: "Our Overview",
                                                backgroundColor: ["#f72585 ", "#7209b7",
                                                    "#3865D0", "#4cc9f0",
                                                    "#9381ff"
                                                ],
                                                data: Piedata
                                            }]
                                        },
                                        options: {
                                            title: {
                                                display: true,

                                            }
                                        }
                                    });
                                });
                            });

                        </script>
                    </div>
                    <div class="col-xl-6 col-md-12 col-sm-12">
                        <div class="bar-chart">
                            <h4>Bar Chart</h4>
                            <span>Monthly </span>
                        </div>
                        <canvas id="myChart" style="max-width: 600px; max-height: 600px;"></canvas>
                        <script>
                            /*charts table*/
                            var url = "{{url('stock/barchartjson')}}";
                            var Barlabel = new Array();
                            var Barlabels = new Array();
                            var Bardata = new Array();
                            $(document).ready(function () {
                                $.get(url, function (response) {
                                    response.forEach(function (data) {
                                        console.log(response);
                                        Barlabel.push(data.label_1);
                                        Barlabels.push(data.labels_1);
                                        Bardata.push(data.data_1);
                                    });
                                    var ctx = document.getElementById('myChart').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: Barlabels,
                                            datasets: [{
                                                label: '# of Votes',
                                                data: Bardata,
                                                backgroundColor: [
                                                    '#3865D0',
                                                    '#3865D0',
                                                    '#3865D0',
                                                    '#3865D0',
                                                    '#3865D0',
                                                    '#3865D0'
                                                ],

                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                });
                            });

                        </script>
                    </div>
                </div>

            </div>
            <!--Quantum-Statistics-area-start-->
        <section class="mt-200 text-center">
            <div class="container">
                <div class="row">
                    <div class="title-light">
                        <h2 style="
                        display: inline-block; color:white; text-transform: uppercase;">
                            QUANTUM STATISTICS
                        </h2>
                    </div>
                </div>
                <div class="row d-flex align-items-center mt-100">
                    <div class="col-lg-6">
                        <div class="table-quantum" data-aos="fade-right" data-aos-duration="1000">
                            <div class="title-table">
                                <span>Stats</span>
                            </div>
                            <table style="width:100%">
                                @foreach(App\QuantumStat::all() as $cat)
                                <tr>
                                    <th>{{$cat->table_head}}</th>
                                    <td>{{$cat->table_data}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="Cumulative-profit" data-aos="fade-left" data-aos-duration="1000">
                            {{-- <canvas id="myChart_profit" width="1600" height="900"></canvas> --}}
                            <canvas id="myChart3" style="max-width: 600px; max-height: 600px;"></canvas>
                        <script>
                            /*charts table*/
                            var url3 = "{{url('stock/barchartjson')}}";
                            var Linelabel = new Array();
                            var Linelabels = new Array();
                            var Linedata = new Array();
                            $(document).ready(function () {
                                $.get(url3, function (response) {
                                    response.forEach(function (data) {
                                        console.log(response);
                                        Linelabel.push(data.label_1);
                                        Linelabels.push(data.labels_1);
                                        Linedata.push(data.data_1);
                                    });
                                    var ctx = document.getElementById('myChart3').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'line',
                                        data: {
                                            labels: Linelabels,
                                            datasets: [{
                                                label: '# of Votes',
                                                data: Linedata,
                                                backgroundColor: [
                                                    '#3866cf'
                                                ],

                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                });
                            });

                        </script>
                        </div>
                    </div>
                </div>
                <div class="row mt-100 mb-100 responsive-table">
                    <div class="col-lg-12">
                        <div class="Monthly-Return-Table bgcolor pb-50 pt-50 pl-50 pr-50" data-aos="fade-up" data-aos-duration="1000">
                            
                        <div class="title-mrt">
                            <h3 style="margin-bottom: 40px; color: #ffffff9c;">
                                Monthly Return Table
                            </h3>
                        </div>
                        
                            <table class="table mian-mrt">
                                <thead>
                                    <tr>
                                        <th scope="col">Year</th>
                                        <th scope="col">Jan</th>
                                        <th scope="col">Feb</th>
                                        <th scope="col">Mar</th>
                                        <th scope="col">Apr</th>
                                        <th scope="col">May</th>
                                        <th scope="col">Jun</th>
                                        <th scope="col">Jul</th>
                                        <th scope="col">Aug</th>
                                        <th scope="col">Sep</th>
                                        <th scope="col">Oct</th>
                                        <th scope="col">Nov</th>
                                        <th scope="col">Dec</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(App\MonthlyReturn::all() as $cat)
                                    <tr>
                                        <th scope="row">{{$cat->year}}</th>
                                        <td>{{$cat->jan}}</td>
                                        <td>{{$cat->feb}}</td>
                                        <td>{{$cat->mar}}</td>
                                        <td>{{$cat->apr}}</td>
                                        <td>{{$cat->may}}</td>
                                        <td>{{$cat->jun}}</td>
                                        <td>{{$cat->jul}}</td>
                                        <td>{{$cat->aug}}</td>
                                        <td>{{$cat->sep}}</td>
                                        <td>{{$cat->oct}}</td>
                                        <td>{{$cat->nov}}</td>
                                        <td>{{$cat->dec}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Quantum-Statistics-area-end-->
        </section>

        <div class="top-wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#10122d" fill-opacity="1" d="M0,192L13.3,186.7C26.7,181,53,171,80,144C106.7,117,133,75,160,53.3C186.7,32,213,32,240,53.3C266.7,75,293,117,320,138.7C346.7,160,373,160,400,149.3C426.7,139,453,117,480,90.7C506.7,64,533,32,560,53.3C586.7,75,613,149,640,165.3C666.7,181,693,139,720,138.7C746.7,139,773,181,800,170.7C826.7,160,853,96,880,80C906.7,64,933,96,960,112C986.7,128,1013,128,1040,117.3C1066.7,107,1093,85,1120,90.7C1146.7,96,1173,128,1200,117.3C1226.7,107,1253,53,1280,37.3C1306.7,21,1333,43,1360,64C1386.7,85,1413,107,1427,117.3L1440,128L1440,0L1426.7,0C1413.3,0,1387,0,1360,0C1333.3,0,1307,0,1280,0C1253.3,0,1227,0,1200,0C1173.3,0,1147,0,1120,0C1093.3,0,1067,0,1040,0C1013.3,0,987,0,960,0C933.3,0,907,0,880,0C853.3,0,827,0,800,0C773.3,0,747,0,720,0C693.3,0,667,0,640,0C613.3,0,587,0,560,0C533.3,0,507,0,480,0C453.3,0,427,0,400,0C373.3,0,347,0,320,0C293.3,0,267,0,240,0C213.3,0,187,0,160,0C133.3,0,107,0,80,0C53.3,0,27,0,13,0L0,0Z"></path>
              </svg>
        </div>
        <!--home-Statistics-area-end-->
        <!--Quantam-X-Alpha-start-->
        <section>
            <div class="container"  id="Quantam">
                <div class="row">
                     <div class="title col-xl-12">
                    <h1>Quantam X Alpha</h1>
                </div>
                </div>
               <div class="row d-flex align-items-center">
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                       <div class="strategy-img">
                        <img src="{{asset('frontend-asstets/assets/image/Quantam_X_Alpha/1.png')}}" alt="">
                       </div>
                   </div>
                   <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                       <div class="strategy">
                           <h2>STRATEGY</h2>
                       <p>The Quantum-X algorithm has been developed to take advantage of market swing points that are witnessed within the Forex markets during times of high volatility. The algorithm has been developed to trade when markets conditions are stable and performs various checks which need to be true in order for a trade to be executed. It has proven ability to perform during a long period of time and is used across various forex pairs in order to find the most suitable pair(s) for it to execute trades.

                        The strategy used within the algorithm looks for potential swing points at highs or lows for current market session before comparing these points to historical swing points to determine an advantage in the market.
                        
                        The system is built on over 8,000 lines of coding with each line operating a separate function for optimum results.</p>
                       </div>
                       
                   </div>
               </div>
               <div class="row d-flex align-items-center">
                
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="strategy">
                        <h2>ACTIVE SESSIONS</h2>
                    <p>After testing on many different timeframes and testing during different times of the day, we have analyzed data and come to a realization that the algorithm works best after the US session comes to an end and during the Australian and Tokyo sessions as low volatility in the markets allows the algorithm to trade better as well as limiting drawdown levels in order to provide stable returns on investment.</p>
                    </div>
                    
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="strategy-img">
                     <img src="{{asset('frontend-asstets/assets/image/Quantam_X_Alpha/2.png')}}" alt="">
                    </div>
                </div>
            </div>
                
            </div>
        </section>
        <!--Quantam-X-Alpha-end-->
        <!--ALGORITHM-start-->
        <div class="top-wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#10122d" fill-opacity="1" d="M0,192L13.3,186.7C26.7,181,53,171,80,144C106.7,117,133,75,160,53.3C186.7,32,213,32,240,53.3C266.7,75,293,117,320,138.7C346.7,160,373,160,400,149.3C426.7,139,453,117,480,90.7C506.7,64,533,32,560,53.3C586.7,75,613,149,640,165.3C666.7,181,693,139,720,138.7C746.7,139,773,181,800,170.7C826.7,160,853,96,880,80C906.7,64,933,96,960,112C986.7,128,1013,128,1040,117.3C1066.7,107,1093,85,1120,90.7C1146.7,96,1173,128,1200,117.3C1226.7,107,1253,53,1280,37.3C1306.7,21,1333,43,1360,64C1386.7,85,1413,107,1427,117.3L1440,128L1440,320L1426.7,320C1413.3,320,1387,320,1360,320C1333.3,320,1307,320,1280,320C1253.3,320,1227,320,1200,320C1173.3,320,1147,320,1120,320C1093.3,320,1067,320,1040,320C1013.3,320,987,320,960,320C933.3,320,907,320,880,320C853.3,320,827,320,800,320C773.3,320,747,320,720,320C693.3,320,667,320,640,320C613.3,320,587,320,560,320C533.3,320,507,320,480,320C453.3,320,427,320,400,320C373.3,320,347,320,320,320C293.3,320,267,320,240,320C213.3,320,187,320,160,320C133.3,320,107,320,80,320C53.3,320,27,320,13,320L0,320Z"></path>
              </svg>
        </div>
       
        <section id="Algorithm" style="background:#10122D">
            <!---all-box-algorithm-start--->
            <div class="container">
                <div class="row">
                    <div class="title-dark text-center">
                        <h2 style=" display: inline-block; padding: 8px 15px;">
                            ALGORITHM CONDITIONING
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="algorithm-content-start">
                        <p>Prior to any trades being executed by the algorithm, it will perform a conditioning check to ensure that all points for a correct entry are met. The check points are stated below with an example of checks performed and a short
                            description of these checks prior to a buy signal being executed:</p>
                    </div>
                </div>
                <div class="row all-algorithm">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="left-full-box-algorithm">
                        <div class="single-box-algorithm">
                            <div class="box-content-algorithm" data-aos="fade-left" data-aos-duration="1000">
                                <h4>Correlation check</h4>
                                <p>How many max orders to be opened in the same direction for the same pair. Currently, our settings are indicating 2 orders max per pair in same direction.</p>
                            </div>
                            <div class="box-number-algorithm">
                                <span>Check 1 </span>
                            </div>
                        </div>
                        <div class="single-box-algorithm">
                            <div class="box-content-algorithm" data-aos="fade-left" data-aos-duration="1000">
                                <h4>Bollinger Bands check</h4>
                                <p>BB volatility is calculated by measuring the difference between the Upper Bollinger band - Lower Bollinger Band and this is compared with Volatility measure that is entered manually in the pair settings.</p>
                            </div>
                            <div class="box-number-algorithm" >
                                <span>Check 3 </span>
                            </div>
                        </div>
                        <div class="single-box-algorithm">
                            <div class="box-content-algorithm" data-aos="fade-left" data-aos-duration="1000">
                                <h4>Spread Check</h4>
                                <p>The final check is the spread, after all the above are true, if the spread is less than the max allowed spread, then the buy order is opened.</p>
                            </div>
                            <div class="box-number-algorithm">
                                <span>Check 5 </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6  col-md-12 col-sm-12">
                    <div class="right-full-box-algorithm">
                        <div class="single-box-algorithm">
                            <div class="box-number-algorithm line-one">
                                <span>Check 2 </span>
                            </div>
                            <div class="box-content-algorithm" data-aos="fade-left" data-aos-duration="1000" style="	margin-left: 30px;">
                                <h4> Volatility check</h4>
                                <p>The volatility is calculated by (HighLow) in pips of the day. And this is compared with the max allowed volatility that were entered manually in the setting of the pair.
                                </p>
                            </div>
                        </div>
                        <div class="single-box-algorithm">
                            <div class="box-number-algorithm line-one" >
                                <span>Check 4 </span>
                            </div>
                            <div class="box-content-algorithm" data-aos="fade-left" data-aos-duration="1000" style="	margin-left: 30px;">
                                <h4> Bollinger Bands with CCI check</h4>
                                <p>If the Ask price is less than a price that is generated by going below the lower band of the Bollinger band by a certain distance that's entered manually in the pairs settings, and this condition should be happening
                                    while the CCI is below a certain level also entered manually in the pairs settings.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---all-box-algorithm-start--->
            <div class="row">
                <div class="algorithm-content-start">
                    <p>Should all the conditions meet then the algorithm will be given the go ahead to begin executing trades. The trades are then split into frequencies to ensure maximum profits with minimal risk.</p>
                </div>
            </div>
            </div>
            
        </section>
        <div class="top-wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#10122d" fill-opacity="1" d="M0,192L13.3,186.7C26.7,181,53,171,80,144C106.7,117,133,75,160,53.3C186.7,32,213,32,240,53.3C266.7,75,293,117,320,138.7C346.7,160,373,160,400,149.3C426.7,139,453,117,480,90.7C506.7,64,533,32,560,53.3C586.7,75,613,149,640,165.3C666.7,181,693,139,720,138.7C746.7,139,773,181,800,170.7C826.7,160,853,96,880,80C906.7,64,933,96,960,112C986.7,128,1013,128,1040,117.3C1066.7,107,1093,85,1120,90.7C1146.7,96,1173,128,1200,117.3C1226.7,107,1253,53,1280,37.3C1306.7,21,1333,43,1360,64C1386.7,85,1413,107,1427,117.3L1440,128L1440,0L1426.7,0C1413.3,0,1387,0,1360,0C1333.3,0,1307,0,1280,0C1253.3,0,1227,0,1200,0C1173.3,0,1147,0,1120,0C1093.3,0,1067,0,1040,0C1013.3,0,987,0,960,0C933.3,0,907,0,880,0C853.3,0,827,0,800,0C773.3,0,747,0,720,0C693.3,0,667,0,640,0C613.3,0,587,0,560,0C533.3,0,507,0,480,0C453.3,0,427,0,400,0C373.3,0,347,0,320,0C293.3,0,267,0,240,0C213.3,0,187,0,160,0C133.3,0,107,0,80,0C53.3,0,27,0,13,0L0,0Z"></path>
              </svg>
        </div>
        <!--ALGORITHM-end-->
        

        <!--home-contact-area-start-->
        <section class="pt-50 pb-50">
            <div class="container p-0" id="Contact">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-contact text-center position-relative">
                            <div class="title-light">
                                <h2 style="
                                display: inline-block; padding: 8px 15px; text-transform: uppercase; color: white;">
                                     Drop US A line
                                </h2>
                                <p style="color: #ffffff9c;">Get In Touch!</p>
                            </div>
                            <div class="input-contact">
                                <form action="">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <input type="text" placeholder="Enter Name">
                                        </div>
                                        <div class="col-xl-6">
                                            <input type="text" placeholder="Enter Email">
                                        </div>
                                        <div class="col-xl-12">
                                            <input type="text" id="" placeholder="Enter Subject">
                                        </div>
                                        <div class="col-xl-12">
                                            <textarea name="" id="" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="submit-inpute">
                                                <button type="submit">Send </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--home-contact-area-end-->
        <!--home-PDF-area-end-->
        <div class="top-wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#10122d" fill-opacity="1" d="M0,192L13.3,186.7C26.7,181,53,171,80,144C106.7,117,133,75,160,53.3C186.7,32,213,32,240,53.3C266.7,75,293,117,320,138.7C346.7,160,373,160,400,149.3C426.7,139,453,117,480,90.7C506.7,64,533,32,560,53.3C586.7,75,613,149,640,165.3C666.7,181,693,139,720,138.7C746.7,139,773,181,800,170.7C826.7,160,853,96,880,80C906.7,64,933,96,960,112C986.7,128,1013,128,1040,117.3C1066.7,107,1093,85,1120,90.7C1146.7,96,1173,128,1200,117.3C1226.7,107,1253,53,1280,37.3C1306.7,21,1333,43,1360,64C1386.7,85,1413,107,1427,117.3L1440,128L1440,320L1426.7,320C1413.3,320,1387,320,1360,320C1333.3,320,1307,320,1280,320C1253.3,320,1227,320,1200,320C1173.3,320,1147,320,1120,320C1093.3,320,1067,320,1040,320C1013.3,320,987,320,960,320C933.3,320,907,320,880,320C853.3,320,827,320,800,320C773.3,320,747,320,720,320C693.3,320,667,320,640,320C613.3,320,587,320,560,320C533.3,320,507,320,480,320C453.3,320,427,320,400,320C373.3,320,347,320,320,320C293.3,320,267,320,240,320C213.3,320,187,320,160,320C133.3,320,107,320,80,320C53.3,320,27,320,13,320L0,320Z"></path>
              </svg>
        </div>
        <section class=" text-center" style="background: #10122d;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title-dark">
                            <h2 style=" display: inline-block; padding: 8px 15px;">
                               Download PDF
                            </h2>
                        </div>
                    </div>
                    
                </div>
                <div class="main-pdf-home">
                    <div class="row  all-pdf-li ">
                        
                            <div class="col-xl-4 col-lg-4"><li data-aos="fade-right" data-aos-duration="700"><i class="fas fa-solid fa-circle"></i>STRATEGY</li></div>
                            <div class="col-xl-4 col-lg-4"> <li data-aos="fade-right" data-aos-duration="800"> <i class="fas fa-solid fa-circle"></i>ALGORITHM CONDITIONING</li></div>
                            <div class="col-xl-4 col-lg-4"><li data-aos="fade-right" data-aos-duration="900"> <i class="fas fa-solid fa-circle"></i>ACTIVE SESSIONS</li></div>
                            <div class="col-xl-4 col-lg-4"><li data-aos="fade-right" data-aos-duration="1000"> <i class="fas fa-solid fa-circle"></i>RISK LIMITATION</li></div>
                            <div class="col-xl-4 col-lg-4"><li data-aos="fade-right" data-aos-duration="1100"> <i class="fas fa-solid fa-circle"></i>SAFETY AND SECURITY</li></div>
                            <div class="col-xl-4 col-lg-4"><li data-aos="fade-right" data-aos-duration="1200"> <i class="fas fa-solid fa-circle"></i>EXPECTED ROI AGAINST RISK APPETITE
                            </li></div>
                    </div>
                    <div class="row mt-100">
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                            @foreach(App\Brochure::latest()->limit(1)->get() as $cat)
                                        <a href="{{asset('uploads/brochure/'.$cat->brochure_file)}}">
                                            <div class="download-pdf">
                                                <span>download now</span>
                                            </div>
                                        </a>
                                         @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="top-wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#10122d" fill-opacity="1" d="M0,192L13.3,186.7C26.7,181,53,171,80,144C106.7,117,133,75,160,53.3C186.7,32,213,32,240,53.3C266.7,75,293,117,320,138.7C346.7,160,373,160,400,149.3C426.7,139,453,117,480,90.7C506.7,64,533,32,560,53.3C586.7,75,613,149,640,165.3C666.7,181,693,139,720,138.7C746.7,139,773,181,800,170.7C826.7,160,853,96,880,80C906.7,64,933,96,960,112C986.7,128,1013,128,1040,117.3C1066.7,107,1093,85,1120,90.7C1146.7,96,1173,128,1200,117.3C1226.7,107,1253,53,1280,37.3C1306.7,21,1333,43,1360,64C1386.7,85,1413,107,1427,117.3L1440,128L1440,0L1426.7,0C1413.3,0,1387,0,1360,0C1333.3,0,1307,0,1280,0C1253.3,0,1227,0,1200,0C1173.3,0,1147,0,1120,0C1093.3,0,1067,0,1040,0C1013.3,0,987,0,960,0C933.3,0,907,0,880,0C853.3,0,827,0,800,0C773.3,0,747,0,720,0C693.3,0,667,0,640,0C613.3,0,587,0,560,0C533.3,0,507,0,480,0C453.3,0,427,0,400,0C373.3,0,347,0,320,0C293.3,0,267,0,240,0C213.3,0,187,0,160,0C133.3,0,107,0,80,0C53.3,0,27,0,13,0L0,0Z"></path>
              </svg>
        </div>
        <!--home-PDF-area-end-->
    </main>
    <!----------------------------------------main area end---------------------------------------->
    @include('user.partials.footer')



</body>

</html>

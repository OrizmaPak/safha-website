<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from SAFHA.sacredthemes.net/layouts/index-standard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2024 22:50:48 GMT -->

<head>
    <meta charset="utf-8" />
    <title>SAFHA Software</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="App and Saas Landing Template" />
    <meta name="keywords" content="Application, Clean, Saas, Dashboard, Bootstrap4, Software Landing, HTML5 Template" />
    <meta content="sacredthemes" name="author" />
    <!--* Favicon -->
    <link rel="shortcut icon" href="images/logo.png">
    <!--* WOW Animation -->
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <!--* Bootstrap Css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!--* Slick Slider -->
    <link href="css/slick.css" rel="stylesheet" type="text/css" />
    <!--* Icons -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/line-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css" />
    <!--* Main css File -->
    <link href="css/style.css" rel="stylesheet" type="text/css" id="theme-default" />
    <link href="css/rtl-style.css" rel="stylesheet" type="text/css" id="rtl-theme-default" disabled="disabled" />
    <link href="css/colors/default-color.css" rel="stylesheet" type="text/css" id="theme-color" />
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('section');
            const navLi = document.querySelectorAll('#main-menu li');

            const options = {
                threshold: 0.5
            };

            let observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        navLi.forEach(li => {
                            li.classList.remove('active');
                            if (li.querySelector('a').getAttribute('href').substring(1) === entry.target.id) {
                                li.classList.add('active');
                            }
                        });
                    }
                });
            }, options);

            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>
    <style>
        * {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <!--* Box-wrapper -->
    <div class="box-wrapper">
        <!--* Loader -->
        <div id="preloader">
            <div id="status">
                <div class="d-loader " style="transform: scale(4);position: relative;top: 100px">
                    <img src="images/logofull.png" style="" alt="safha">
                </div>
            </div>
        </div>
        <!--* Loader -->
        <!--* Nav Bar -->
        <header id="master-head" class="navbar menu-absolute menu-center">
            <div class="container-fluid">
                <div id="main-logo" class="logo-container">
                    <a class="logo" href="index.html">
                        <img src="images/logo.png" class="logo-dark" alt="SAFHA">
                        <img src="images/logo.png" class="logo-light" alt="SAFHA">
                    </a>
                </div>
                <div class="menu-toggle-btn">
                    <!--* Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="burger-lines">
                        </div>
                    </a>
                    <!--* End mobile menu toggle-->
                </div>
                <div id="navigation" class="nav navbar-nav navbar-main">
                    <ul id="main-menu" class="menu-primary">
                        <li class="menu-item activ">
                            <a href="#home">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="#explore">Explore</a>
                        </li>
                        <li class="menu-item">
                            <a href="#features">Features</a>
                        </li>
                        <li class="menu-item">
                            <a href="#contactus">Contact Us</a>
                        </li>
                        <!-- <li class="menu-item menu-item-has-children">
                            <a >Blogs</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-has-children">
                                    <a >Blog Standard</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item">
                                            <a href="page-blog-grid-3-col.html">Blog Grid (3 Col)</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="page-blog-grid-2-col.html">Blog Grid (2 Col)</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="page-blog-with-sidebar.html">Blog with Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="page-blog-details.html">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a >Elements</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="element-content-box.html">Content Boxes</a>
                                </li>
                                <li class="menu-item">
                                    <a href="element-pricing-tables.html">Pricing Tables</a>
                                </li>
                                <li class="menu-item">
                                    <a href="element-quotes-carousel.html">Quotes Carousel</a>
                                </li>
                                <li class="menu-item">
                                    <a href="element-counters-countdown.html">Counters & Countdown</a>
                                </li>
                                <li class="menu-item">
                                    <a href="element-tabs-accordions.html">Tabs & Accordions</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children mega-menu">
                            <a >Mega Menu</a>
                            <ul class="sub-menu mega-menu-inner">
                                <li class="menu-item col-title">
                                    <a >Layouts</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="index-standard.html">Standard Software</a></li>
                                        <li class="menu-item"><a href="index-crm.html">CRM software</a></li>
                                        <li class="menu-item"><a href="index-security-software.html">Security Software</a></li>
                                        <li class="menu-item"><a href="index-payment-software.html">Payment Software</a></li>
                                        <li class="menu-item"><a href="index-erp-software.html">ERP Systems</a></li>
                                        <li class="menu-item"><a href="index-digital-marketing.html">Digital Marketing</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item col-title">
                                    <a >Inner Pages</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="page-aboutus.html">About Us</a></li>
                                        <li class="menu-item"><a href="page-services.html">Services</a></li>
                                        <li class="menu-item"><a href="page-contactus.html">Contact Us</a></li>
                                        <li class="menu-item"><a href="page-404.html">404 (Not Found)</a></li>
                                        <li class="menu-item"><a target="_blank" href="page-comingsoon.html">Coming Soon</a></li>
                                        <li class="menu-item"><a target="_blank" href="page-signin-two.html">Login/Register</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item col-title">
                                    <a >Elements</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="element-content-box.html">Content Boxes</a></li>
                                        <li class="menu-item"><a href="element-pricing-tables.html">Pricing Tables</a></li>
                                        <li class="menu-item"><a href="element-quotes-carousel.html">Quotes Carousel</a></li>
                                        <li class="menu-item"><a href="element-counters-countdown.html">Counters & Countdown</a></li>
                                        <li class="menu-item"><a href="element-tabs-accordions.html">Tabs & Accordions</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item col-title">
                                    <a >Blog</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="page-blog-grid-3-col.html">Blog Grid (3 Col)</a></li>
                                        <li class="menu-item"><a href="page-blog-grid-2-col.html">Blog Grid (2 Col)</a></li>
                                        <li class="menu-item"><a href="page-blog-with-sidebar.html">Blog with Sidebar</a></li>
                                        <li class="menu-item"><a href="page-blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
                <style>
                    .menu-button{
                        @media only screen and (max-width: 768px) {
                            display: flex;
                            flex-wrap: wrap;
                            margin-top: 30px;
                            gap: 20px;
                        }
                    }
                </style>
                <div class="navbar-right">
                    <div class="menu-button">
                        <a target="_blank" href="https://safha.com.ng/doc">
                            <div class="btn btn-outline-primary shadow-none btn-sm btn-light text-xs mx-3">DOCUMENTATION</div>
                        </a>
                        <a href="#contactus" target="_blank">
                            <div class="btn btn-primary shadow-none btn-sm text-xs mx-3">REQUEST DEMO</div>
                        </a>
                    </div>
                    <!-- <div class="menu-button">
                    </div> -->
                </div>
            </div>
        </header>
        <!--* Nav Bar -->
        <!--* Main Wrapper -->
        <div id="main-wrapper" class="page-wrapper">
            <!--* Page Header -->
            <div id="home" class="page-header section-padding full-height right-col-full dc-one">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 justify-content-center">
                            <div class="heading-wrapper with-separator wow fadeInUp ">
                                <h1>SAFHA <br><span>Enterprise Hotel Management Platform </span> <br> to boost your progress.</h1>
                            </div>
                            <div class="text-wrapper wow fadeInUp " data-wow-delay="0.2s ">
                                <p>With SAFHA, you’re not just managing rooms; you’re orchestrating experiences. From check-in to check-out, our intuitive platform empowers you to personalize guest interactions, track preferences, and anticipate needs. Welcome
                                    to the future of hospitality.</p>
                            </div>
                            <div class="btn-wrapper wow fadeInUp " data-wow-delay="0.4s ">
                                <a class="btn btn-primary shadow-none" href="#contactus">REQUEST DEMO</a>
                                <!-- <a class="btn btn-outline-primary " ><i class="fas fa-play-circle "></i>watch video</a> -->
                            </div>
                        </div>
                        <!--* End Col -->
                        <div class="col-lg-6 ">
                            <div class="image-wrapper full-width-img " style="transform: scale(1); ">
                                <img src="images/s1banner.png " alt=" ">
                            </div>
                        </div>
                        <!--* End Col -->
                    </div>
                    <!--* End Row -->
                </div>
            </div>

            <!--* Core concept -->
            <div class="features-section section-padding ">
                <div class="container ">
                    <div class="row clearfix align-items-center justify-content-between ">
                        <div class="col-lg-6 ">
                            <div class="row inner-row clearfix ">
                                <div class="col-lg-6 col-md-6 col-sm-6 ">
                                    <div class="features-block theme-one wow fadeInUp ">
                                        <div class="inner-box ">
                                            <div class="icon ">
                                                <img class="normal " src="images/default-color/icon-1.svg " alt=" ">
                                                <img class="hover " src="images/default-color/icon-1-light.svg " alt=" ">
                                            </div>
                                            <div class="text ">
                                                <h4>Clean Code</h4>
                                                <p>The Backbone of SAFHA. Our foundation for seamless operations.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--* End Col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 ">
                                    <div class="features-block theme-one wow fadeInUp " data-wow-delay="0.2s ">
                                        <div class="inner-box ">
                                            <div class="icon ">
                                                <img class="normal " src="images/default-color/icon-2.svg " alt=" ">
                                                <img class="hover " src="images/default-color/icon-2-light.svg " alt=" ">
                                            </div>
                                            <div class="text ">
                                                <h4>Easily customizable</h4>
                                                <p>Customized to Perfectly Suit Your Specific Needs and Preferences.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--* End Col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 ">
                                    <div class="features-block theme-one wow fadeInUp " data-wow-delay="0.2s ">
                                        <div class="inner-box ">
                                            <div class="icon ">
                                                <img class="normal " src="images/default-color/icon-3.svg " alt=" ">
                                                <img class="hover " src="images/default-color/icon-3-light.svg " alt=" ">
                                            </div>
                                            <div class="text ">
                                                <h4>User Friendly</h4>
                                                <p>Because the power of simplicity always emerges victorious and prevails.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--* End Col -->
                                <div class="col-lg-6 col-md-6 col-sm-6 ">
                                    <div class="features-block theme-one wow fadeInUp " data-wow-delay="0.4s ">
                                        <div class="inner-box ">
                                            <div class="icon ">
                                                <img class="normal " src="images/default-color/icon-4.svg " alt=" ">
                                                <img class="hover " src="images/default-color/icon-4-light.svg " alt=" ">
                                            </div>
                                            <div class="text ">
                                                <h4>Fully secured</h4>
                                                <p>Enhancing Data Security Measures to Safeguard Your Confidential Information.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--* End Col -->
                            </div>
                            <!--* End Row -->
                        </div>
                        <!--* End Col -->
                        <div class="col-lg-5 ">
                            <div class="heading-wrapper with-separator ">
                                <h2 class="h1 ">Discover Our <span>Powerful Features</span></h2>
                            </div>
                            <!--* End Heading -->
                            <div class="text-wrapper ">
                                <p class="lead-text ">Elevate your hotel's management experience with our cutting-edge features, designed to streamline operations and enhance guest satisfaction.</p>
                                <p>Our software provides a comprehensive suite of tools to manage reservations, track inventory, handle guest requests, and generate detailed reports. With intuitive interfaces and customizable options, you'll find it easier
                                    than ever to maintain efficiency and deliver exceptional service. Experience seamless integration and robust functionality that adapts to your hotel's unique needs.</p>
                            </div>
                            <div class="btn-wrapper "> <a href="#explore" class="btn btn-primary ">Explore Features</a> </div>
                        </div>
                        <!--* End Col -->
                    </div>
                    <!--* End Row -->
                </div>
            </div>

            <!--* More details Section -->
            <div class="about-section section-padding light-gradient-bg right-col-full ">
                <div class="container ">
                    <div class="row clearfix ">
                        <div class="col-lg-6 ">
                            <div class="heading-wrapper with-separator ">
                                <h2 class="h1 ">Discover the <span>Power of SAFHA</span> for Efficient Hotel Management</h2>
                            </div>
                            <!--* End Heading -->
                            <div class="text-wrapper ">
                                <p>Introducing SAFHA, the ultimate hotel management software designed to revolutionize how you run your hotel. SAFHA offers a comprehensive suite of tools that streamline every aspect of hotel operations, from reservations and
                                    guest management to reporting and analytics.</p>
                                <p>Our software is engineered to enhance efficiency, improve guest satisfaction, and provide valuable insights into your hotel's performance. With intuitive interfaces and powerful features, SAFHA makes managing your hotel
                                    operations effortless and effective.</p>
                                <ul class="list-style-one ">
                                    <li>Seamless reservation and booking management to optimize room occupancy.</li>
                                    <li>Advanced guest management features to enhance customer service and engagement.</li>
                                    <li>In-depth reporting and analytics for data-driven decision making and performance tracking.</li>
                                </ul>
                            </div>
                            <div class="counter-wrapper with-separator d-flex ">
                                <div class="counter-block ">
                                    <div class="counter ">
                                        <span class="counter-number-prefix "></span>
                                        <span class="counter-number " data-speed="3500 " data-stop="5">0</span>
                                        <!-- <span class="counter-number-after ">k</span> -->
                                        <span class="counter-number-suffix ">+</span>
                                    </div>
                                    <div class="counter-title ">Hotels Managed</div>
                                </div>
                                <div class="counter-block ">
                                    <div class="counter ">
                                        <span class="counter-number-prefix "></span>
                                        <span class="counter-number " data-speed="3500 " data-stop="400 ">0</span>
                                        <!-- <span class="counter-number-after ">k</span> -->
                                        <span class="counter-number-suffix ">+</span>
                                    </div>
                                    <div class="counter-title ">Happy Guests</div>
                                </div>
                                <div class="counter-block ">
                                    <div class="counter ">
                                        <span class="counter-number-prefix "></span>
                                        <span class="counter-number " data-speed="3500 " data-stop="190 ">0</span>
                                        <!-- <span class="counter-number-after ">k</span> -->
                                        <span class="counter-number-suffix ">+</span>
                                    </div>
                                    <div class="counter-title ">Positive Reviews</div>
                                </div>
                            </div>
                        </div>

                        <!--* End Col -->
                        <div class="col-lg-6 ">
                            <img src="images/dashboard-img-2.png " alt=" ">
                        </div>
                        <!--* End Col -->
                    </div>
                    <!--* End Row -->
                </div>
            </div>

            <!--* Screenshot Section -->
            <div id="explore" class="screenshot-section section-padding ">
                <div class="container ">
                    <div class="row justify-content-center clearfix style-dark ">
                        <div class="col-lg-8 ">
                            <div class="heading-wrapper text-center ">
                                <h2 class="h1 ">Explore SAFHA</h2>
                                <div class="lead-text ">
                                    <p>Discover SAFHA through detailed software screenshots showcasing its intuitive interface and powerful features for seamless hotel management.</p>
                                </div>
                            </div>

                            <!--* End Heading -->
                        </div>
                        <!--* End Col -->
                    </div>
                    <!--* End Row -->
                    <div class="row clearfix ">
                        <div class="col-lg-12 ">
                            <div class="ss-wrapper ">
                                <img class="laptop-img-bg " src="images/laptop-screen.png " style="max-width: 99%; position: absolute; top: 21px; left: 8px; right: 0; " alt=" " />
                                <div class="screenshot-slider text-center ">
                                    <div class="item shadow-sm transform-scale-1 ">
                                        <img src="images/ss1.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss2.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss3.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss4.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss5.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss6.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss7.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss8.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss9.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss10.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss11.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss12.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss13.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss14.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss15.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss16.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss17.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss18.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss19.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss20.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss21.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss22.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss23.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss24.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss25.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss26.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss27.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss28.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss29.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss30.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss31.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss32.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss33.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss34.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss35.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss36.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss37.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss38.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss39.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss40.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss41.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss42.png " alt=" ">
                                    </div>
                                    <div class="item shadow-sm transform-scale-2 ">
                                        <img src="images/ss43.png " alt=" ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--* End Col -->
                    </div>
                    <!--* End Row -->
                </div>
            </div>

            <!--* Pricing Section -->
            <div class="pricing-section section-padding light-bg ">
                <div class="container ">
                    <!--* End Row -->
                    <div class="row pricing-plans-one clearfix ">
                        <!--* End Col -->
                        <div class="col-lg-4 col-12 m-auto ">
                            <div class="price-card popular text-center wow fadeInUp ">
                                <div class="card-header ">
                                    <h3 class="card-title ">Master Plan</h3>
                                    <div class="plan-cost-wrapper ">
                                        <div class="plan-cost ">
                                            <!-- <span class="plan-cost-prefix ">$</span>30 -->
                                        </div>
                                        <!-- <div class="plan-validity ">per month</div> -->
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="desc ">
                                        <p>Upgrade to our Advanced Plan for enhanced hotel management features. Designed for medium to large hotels, this plan provides comprehensive tools that streamline operations and improve guest satisfaction.</p>
                                    </div>
                                    <ul class="pricing-feature-list ">
                                        <li>Fully Customizable Dashboard</li>
                                        <li>24/7 Priority Support</li>
                                        <li>Unlimited User Access</li>
                                        <li>Advanced Reporting & Analytics</li>
                                        <li>Integrated Channel Management</li>
                                    </ul>
                                    <a href="#contactus" class="btn btn-primary shadow-none">Request Demo</a>
                                </div>
                            </div>

                            <!--* End Price card -->
                        </div>
                        <div class="col-lg-8 m-auto gap-20 ">
                            <div class="heading-wrapper text-center with-separator ">
                                <h2 class="h1 ">Flexible <span>Pricing Plans</span></h2>
                                <div class="lead-text ">
                                    <p>Choose the perfect plan that fits your hotel's needs. SAFHA offers flexible pricing options designed to accommodate hotels of all sizes, ensuring you get the best value for our powerful management tools. Whether you're
                                        running a boutique hotel or a large chain, our plans provide comprehensive features at competitive prices.</p>
                                </div>
                            </div>

                            <!--* End Heading -->
                        </div>
                    </div>
                    <!--* End Row -->
                </div>
            </div>

            <!--* Call to Action Section -->
            <div class="cta-section section-padding style-dark ">
                <div class="container ">
                    <div class="row align-items-center ">
                        <div class="col-lg-7 ">
                            <div class="call-to-action-content i-text-center ">
                                <h2 class="h1 ">Do you have any questions? <span class="special-fonts "><br>We are happy to help you.</span></h2>
                            </div>
                        </div>
                        <!--* End Col -->
                        <div class="col-lg-5 ">
                            <div class="call-to-action-btn text-right i-text-center ">
                                <a href="#contactus " class="btn btn-primary btn-light btn-large ">Contact Us Now!</a>
                            </div>
                        </div>
                        <!--* End Col -->
                    </div>
                    <!--* End Row -->
                </div>
            </div>

            <!--* Testimonial section  -->
            <div class="testimonial-section section-padding ">
                <div class="container ">
                    <div class="row justify-content-center clearfix ">
                        <div class="col-lg-8 ">
                            <div class="heading-wrapper text-center with-separator ">
                                <h2 class="h1 ">Happy Clients <span>Feedback</span></h2>
                                <div class="lead-text ">
                                    <p>Our clients love how SAFHA has transformed their hotel management experience. Here's what they have to say.</p>
                                </div>
                            </div>
                            <!--* End Heading -->
                        </div>
                        <!--* End Col -->
                    </div>
                    <!--* End Row -->
                    <div class="row clearfix ">
                        <div class="col-lg-12 ">
                            <div class="client-testimonial theme-one ">
                                <div class="testimonial-slider ">
                                    <div class="item ">
                                        <div class="testimonial-text ">
                                            <blockquote>
                                                SAFHA has revolutionized the way we manage our hotel operations. The seamless integration and easy-to-use interface have made our work so much easier. We couldn't be happier!
                                            </blockquote>
                                        </div>
                                        <div class="client-info-wrapper ">
                                            <div class="client-img ">
                                                <img src="images/team-4-square.jpg " alt="client ">
                                            </div>
                                            <div class="client-info ">
                                                <h5>Olumide Adewale</h5>
                                                <p>Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <div class="testimonial-text ">
                                            <blockquote>
                                                The customer support is outstanding, and the software itself is incredibly efficient. SAFHA has helped us streamline our processes and focus more on guest satisfaction.
                                            </blockquote>
                                        </div>
                                        <div class="client-info-wrapper ">
                                            <div class="client-img ">
                                                <img src="images/team-3-square.jpg " alt="client ">
                                            </div>
                                            <div class="client-info ">
                                                <h5>Chinwe Okafor</h5>
                                                <p>Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <div class="testimonial-text ">
                                            <blockquote>
                                                We've seen a significant improvement in our overall operations since switching to SAFHA. The reporting tools and analytics are particularly helpful in making informed decisions.
                                            </blockquote>
                                        </div>
                                        <div class="client-info-wrapper ">
                                            <div class="client-img ">
                                                <img src="images/team-5-square.jpg " alt="client ">
                                            </div>
                                            <div class="client-info ">
                                                <h5>Aisha Lawal</h5>
                                                <p>Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <div class="testimonial-text ">
                                            <blockquote>
                                                SAFHA is an absolute game-changer for us. The software is intuitive, and the level of customization available has allowed us to tailor it perfectly to our needs.
                                            </blockquote>
                                        </div>
                                        <div class="client-info-wrapper ">
                                            <div class="client-img ">
                                                <img src="images/team-1-square.jpg " alt="client ">
                                            </div>
                                            <div class="client-info ">
                                                <h5>Femi Adebayo</h5>
                                                <p>Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item ">
                                        <div class="testimonial-text ">
                                            <blockquote>
                                                SAFHA has provided us with the tools we need to enhance our guest experience. It's a comprehensive solution that covers all aspects of hotel management.
                                            </blockquote>
                                        </div>
                                        <div class="client-info-wrapper ">
                                            <div class="client-img ">
                                                <img src="images/team-2-square.jpg " alt="client ">
                                            </div>
                                            <div class="client-info ">
                                                <h5>Yemi Bakare</h5>
                                                <p>Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--* End Testimonial Slider -->
                            </div>
                        </div>
                        <!--* End Col -->
                    </div>
                    <!--* End Row -->
                </div>
            </div>

            <!--*  Key features header -->
            <div id="features" class="inner-page-header section-padding style-dark ">
                <div class="container ">
                    <div class="page-title-inner text-center clearfix ">
                        <div class="heading-wrapper ">
                            <h1 class="h1 ">Features</h1>
                            <div class="lead-text ">
                                <p>What makes SAFHA an outstanding hotel management software? It's not just the robust functionalities but also the seamless experience it provides to the people who use it every day.</p>
                            </div>
                        </div>
                        <!--* End Breadcrumb -->
                    </div>
                    <!--* Page Title Inner -->
                </div>
            </div>

            <!--* Features itself -->
            <div class="service-section section-padding ">
                <div class="container ">
                    <div class="row clearfix no-gutters dc-features-group ">
                        <!-- Administration Feature -->
                        <div class="col-lg-4 col-md-6 dc-features-item ">
                            <a>
                                <div class="dc-features-item-front ">
                                    <div class="inner-box ">
                                        <div class="icon ">
                                            <img class="normal " src="images/default-color/icon-2.svg " alt="Administration ">
                                        </div>
                                        <h3 class="dc-features-title ">Administration</h3>
                                    </div>
                                </div>
                                <div class="dc-features-item-hover ">
                                    <div class="inner-box ">
                                        <h3 class="dc-features-title ">Administration</h3>
                                        <p>Efficiently manage all administrative tasks with ease, ensuring streamlined operations across your hotel.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Inventory Feature -->
                        <div class="col-lg-4 col-md-6 dc-features-item ">
                            <a>
                                <div class="dc-features-item-front ">
                                    <div class="inner-box ">
                                        <div class="icon ">
                                            <img class="normal " src="images/inventory.png " style=" " alt="Inventory ">
                                        </div>
                                        <h3 class="dc-features-title ">Inventory</h3>
                                    </div>
                                </div>
                                <div class="dc-features-item-hover ">
                                    <div class="inner-box ">
                                        <h3 class="dc-features-title ">Inventory</h3>
                                        <p>Track, manage, and control inventory in real-time, ensuring nothing goes missing and everything is accounted for.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Front Office Feature -->
                        <div class="col-lg-4 col-md-6 dc-features-item ">
                            <a>
                                <div class="dc-features-item-front ">
                                    <div class="inner-box ">
                                        <div class="icon ">
                                            <img class="normal " src="images/fontoffice.png " alt="Front Office ">
                                        </div>
                                        <h3 class="dc-features-title ">Front Office</h3>
                                    </div>
                                </div>
                                <div class="dc-features-item-hover ">
                                    <div class="inner-box ">
                                        <h3 class="dc-features-title ">Front Office</h3>
                                        <p>Enhance guest experience with an efficient front office management system, from check-in to check-out.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Cashier Feature -->
                        <div class="col-lg-4 col-md-6 dc-features-item ">
                            <a>
                                <div class="dc-features-item-front ">
                                    <div class="inner-box ">
                                        <div class="icon ">
                                            <img class="normal " src="images/cashier.png " alt="Cashier ">
                                        </div>
                                        <h3 class="dc-features-title ">Cashier</h3>
                                    </div>
                                </div>
                                <div class="dc-features-item-hover ">
                                    <div class="inner-box ">
                                        <h3 class="dc-features-title ">Cashier</h3>
                                        <p>Manage all financial transactions with precision, ensuring accurate billing and payment processing.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Point Of Sales Feature -->
                        <div class="col-lg-4 col-md-6 dc-features-item ">
                            <a>
                                <div class="dc-features-item-front ">
                                    <div class="inner-box ">
                                        <div class="icon ">
                                            <img class="normal " src="images/pos.png " alt="Point Of Sales ">
                                        </div>
                                        <h3 class="dc-features-title ">Point Of Sales</h3>
                                    </div>
                                </div>
                                <div class="dc-features-item-hover ">
                                    <div class="inner-box ">
                                        <h3 class="dc-features-title ">Point Of Sales</h3>
                                        <p>Integrated POS system to streamline sales and payment processes, improving customer satisfaction.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Food & Beverages Feature -->
                        <div class="col-lg-4 col-md-6 dc-features-item ">
                            <a>
                                <div class="dc-features-item-front ">
                                    <div class="inner-box ">
                                        <div class="icon ">
                                            <img class="normal " src="images/diet.png " alt="Food & Beverages ">
                                        </div>
                                        <h3 class="dc-features-title ">Food & Beverages</h3>
                                    </div>
                                </div>
                                <div class="dc-features-item-hover ">
                                    <div class="inner-box ">
                                        <h3 class="dc-features-title ">Food & Beverages</h3>
                                        <p>Manage orders and deliveries efficiently to provide the best dining experience for your guests.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Purchases Feature -->
                        <div class="col-lg-4 col-md-6 dc-features-item ">
                            <a>
                                <div class="dc-features-item-front ">
                                    <div class="inner-box ">
                                        <div class="icon ">
                                            <img class="normal " src="images/purchases.png " alt="Purchases ">
                                        </div>
                                        <h3 class="dc-features-title ">Purchases</h3>
                                    </div>
                                </div>
                                <div class="dc-features-item-hover ">
                                    <div class="inner-box ">
                                        <h3 class="dc-features-title ">Purchases</h3>
                                        <p>Keep track of all purchases, ensuring that all supplies are managed effectively.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- House Keeping Feature -->
                        <div class="col-lg-4 col-md-6 dc-features-item ">
                            <a>
                                <div class="dc-features-item-front ">
                                    <div class="inner-box ">
                                        <div class="icon ">
                                            <img class="normal " src="images/housekeeping.png " alt="House Keeping ">
                                        </div>
                                        <h3 class="dc-features-title ">House Keeping</h3>
                                    </div>
                                </div>
                                <div class="dc-features-item-hover ">
                                    <div class="inner-box ">
                                        <h3 class="dc-features-title ">House Keeping</h3>
                                        <p>Ensure a clean and well-maintained environment, improving guest satisfaction and comfort.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Maintenance Feature -->
                        <div class="col-lg-4 col-md-6 dc-features-item ">
                            <a>
                                <div class="dc-features-item-front ">
                                    <div class="inner-box ">
                                        <div class="icon ">
                                            <img class="normal " src="images/maintenance.png " alt="Maintenance ">
                                        </div>
                                        <h3 class="dc-features-title ">Maintenance</h3>
                                    </div>
                                </div>
                                <div class="dc-features-item-hover ">
                                    <div class="inner-box ">
                                        <h3 class="dc-features-title ">Maintenance</h3>
                                        <p>Schedule and manage maintenance tasks effectively to prevent disruptions and maintain operational efficiency.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Accounts Feature -->
                        <div class="col-lg-4 col-md-6 dc-features-item ">
                            <a>
                                <div class="dc-features-item-front ">
                                    <div class="inner-box ">
                                        <div class="icon ">
                                            <img class="normal " src="images/accounts.png " alt="Accounts ">
                                        </div>
                                        <h3 class="dc-features-title ">Accounts</h3>
                                    </div>
                                </div>
                                <div class="dc-features-item-hover ">
                                    <div class="inner-box ">
                                        <h3 class="dc-features-title ">Accounts</h3>
                                        <p>Maintain accurate financial records, ensuring transparency and ease of reporting for audits and reviews.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!--* End Row -->
                </div>
            </div>

            <!--* Contact us header -->
            <div id="contactus" class="inner-page-header section-padding style-dark ">
                <div class="container ">
                    <div class="page-title-inner text-center clearfix ">
                        <div class="heading-wrapper ">
                            <h1 class="h1 ">Contact Us</h1>
                            <div class="lead-text ">
                                <p>Contact us to see if our firm can support you Grow your online company.</p>
                            </div>
                        </div>
                        <!--* End Heading -->
                        <!-- <ul class="st-breadcrumb ">
                            <li><a href="index-standard.html ">Home</a></li>
                            <li class="active "><span>Contact Us</span></li>
                        </ul> -->
                        <!--* End Breadcrumb -->
                    </div>
                    <!--* Page Title Inner -->
                </div>
            </div>
            <!--* Contact us form  -->
            <div class="about-section section-padding ">
                <div class="container ">
                    <div class="row justify-content-between ">
                        <div class="col-lg-4 ">
                            <div class="contact-info-box wow fadeInLeft " data-wow-delay="0.8s ">
                                <div class="contact-wrapper ">
                                    <div class="icon ">
                                        <i class="mdi mdi-phone-incoming-outline "></i>
                                    </div>
                                    <div class="content ">
                                        <h4>Phone</h4>
                                        <p>Our customer care is open from Mon-Fri, 07:00 am to 6:00 pm</p>
                                        <!-- <p><a class="btn link-btn " href="tel:+2348146362452 ">+234 (814) 6362452</a></p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="contact-info-box wow fadeInLeft " data-wow-delay="1s ">
                                <div class="contact-wrapper ">
                                    <div class="icon ">
                                        <i class="mdi mdi-email-open-outline "></i>
                                    </div>
                                    <div class="content ">
                                        <h4>Email</h4>
                                        <p>Our support team will get back to in 48-h during standard business hours.</p>
                                        <!-- <p><a class="btn link-btn " href="mailto:example@gmail.com ">example@gmail.com</a></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--* End Col -->
                        <div class="col-lg-8 ">
                            <div class="heading-wrapper with-separator ">
                                <span class="sub-title ">Get in touch</span>
                                <h2 class="h1 "><span>Connect</span> with us</h2>
                            </div>
                            <!--* End Heading -->
                            <div class="text-wrapper ">
                                <p>Please contact us using the details below. For more information about our services, please visit the corresponding page on our web.</p>
                            </div>
                            <div class="contact-form ">
                                <form method="post ">
                                    <div class="form-row ">
                                        <div class="form-group col-md-6 ">
                                            <input type="text " class="form-control " id="FiratName" placeholder="First Name " required=" ">
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <input type="text " class="form-control " id="LastName" placeholder="Last Name ">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <input type="email " class="form-control " id="email" placeholder="Email Address " required=" ">
                                    </div>
                                    <div class="form-group ">
                                        <input type="text " class="form-control " id="subject" placeholder="How can I help you? " required=" ">
                                    </div>
                                    <div class="form-group ">
                                        <textarea class="form-control " placeholder="Tell me more about your requirement "></textarea>
                                    </div>
                                    <div class="form-group ">
                                        <input type="submit" class="btn btn-primary " value="Send Message">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--* End Col -->
                    </div>
                    <!--* End Row -->
                </div>
            </div>
            <!--* Map section -->
            <div class="map-custom-embed " style="text-align: center ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7926.727142724307!2d3.339264386561549!3d6.601659993927909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b922ee97bffff%3A0x2e33ec36d69e377a!2sMira%20hpro!5e0!3m2!1sen!2sng!4v1725020886680!5m2!1sen!2sng "
                    width="600 " height="450 " style="border:0; " allowfullscreen=" " loading="lazy " referrerpolicy="no-referrer-when-downgrade "></iframe>
                <p class="m-auto ">29 Oritse Street, Off Awolowo Way by Balogun Bus Stop, Ikeja, Lagos, Nigeria.</p>
            </div>
        </div>

        <!--* Map Section -->

        <!--* Main Wrapper -->
        <footer class="site-footer footer-theme-one ">
            <div class="container ">
                <div class="footer-logo ">
                    <img src="images/logo.png " alt="SAFHA software ">
                </div>
                <div class="main-footer style-dark ">
                    <div class="row ">
                        <div class="col-lg-3 ">
                            <div class="widget ">
                                <div class="widget-title ">
                                    <h3 class="title ">About SAFHA</h3>
                                </div>
                                <div class="text-widget ">
                                    <div class="contact-info ">
                                        <ul>
                                            <!-- <li class="email-field ">Support@sacredthemes.net</li> -->
                                            <!-- <li class="phone-field "><a href="tel:+2348146362452 ">+234 (814) 636 2452</a></li> -->
                                            <li class="address-field ">17 Obafemi Awolowo Wy, Ikeja, Lagos 101233, Lagos</li>
                                        </ul>
                                    </div>
                                    <div class="social-media-links ">
                                        <ul>
                                            <li><a target="_blank " href="https://api.whatsapp.com/send?phone=2348139432906&text=I%20want%20to%20find%20out%20about%20your%20products "><i class="fab fa-whatsapp "></i></a></li>
                                            <li><a target="_blank " href="https://facebook.com/miratechng "><i class="fab fa-facebook-f "></i></a></li>
                                            <li><a target="_blank " href="https://twitter.com/miratechng "><i class="fab fa-twitter "></i></a></li>
                                            <li><a target="_blank " href="https://www.linkedin.com/company/miratechnologiesng "><i class="fab fa-linkedin-in "></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--* End Widget -->
                        </div>
                        <!--* End Col -->
                        <div class="col-lg-2 col-md-4 d-none">
                            <div class="widget ">
                                <div class="widget-title ">
                                    <h3 class="title ">Useful Links</h3>
                                </div>
                                <div class="text-widget ">
                                    <div class="footer-nav ">
                                        <ul>
                                            <li><a>Trust & Safety</a></li>
                                            <li><a>Cookie Policy</a></li>
                                            <li><a>Contact Us</a></li>
                                            <li><a>Privacy Policy</a></li>
                                            <li><a>Terms of Service</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--* End Widget -->
                        </div>
                        <!--* End Col -->
                        <div class="col-lg-2 col-md-4 d-none">
                            <div class="widget ">
                                <div class="widget-title ">
                                    <h3 class="title ">Useful Links</h3>
                                </div>
                                <div class="text-widget ">
                                    <div class="footer-nav ">
                                        <ul>
                                            <li><a>Trust & Safety</a></li>
                                            <li><a>Cookie Policy</a></li>
                                            <li><a>Contact Us</a></li>
                                            <li><a>Privacy Policy</a></li>
                                            <li><a>Terms of Service</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--* End Widget -->
                        </div>
                        <!--* End Col -->
                        <div class="col-lg-2 col-md-4 ">
                            <div class="widget ">
                                <div class="widget-title ">
                                    <h3 class="title ">Support</h3>
                                </div>
                                <div class="text-widget ">
                                    <div class="footer-nav ">
                                        <ul>
                                            <li><a href="https://safha.com.ng/doc" target="_blank">Documentation</a></li>
                                            <li><a>FAQ</a></li>
                                            <li><a>Press</a></li>
                                            <li><a>Community</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--* End Widget -->
                        </div>
                        <!--* End Col -->
                        <div class="col-lg-3 ">
                            <div class="widget ">
                                <div class="widget-title ">
                                    <h3 class="title ">Stay Updated</h3>
                                </div>
                                <div class="text-widget ">
                                    <div class="newsletter-form ">
                                        <p>Subscribe to our newsletter for regular updates</p>
                                        <form method="post ">
                                            <div class="form-group ">
                                                <input type="email " class="form-control " id="EmailInout " placeholder="Enter email address " required=" ">
                                            </div>
                                            <input type="submit " class="btn btn-primary btn-light " value="Subscribe Now! ">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--* End Widget -->
                        </div>
                        <!--* End Col -->
                    </div>
                    <!--* End Row -->
                </div>
                <div class="copyright-bar style-dark ">
                    <div class="copyright-text text-center ">
                        © Copyright SAFHA <span id="currentYear"></span>.</a>.
                    </div>
                    <script>
                        document.getElementById('currentYear').innerHTML = new Date().getFullYear();
                    </script>

                </div>
            </div>
        </footer>
        <!--* Main Footer -->
        <div id="theme-option " class="option-panel ">
            <h3>Select Your Color</h3>
            <ul class="pattern-color-list ">
                <li>
                    <a data-url="default-color " class="default-color active "></a>
                </li>
                <li>
                    <a data-url="orange-color " class="orange-color "></a>
                </li>
                <li>
                    <a data-url="green-color " class="green-color "></a>
                </li>
            </ul>
            <h3>RTL/LTR Option</h3>
            <div class="layout-option ">
                <a class="btn btn-secondary btn-small enable rtl-version ">RTL</a>
                <a class="btn btn-secondary btn-small ltr-version ">LTR</a>
            </div>
            <div class="switcher-btn d-none">
                <a class="settings ">
                    <i class="mdi mdi-cog-outline mdi-spin "></i>
                </a>
            </div>
        </div>
    </div>
    <!--* Box-wrapper -->
    <div class="overlay overlay-search ">
        <div class="close-search ">
            <span class="lines "></span>
        </div>
        <div class="container ">
            <form method="post ">
                <div class="form-group ">
                    <input type="search " class="form-control " name="SearchInput " placeholder="Search… ">
                    <button type="submit " class="search-submit "><i class="fa fa-search "></i></button>
                </div>
            </form>
        </div>
    </div>
    <!--* Search-form-->

    <!--*Javascript -->
    <script src="js/jquery.min.js "></script>
    <script src="js/jquery-migrate.min.js "></script>
    <script src="js/bootstrap.bundle.min.js "></script>
    <script src="js/jquery.easing.min.js "></script>
    <script src="js/scrollspy.min.js "></script>
    <script src="js/appear.js "></script>
    <!--* WOW Animation -->
    <script src="js/wow.min.js "></script>
    <!--* Slick Slider -->
    <script src="js/slick.min.js "></script>
    <!--* Main Js -->
    <script src="js/dcode.js "></script>
</body>

<!-- Mirrored from SAFHA.sacredthemes.net/layouts/index-standard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2024 22:51:16 GMT -->

</html>

</html>
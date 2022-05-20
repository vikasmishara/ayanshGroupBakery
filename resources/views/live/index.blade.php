<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ayansh Group | Home</title>
    @include('live.includes.top_scripts')
</head>

<body>

<!--Loader-->
{{--@include('live.includes.loader')--}}

<!--Topbar-->
@include('live.includes.top_bar')

        <!--Header-->
@include('live.includes.header')

        <!-- REVOLUTION SLIDER -->
@include('live.includes.slider.home_slider')
        <!-- END REVOLUTION SLIDER -->

<!--Features Section-->
<section class="feature_wrap padding-half" id="specialities">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="heading ">Our &nbsp; Products</h2>
                <hr class="heading_space">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 feature text-center">
                <img src="{{asset('dist/images/drinks/beats.png')}}" alt="Services Image">
                <h3><a href="#">Beats</a></h3>
            </div>

            <div class="col-md-3 col-sm-6 feature text-center">
                <img src="{{asset('dist/images/drinks/budweiser-bottle.png')}}" alt="Services Image">
                <h3><a href="#">Budweiser</a></h3>
            </div>

            <div class="col-md-3 col-sm-6 feature text-center">
                <i class="icon-coffee"></i>
                <h3><a href="#">Copter 7</a></h3>
            </div>

            <div class="col-md-3 col-sm-6 feature text-center">
                <i class="icon-coffee"></i>
                <h3><a href="#">QBC</a></h3>
            </div>
        </div>

    </div>
</section>

<section id="overview" class="padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="heading">Services</h2>
                <hr class="heading_space">
                <p>Ayansh group offers industrial as well automobile industry lubricants to their customers Ayansh group
                    collaboration with Bautech Vanouren industries Pvt Ltd USA incorporates the best industrial
                    lubricants according to the industry standards. The products are of high quality that increases
                    speed and minimizes friction All the chemical incorporations take care of all the industry standards
                    and are specific to environmental conditions. All types of lubricants are provided by us for all
                    sorts of vehicles. Our high-quality products serve you with the best services and provide smooth
                    usage to your vehicle Budweiser is the non-alcoholic unique beer for all the customers. This drink
                    is purely non-alcoholic with of alcohol content in it. The twist to this drinks that adds up to its
                    quality is being purely non-alcoholic it flavors like a boer A new trend to the market with this
                    amazing new style bear with now fint and flavor for all the beer lovers <br>
                <h5><a href="{{route('live.pages.services')}}">Read more about services</a></h5>
            </div>
        </div>
    </div>
</section>

<!--Services plus working hours-->
<section id="services" class="padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="heading">Featured &nbsp; Drinks</h2>
                <hr class="heading_space">
                <div class="slider_wrap">
                    <div id="service-slider" class="owl-carousel">
                        <div class="item">
                            <div class="item_inner">
                                <div class="image">
                                    <img src="{{asset('dist/images/food-1.jpg')}}" alt="Services Image">
                                    <a href="#"></a>
                                </div>
                                <h3><a href="#">Budweiser 0.0 (Non-Alcoholic Beer)</a></h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item_inner">
                                <div class="image">
                                    <img src="{{asset('dist/images/food-4.jpg')}}" alt="Services Image">
                                    <a href="#"></a>
                                </div>
                                <h3><a href="#">KingFisher Bottle</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="heading">Our &nbsp; Menu</h2>
                <hr class="heading_space">
                <ul class="menu_widget">
                    <li>Classic Nachos<span>$499.00</span></li>
                    <li>Nachos Grande<span>$249.00</span></li>
                    <li>Avocado Shell Stuffed<span>$150.00</span></li>
                    <li>Stuffed Mushroom<span>$199.00</span></li>
                    <li>Baked Potato Jackets<span>$99.00</span></li>
                    <li>Mexican Taco<span>$899.00</span></li>
                    <li>Tex-Mex Chicken<span>$1250.00</span></li>
                    <li>Quesadillas Acapulco<span>$399.00</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<!-- Order Online -->
<section id="order-form" class="order_section">
    <div class="container order_form padding">
        <div class="row">
            <div class="col-md-12 appointment_form">
                <h2 class="heading">Online Order</h2>
                <hr class="heading_space">
                <div class="row">
                    <div class="col-md-8">
                        <form onSubmit="return false" id="order_form" class="callus">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <div id="result" class="text-center"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                        consequat.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="name" id="name"
                                               required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email address"
                                               name="email" id="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone No" name="phone"
                                               id="phone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" id="deal" name="deal">
                                            <option value="Not Selected"> Select Deal</option>
                                            <option> Deal One ($200)</option>
                                            <option> Deal Two ($500)</option>
                                            <option> Deal Three ($900)</option>
                                            <option> Deal Four ($1300)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea placeholder="Order Details" id="message" name="message"
                                                  required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <div class="btn-submit btn-common-white">
                                            <input type="submit" value="Place &nbsp; Order" id="btn_order_submit"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</section>
<!-- testinomial -->
@include('live.includes.content.testimonials')


        <!--Footer-->
@include('live.includes.footer')

<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

@include('live.includes.bottom_scripts')

</body>
</html>

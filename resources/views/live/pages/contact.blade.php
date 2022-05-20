<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ayansh Group | Locations</title>
    @include('live.includes.top_scripts')
</head>

<body>
<!--Loader-->
{{--@include('live.includes.loader')--}}

<!--Topbar-->
@include('live.includes.top_bar')

        <!--Header-->
@include('live.includes.header')

<!--Page header & Title-->
<section id="contact_page_header">
    <div class="page_title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Locations</h2>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Contact Form & Address-->
<section class="padding">
    <div class="container order-page">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <h2 class="heading">Get in Touch</h2>
                <hr class="heading_space">
                <form class="callus" onSubmit="return false"  id="contact_form">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="result" class="text-center form-group"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="f_name" id="f_name"  placeholder="First Name" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="l_name" id="l_name"  placeholder="Last Name" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" id="email"  placeholder="Email Address" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="phone" id="phone" required placeholder="Phone No">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea placeholder="Message" name="message" id="message"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="btn-submit button3">
                                    <input type="submit" value="Submit Request" id="btn_contact_submit">

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-sm-4 bistro">
                <h2 class="heading">Ayansh Group</h2>
                <hr class="heading_space">
                <p><strong>Phone:</strong>+91 - 7068708777</p>
                <p><strong>Email:</strong> <a href="mailto:info@ayanshgroup.in">info@ayanshgroup.in</a></p>
                <p><strong>Address:</strong> 271, Mangala Vihar-1, New PAC Line, Shayam Nagar, Kanpur, Uttar Pradesh - 208013</p>
                <ul class="social_icon">
                    <li class="black"><a href="#" class="facebook"><i class="icon-facebook5"></i></a></li>
                    <li class="black"><a href="#" class="twitter"><i class="icon-twitter4"></i></a></li>
                    <li class="black"><a href="#" class="google"><i class="icon-google"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--Footer-->
@include('live.includes.footer')

<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

@include('live.includes.bottom_scripts')
</body>
</html>



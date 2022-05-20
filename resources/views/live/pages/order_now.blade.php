<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ayansh Group  | Order Now</title>
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
<section id="page_header">
    <div class="page_title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">Order Online</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="order-form" class="order-page">
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
                                    <div id="result" class="text-center"></div></div></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name"  name="name" id="name"  required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email address" name="email" id="email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone No" name="phone" id="phone" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea placeholder="Order Details"  id="message" name="message" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="btn-submit btn-common-white">
                                            <input type="submit" value="Place &nbsp; Order" id="btn_order_submit" />
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


<!--Footer-->
@include('live.includes.footer')

<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>

@include('live.includes.bottom_scripts')
</body>
</html>



<header id="main-navigation">
    <div id="navigation" data-spy="affix" data-offset-top="20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="false">
                                <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{route('live.index')}}"><img src="{{asset('dist/images/logo.png')}}" alt="logo" class="img-responsive"></a>
                        </div>

                        <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li><a href="{{route('live.index')}}">Home</a></li>
                                <li><a href="{{route('live.pages.about_us')}}">About us</a></li>
                                <li><a href="{{route('live.pages.services')}}">Services</a></li>
                                <li><a href="{{route('live.pages.gallery')}}">Gallery</a></li>
                                <li><a href="{{route('live.pages.order_now')}}">Order Now</a></li>
                                <li><a href="{{route('live.pages.contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
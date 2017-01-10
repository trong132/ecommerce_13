<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Framgia - Shop</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->

    {{ Html::style('/bower/bootstrap/dist/css/bootstrap.min.css') }}
    <!-- Font Awesome -->
    {{ Html::style('/bower/font-awesome/css/font-awesome.min.css') }}

    <!-- Custom CSS -->
    {{ Html::style('/bower/owl.carousel/dist/assets/owl.carousel.css') }}
    {{ Html::style('/templates/public/css/style.css') }}
    {{ Html::style('templates/public/css/responsive.css') }}


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i>{{trans('page.my_account')}}</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i>{{trans('page.wishlist')}}</a></li>
                            <li><a href="cart.html"><i class="fa fa-user"></i>{{trans('page.my_cart')}}</a></li>
                            <li><a href="checkout.html"><i class="fa fa-user"></i>{{trans('page.checkout')}} </a></li>
                            <li><a href="#"><i class="fa fa-user"></i>{{trans('page.login')}}</a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./">{{Html::image('/templates/public/img/logo.png')}}</a></h1>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.html">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href=" {{route('public.index.index')}} ">{{trans('page.home')}}</a></li>
                        <li><a href="#">{{trans('page.category')}}</a></li>
                        <li><a href="cart.html">{{trans('page.cart')}}</a></li>
                        <li><a href="checkout.html">{{trans('page.checkout')}}</a></li>
                        <li><a href="#">{{trans('page.contact')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- End mainmenu area -->


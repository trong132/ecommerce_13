 <div class="footer-top-area">
    <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="footer-about-us">
                        <h2><span> {{trans('page.site_name')}} </span></h2>
                        <p> {{trans('page.site_description')}} </p>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">{{trans('page.location')}} </h2>
                        <ul>
                            <li><i class="fa fa-map-marker"></i>{{trans('page.address')}}</li>
                            <li><i class="fa fa-phone"></i>{{trans('page.phone')}}</li>
                            <li><i class="fa fa-envelope-o"></i>{{trans('page.email')}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title"> {{trans('page.newsletter')}} </h2>
                        <p> {{trans('page.newsletter.detail')}} </p>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->

    {{ Html::script('/templates/public/js/vendor.js') }}
    {{ Html::script('/bower/jquery.sticky/jquery.sticky.js') }}

    <!-- jQuery easing -->
    {{ Html::script('/bower/jquery.easing/js/jquery.easing.min.js') }}

    <!-- Main Script -->
    {{ Html::script('/templates/public/js/main.js') }}

    <!-- Slider -->

    {{ Html::script('/bower/bxslider-4/dist/jquery.bxslider.min.js') }}
    {{ Html::script('/templates/public/js/index.js') }}
  </body>
</html>

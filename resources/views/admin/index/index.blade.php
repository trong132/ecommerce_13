@extends('admin.master')
@section('main-content')
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header"> {{ trans('page.dashboard') }} </h1>
    </div>
    <!--End Page Header -->
</div>
<div class="row">
    <!--quick info section -->
    <div class="col-lg-4">
        <div class="alert alert-danger text-center">
            <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>20 </b> {{ trans('page.new_orders') }}
        </div>
    </div>
    <div class="col-lg-4">
        <div class="alert alert-success text-center">
            <i class="fa  fa-beer fa-3x"></i>&nbsp;<b>27 </b> {{ trans('page.requests') }}
        </div>
    </div>
    <div class="col-lg-4">
        <div class="alert alert-success text-center">
            <i class="fa  fa-beer fa-3x"></i>&nbsp;<b>27 </b> {{ trans('page.out_of_stock') }}
        </div>
    </div>

    <!--end quick info section -->
</div>
<!-- TODO -->
<div class="row">
    <div class="col-lg-12">
        <!--Area chart example -->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> {{ trans('page.chart') }}
            </div>
            <div class="panel-body">
                <div id="morris-area-chart"></div>
            </div>
        </div>
        <!--End area chart example -->
        <!--Simple table example -->
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> {{ trans('page.latest_order') }}
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>3326</td>
                                        <td>10/21/2013</td>
                                        <td>3:29 PM</td>
                                        <td>$321.33</td>
                                    </tr>
                                    <tr>
                                        <td>3325</td>
                                        <td>10/21/2013</td>
                                        <td>3:20 PM</td>
                                        <td>$234.34</td>
                                    </tr>
                                    <tr>
                                        <td>3324</td>
                                        <td>10/21/2013</td>
                                        <td>3:03 PM</td>
                                        <td>$724.17</td>
                                    </tr>
                                    <tr>
                                        <td>3323</td>
                                        <td>10/21/2013</td>
                                        <td>3:00 PM</td>
                                        <td>$23.71</td>
                                    </tr>
                                    <tr>
                                        <td>3322</td>
                                        <td>10/21/2013</td>
                                        <td>2:49 PM</td>
                                        <td>$8345.23</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!--End simple table example -->
    </div>
</div>
<!-- End TODO -->
@endsection

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> {{ trans('page.admin.title') }} </title>
        @include('admin.partial.styles')
       </head>
    <body>
        <!--  wrapper -->
        <div id="wrapper">
            <!-- navbar top -->
            @include('admin.partial.nav_top')
            <!-- end navbar top -->
            <!-- navbar side -->
            @include('admin.partial.nav_side')
            <!-- end navbar side -->
            <!--  page-wrapper -->
            <div id="page-wrapper">
                @yield('main-content')
            </div>
            <!-- end page-wrapper -->
        </div>
        <!-- End page wrapper-->
        @include('admin.partial.script')
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
@include('components.admin.header')

<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/bg-1.jpg)">


    <div class="container h-p100">

        @yield('content')

    </div>

    <!-- Vendor JS -->
    <script src="{{asset('admin_asset/js/vendors.min.js')}}"></script>
    <script src="{{asset('admin_asset/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('assets/icons/feather-icons/feather.min.js')}}"></script>

    <script src="{{asset('assets/vendor_components/jquery-knob/js/jquery.knob.js')}}"></script>
    <script src="{{asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>

    <!-- WebkitX Admin App -->
    <script src="{{asset('admin_asset/js/template.js')}}"></script>
    <script src="{{asset('admin_asset/js/pages/dashboard.js')}}"></script>



</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    {{ config('app.name', 'Offer System') }}
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link rel="stylesheet" href="{{asset('css/all.min.css')}}" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  {{-- <link href="{{asset('demo/demo.css')}}" rel="stylesheet" /> --}}
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color= "">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a class="logo-mini simple-text">
             OS
        </a>
        <a class="logo-normal simple-text" href="{{ url('/') }}">
            Offer System
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a  href="{{route('infos')}}">
              <i class="now-ui-icons travel_info"></i>
              <p>Info</p>
            </a>
          </li>
          <li>
            <a href="{{route('customers')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>Customers</p>
            </a>
          </li>
          <li>
          <a href="{{route('suppliers')}}">
            <i class="now-ui-icons users_single-02"></i>
            <p>Suppliers</p>
          </a>
         </li>
         <li>
            <a href="{{route('equipments')}}">
              <i class="now-ui-icons files_box"></i>
              <p>Equipments</p>
            </a>
          </li>
          <li>
            <a href="{{route('services')}}">
              <i class="now-ui-icons loader_gear"></i>
              <p>Services</p>
            </a>
          </li>
          <li>
            <a href="{{route('subservices')}}">
              <i class="now-ui-icons ui-1_settings-gear-63"></i>
              <p>Sub Services</p>
            </a>
          </li>
          <li>
            <a href="{{route('offers')}}">
              <i class="now-ui-icons ui-1_send"></i>
              <p>Offers</p>
            </a>
          </li>
          <li>
            <a href="{{route('contracts')}}">
              <i class="now-ui-icons education_agenda-bookmark"></i>
              <p>Contracts</p>
            </a>
          </li>
          <li>
            <a href="{{route('marketers')}}">
              <i class="now-ui-icons users_circle-08"></i>
              <p>Marketers</p>
            </a>
          </li>
          <li>
            <a href="{{route('salesmanagers')}}">
              <i class="now-ui-icons users_circle-08"></i>
              <p>Sales Managers</p>
            </a>
          </li>
          <li>
            <a href="{{route('customerinvoices')}}">
              <i class="now-ui-icons business_badge"></i>
              <p>Customer Invoices</p>
            </a>
          </li>
          <li>
            <a href="{{route('supplierinvoices')}}">
              <i class="now-ui-icons business_badge"></i>
              <p>Supplier Invoices</p>
            </a>
          </li>
          <li>
            <a href="{{route('prices')}}">
              <i class="now-ui-icons business_money-coins"></i>
              <p>Equipments Price</p>
            </a>
          </li>
          <li>
            <a href="{{route('serviceprices')}}">
              <i class="now-ui-icons business_money-coins"></i>
              <p>Service Price</p>
            </a>
          </li>
          <li>
            <a href="{{route('receipts')}}">
              <i class="now-ui-icons business_money-coins"></i>
              <p>Receipts</p>
            </a>
          </li>
          <li>
            <a href="{{route('courses')}}">
              <i class="now-ui-icons education_agenda-bookmark"></i>
              <p>Courses</p>
            </a>
          </li>
          <li>
            <a href="{{route('teachers')}}">
              <i class="now-ui-icons files_paper"></i>
              <p>Teachers</p>
            </a>
          </li>
          <li>
            <a href="{{route('students')}}">
              <i class="now-ui-icons education_hat"></i>
              <p>Students</p>
            </a>
          </li>
          <li>
            <a href="{{route('accounts')}}">
              <i class="now-ui-icons business_money-coins"></i>
              <p>Accounts</p>
            </a>
          </li>

        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->

      <!-- End Navbar -->
      <div class="panel-header-sm">
      </div>
      <div class="content">
        @yield('content')
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                {{-- <a href="https://www.creative-tim.com">
                  Creative Tim
                </a> --}}
              </li>
              <li>
                {{-- <a href="http://presentation.creative-tim.com">
                  About Us
                </a> --}}
              </li>
              <li>
                {{-- <a href="http://blog.creative-tim.com">
                  Blog
                </a> --}}
              </li>
            </ul>
          </nav>
          <div class="copyright container small text-center text-muted" id="copyright">
            Copyright &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script> - Sunrise Team
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  {{-- <script src="{{asset('demo/demo.js')}}"></script> --}}

@yield('scripts')
</body>

</html>























{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Offer System') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    {{-- <script src="{{asset('js/jquery.min.js')}}"></script> --}}
    {{-- <script src="{{asset('js/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    {{-- <script src="{{asset('js/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link rel="stylesheet" href="https://khaalipaper.com/source/bootstrap-multiselect.css" type="text/css">
    <script type="text/javascript" src="https://khaalipaper.com/source/bootstrap-multiselect.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html, body {
            background-color: white;
            color: #60a3bc;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            vol
            /* margin-top: 4%; */
        }

    </style>
</head>
<body> --}}
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Offer System
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               P&N
                            </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('infos')}}">
                                Info
                            </a>

                            <a class="dropdown-item" href="{{route('customers')}}">
                                Customers
                            </a>

                            <a class="dropdown-item" href="{{route('suppliers')}}">
                                Suppliers --}}
                            {{-- </a>

                            <a class="dropdown-item" href="{{route('equipments')}}">
                                Equipments
                            </a>

                            <a class="dropdown-item" href="{{route('services')}}">
                                Services
                            </a>

                            <a class="dropdown-item" href="{{route('subservices')}}">
                               Sub services
                            </a>

                            <a class="dropdown-item" href="{{route('offers')}}">
                                Offers
                            </a>

                            <a class="dropdown-item" href="{{route('contracts')}}">
                                Contracts
                            </a>

                            <a class="dropdown-item" href="{{route('marketers')}}">
                                Marketers
                            </a>

                            <a class="dropdown-item" href="{{route('salesmanagers')}}">
                                Sales managers
                            </a>

                            <a class="dropdown-item" href="{{route('customerinvoices')}}">
                                Customer invoice
                            </a>

                            <a class="dropdown-item" href="{{route('supplierinvoices')}}">
                                Supplier invoice
                            </a>

                            <a class="dropdown-item" href="{{route('prices')}}">
                                Equipment Prices
                            </a>

                            <a class="dropdown-item" href="{{route('serviceprices')}}">
                               Service Prices
                            </a> --}}
{{--
                            <a class="dropdown-item" href="{{route('receipts')}}">
                                Receipts
                             </a>
                        </div>
                        </li>

                    </ul>

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               Sunrise Center
                            </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('courses')}}">
                                Courses
                            </a>
                            <a class="dropdown-item" href="{{route('teachers')}}">
                                Teachers
                            </a>
                            <a class="dropdown-item" href="{{route('students')}}">
                                Students
                            </a>
                        </div>
                        </li>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown"> --}}
                            {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               Accounts Fund
                            </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('accounts')}}">
                                Accounts
                            </a>
                        </div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        {{-- @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> --}}
                                        {{-- {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form> --}}
                                {{-- </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main> --}}
    {{-- </div>
@yield('js')

</body>
</html> --}}





{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Offer System') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html, body {
            background-color: white;
            color: #60a3bc;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            vol
            /* margin-top: 4%; */
        }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Offer System
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               Menu
                            </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">


                            <a class="dropdown-item" href="{{route('customers')}}">
                                Customers
                            </a>

                            <a class="dropdown-item" href="{{route('suppliers')}}">
                                Suppliers
                            </a>

                            <a class="dropdown-item" href="{{route('equipments')}}">
                                Equipments
                            </a>

                            <a class="dropdown-item" href="{{route('services')}}">
                                Services
                            </a>

                            <a class="dropdown-item" href="{{route('offers')}}">
                                Offers
                            </a>

                            <a class="dropdown-item" href="{{route('contracts')}}">
                                Contracts
                            </a>

                            <a class="dropdown-item" href="{{route('marketers')}}">
                                Marketers
                            </a>

                            <a class="dropdown-item" href="{{route('salesmanagers')}}">
                                Sales managers
                            </a>

                            <a class="dropdown-item" href="{{route('customerinvoices')}}">
                                Customer invoice
                            </a>

                            <a class="dropdown-item" href="{{route('supplierinvoices')}}">
                                Supplier invoice
                            </a>

                            <a class="dropdown-item" href="{{route('prices')}}">
                                Equipment Prices
                            </a>

                            <a class="dropdown-item" href="{{route('serviceprices')}}">
                                Services Prices
                            </a>
                        </div>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        {{-- @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}

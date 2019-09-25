<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>
      @yield('title')
  </title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- font-awesome -->
  <link rel="stylesheet" href="{{ asset('/') }}plugins/font-awesome/font-awesome.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('/') }}plugins/bootstrap/bootstrap.min.css">

  <!-- Main Stylesheet -->
  <link href="{{ asset('/') }}css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{ asset('/') }}images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="{{ asset('/') }}images/favicon.ico" type="image/x-icon">

</head>

<body>

<section class="bg-gray navigation shadow">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-0">
                    <nav class="navbar navbar-expand-lg navbar-light transition">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto main-nav ">
                                    <li class="nav-item">
                                            <a class="nav-link active text-primary font-weight-bold text-capitalize"
                                                href="{{ route('home') }}">Home</a>
                                        </li>
                                @admin
                                <li class="nav-item">
                                    <div class="btn-group">
                                        <a class="nav-link text-primary font-weight-bold text-capitalize dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            href="">Menu</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('teamindexpage') }}">Team Setup</a>
                                            <a class="dropdown-item" href="{{ route('matchsetupindex') }}">Match Format Setup</a>
                                            <a class="dropdown-item" href="{{ route('fullmatchsetup.create') }}">Match Setup</a>
                                            <a class="dropdown-item" href="{{ route('fullmatchsetup.index') }}">Running Match List</a>
                                            <a class="dropdown-item" href="run-to-run-setup.html">Run To Run Setup</a>
                                        </div>
                                    </div>
                                </li>
                                @endadmin
                              

                                <li class="nav-item">
                                    <div class="btn-group">
                                        <a class="nav-link text-primary font-weight-bold text-capitalize dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            href="careers.html">Account</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="deposit.html">Balance</a>
                                            <a class="dropdown-item" href="withdraw.html">Cash In</a>
                                            <a class="dropdown-item" href="#">Cash Out</a>
                                            <a class="dropdown-item" href="transaction-history.html">Transaction History</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-primary font-weight-bold text-capitalize"
                                href="{{ route('userprofile') }}">User Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-primary font-weight-bold text-capitalize"
                                        href="admin-notification.html">Notification<sup style="color: red">1</sup></a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link text-primary font-weight-bold text-capitalize"
                                            href="{{ route('contactbackend') }}">Contact</a>
                                    </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                            Logout
                                        </a>
                                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           @csrf
                                        </form>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>



<section class="py-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                  @yield('maincontent')
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
 @include('backend.footer')
</body>
</html>

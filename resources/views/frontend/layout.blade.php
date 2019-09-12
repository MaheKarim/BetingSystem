<!DOCTYPE html>
<html lang="zxx">

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
                    <a class="navbar-brand" href="index.html"><img src="images/logo3 small ball 2.png" alt="" class="img-fluid"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto main-nav ">
                            <li class="nav-item">
                                <a class="nav-link active text-primary font-weight-bold text-capitalize"
                                    href="admin.html">Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-primary font-weight-bold text-capitalize"
                                    href="agent-option.html">Agent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-primary font-weight-bold text-capitalize"
                                    href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-primary font-weight-bold text-capitalize"
                                    href="run-feeds.html">Run-Feeds</a>
                            </li>
                            <li class="nav-item">
                                <div class="btn-group">
                                    <a class="nav-link text-primary font-weight-bold text-capitalize dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        href="careers.html">Account</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="deposit.html">Deposit Funds</a>
                                        <a class="dropdown-item" href="withdraw.html">Withdraw Funds</a>
                                        <a class="dropdown-item" href="#">Check Balance</a>
                                        <a class="dropdown-item" href="send-balance.html">Send Balance</a>
                                        <a class="dropdown-item" href="transaction-history.html">Transaction History</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-primary font-weight-bold text-capitalize"
                                    href="user-profile.html">User Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-primary font-weight-bold text-capitalize"
                                    href="notification.html">Notification<sup style="color: red">1</sup></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-primary font-weight-bold text-capitalize"
                                    href="contact-us.html">Contact Us</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="nav-link active text-primary font-weight-bold text-capitalize"
                                    href="sign-up.html">Sign Up</a></li>
                            <li><a class="nav-link active text-primary font-weight-bold text-capitalize"
                                    href="log-in.html">Log in</a></li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

@yield('frontEndContent')

<!-- Footer -->
@include('backend.footer')
</body>
</html>

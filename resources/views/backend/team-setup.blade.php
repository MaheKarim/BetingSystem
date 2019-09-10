<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cricbuzar</title>

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
                                            <div class="btn-group">
                                                <a class="nav-link text-primary font-weight-bold text-capitalize dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    href="">Menu</a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="team-setup.html">Team Setup</a>
                                                    <a class="dropdown-item" href="match-format-setup.html">Match Format Setup</a>
                                                    <a class="dropdown-item" href="match-setup.html">Match Setup</a>
                                                    <a class="dropdown-item" href="run-to-run-setup.html">Run To Run Setup</a>
                                                </div>
                                            </div>
                                        </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-primary font-weight-bold text-capitalize"
                                        href="index.html">Home</a>
                                </li>
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
                                        href="user-profile.html">User Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-primary font-weight-bold text-capitalize"
                                        href="admin-notification.html">Notification<sup style="color: red">1</sup></a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="nav-link active text-primary font-weight-bold text-capitalize"
                                        href="index.html">Log Out</a></li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

<section class="py-50 height-100vh">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center pb-3">
                <h4 class="text-capitalize  py-2 bg-primary">Team Setup</h4>
                  <!-- Notification Start -->
                                @if (session()->has('success'))
                                   <div class="alert alert-success">
                                       {{ session()->get('success') }}
                                   </div>
                                @endif
                  <!-- Notification End -->

            </div>
            <div class="col-lg-6 mx-auto">
                <form method="POST" action="{{ url('create-team') }}">
                    @csrf
                    <span>Select Team Name <span class="text-red">*</span></span>
                    <input type="text" class="form-control my-2" name="team_name" id="team_name" placeholder="Team Name">
                    <button type="submit" class="form-control my-3">Create Team</button>
                </form>
            </div>

                <div class="col-lg-12 text-center pb-3">
                    <h4 class="text-capitalize  py-2 bg-info">Team Table</h4>
                   @foreach ($teamsetups as $teametup)
                   <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Team Name</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{ $teamsetup->team_name }}</td>
                            <td>@mdo</td>
                          </tr>
                        </tbody>
                </table>
                   @endforeach
                </div>
        </div>
    </div>
</section>

<!-- Footer -->

@include('backend.footer')

</body>
</html>
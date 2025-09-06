<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Ecobank - Dashboard </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('new/assets/img/favicon.ico') }}" />
    <link href="{{ asset('new/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('new/assets/js/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('new/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('new/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('new/assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body class="alt-menu sidebar-noneoverflow" style="padding: 20px;">
    <!-- BEGIN LOADER -->

    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <nav class="navbar fixed navbar-expand-lg navbar-dark" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        <div class="container-fluid">
            <!-- Brand/Logo -->
            <a class="navbar-brand fw-bold" href="/" style="font-size: 1.5rem;">
                <img src="{{ asset('assets/img/logo.png') }}" alt="">

            </a>

            <!-- Toggle button for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/dashboard">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                                <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                            </svg>
                            Dashboard
                        </a>
                    </li>



                </ul>

                <!-- Right side items -->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link  d-flex align-items-center" href="/logout" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="me-2" style="width: 32px; height: 32px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                </svg>
                            </div>
                            <span class="d-none d-md-inline">Logout {{ auth()->user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="/profile">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-2">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                </svg>
                                Profile
                            </a></li>
                            <li><a class="dropdown-item" href="/settings">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-2">
                                    <path d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.82,11.69,4.82,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z"/>
                                </svg>
                                Settings
                            </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post" class="d-inline">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-2">
                                            <path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/>
                                        </svg>
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container sidebar-closed sbar-open" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <!-- Welcome Section -->
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="page-header">
                            <h2 class="page-title text-primary">Welcome back, {{ auth()->user()->name }}!</h2>
                            <p class="text-muted">Here's your account overview for today</p>
                        </div>
                    </div>
                </div>

                <!-- Main Dashboard Cards Row -->
                <div class="row layout-top-spacing">
                    <!-- Account Balance Card -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="card border-0 shadow-lg" style="background: linear-gradient(135deg, hsl(240, 1%, 84%) 0%, #fff 100%); border-radius: 20px; overflow: hidden; position: relative; transition: all 0.3s ease; transform: translateY(0);" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <!-- Decorative Elements -->
                            <div style="position: absolute; top: -50px; right: -50px; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%;"></div>
                            <div style="position: absolute; bottom: -30px; left: -30px; width: 60px; height: 60px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>

                            <div class="card-body text-white p-4">
                                <div class="d-flex text-dark justify-content-between align-items-start mb-3">
                                    <div>
                                        <h6 class="text-dark-50 mb-1" style="font-size: 0.9rem; letter-spacing: 0.5px;">AVAILABLE BALANCE</h6>
                                        <h2 class="text-dark mb-0" style="font-size: 2.8rem; font-weight: 700; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">$43,000,000</h2>
                                        <small class="text-dark-50">Account: ****4892</small>
                                    </div>
                                    <div class="text-end">
                                        <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                                            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex gap-2 mt-4">
                                    <button class="btn btn-light btn-sm rounded-pill px-3" style="backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3);">
                                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                        </svg>
                                        Add Money
                                    </button>
                                    <button class="btn btn-outline-light text-dark btn-sm rounded-pill px-3">
                                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                        </svg>
                                        Transfer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Account Type Card -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="card border-0 shadow-lg" style="background: linear-gradient(135deg, hsl(240, 1%, 84%) 0%, #fff 100%); border-radius: 20px; overflow: hidden; position: relative; transition: all 0.3s ease; transform: translateY(0);" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <!-- Decorative Elements -->
                            <div style="position: absolute; top: -40px; right: -40px; width: 80px; height: 80px; background: rgba(255,255,255,0.1); border-radius: 50%;"></div>
                            <div style="position: absolute; bottom: -20px; left: -20px; width: 40px; height: 40px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>

                            <div class="card-body text-dark p-4">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div>
                                        <h6 class="text-dark-50 mb-1" style="font-size: 0.9rem; letter-spacing: 0.5px;">ACCOUNT TYPE</h6>
                                        <h4 class="text-dark mb-1" style="font-weight: 600;">Premium Business</h4>
                                        <small class="text-dark-50">Member since 2018</small>
                                    </div>
                                    <div style="width: 60px; height: 60px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                                        <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="text-dark-50 small">Account Status</span>
                                        <span class="text-dark small fw-bold">Active</span>
                                    </div>
                                    <div class="progress" style="height: 6px; background: rgba(255,255,255,0.2); border-radius: 10px;">
                                        <div class="progress-bar bg-dark" role="progressbar" style="width: 95%; border-radius: 10px;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <small class="text-dark-50">Premium Benefits</small>
                                        <small class="text-dark">95%</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Monthly Overview Card -->
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="card border-0 shadow-lg" style="background: linear-gradient(135deg, hsl(240, 1%, 84%) 0%, #fff 100%); border-radius: 20px; overflow: hidden; position: relative; transition: all 0.3s ease; transform: translateY(0);" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                            <!-- Decorative Elements -->
                            <div style="position: absolute; top: -30px; right: -30px; width: 60px; height: 60px; background: rgba(255,255,255,0.1); border-radius: 50%;"></div>
                            <div style="position: absolute; bottom: -25px; left: -25px; width: 50px; height: 50px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>

                            <div class="card-body text-dark p-4">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h6 class="text-dark-50 mb-0" style="font-size: 0.9rem; letter-spacing: 0.5px;">MONTHLY OVERVIEW</h6>
                                    <div style="width: 40px; height: 40px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="text-center p-3" style="background: rgba(255,255,255,0.1); border-radius: 15px; backdrop-filter: blur(10px);">
                                            <div class="mb-2">
                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                                </svg>
                                            </div>
                                            <h5 class="text-dark mb-1" style="font-weight: 700;">$2,450,000</h5>
                                            <small class="text-dark-50">Total Income</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-center p-3" style="background: rgba(255,255,255,0.1); border-radius: 15px; backdrop-filter: blur(10px);">
                                            <div class="mb-2">
                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                                </svg>
                                            </div>
                                            <h5 class="text-dark mb-1" style="font-weight: 700;">$1,200,000</h5>
                                            <small class="text-dark-50">Total Expenses</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 text-center">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="me-3">
                                            <div style="width: 12px; height: 12px; background: rgba(255,255,255,0.8); border-radius: 50%;"></div>
                                        </div>
                                        <span class="text-dark-50 small">Net Profit: $1,250,000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Bank Cards Section -->
                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-three">
                            <div class="widget-heading">
                                <h5 class="mb-4">Your Cards</h5>
                            </div>
                            <div class="widget-content">
                                <div class="row">
                                    <!-- Visa Card -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
                                        <div class="card" style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.2); height: 200px;">
                                            <div class="card-body text-white">
                                                <div class="d-flex justify-content-between align-items-start mb-3">
                                                    <h6 class="card-title mb-0">Visa Platinum</h6>
                                                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCA0MCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjI0IiByeD0iNCIgZmlsbD0iIzAwNzBCQyIvPgo8cGF0aCBkPSJNMTYuNSA4SDIzLjVMMjEuNSA5SDE4LjVMMTYuNSA4WiIgZmlsbD0iI0ZGRiIvPgo8L3N2Zz4K" alt="Visa" style="width: 40px;">
                                                </div>
                                                <div class="mb-3">
                                                    <p class="mb-1" style="font-size: 0.9rem; opacity: 0.8;">Card Number</p>
                                                    <h5 class="mb-0">**** **** **** 2795</h5>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-end">
                                                    <div>
                                                        <p class="mb-1" style="font-size: 0.8rem; opacity: 0.8;">Expires</p>
                                                        <p class="mb-0">12/26</p>
                                                    </div>
                                                    <div>
                                                        <p class="mb-1" style="font-size: 0.8rem; opacity: 0.8;">CVV</p>
                                                        <p class="mb-0">***</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mastercard -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
                                        <div class="card" style="background: linear-gradient(135deg, #eb3349 0%, #f45c43 100%); border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.2); height: 200px;">
                                            <div class="card-body text-white">
                                                <div class="d-flex justify-content-between align-items-start mb-3">
                                                    <h6 class="card-title mb-0">Mastercard Gold</h6>
                                                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCA0MCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjI0IiByeD0iNCIgZmlsbD0iI0VCMzM0OSIvPgo8Y2lyY2xlIGN4PSIxNiIgY3k9IjEyIiByPSI2IiBmaWxsPSIjRkY1QzQzIi8+CjxjaXJjbGUgY3g9IjI0IiBjeT0iMTIiIHI9IjYiIGZpbGw9IiNGRjVDNDMiLz4KPC9zdmc+Cg==" alt="Mastercard" style="width: 40px;">
                                                </div>
                                                <div class="mb-3">
                                                    <p class="mb-1" style="font-size: 0.9rem; opacity: 0.8;">Card Number</p>
                                                    <h5 class="mb-0">**** **** **** 5678</h5>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-end">
                                                    <div>
                                                        <p class="mb-1" style="font-size: 0.8rem; opacity: 0.8;">Expires</p>
                                                        <p class="mb-0">08/27</p>
                                                    </div>
                                                    <div>
                                                        <p class="mb-1" style="font-size: 0.8rem; opacity: 0.8;">CVV</p>
                                                        <p class="mb-0">***</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- American Express -->
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
                                        <div class="card" style="background: linear-gradient(135deg, #006fcf 0%, #00a8ff 100%); border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.2); height: 200px;">
                                            <div class="card-body text-white">
                                                <div class="d-flex justify-content-between align-items-start mb-3">
                                                    <h6 class="card-title mb-0">Amex Business</h6>
                                                    {{-- <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCA0MCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjI0IiByeD0iNCIgZmlsbD0iIzAwNkZDRiIvPgo8dGV4dCB4PSIyMCIgeT0iMTYiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxMCIgZmlsbD0iI0ZGRiIgdGV4dC1hbmNob3I9Im1pZGRsZSI+QU1FWPCvdGV4dD4KPC9zdmc+Cg==" alt="Amex" style="width: 40px;"> --}}
                                                </div>
                                                <div class="mb-3">
                                                    <p class="mb-1" style="font-size: 0.9rem; opacity: 0.8;">Card Number</p>
                                                    <h5 class="mb-0">**** ****** *9012</h5>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-end">
                                                    <div>
                                                        <p class="mb-1" style="font-size: 0.8rem; opacity: 0.8;">Expires</p>
                                                        <p class="mb-0">05/28</p>
                                                    </div>
                                                    <div>
                                                        <p class="mb-1" style="font-size: 0.8rem; opacity: 0.8;">CVV</p>
                                                        <p class="mb-0">****</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions Section -->
                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-three">
                            <div class="widget-heading">
                                <h5 class="mb-4">Quick Actions</h5>
                            </div>
                            <div class="widget-content">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                        <div class="card text-center h-100" style="border: none; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border-radius: 15px;">
                                            <div class="card-body">
                                                <div class="mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                                    <svg width="30" height="30" fill="white" viewBox="0 0 24 24">
                                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                                    </svg>
                                                </div>
                                                <h6 class="card-title">Transfer Money</h6>
                                                <p class="card-text text-muted">Send money to friends and family</p>
                                                <button class="btn btn-primary btn-sm">Transfer</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                        <div class="card text-center h-100" style="border: none; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border-radius: 15px;">
                                            <div class="card-body">
                                                <div class="mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                                    <svg width="30" height="30" fill="white" viewBox="0 0 24 24">
                                                        <path d="M19 7h-8v6h8V7zm-2 4h-4V9h4v2zm4.5-9H2.5C1.67 2 1 2.67 1 3.5v17C1 21.33 1.67 22 2.5 22h19c.83 0 1.5-.67 1.5-1.5v-17C23 2.67 22.33 2 21.5 2z"/>
                                                    </svg>
                                                </div>
                                                <h6 class="card-title">Pay Bills</h6>
                                                <p class="card-text text-muted">Pay utilities and other bills</p>
                                                <button class="btn btn-primary btn-sm">Pay Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                        <div class="card text-center h-100" style="border: none; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border-radius: 15px;">
                                            <div class="card-body">
                                                <div class="mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                                    <svg width="30" height="30" fill="white" viewBox="0 0 24 24">
                                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                                    </svg>
                                                </div>
                                                <h6 class="card-title">Invest</h6>
                                                <p class="card-text text-muted">Grow your wealth with investments</p>
                                                <button class="btn btn-primary btn-sm">Invest</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mb-3">
                                        <div class="card text-center h-100" style="border: none; box-shadow: 0 5px 15px rgba(0,0,0,0.08); border-radius: 15px;">
                                            <div class="card-body">
                                                <div class="mb-3" style="width: 60px; height: 60px; background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                                    <svg width="30" height="30" fill="white" viewBox="0 0 24 24">
                                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                                                    </svg>
                                                </div>
                                                <h6 class="card-title">Apply Loan</h6>
                                                <p class="card-text text-muted">Get quick approval for loans</p>
                                                <button class="btn btn-primary btn-sm">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Transaction History Section -->
                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-three">
                            <div class="widget-heading">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Recent Transactions</h5>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-primary btn-sm active">All</button>
                                        <button type="button" class="btn btn-outline-primary btn-sm">Income</button>
                                        <button type="button" class="btn btn-outline-primary btn-sm">Expenses</button>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                                            <tr>
                                                <th style="border: none; padding: 15px;">Date</th>
                                                <th style="border: none; padding: 15px;">Description</th>
                                                <th style="border: none; padding: 15px;">Category</th>
                                                <th style="border: none; padding: 15px;">Amount</th>
                                                <th style="border: none; padding: 15px;">Balance</th>
                                                <th style="border: none; padding: 15px;">Status</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                            <tr>
                                                <td style="padding: 15px;">Dec 15, 2024</td>
                                                <td style="padding: 15px;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3" style="width: 40px; height: 40px; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                                            <svg width="20" height="20" fill="white" viewBox="0 0 24 24">
                                                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <strong>Business Revenue</strong><br>
                                                            <small class="text-muted">Client Payment - ABC Corp</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="padding: 15px;"><span class="badge bg-success">Income</span></td>
                                                <td style="padding: 15px;"><span class="text-success fw-bold">+$2,500,000.00</span></td>
                                                <td style="padding: 15px;">$43,000,000.00</td>
                                                <td style="padding: 15px;"><span class="badge bg-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 15px;">Dec 14, 2024</td>
                                                <td style="padding: 15px;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3" style="width: 40px; height: 40px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                                            <svg width="20" height="20" fill="white" viewBox="0 0 24 24">
                                                                <path d="M19 7h-8v6h8V7zm-2 4h-4V9h4v2zm4.5-9H2.5C1.67 2 1 2.67 1 3.5v17C1 21.33 1.67 22 2.5 22h19c.83 0 1.5-.67 1.5-1.5v-17C23 2.67 22.33 2 21.5 2z"/>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <strong>Office Rent</strong><br>
                                                            <small class="text-muted">Monthly Office Payment</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="padding: 15px;"><span class="badge bg-warning">Rent</span></td>
                                                <td style="padding: 15px;"><span class="text-danger fw-bold">-$15,000.00</span></td>
                                                <td style="padding: 15px;">$40,500,000.00</td>
                                                <td style="padding: 15px;"><span class="badge bg-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 15px;">Dec 13, 2024</td>
                                                <td style="padding: 15px;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3" style="width: 40px; height: 40px; background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                                            <svg width="20" height="20" fill="white" viewBox="0 0 24 24">
                                                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <strong>Investment Return</strong><br>
                                                            <small class="text-muted">Portfolio Dividend</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="padding: 15px;"><span class="badge bg-info">Investment</span></td>
                                                <td style="padding: 15px;"><span class="text-success fw-bold">+$85,000.00</span></td>
                                                <td style="padding: 15px;">$40,515,000.00</td>
                                                <td style="padding: 15px;"><span class="badge bg-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 15px;">Dec 12, 2024</td>
                                                <td style="padding: 15px;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3" style="width: 40px; height: 40px; background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                                            <svg width="20" height="20" fill="white" viewBox="0 0 24 24">
                                                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <strong>Employee Salaries</strong><br>
                                                            <small class="text-muted">Monthly Payroll</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="padding: 15px;"><span class="badge bg-danger">Payroll</span></td>
                                                <td style="padding: 15px;"><span class="text-danger fw-bold">-$450,000.00</span></td>
                                                <td style="padding: 15px;">$40,430,000.00</td>
                                                <td style="padding: 15px;"><span class="badge bg-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 15px;">Dec 11, 2024</td>
                                                <td style="padding: 15px;">
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-3" style="width: 40px; height: 40px; background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                                            <svg width="20" height="20" fill="white" viewBox="0 0 24 24">
                                                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <strong>Consulting Fee</strong><br>
                                                            <small class="text-muted">Project Completion Bonus</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="padding: 15px;"><span class="badge bg-success">Income</span></td>
                                                <td style="padding: 15px;"><span class="text-success fw-bold">+$125,000.00</span></td>
                                                <td style="padding: 15px;">$40,880,000.00</td>
                                                <td style="padding: 15px;"><span class="badge bg-success">Completed</span></td>
                                            </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                <div class="text-center mt-4">
                                    <button class="btn btn-outline-primary">View All Transactions</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Financial Insights and Account Summary Row -->
                <div class="row layout-top-spacing">
                    <!-- Financial Insights Section -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-three">
                            <div class="widget-heading">
                                <h5 class="mb-4">Spending Analysis</h5>
                            </div>
                            <div class="widget-content">
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <div class="text-center">
                                            <h4 class="text-primary">$1,200,000</h4>
                                            <p class="text-muted mb-0">This Month</p>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <div class="text-center">
                                            <h4 class="text-success">$2,450,000</h4>
                                            <p class="text-muted mb-0">Income</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h6>Top Categories</h6>
                                    <div class="mb-2">
                                        <div class="d-flex justify-content-between">
                                            <span>Payroll</span>
                                            <span>$450,000</span>
                                        </div>
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar bg-danger" style="width: 37.5%"></div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="d-flex justify-content-between">
                                            <span>Office Rent</span>
                                            <span>$15,000</span>
                                        </div>
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar bg-warning" style="width: 1.25%"></div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="d-flex justify-content-between">
                                            <span>Equipment</span>
                                            <span>$25,000</span>
                                        </div>
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar bg-info" style="width: 2.08%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Account Summary Section -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-three">
                            <div class="widget-heading">
                                <h5 class="mb-4">Account Summary</h5>
                            </div>
                            <div class="widget-content">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <div class="d-flex justify-content-between align-items-center p-3" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 10px; color: white;">
                                            <div>
                                                <h6 class="mb-0">Checking Account</h6>
                                                <small>****1234</small>
                                            </div>
                                            <div class="text-end">
                                                <h5 class="mb-0">$43,000,000</h5>
                                                <small>Available</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="d-flex justify-content-between align-items-center p-3" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 10px; color: white;">
                                            <div>
                                                <h6 class="mb-0">Savings Account</h6>
                                                <small>****5678</small>
                                            </div>
                                            <div class="text-end">
                                                <h5 class="mb-0">$5,200,000</h5>
                                                <small>Available</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="d-flex justify-content-between align-items-center p-3" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 10px; color: white;">
                                            <div>
                                                <h6 class="mb-0">Investment Account</h6>
                                                <small>****9012</small>
                                            </div>
                                            <div class="text-end">
                                                <h5 class="mb-0">$12,800,000</h5>
                                                <small>Available</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

{{--
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-activity-three">

                            <div class="widget-heading">
                                <h5 class="">Notifications</h5>
                            </div>

                            <div class="widget-content">

                                <div class="mt-container mx-auto">
                                    <div class="timeline-line">

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Logs</h5>
                                                    <span class="">27 Feb, 2020</span>
                                                </div>
                                                <p><span></span> {{ Carbon\Carbon::now()->subDays(3)->format('F') }}
                                                    loan payment </p>
                                                <div class="tags">
                                                    <div class="badge badge-primary">Logs</div>
                                                    <div class="badge badge-success">CPanel</div>
                                                    <div class="badge badge-warning">Update</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-success"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-mail">
                                                        <path
                                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                        </path>
                                                        <polyline points="22,6 12,13 2,6"></polyline>
                                                    </svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Mail</h5>
                                                    <span class="">28 Feb, 2020</span>
                                                </div>
                                                <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a
                                                        href="javascript:void(0);">Admin</a></p>
                                                <div class="tags">
                                                    <div class="badge badge-primary">Admin</div>
                                                    <div class="badge badge-success">HR</div>
                                                    <div class="badge badge-warning">Mail</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-danger"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Task Completed</h5>
                                                    <span class="">01 Mar, 2020</span>
                                                </div>
                                                <p>Backup <span>Files EOD</span></p>
                                                <div class="tags">
                                                    <div class="badge badge-primary">Backup</div>
                                                    <div class="badge badge-success">EOD</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-warning"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-file">
                                                        <path
                                                            d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z">
                                                        </path>
                                                        <polyline points="13 2 13 9 20 9"></polyline>
                                                    </svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Collect Docs</h5>
                                                    <span class="">10 Mar, 2020</span>
                                                </div>
                                                <p>Collected documents from <a href="javascript:void(0);">Sara</a></p>
                                                <div class="tags">
                                                    <div class="badge badge-success">Collect</div>
                                                    <div class="badge badge-warning">Docs</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                <div class="t-dark"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-server">
                                                        <rect x="2" y="2" width="20" height="8"
                                                            rx="2" ry="2"></rect>
                                                        <rect x="2" y="14" width="20" height="8"
                                                            rx="2" ry="2"></rect>
                                                        <line x1="6" y1="6" x2="6"
                                                            y2="6"></line>
                                                        <line x1="6" y1="18" x2="6"
                                                            y2="18"></line>
                                                    </svg></div>
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>Reboot</h5>
                                                    <span class="">06 Apr, 2020</span>
                                                </div>
                                                <p>Server rebooted successfully</p>
                                                <div class="tags">
                                                    <div class="badge badge-warning">Reboot</div>
                                                    <div class="badge badge-primary">Server</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}





                </div>

            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('new/') }}assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="{{ asset('new/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('new/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('new/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('new/assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('new/assets/js/custom.jsss') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('new/plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('new/assets/js/dashboard/dash_1.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <!-- Footer -->
    <footer class="bg-dark text-light py-5 mt-5" style="background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%) !important;">
        <div class="container">
            <div class="row">
                <!-- Logo and Company Info -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Bank Logo" style="height: 40px; width: auto; margin-right: 15px;">
                        <h5 class="text-white mb-0">Ecobank</h5>
                    </div>
                    <p class="text-light mb-3" style="opacity: 0.8;">
                        Your trusted financial partner for over 20 years. We provide secure, reliable, and innovative banking solutions to help you achieve your financial goals.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-light" style="opacity: 0.7; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.7'">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-light" style="opacity: 0.7; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.7'">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-light" style="opacity: 0.7; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.7'">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-light" style="opacity: 0.7; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.7'">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="text-white mb-3">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/dashboard" class="text-light" style="opacity: 0.8; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">Dashboard</a></li>
                        <li class="mb-2"><a href="/transactions" class="text-light" style="opacity: 0.8; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">Transactions</a></li>
                        <li class="mb-2"><a href="/cards" class="text-light" style="opacity: 0.8; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">Cards</a></li>
                        <li class="mb-2"><a href="/transfer" class="text-light" style="opacity: 0.8; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">Transfer Money</a></li>
                        <li class="mb-2"><a href="/investments" class="text-light" style="opacity: 0.8; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">Investments</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="text-white mb-3">Services</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/loans" class="text-light" style="opacity: 0.8; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">Personal Loans</a></li>
                        <li class="mb-2"><a href="/mortgage" class="text-light" style="opacity: 0.8; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">Mortgage</a></li>
                        <li class="mb-2"><a href="/savings" class="text-light" style="opacity: 0.8; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">Savings Account</a></li>
                        <li class="mb-2"><a href="/business" class="text-light" style="opacity: 0.8; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">Business Banking</a></li>
                        <li class="mb-2"><a href="/insurance" class="text-light" style="opacity: 0.8; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">Insurance</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="text-white mb-3">Support</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/help" class="text-light" style="opacity: 0.8; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">Help Center</a></li>
                        <li class="mb-2"><a href="/contact" class="text-light" style="opacity: 0.8; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">Contact Us</a></li>
                        <li class="mb-2"><a href="/faq" class="text-light" style="opacity: 0.8; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">FAQ</a></li>
                        <li class="mb-2"><a href="/security" class="text-light" style="opacity: 0.8; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">Security</a></li>
                        <li class="mb-2"><a href="/privacy" class="text-light" style="opacity: 0.8; text-decoration: none; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">Privacy Policy</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="text-white mb-3">Contact Info</h6>
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-2" style="opacity: 0.8;">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                            <span class="text-light small" style="opacity: 0.8;">123 Financial District<br>New York, NY 10004</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-2" style="opacity: 0.8;">
                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                            </svg>
                            <span class="text-light small" style="opacity: 0.8;">+1 (555) 123-4567</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-2" style="opacity: 0.8;">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                            <span class="text-light small" style="opacity: 0.8;">support@ecobank.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Section -->
            <hr class="my-4" style="border-color: rgba(255,255,255,0.2);">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-light mb-0 small" style="opacity: 0.7;">
                        © {{ date('Y') }} Ecobank. All rights reserved. |
                        <a href="/terms" class="text-light" style="opacity: 0.7; text-decoration: none;">Terms of Service</a> |
                        <a href="/privacy" class="text-light" style="opacity: 0.7; text-decoration: none;">Privacy Policy</a>
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="text-light mb-0 small" style="opacity: 0.7;">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24" class="me-1">
                            <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/>
                        </svg>
                        Secured by 256-bit SSL encryption
                    </p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>

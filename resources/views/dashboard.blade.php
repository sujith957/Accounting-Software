@extends('layouts.header')
@section('content')
    @include('layouts.sidebar')
    <div class="main" id="main">

        @include('layouts.navbar')

        <div class="container-fluid p-4">
            <h3>
                Good Morning, Sujith!
            </h3>
            <p class="text-secondary">
                Here's what's happening with your store today.
            </p>

            <div class="row g-4 mt-3">
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-card shadow-sm">
                        <div class="card-body">
                            <i class="fa fa-dollar-sign icon text-success"></i>
                            <h6 class="text-secondary mt-3">
                                Total Earnings
                            </h6>
                            <h2>
                                $559.25k
                            </h2>
                            <a href="#">
                                View Earnings
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-card shadow-sm">
                        <div class="card-body">
                            <i class="fa fa-shopping-bag icon text-primary"></i>
                            <h6 class="text-secondary mt-3">
                                Orders
                            </h6>
                            <h2>
                                36,894
                            </h2>
                            <a href="#">
                                View Orders
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-card shadow-sm">
                        <div class="card-body">
                            <i class="fa fa-users icon text-warning"></i>
                            <h6 class="text-secondary mt-3">
                                Customers
                            </h6>
                            <h2>
                                183.35M
                            </h2>
                            <a href="#">
                                See Details
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-card shadow-sm">
                        <div class="card-body">
                            <i class="fa fa-wallet icon text-danger"></i>
                            <h6 class="text-secondary mt-3">
                                Balance
                            </h6>
                            <h2>
                                $165.89k
                            </h2>
                            <a href="#">
                                Withdraw
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

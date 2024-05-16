@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row p-4">
                <div class="col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $productCount }}</h3>
                            <p>Quantity of Product</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $clientCount }}</h3>

                            <p>Quantity of Client</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6" style="display: none">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">


                            <h3>{{ $orderDayCount }} / {{ $orderDayTotal }}</h3>

                            <p>Order Count Day</p>

                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6" style="display: none">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $orderMonthCount }} / {{ $orderMonthTotal }}</h3>

                            <p>Order total dias</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>

                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
        <!-- ./wrapper -->
    </div>
@endsection

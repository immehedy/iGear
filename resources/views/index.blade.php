@extends('layouts.master')
@section('title', 'iGear')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-dark card-img-holder text-white">
                        <div class="card-body">
                            <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3 text-center"> <i class="mdi mdi-book-open mdi-24px float-right"></i>
                            </h4>
                            <h4 class="mb-3">Demo Data</h4>
                            <h4 class="mb-3">Demo Data</h4>
                            <h4 class="card-text">Demo Data</h4>
                        </div>
                    </div>
                </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3 text-center"> <i class="mdi mdi-book-open mdi-24px float-right"></i>
                        </h4>
                        <h4 class="mb-3">Demo Data</h4>
                        <h4 class="mb-3">Demo Data</h4>
                        <h4 class="card-text">Demo Data</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3 text-center"> <i class="mdi mdi-book-open mdi-24px float-right"></i>
                        </h4>
                        <h4 class="mb-3">Demo Data</h4>
                        <h4 class="mb-3">Demo Data</h4>
                        <h4 class="card-text">Demo Data</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

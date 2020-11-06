@extends('layouts.master')
@section('title', 'Stock')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <b class="card-body text-center">
                            <div class="text-center">
                                <img src="{{asset('/assets/images/products/'.$stock->image)}}" width="300" alt="">
                            </div>
                            <hr/>
                            <b>
                                ID : {{$stock->bid}}
                                <hr/>
                                {{$stock->title}}
                                <hr/>
                                {{$stock->description}}
                                <hr/>
                                {{$stock->quantity}} Pcs
                            </b>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    @stop

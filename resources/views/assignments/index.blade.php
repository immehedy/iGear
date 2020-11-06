@extends('layouts.master')
@section('title', 'iGear')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row table-responsive">
                            <div class="col-lg-12">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> Id </th>
                                        <th> Name </th>
                                        <th> E-mail </th>
                                        <th> Phone </th>
                                        <th> Address </th>
                                        <th> Device </th>
                                        <th> Service Category </th>
                                        <th> Desired Date </th>
                                        <th> Assigned Date </th>
                                        <th> Approve Date </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($assignments->count() == !0)
                                        @foreach($assignments as $assignment)
                                            <form class="insert-form" id="insert-form" method="GET" action="{{route('mail.send')}}">
                                            <tr>
                                                <td>{{$assignment->id}}</td>
                                                <td>{{$assignment->name}}</td>
                                                <td>
                                                    <input type="hidden", name="email" value="{{$assignment->email}}">
                                                    {{$assignment->email}}
                                                </td>
                                                <td>{{$assignment->phone}}</td>
                                                <td>{{$assignment->address}}</td>
                                                <td>{{$assignment->device}}</td>
                                                <td>{{$assignment->service_category}}</td>
                                                <td>{{$assignment->date}}</td>
                                                <td>{{$assignment->assigned_date}}</td>
                                                <td width="15%"><input type="datetime-local" class="form-control" id="ad" name="ad" placeholder="" required></td>
                                                <td><input type="submit" class="btn btn-success" name="submit" id="submit" value="Approve"/></td>
                                            </tr>
                                            </form>
                                        @endforeach
                                    @else
                                        <tr> <td colspan="9" class="text-center">No Data Found</td><tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

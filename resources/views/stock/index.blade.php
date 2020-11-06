@extends('layouts.master')
@section('title', 'Stock')
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
                                        <th> Base Id </th>
                                        <th> image </th>
                                        <th> Category </th>
                                        <th> Sub Category </th>
                                        <th> Title </th>
{{--                                        <th> Description </th>--}}
                                        <th> Quantity </th>
{{--                                        <th> Barcode </th>--}}
                                        <th> Show</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($stocks as $stock)
                                        <tr>
                                            <td>{{$stock->id}}</td>
                                            <td>{{$stock->bid}}</td>
                                            <td><img src="{{asset('/assets/images/products/'.$stock->image)}}" width="100" height="100" alt=""></td>
                                            <td>{{$stock->category}}</td>
                                            <td>{{$stock->subcategory}}</td>
                                            <td>{{$stock->title}}</td>
{{--                                            <td>{{substr($stock->description, 0, 10)}}...</td>--}}
                                            <td>{{$stock->quantity}}</td>
{{--                                            <td><?php echo DNS1D::getBarcodeHTML($stock->id, 'C93') ?></td>--}}
                                            <td><a href="{{route('stock.show', $stock->id)}}" class="btn btn-inverse-dark btn-sm" >Show</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

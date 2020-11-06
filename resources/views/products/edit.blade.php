@extends('layouts.master')
@section('title', 'iGear')
@section('content')
    <div class="content-wrapper">
        <h3 class="text-center"><b/>Edit Products</h3>
        <hr/>
        <br/>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row table-responsive">
                            <div class="col-lg-12">
                                <form class="insert-form" id="insert-form" method="post" action="{{route('products.update',$product->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <table class="table" id="table_field" style="background-color: #8FBCBB">
                                        <thead>
                                        <tr>
                                            <th> Category </th>
                                            <th> Title </th>
                                            <th> Description </th>
                                            <th> Old Image </th>
                                            <th> image </th>
                                            <th> Price </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" name="category" required>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->name}}" @if($product->category == $category->name) selected @endif>{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control" id="title" name="title" value="{{$product->title}}" required></td>
                                            <td><input type="text" class="form-control" id="description" name="description" value="{{$product->description}}" required></td>
                                            <td>
                                                <input type="hidden" name="oldimage" value="{{$product->image}}">
                                                <img src="{{asset('/assets/images/products/'.$product->image)}}" width="100" height="100" alt="">
                                            </td>
                                            <td><input type='file' id="image" name="image" accept=".png, .jpg, .jpeg," ></td>
                                            <td><input type="text" class="form-control" id="price" name="price"value="{{$product->price}}" required></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <br/>
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@extends('layouts.master')
@section('title', 'iGear')
@section('content')
    <div class="content-wrapper">
        <h2>Category</h2>
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row table-responsive">
                            <div class="col-lg-12">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> Id </th>
                                        <th> Category </th>
                                        <th> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($categories->count() == !0)
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>{{$category->id}}</td>
                                                <td>{{$category->name}}</td>
                                                <td>
                                                    <form class="insert-form" id="insert-form" method="post" action="{{route('category.destroy', $category->id)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button name="submit" class="btn btn-danger btn-sm" id="submit"><i class="mdi mdi-trash-can"></i></button>
                                                    </form>
{{--                                                    <a href="" class="btn-danger btn-sm"><i class="mdi mdi-trash-can"></i></a>--}}
                                                </td>

                                            </tr>
                                        @endforeach
                                    @else
                                        <tr> <td colspan="3" class="text-center">No Data Found</td><tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row table-responsive">
                            <div class="col-lg-12">
                                <form class="insert-form" id="insert-form" method="post" action="{{route('category.store')}}">
                                    @csrf
                                <table class="table table-striped" id="table_field">
                                    <thead>
                                    <tr>
                                        <th> Category </th>
                                        <th> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" id="title" name="name[]" required></td>
                                                <td><button name="add" class="btn btn-info btn-sm" id="add"><i class="mdi mdi-plus"></i></button></td>
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


    <div class="content-wrapper">
        <h2>Sub Category</h2>
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row table-responsive">
                            <div class="col-lg-12">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> Id </th>
                                        <th>Category</th>
                                        <th> Sub Category </th>
                                        <th> Batch ID</th>
                                        <th> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($subcategories->count() == !0)
                                        @foreach($subcategories as $subcategory)
                                            <tr>
                                                <td>{{$subcategory->id}}</td>
                                                <td>{{$subcategory->category}}</td>
                                                <td>{{$subcategory->name}}</td>
                                                <td>{{$subcategory->batch_id}}</td>
                                                <td>
                                                    <form class="insert-form" id="insert-form" method="post" action="{{route('subcategory.destroy', $subcategory->id)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button name="submit" class="btn btn-danger btn-sm" id="submit"><i class="mdi mdi-trash-can"></i></button>
                                                    </form>
{{--                                                    <a href="" class="btn-danger btn-sm"><i class="mdi mdi-trash-can"></i></a>--}}
                                                </td>

                                            </tr>
                                        @endforeach
                                    @else
                                        <tr> <td colspan="5" class="text-center">No Data Found</td><tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row table-responsive">
                            <div class="col-lg-12">
                                <form class="insert-form" id="insert-form" method="post" action="{{route('subcategory.store')}}">
                                    @csrf
                                    <table class="table table-striped" id="table_sub_cateogry">
                                        <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th> Sub Category </th>
                                            <th> Batch ID </th>
                                            <th> Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control" name="category" required>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->name}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control" id="title" name="name[]" placeholder="Sub-category" ></td>
                                            <td><input type="text" class="form-control" id="batch_id" name="batch_id[]" placeholder="Batch Id" ></td>
                                            <td><button name="add" class="btn btn-info btn-sm" id="add_sub"><i class="mdi mdi-plus"></i></button></td>
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


    <script type="text/javascript">
        $(document).ready(function (){
           var html = '<tr>\n' +
               '         <td><input type="text" class="form-control" id="title" name="name[]" required></td>\n' +
               '         <td><button name="remove" class="btn btn-danger btn-sm" id="remove"><i class="mdi mdi-minus"></i> </button> </td>\n' +
               '       </tr>';
           var schtml = '<tr>\n' +
               '         <td class="text-center">-</td>\n'+
               '         <td><input type="text" class="form-control" id="title" name="name[]" placeholder="Sub-Category" required></td>\n' +
               '         <td><input type="text" class="form-control" id="batch_id" name="batch_id[]" placeholder="Batch Id" ></td>\n'+
               '         <td><button name="remove" class="btn btn-danger btn-sm" id="remove_sub"><i class="mdi mdi-minus"></i> </button> </td>\n' +
               '       </tr>';
           var x =1;
           $("#add").click(function (){
              $("#table_field").append(html);
           });
            $("#table_field").on('click','#remove',function (){
                $(this).closest('tr').remove();
            });
            $("#add_sub").click(function (){
                $("#table_sub_cateogry").append(schtml);
            });
            $("#table_sub_cateogry").on('click','#remove_sub',function (){
                $(this).closest('tr').remove();
            });
        });
    </script>
@stop

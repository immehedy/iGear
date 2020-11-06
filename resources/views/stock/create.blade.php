@extends('layouts.master')
@section('content')
<div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="row table-responsive">
                <div class="col-lg-12">
                    <form class="insert-form" id="insert-form" method="post" action="{{route('stock.store')}}">
                        @csrf
                        <table class="table table-striped" id="table_field">
                            <thead>
                            <tr>
                                <th> Product ID </th>
                                <th> Status </th>
                                <th> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="text" class="form-control" id="pid" name="pid" required></td>
                                <td><input type="text" class="form-control" id="status" name="status" required></td>
                                <td><input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit"/></td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

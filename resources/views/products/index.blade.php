@extends('layouts.master')
@section('title', 'iGear')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center"><b/>Add Products</h2>
                        <div class="row table-responsive">
                            <div class="col-lg-12">
                                <table class="table table-striped" style="background-color: #8FBCBB">
                                    <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Batch ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>price</th>
                                        <th>Quantity</th>
                                        <th>Submit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <form class="insert-form" id="insert-form" method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        <tr>
                                            <td width="15%">
                                                <select class="form-control" name="category" id="select1" required>
                                                    <option selected disabled value="">choose an option</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->name}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td width="15%">
                                                <select class="form-control" name="subcategory" id="select2" required>
{{--                                                    @foreach($subcategories as $subcategory)--}}
{{--                                                        <option value="{{$subcategory->name}}">{{$subcategory->name}}</option>--}}
{{--                                                    @endforeach--}}
                                                    <option selected disabled value="">choose an option</option>
                                                </select>
                                            </td>
                                            <td width="15%"><input type="text" class="form-control" id="bid" name="bid" readonly required></td>
{{--                                            <td width="15%"><input type="text" class="form-control" id="pid" name="pid" placeholder="Product ID" required></td>--}}
                                            <td width="15%"><input type="text" class="form-control" id="title" name="title" placeholder="Title" required></td>
                                            <td width="15%"><input type="text" class="form-control" id="description" name="description" placeholder="Description" required></td>
                                            <td width="10%"><input type='file' class="form-control" id="image" name="image" accept=".png, .jpg, .jpeg," required></td>
                                            <td width="15%"><input type="text" class="form-control" id="price" name="price" placeholder="Price" required></td>
                                            <td width="60%"><input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" required></td>
                                            <td width="10%"><button name="submit" class="btn btn-info btn-sm" id="submit"><i class="mdi mdi-send"></i></button></td>
                                        </tr>
                                    </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <br/>




{{--        <h2 class="text-center">Products</h2>--}}
{{--        <hr/>--}}
{{--    <div class="content-wrapper">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12 grid-margin stretch-card">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row table-responsive">--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <table class="table table-striped">--}}
{{--                                    <thead>--}}
{{--                                    <tr >--}}
{{--                                        <th> ID </th>--}}
{{--                                        <th> BASE ID </th>--}}
{{--                                        <th> Product ID </th>--}}
{{--                                        <th> image </th>--}}
{{--                                        <th> Category </th>--}}
{{--                                        <th> Sub Category </th>--}}
{{--                                        <th> Title </th>--}}
{{--                                        <th> Description </th>--}}
{{--                                        <th> Price </th>--}}
{{--                                        <th> Quantity </th>--}}
{{--                                        <th> Bar Code </th>--}}
{{--                                        <th> Edit </th>--}}
{{--                                        <th> Delete </th>--}}

{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                        @foreach($products as $product)--}}
{{--                                            <tr>--}}
{{--                                                <td>{{$product->id}}</td>--}}
{{--                                                <td>{{$product->bid}}</td>--}}
{{--                                                <td>{{$product->pid}}</td>--}}
{{--                                                <td><img src="{{asset('/assets/images/products/'.$product->image)}}" width="100" height="100" alt=""></td>--}}
{{--                                                <td>{{$product->category}}</td>--}}
{{--                                                <td>{{$product->subcategory}}</td>--}}
{{--                                                <td>{{$product->title}}</td>--}}
{{--                                                <td>{{substr($product->description, 0, 10)}}...</td>--}}
{{--                                                <td>{{$product->price}}</td>--}}
{{--                                                <td>{{$product->quantity}}</td>--}}
{{--                                                <td><?php echo DNS2D::getBarcodeHTML($product->description, 'QRCODE') ?></td>--}}
{{--                                                <td><a href="{{route('products.edit', $product->id)}}" class="btn btn-dark btn-sm"><i class="mdi mdi-pencil"></i></a></td>--}}
{{--                                                <td>--}}
{{--                                                    <form class="insert-form" id="insert-form" method="post" action="{{route('products.destroy', $product->id)}}">--}}
{{--                                                        @csrf--}}
{{--                                                        @method('DELETE')--}}
{{--                                                        <button name="submit" class="btn btn-danger btn-sm" id="submit"><i class="mdi mdi-trash-can"></i></button>--}}
{{--                                                    </form>--}}
{{--                                                    <a href="" class="btn btn-danger btn-sm"><i class="mdi mdi-trash-can"></i></a>--}}
{{--                                                </td>--}}
{{--                                                <td><a href="{{route('stock.create', $product->id)}}" class="btn btn-dark btn-sm"><i class="mdi mdi-pencil"></i></a></td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}








<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Products</h3>
                    <div class="pull-right"><button class="btn btn-info btn-xs btn-filter"><i class="mdi mdi-filter">Filter</i></button></div>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr class="text-center filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="BASE ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Product ID" disabled></th>
                        <th> image </th>
                        <th><input type="text" class="form-control" placeholder="Category" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Sub Category" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Title" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Price" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Status" disabled></th>
                        <th> Action </th>
                        <th> Order</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr class="text-center">
                            <td>{{$product->id}}</td>
                            <td>{{$product->bid}}</td>
                            <td>{{$product->pid}}</td>
                            <td><img src="{{asset('/assets/images/products/'.$product->image)}}" width="100" height="100" alt=""></td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->subcategory}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->status}}</td>
                            <td><a href="{{route('products.edit', $product->id)}}" class="btn btn-dark btn-block"><i class="mdi mdi-pencil"></i></a><br/>
                                <form class="insert-form" id="insert-form" method="post" action="{{route('products.destroy', $product->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button name="submit" class="btn btn-danger btn-block" id="submit"><i class="mdi mdi-trash-can"></i></button>
                                </form>
                            </td>
                            <td>
                                @if($product->status == 'In Stock')
                                <a href="{{route('stock.pre_order', $product->id)}}" class="btn btn-info btn-block"><i class="mdi mdi-cart"></i></a><br/>
                                <a href="{{route('stock.sold', $product->id)}}" class="btn btn-primary btn-block">Sell</a>
                                @else
                                    <a href="{{route('stock.pre_order', $product->id)}}" class="btn btn-info btn-block disabled"><i class="mdi mdi-cart"></i></a><br/>
                                    <a href="{{route('stock.sold', $product->id)}}" class="btn btn-primary btn-block disabled">Sell</a>
                                @endif
                            </td>
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




    <script type="text/javascript">
        $('.filterable .btn-filter').click(function(){
            var $panel = $(this).parents('.filterable'),
                $filters = $panel.find('.filters input'),
                $tbody = $panel.find('.table tbody');
            if ($filters.prop('disabled') == true) {
                $filters.prop('disabled', false);
                $filters.first().focus();
            } else {
                $filters.val('').prop('disabled', true);
                $tbody.find('.no-result').remove();
                $tbody.find('tr').show();
            }
        });

        $('.filterable .filters input').keyup(function(e){
            /* Ignore tab key */
            var code = e.keyCode || e.which;
            if (code == '9') return;
            /* Useful DOM data and selectors */
            var $input = $(this),
                inputContent = $input.val().toLowerCase(),
                $panel = $input.parents('.filterable'),
                column = $panel.find('.filters th').index($input.parents('th')),
                $table = $panel.find('.table'),
                $rows = $table.find('tbody tr');
            /* Dirtiest filter function ever 😉 */
            var $filteredRows = $rows.filter(function(){
                var value = $(this).find('td').eq(column).text().toLowerCase();
                return value.indexOf(inputContent) === -1;
            });
            /* Clean previous no-result if exist */
            $table.find('tbody .no-result').remove();
            /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
            $rows.show();
            $filteredRows.hide();
            /* Prepend no-result row if all rows are filtered */
            if ($filteredRows.length === $rows.length) {
                $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
            }
        });
    </script>
    <script type="text/javascript">
        function _(x){
            return document.getElementById(x);
        }
        $(document).on('change','#select1',function(){
            _('bid').value = '';
            let category = $(this).val();
            $.ajax({
                url : '/category/' + category,
                method : 'GET',
                success:function(data){
                    $('#select2').empty();
                    $('#select2').append('<option selected disabled value="">Choose An Option</option>');
                    jQuery.each( data, function( item, value ) {
                        $('#select2').append("<option value='"+ value.name + "'>" + value.name + "</option>");
                    });
                }
            });
        });
        $(document).on('change', '#select2', function (){
            let category = _('select1').value;
           let sub_category = $(this).val();
           $.ajax({
              url : '/sub_category/'+ sub_category +'/'+ category,
              method : 'GET',
              success:function (data){
                  _('bid').value = data.batch_id;
              }
           });
        });
    </script>

@stop

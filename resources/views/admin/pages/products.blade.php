@section('title')
  <title>Dashboard</title>
<style>
	.dataTables_filter{
		padding-right: 15px;
	}
	.dataTables_length{
		padding-left: 15px;
	}
	.pagination{
		padding-right: 15px;
	}

	.dataTables_info{
		padding-left: 15px!important;
	}
	.table{
		padding: 15px;
	}
</style>
@stop
@extends('admin.layout.master')

@section('content')



<div class="nk-content ">
<button href="#" data-toggle="modal" data-target="#product" class="btn btn-primary">Add Products</button>
                </div>

                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
		<tr>
      <th>#ID</th>
			<th>Name</th>
			<th>Image</th>
			<th>Category</th>
			<th>Description</th>
      <th>Action</th>
	
		</tr>
	</thead>
	<tbody>

  @foreach($products as $product)
		<tr>
      <td>{{$product->id}}</td>
			<td>{{$product->name}}</td>
			<td><img style="height: 50px;width:50px" src="uploads/product-imgs/{{ $product->image}}"></img></td>
			<td>{{$product->category_id}}</td>
			<td>{{$product->description}}</td>
      <td><button class="btn  btn-success editbtn">Edit</button> <button class="btn btn-danger deletebtn">Delete</button></td>
	
		</tr>
    @endforeach
		
	</tbody>
</table>
     


@stop





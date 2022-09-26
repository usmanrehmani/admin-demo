@section('title')
<title>Dashboard</title>

@stop
@extends('admin.layout.master')

@section('content')



<div class="nk-content ">
	<button href="#" data-toggle="modal" data-target="#product" class="btn btn-primary">Add Products</button>
</div>

<div class="card card-preview">
	<div class="card-inner">
		<table class="datatable-init nowrap table" id="product_table">
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
					<td>{{$product->productCategory->category_name}}</td>
					<td>{{$product->description}}</td>
					<td><button class="btn  btn-success editbtn">Edit</button> <button class="btn btn-danger deletebtn">Delete</button></td>

				</tr>
				@endforeach

			</tbody>
		</table>
	</div>
</div>




@stop
@inject('timeService', 'App\Services\TimeServices')

@extends('admin.template')
@section('content')


<div class="card">
	<div class="card-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="float-right">
						Jam : {{$timeService->showTimeNow()}}
					</div>
					<h1>Filter</h1>
				</div>
				<div class="card-body">
					<form action="{{url('admin/produk/filter')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="" class="control-label"> Nama</label>
							<input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
						</div>
						<div class="form-group">
							<label for="" class="control-label"> Stock</label>
							<input type="text" class="form-control" name="stok" value="{{$stok ?? ""}}">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
							<label for="" class="control-label"> Harga Min</label>
							<input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
						</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
							<label for="" class="control-label"> Harga Max</label>
							<input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
						</div>
							</div>
						</div>
						<button class="btn btn-info float-right"><i class="fa fa-search"></i> Filter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<h1>Data Produk</h1>
				</div>
				<div class="col-md-4">
					<a href="{{url('admin/produk/create')}}" class="btn btn-info float-right"><i class="fa fa-plus"></i> Tambah</a>		
				</div>
				<div class="card-body">
					<table class="table ">
						<thead>
							<th>No</th>
							<th width="100px" class="text-center">Aksi</th>
							<th class="text-center">Nama</th>
							<th>Harga</th>
							<th>Stock</th>
						</thead>
						<tbody>
							@foreach($list_produk as $produk)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td >
									<div class="btn-group" style="float: left;">
									<a href="{{url ('admin/produk', $produk->id)}}" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
									<a href="{{url ('admin/produk', $produk->id)}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
									@include('admin.utils.delete', ['url' => url ('admin/produk', $produk->id)])
									</div>
								</td>
								<td class="text-center">{{ucwords($produk->nama)}}</td>
								<td>Rp. {{number_format($produk->harga)}}</td>
								<td>{{$produk->stok}}</td>
								
							</tr>
							@endforeach
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
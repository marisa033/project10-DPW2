@extends('admin.template')
@section('content')

<div class="card">
	<div class="card-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1>Edit Data Produk</h1>
				</div>
				<div class="col-md-12">
					<form action="{{url ('admin/produk', $produk->id)}}" method="post">
						@csrf
						@method("PUT")
					<div class="form-group">
						<label for="" class="control-label">Nama</label>
						<input type="text" class="form-control" name="nama" value="{{$produk->nama}}">	
					</div>	
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="" class="control-label">Harga</label>
								<input type="text" class="form-control" name="harga" value="{{$produk->harga}}">	
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="" class="control-label">Stok</label>
								<input type="text" class="form-control" name="stok" value="{{$produk->stok}}">	
							</div>		
						</div>
					</div>
					<div class="form-group">
						<label for="" class="control-label">Detail</label>
						<textarea name="detail" class="form-control">{{$produk->detail}}</textarea>
					</div>	
					<button class="btn btn-info float-right"><i class="fa fa-save"> Simpan</i></button>	
					</form>
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection
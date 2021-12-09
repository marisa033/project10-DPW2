@extends('admin.template')
@section('content')

<div class="card">
	<div class="card-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1>Detail Data Produk</h1>
				</div>
				<div class="col-md-12">
					<h3>{{$produk->nama}}</h3>
					<hr>
						@include('admin.produk.show.detail')
					<p>
						{!! nl2br($produk->detail) !!}
					</p>

					<p>
						<img src="{{url("public/$produk->foto")}}" alt="{{$produk->foto}}" width="30%" height="300px">
					</p>
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection
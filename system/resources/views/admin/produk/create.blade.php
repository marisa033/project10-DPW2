@extends('admin.template')
@section('content')

<div class="card">
	<div class="card-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1>Tambah Data Produk</h1>
				</div>
				<div class="col-md-12">
					<form action="{{url ('admin/produk')}}" method="post" enctype="multipart/form-data">
						@csrf
					<div class="form-group">
						<label for="" class="control-label">Nama</label>
						<input type="text" class="form-control" name="nama">	
					</div>	
					<div class="row">
						<div class="col-md-4">
							<label for="" class="control-label">Foto</label> <br>
							<input type="file" class="form-control" name="foto" accept=".png">
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="" class="control-label">Harga</label> <br>
								<input type="text" class="form-control" name="harga">	
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="" class="control-label">Stok</label> <br>
								<input type="text" class="form-control" name="stok">	
							</div>		
						</div>
					</div> <br>
					<div class="form-group">
						<label for="" class="control-label">Detail</label> <br>
						<textarea id="detail" name="detail" class="form-control"></textarea>
					</div>	
					<button class="btn btn-info float-right" style="height: 50px;"><i class="fa fa-save"> Simpan</i></button>	
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- end coding -->
@endsection

@push('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endpush

<script type="text/javascript">
	$(document).ready(function() {
  $('#detail').summernote();
});
</script>
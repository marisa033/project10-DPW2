<form action="{{$url}}" method="post" class="form-inline" onsubmit="return confirm('Yakin Anda Menghapus Data Ini?')">
	@csrf
	@method("delete")
	<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
</form>
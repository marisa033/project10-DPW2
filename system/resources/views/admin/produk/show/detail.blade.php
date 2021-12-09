<p>
	{{$produk->harga}} |
	Stok : {{$produk->stok}} |
	Seller : {{$produk->seller->username}} |
	Tanggal Produk : {{$produk->created_at->diffForHumans()}}
</p>
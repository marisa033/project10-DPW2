@extends('admin.template')
@section('content')

<div class="card">
	<div class="card-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<h1>Data User</h1>
				</div>
				<div class="col-md-4">
					<a href="{{url('admin/user/create')}}" class="btn btn-info float-right"><i class="fa fa-plus"></i> Tambah</a>		
				</div>
				<div class="card-body">
					<table class="table ">
						<thead>
							<th>No</th>
							<th width="100px" class="text-center">Aksi</th>
							<th class="text-center">Username</th>
							<th >Nama</th>
							<th >Jenis Kelamin</th>
							<th>Email</th>
						</thead>
						<tbody>
							@foreach($list_user as $user)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td >
									<div class="btn-group" style="float: left;">
									<a href="{{url ('admin/user', $user->id)}}" class="btn btn-sm btn-dark"><i class="fa fa-info"></i></a>
									<a href="{{url ('admin/user', $user->id)}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
									@include('admin.utils.delete', ['url' => url ('admin/user', $user->id)])
									</div>
								</td>
								<td class="text-center">{{$user->username}}</td>
								<td>{{$user->nama}}</td>
								<td>{{$user->jenis_kelamin_string}}</td>
								<td>{{$user->email}}</td>
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
@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Data Wali
						<div class="panel-title pull-right">
							<a href="{{ route('wali.create') }}">Tambah</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Umur</th>
										<th>Pekerjaan</th>
										<th colspan="2">Action</th>
									</tr>
								</thead>
								<tbody>
									@php $no = 1; @endphp
									@foreach($posts as $data)

									<tr>
										<td>{{ $no++ }}</td>
										<td>{{ $data->nama }}</td>
										<td><p>{{ $data->alamat }}</p></td>
										<td><p>{{ $data->umur }}</p></td>
										<td><p>{{ $data->pekerjaan }}</p></td>
										<td>
											<a class="btn btn-warning" href="{{ route('wali.edit',$data->id)}}">Edit</a>
										</td>
										<td>
											<form method="post" action="{{ route('wali.destroy',$data->id) }}">
												<input name="_token" type="hidden" value="{{csrf_token()}}">
												<input type="hidden" name="_method" value="DELETE">
												<button type="submit" class="btn btn-danger">Delete</button>
											</form>
										</td>
										<td>
											<a class="btn btn-success" href="{{route('wali.show',$data->id)}}">Show</a>
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
@endsection
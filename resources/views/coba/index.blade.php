@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">Data Status
				<div class="panel-title pull-right">
					<a href="{{ route('coba.create')}}">Tambah</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table">
						<thead>
						<tr>
						<th>No</th>
						<th>nama</th>
						<th>status</th>
						<th colspan="2">Action</th>
						</tr>
						</thead>
						<tbody>
							@php $no = 1; @endphp
							@foreach($coba as $data)
							<tr>
								<td> {{ $no++ }} </td>
								<td> {{ $data->nama }} </td>
								<td> <p>{{ $data->status }}</p> </td>
								<td>
									<a class="btn btn-warning" href="{{route('coba.edit',$data->id) }}">Edit</a>
								</td>
								<td>
									<form method="post" action="{{ route('coba.destroy',$data->id)}}">
										<input name="_token" type="hidden" value="{{csrf_token()}}">
										<input name="_method" type="hidden" value="DELETE">
										<button type="submit" class="btn btn-danger">Delete</button>
									</form>
								</td>
								<td>
									<a href="{{ route('coba.show',$data->id) }}" class="btn btn-success">show</a>
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
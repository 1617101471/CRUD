@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Data siswa
					<div class="panel-title pull-right">
						<a href="{{route('guru.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('guru.update', $posts->id)}}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
								<label class="control-label">nama</label>
								<input type="text" name="nama" class="form-control" value="{{$posts->nama}}" required>
								@if ($errors->has('nama'))
									<span class="help-block">
										<strong>{{$errors->first('nama')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('mata_pelajaran') ? 'has-error' : ''}}">
								<label class="control-label">Mata Pelajaran</label>
								<input type="text" name="mata_pelajaran" class="form-control" value="{{$posts->mata_pelajaran}}" required>
								@if ($errors->has('mata_pelajaran'))
									<span class="help-block">
										<strong>{{$errors->first('mata_pelajaran')}}</strong>
									</span>
								@endif
							</div>
							
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Edit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
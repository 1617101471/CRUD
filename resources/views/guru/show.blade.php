@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Show Data Siswa
					<div class="panel-title pull-right">
						<a href="{{route('guru.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label">nama</label>
							<input type="text" name="nama" class="form-control" value="{{$posts->nama}}" readonly>
						</div>

						<div class="form-group {{$errors->has('mata_pelajaran') ? 'has-error' : ''}}}">
							<label class="control-label">Mata Pelajaran</label>
							<input type="text" name="mata_pelajaran" class="form-control" value="{{$posts->mata_pelajaran}}" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
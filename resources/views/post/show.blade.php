@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Show Data Siswa
					<div class="panel-title pull-right">
						<a href="{{route('siswa.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label">nama</label>
							<input type="text" name="nama" class="form-control" value="{{$posts->nama}}" readonly>
						</div>

						<div class="form-group {{$errors->has('kelas') ? 'has-error' : ''}}}">
							<label class="control-label">kelas</label>
							<input type="text" name="kelas" class="form-control" value="{{$posts->kelas}}" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
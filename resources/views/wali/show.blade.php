@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Show Data Wali
					<div class="panel-title pull-right">
						<a href="{{route('wali.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label">Nama</label>
							<input type="text" name="nama" class="form-control" value="{{$posts->nama}}" readonly>
						</div>

						<div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}}">
							<label class="control-label">Alamat</label>
							<input type="text" name="alamat" class="form-control" value="{{$posts->alamat}}" readonly>
						</div>

						<div class="form-group {{$errors->has('umur') ? 'has-error' : ''}}}">
							<label class="control-label">Umur</label>
							<input type="text" name="umur" class="form-control" value="{{$posts->umur}}" readonly>
						</div>

						<div class="form-group {{$errors->has('pekerjaan') ? 'has-error' : ''}}}">
							<label class="control-label">Pekerjaan</label>
							<input type="text" name="pekerjaan" class="form-control" value="{{$posts->pekerjaan}}" readonly>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
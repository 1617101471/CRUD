@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Data wali
					<div class="panel-title pull-right">
						<a href="{{route('wali.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('wali.update', $posts->id)}}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{csrf_field()}}
							<div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
								<label class="control-label">Nama</label>
								<input type="text" name="nama" class="form-control" value="{{$posts->nama}}" required>
								@if ($errors->has('nama'))
									<span class="help-block">
										<strong>{{$errors->first('nama')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
								<label class="control-label">Alamat </label>
								<input type="text" name="alamat" class="form-control" value="{{$posts->alamat}}" required>
								@if ($errors->has('alamat'))
									<span class="help-block">
										<strong>{{$errors->first('alamat')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('umur') ? 'has-error' : ''}}">
								<label class="control-label">Umur</label>
								<input type="text" name="umur" class="form-control" value="{{$posts->umur}}" required>
								@if ($errors->has('umur'))
									<span class="help-block">
										<strong>{{$errors->first('umur')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group {{$errors->has('pekerjaan') ? 'has-error' : ''}}">
								<label class="control-label">Pekerjaan</label>
								<input type="text" name="pekerjaan" class="form-control" value="{{$posts->pekerjaan}}" required>
								@if ($errors->has('pekerjaan'))
									<span class="help-block">
										<strong>{{$errors->first('pekerjaan')}}</strong>
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
@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">Data Wali
					<div class="panel-title pull-right">
						<a href="{{ url()->previous() }}">Kembali</a>
					</div>
				</div>
				<div class="panel-body">
					<form action="{{ route('wali.store') }}" method="POST">
						{{ csrf_field() }}
						<div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}"> 
							<label class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama" required>
							@if ($errors->has('nama'))
								<span class="help-block">
									<strong>{{ $errors->first('nama')}}</strong>
								</span>
							@endif
						</div>

						<div class="form-group {{ $errors->has('alamat') ? ' has-error ' : '' }}">
							<label class="control-label">Alamat</label>
							<input type="text" class="form-control" name="alamat" required>
								@if ($errors->has('alamat'))
									<span class="help-block">
										<strong>{{ $errors->first('alamat') }}</strong>
									</span>
								@endif
						</div>

						<div class="form-group {{ $errors->has('umur') ? ' has-error ' : '' }}">
							<label class="control-label">Umur</label>
							<input type="text" class="form-control" name="umur" required>
								@if ($errors->has('umur'))
									<span class="help-block">
										<strong>{{ $errors->first('umur') }}</strong>
									</span>
								@endif
						</div>

						<div class="form-group {{ $errors->has('pekerjaan') ? ' has-error ' : '' }}">
							<label class="control-label">Pekerjaan</label>
							<input type="text" class="form-control" name="pekerjaan" required>
								@if ($errors->has('pekerjaan'))
									<span class="help-block">
										<strong>{{ $errors->first('pekerjaan') }}</strong>
									</span>
								@endif
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Tambah</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
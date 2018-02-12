@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">Data Siswa
					<div class="panel-title pull-right">
						<a href="{{ route('siswa.index') }}">Kembali</a>
					</div>
				</div>
				<div class="panel-body">
					<form action="{{ route('siswa.store') }}" method="post">
						{{ csrf_field() }}
						<div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}"> 
							<label class="control-label">nama</label>
							<input type="text" class="form-control" name="nama" required>
							@if ($errors->has('nama'))
								<span class="help-block">
									<strong>{{ $errors->first('nama')}}</strong>
								</span>
							@endif
						</div>

						<div class="form-group {{ $errors->has('kelas') ? ' has-error ' : '' }}">
							<label class="control-label">kelas</label>
							<input type="text" class="form-control" name="kelas" required>
								@if ($errors->has('kelas'))
									<span class="help-block">
										<strong>{{ $errors->first('kelas') }}</strong>
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
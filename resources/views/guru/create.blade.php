@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">Data Post
					<div class="panel-title pull-right">
						<a href="{{ url()->previous() }}">Kembali</a>
					</div>
				</div>
				<div class="panel-body">
					<form action="{{ route('guru.store') }}" method="POST">
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

						<div class="form-group {{ $errors->has('mata_pelajaran') ? ' has-error ' : '' }}">
							<label class="control-label">Mata Pelajaran</label>
							<input type="text" class="form-control" name="mata_pelajaran" required>
								@if ($errors->has('mata_pelajaran'))
									<span class="help-block">
										<strong>{{ $errors->first('mata_pelajaran') }}</strong>
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
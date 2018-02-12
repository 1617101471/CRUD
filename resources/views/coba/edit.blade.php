@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Data Status
					<div class="panel-title pull-right">
						<a href="{{route('coba.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('coba.update', $posts->id)}}" method="post">
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

							<div class="form-group {{$errors->has('status') ? 'has-error' : ''}}">
								<label class="control-label">Status</label>
								<input type="text" name="status" class="form-control" value="{{$posts->status}}" required>
								@if ($errors->has('status'))
									<span class="help-block">
										<strong>{{$errors->first('status')}}</strong>
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
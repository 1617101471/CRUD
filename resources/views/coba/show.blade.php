@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Show Data Status
					<div class="panel-title pull-right">
						<a href="{{route('coba.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label">nama</label>
							<input type="text" name="nama" class="form-control" value="{{$posts->nama}}" readonly>
						</div>

						<div class="form-group {{$errors->has('status') ? 'has-error' : ''}}}">
							<label class="control-label">status</label>
							<input type="text" name="status" class="form-control" value="{{$posts->status}}" readonly>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
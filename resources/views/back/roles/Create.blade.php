
@extends('layouts.app');

@section('content')
<div class="row">
	<div class="col-md-8">
		<form method="post" action="{{url('role')}}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="form-group col-md-4">
					<label for="name"> Role: </label>
					<input type="text" class="form-control" name="name">
					<input type="submit" name="submit" value="send">
				</div>

			</div>
			
		</form>
	</div>
</div>

@endsection
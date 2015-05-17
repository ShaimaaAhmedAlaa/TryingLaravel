@extends ('master')

@section ('content')
	<form action="" method="POST" role="form">
		<legend> Add New Article </legend>

		<div class="form-group">
			<label for="">Title</label>
		    <input type="text" class="form-control" id="" placeholder="Enter the title" name="title">
		</div>

		<div class="form-group">
			<label for="">Body</label>
		    <textarea class="form-control" rows="3" name="body"></textarea>

		</div>
		<button type="submit" class="btn btn-primary"> Submit </button>

	</form>

@stop
@extends ('master')

@section ('content')
	{!!$body!!}
	@for ($i=0; $i<10; $i++)

			<li> {!! $i !!} </li>

	@endfor
	<h1>
		Team members
	</h1>
	@foreach($team as $member)
		<ul>
			<li>
				{!! $member !!}
			</li>
		</ul>
	@endforeach
@stop



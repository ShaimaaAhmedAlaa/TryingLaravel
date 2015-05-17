
@extends ('master')

@section ('content')
	<table class="table table-hover">
		<thead>
			<tr>
				<th>id</th>
				<th>title</th>
				<th>body</th>
				<th>operation</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($articles as $article)
				<tr>
					<td> {{ $article->id }} </td>
					<td> {{ $article->title }} </td>
					<td> {{ $article->body }} </td>
					<td>
						<a href="/articles/{{ $article->id }}"> Show </a>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
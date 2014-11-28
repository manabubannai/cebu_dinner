@extends('layouts.default')
@section('content')

<div class="row">
	<div class="col-xs-8 col-xs-offset-2">
	<hr />
	@foreach($posts as $post)
		<h2>{{ $post->title }}　<small>{{ date("Y年 m月 d日",strtotime($post->created_at)) }}</small></h2>
		<p>{{ $post->content }}</p><br />
	@endforeach

	</div>

</div>

<hr />
<div class="row">
	<div class="col-xs-8 col-xs-offset-2">
	<h2>夕飯食べる場所を投稿する</h2>
	<hr />

		{{ Form::open(['route' => 'cebu.store'], array('class' => 'form')) }}

			<div class="form-group">
				<label for="title" class="control-label">名前（ペンネーム）</label>
				<div>
					{{ Form::text('title', null, array('class' => 'form-control')) }}
				</div>
			</div>

			<div class="form-group">
				<label for="content" class="control-label">なにかコメントとか</label>
				<div>
					{{ Form::textarea('content', null, array('class' => 'form-control')) }}
				</div>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">投稿する</button>
			</div>

		{{ Form::close() }}

	</div>

</div>

@stop
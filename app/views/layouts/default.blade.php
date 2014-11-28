<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

	<title>セブ島のどこで夕飯食べる？</title>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		{{ HTML::image('images/ocean.png', '夕飯食べる', array('class' => 'img-responsive')) }}
		</div>
	</div>
</div>

{{-- フラッシュメッセージ --}}
@if(Session::has('success'))
	<div class="bg-info">
		<p>{{ Session::get('success') }}</p>
	</div>
@endif

{{-- エラー表示 --}}
@if($errors->has())
	@foreach($errors->all() as $error)
		<p class="bg-danger">{{ $error }}</p>
	@endforeach
@endif

@yield('content')

</body>
</html>
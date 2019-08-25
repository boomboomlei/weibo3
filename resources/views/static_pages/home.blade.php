@extends('layouts.default')

@section('content')
	 <div class="jumbotron">
    <h1>Hello baby</h1>
    <p class="lead">
      你现在所看到的是 <a href="https://learnku.com/courses/laravel-essential-training">磊磊的博客</a> 的主页。
    </p>
    <p>
      一切，将从这里开始互相认识。
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
    </p>
  </div>

@endsection
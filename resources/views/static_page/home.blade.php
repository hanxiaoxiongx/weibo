@extends('layouts.default')
@section('title','主页')
@section('content')
  <div class="jumbotron">
    <h1>Hello World!</h1>
    <p class="lead">
      现在你所看到的是<a href="#">Laravel 练手项目weibo</a>的示例主页
    </p>
    <p>
      一切，将从这里开始。
    </p>
    <p><a class="btn btn-lg btn-success" href="{{'signup'}}" role="button">现在注册</a>
    </p>
  </div>
@endsection

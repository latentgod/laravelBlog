@extends('layout.base')
@section('all')
<div class="container">
<nav class="navbar navbar-default" style="background-color:#fff">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{URL('/')}}">首页</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('manage/content') ? 'active' : '' }}" ><a href="{{URL('manage/content')}}">内容管理 </a></li>
        <li class="{{ Request::is('manage/comments')?'active':''}}"><a href="{{URL('manage/comments')}}" >评论管理</a></li>
        <li class="{{ Request::is('manage/users')?'active':''}}"><a href="{{URL('manage/users')}}" >用户管理</a></li>
        <li class="{{Request::is('manage/system')?'active':''}}"><a href="{{URL('manage/system')}}">系统管理</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">user <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">资料</a></li>
            <li><a href="#">退出</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="container-fluid" style="background-color:#fff">
<div class="row">
    <div class="col-sm-12">
        @yield('main')
    </div>
</div>
</div>

</div>
@stop

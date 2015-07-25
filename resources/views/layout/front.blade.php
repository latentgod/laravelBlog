@extends('layout.base')
@section('all')
<div class = "container">
<div class="row">
<div class="col-xs-12">
<div class= "si">
<span style="font-size:40px"><a href="{{URL('/')}}">私</a></span>
<ul class="user">
   <a href="{{URL('manage')}}"><li>管理</li></a>
</ul>
</div>
</div>
</div>
<div class="row">
  <div class="col-sm-3">
    <div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation" style="background-color:#fff">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="visible-xs navbar-brand">菜单</span>
        </div>
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            @foreach($categorys as $category)
            <li><a href="#">{{$category->category}}</a></li>
            @endforeach
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

                {{-- 文章内容 --}}
                <div class="col-sm-9">
          @yield('content')
                </div>

            </div>
        </div>
@stop

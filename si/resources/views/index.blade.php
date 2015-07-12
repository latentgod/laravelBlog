@extends('layout.front')
@section('content')

{{--标题 文章--}}    
    @foreach($pages as $page)
       <div class="list">
        <div class="title">
         <a href="{{URL('pages/'.$page->id)}}"><h2>{{$page->title}}</h2></a>
        </div>
        <div class="content">
            {{$page->body}}
        </div>
<div style = "background-color:#fff;text-align:right;position:relative;font-size:20px;padding:20px 10px;"><a href = "{{URL('pages/'.$page->id)}}"> 查看更多</a></div>
      </div>
    @endforeach
{{--分页--}}
@include('plugin.paging')
@endsection

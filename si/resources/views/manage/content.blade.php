@extends('layout.back')
@section('main')
@include('plugin.notify')
    <div style="text-align:right;">
{{--<button type="button" class="btn btn-default" style="padding:17px 30px" data-toggle="modal" data-target="#myModal" id="add">新增</button>--}}
<button  class="glyphicon glyphicon-plus btn btn-default" aria-hidden="true" style="padding:17px 30px" data-toggle="modal" data-target="#myModal" id="add"></button>
</div>

<table class="table ">
<thead>
    <th>id</th>
    <th>标题</th>
    <th>类别</th>
    <th>操作</th>
</thead>
@foreach($pages as $page)
<tr>
    <th scope="row">{{$page->id}}</th>
    <td ><a href = "{{URL('pages/'.$page->id)}}">{{$page->title}}</a></td>
    <td >{{$page->category}}</td>
<td>
<button  class=" glyphicon glyphicon-pencil btn btn-default" onclick = "getData({{$page->id}},'article')" data-toggle="modal" data-target="#myModal" ></button>
<form action="{{URL('modal/delete/'.$page->id)}}" method = "POST" style="display:inline">
<input type="hidden" name = "_method" value = "DELETE"/>
<input type="hidden" name = "_token" value ="{{csrf_token()}}"/>
<button type="submit" class="glyphicon glyphicon-trash btn btn-default"></button>
</form>
</td>
</tr>
@endforeach
</table>
@include('plugin.paging')
@include('plugin.modal')


        
@endsection
@stop

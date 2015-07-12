@extends('layout.back')
@section('main')
@include('plugin.notify')
@include('plugin.modal')
  <script>
  $(function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  });
  </script>
<style>
.categoryManage h4{
color:#6C7178;
border:1px solid #AEB5BF;

}
.categoryManage h4:hover{
background-color: #D8E0ED;

}
.categoryTable{
height:200px;

}
</style>
<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#base" aria-controls="base" role="tab" data-toggle="tab">基本配置</a></li>
    <li role="presentation"><a href="#advanced" aria-controls="advanced" role="tab" data-toggle="tab">高级配置</a></li>
  </ul>

<!-- Tab panes -->
  <div class="tab-content">

   <!--base-->
    <div role="tabpanel" class="tab-pane active" id="base">
<form action ="{{URL('manage/system/update/'.$id)}}" method = "POST">
<input type="hidden" name="_method" value="PUT">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<div class = "form-group">
<label>标题</label>
<input class="form-control" name = "webTitle" type="text" required = "required" value="{{isset($webTitle)?$webTitle:'MyBlog'}}">
</div>
<div class = "form-group">
<label>关键字</label>
<input class="form-control" name="keyword" type="text" value="{{isset($keyword)?$keyword:'还没设置'}}"/>
</div>
<div class = "form-group">
<label>公司名称</label>
<input class="form-control" type="text"  name = "company" value = "{{isset($company)?$company:'还没设置'}}"/>
</div>
<div class = "form-group">
<label>公司电话</label>
<input class="form-control" type="text" name= "phone" value="{{isset($phone)?$phone:'还没设置'}}"/>
</div>
<div class = "form-group">
<label>网站备案</label>
<input class="form-control" type="text" name = "record" value = "{{isset($record)?$record:'还没设置'}}"/>
</div>
<button type="submit" class = "btn btn-lg btn-default">保存</button>
</form>
</div>


   <!--advanced-->
    <div role="tabpanel" class="tab-pane categoryManage" id="advanced">
        <div id="accordion">
            <h4>&nbsp;类别管理</h4>
            <div class = "categoryTable">
<table class="table">
<tr>
<td></td>
<td style="text-align:right">
  <button type="button"  class="btn btn-default btn-lg">添加</button>
</td>
</tr>
@foreach($categories as $category)
    <tr>
        <td>{{$category->category}}</td>
<td style="text-align:right">
<div class="btn-group btn-group-sm" role="group" aria-label="...">
<button  class="btn btn-default" onclick = "getData({{$category->id}},'category')" data-toggle="modal" data-target="#myModal1" >修改</button>
  <button type="button" class="btn btn-default">删除</button>
</div>
</td>
    </tr>
@endforeach
</table>

            </div>
        </div>

    </div>
  </div>

</div>
@endsection
@stop

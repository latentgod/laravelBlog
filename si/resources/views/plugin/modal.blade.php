<!--
<button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#myModal">
dds
</button>
-->

<!--新增  myModal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align:center"></h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-12"><label>标题</label><input type="text" name="modalTitle" class="form-control" id="modalTitle" value=""/> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12"><label>类别</label></div>
        </div>
        <div class="row">
        <div class="col-sm-12">
@foreach($categories as $category)
<label class="radio-inline">
  <input type="radio" name="category" id="{{$category->category}}"  value="{{$category->category}}">{{$category->category}}
</label>
@endforeach
         </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <label>内容</label>
                <textarea class="form-control" rows="18" id ="modalContens"></textarea>
            </div>
        </div>
    </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" >关闭</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" id = "modalSave">保存</button>
      </div>

    </div>
  </div>
</div>



<!--category-->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align:center">类别</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-12"><input type="text"  class="form-control" id="modalCategory" value=""/> 
            </div>
        </div>
       </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" >关闭</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" id = "modalSave1">修改</button>
      </div>

    </div>
  </div>
</div>

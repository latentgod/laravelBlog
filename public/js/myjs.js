
var test=null;//便于后面的保存提交数据传id
var idcategory = null;


//最原本目的是想通过这个函数得到相对应的id 值 以便于ajax根据id请求数据  只是进一定获取数据而已 
function getData(str,str1){
    if (str1 == "article"){
        $("#myModalLabel").text("编辑");
        $("#modalSave").text("编辑");
        var url= "/modal/show";
    }
    else{
    
        var url= "/category/show";
    }
    test=str;
    var id = str;
    $.ajax({
        type:"POST",
        url :url, 
        data:{id:id},
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content')},
        success : function(data){
               // $('#'+data.category).attr('checked','true');
               if (str1 == "article"){
                $('#modalTitle').val(data.title);
                $('#modalContens').val(data.body);
                idcategory = data.category;
                $("input[name='category'][value="+data.category+"]").attr("checked",true)
               }
               else{
                $('#modalCategory').val(data.category);
               
               }
            }
    });
}



//jquery 的开头
$(document).ready(function(){
    //功能新增
      $("#add").click(function(){
              $('#modalTitle').val("");
              $('#modalContens').val("");
              $("#myModalLabel").text("新增");
              $("#modalSave").text("新增");
                });

      //对模态框的关闭后操作
        $('#myModal').on('hide.bs.modal', function () {
            $('#modalTitle').val("");
            $('#modalContens').val("");
            $('#'+idcategory).attr('checked',null);
            $('#modalCategory').val("");

           /* if($('#modalSave').text() =="新增" || $('#modalSave').text()=="保存"){
            }
            else{
               //if( !confirm("确定退出?")){return false};
                };*/
        });
        $('#myModal').on('hidden.bs.modal', function () {
            $('#modalTitle').val("");
            $('#modalContens').val("");
            $('#'+idcategory).attr('checked',null);
            $('#modalCategory').val("");
        });
//console.log($("input[name='category']:checked").val());

//modal 中 ajax 提交数据
   $("#modalSave").click(function(){
    var redirectUrl = "/manage/content";
    var type = "POST";
    var title = $('#modalTitle').val();
    var contents = $('#modalContens').val();
    var category = $("input[name='category']:checked").val();
    var url= "/modal/save";
    var data = {title:title,category:category,contents:contents};
    if(title == "" || contents == "" || category == null  ){
        alert("不能留空");
        return false;
    }
    if($(this).text()=="编辑"){
        var id = test;
        url = "/modal/update/"+id;
        data = {id:id,title:title,category:category,contents:contents};
    }
    
    $.ajax({
        type: type,
        url :url, 
        data:data,
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content')},
        success : function(data,status){
          // alert(data); 
          window.location.href= redirectUrl;
        }
       });
    });

   $("#modalSave1").click(function(){
    var type = "POST";
    if($(this).text()=="修改"){
        var id = test;
        url = "/category/update/"+id;
        category = $("#modalCategory").val();
        data = {id:id,category:category};
    }
    $.ajax({
        type: type,
        url :url, 
        data:data,
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content')},
        success : function(data,status){
          // alert(data); 
               var  redirectUrl = null ;
          if($("#modalSave1").text()=="修改"){
               redirectUrl = "/manage/system";
          }
          window.location.href= redirectUrl;
        }
       });
   
   
   
   
   });


});//总结尾


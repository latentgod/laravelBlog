<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="_token" content="{{ csrf_token() }}" charset="UTF-8">
        <title></title>
        <link href = "/bootstrap/css/bootstrap.min.css" rel = "stylesheet "/>
        <script type=text/javascript src = "/jquery/jquery-2.1.3.min.js"></script>
        <script type=text/javascript src = "/bootstrap/js/bootstrap.min.js"></script>
        <script type=text/javascript src = "/js/jquery-ui.min.js"></script>
        <script type=text/javascript src = "/js/myjs.js"></script>
        <link href = "/css/jquery-ui.min.css" rel = "stylesheet"/>
        <link href = "/css/my.css" rel = "stylesheet"/>
<style>
a{
color:#6C7178;
}
a:hover{
color:#000000;
}
</style>
    </head>
    <body style="background-color:whitesmoke;">
@section('all')
@show
<div class = "container">
<div class="row">
<div class="col-sm-9 col-sm-offset-3" style ="text-align:right;margin-top:20px;margin-bottom:20px">Copyright © 2015-{{date("Y")  }} </div>
</div>
</div>
    </body>
</html>

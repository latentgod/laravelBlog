<div class="modal-msg">
@foreach(['danger','warning','success','info'] as $msg)
    @if(Session::has('alert-'.$msg))
    <p data-dismiss="alert" class = "alert alert-{{$msg}} fade in" aria-label="Close">{{Session::get('alert-'.$msg)}}</p>
    @endif
@endforeach
</div>

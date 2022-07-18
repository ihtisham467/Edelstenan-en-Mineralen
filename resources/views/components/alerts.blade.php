@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(Session::has('info'))
  <div class="alert alert-info alert-dismissible fade in" role="alert" style="opacity: 1;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{Session::get('info')}}
  </div>
@elseif(Session::has('success'))
  <div class="alert alert-success alert-dismissible fade in" role="alert" style="opacity: 1;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{Session::get('success')}}
  </div>
@elseif(Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade in" role="alert" style="opacity: 1;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{Session::get('error')}}
    </div>
  @elseif(Session::has('post_success'))
  <div class="alert alert-success alert-dismissible fade in" role="alert" style="opacity: 1;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{Session::get('post_success')}}
  </div>
@elseif(Session::has('warning'))
  <div class="alert alert-warning alert-dismissible fade in" role="alert" style="opacity: 1;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{Session::get('warning')}}
  </div>
 @elseif(Session::has('danger'))
  <div class="alert alert-danger alert-dismissible fade in" role="alert" style="opacity: 1;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{Session::get('danger')}}
  </div>
@endif

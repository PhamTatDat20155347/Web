@extends('layout.index1')
@section('content')
<?php $i=0;
function doimau($str,$tukhoa){
  return str_replace($tukhoa, "<span style='color:red;'>$tukhoa</span>",$str );
}
?>
<div class="container" style="color: white; ">
  <h2 style="color: white;" class="section-title">Tìm kiếm: <b>{{$tukhoa}}</b></h2>
  @foreach($post1 as $p)
  <?php $i++; ?>
  <div class="row" style="margin-left: 10px; ">
    <div class="col-md-12" >
      <div class="job-list" style="width: 1200px;">
        <div class="thumb" style="">
          <a href="job-details.html"><img width="200px;" height="150px;" src="upload/post/{{$p->Hinh}}" alt=""></a>
        </div>
        <div class="job-list-content" style="display: inline-block; margin-left: 20px; width: 850px;">
          <h4>{!! doimau($p->title,$tukhoa) !!}<span class="full-time">Full-Time</span></h4>
          <p>{!! doimau($p->keywork,$tukhoa) !!}</p>
          <div class="job-tag">
            <div class="pull-left">
              <div class="meta-tag">
                <span><a href="browse-categories.html"><i class="ti-brush"></i>by TatDat</a></span>
                <i class="ti-location-pin"></i>{!! doimau($p->user->diachi,$tukhoa) !!}
                <i class="ti-time">  </i>{!! doimau($p->user->congty,$tukhoa) !!}
              </div>
            </div>
            <div class="pull-right">
              <div class="icon">
                <i class="ti-heart"></i>
              </div>
              <a href="xembaidang/{{$p->id}}.html" class="btn btn-common btn-rm">Xem thêm</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  <div class="col-md-12">
    <div class="showing pull-left" >
      <a href="#" style="color: white;">Showing {{$i}} Jobs</a>
    </div>                    
    <ul class="pagination pull-right">              
      <li>{{$post1->links()}}</li>
    </ul>
  </div>
</div>

@endsection
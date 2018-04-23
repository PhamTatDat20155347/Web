
<section id="intro" class="section-intro1">
  <div class="logo-menu">
    <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="50">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo" href="index.html"><img class="" src="img/logo1.png" alt="Vietnamworks - Job Search, career and employment in Vietnam" title="Vietnamworks - Job Search, career and employment in Vietnam" height="40px" width="110px"></a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">              
          <!-- Start Navigation List -->
          <ul class="nav navbar-nav">
            <li>
              <a class="active" href="trangchu">
                Trang chủ <i class="fa fa-angle-down"></i>
              </a>
              <ul class="dropdown">
                <li>
                  <a class="active" href="tatcavieclam" >
                    Tất cả việc làm
                  </a>
                </li>
                @if(Auth::user())
                <li>
                  <a class="active" href="trangchu">
                    Việc làm gợi ý
                  </a>
                </li>
                @endif
                <li>
                  <a class="active" href="nhatuyendung/trangchu" target="_blank">
                    Đăng tuyển
                  </a>
                </li>
              </ul>
            </li>
{{--             <li>
              <a href="about.html">
                Tất Cả Việc Làm <i class="fa fa-angle"></i>
              </a>
            </li> --}}
            <li>
              <a href="#">
                Công Ty <i class="fa fa-angle-down"></i>
              </a>
              <ul class="dropdown" style="overflow: auto; height: 400px;">
                @foreach($user as $u)
                <li>
                  <a class="active" href="baidangcongty/{{$u->id}}">
                    {{$u->congty}}
                  </a>
                </li>
                @endforeach
              </ul>
            </li>
            <li>
              <a href="gioithieu">
                Giới thiệu <i class="fa fa-angle"></i>
              </a>
            </li>
            <li>
              <a href="lienhe">
                Tư vấn <i class="fa fa-angle"></i>
              </a>
            </li>
          </ul><ul class="nav navbar-nav navbar-right float-right">
            <?php
            $i=0;
            $str='';
            $mau='';
            if(Auth::user()){
              $user_id = Auth::user()->id;

              $rec = Auth::user()->cv->recruitment;
                //$rec::where('trangthai','chờ')->get();

              foreach ($rec as $r) {
                  # code...
               $trangthai =  $r->TTNUT;
               $tt = $r->trangthai;
                    // if($trangthai==""){
                    //   $cty = $r->post->user->congty;
                    //   $str .= '<ul class="dropdown-menu" style="color: black; width: 430px;">
                    //   <li style="color: black;">
                    //   <a style="color: red;" href="ketqua/'.$r->id.'"><span style="color: red;">Công ty '.$cty.' đã phản hồi lại yêu cầu của bạn</span></a>
                    //   </li></ul>';
                    //   $i++;
                    // }else{
               $mau = 'black';
               if($trangthai=="" && $tt=="Chấp nhận"){
                $i++;
                $mau ="red";
                $cty = $r->post->user->congty;
                $str .= '
                <li style="color: black;">
                <a style="color: red;" href="ketqua/'.$r->id.'"><span style="color: '.$mau.';">Công ty '.$cty.' đã phản hồi lại yêu cầu của bạn</span></a>
                </li>';
              }else if($trangthai=="Xem" && $tt=="Chấp nhận"){
                $cty = $r->post->user->congty;
                $str .= '
                <li style="color: black;">
                <a style="color: red;" href="ketqua/'.$r->id.'"><span style="color: '.$mau.';">Công ty '.$cty.' đã phản hồi lại yêu cầu của bạn</span></a>
                </li>';
              }




                    //}
            }
          }
          ?>
          <li>
            <a class="alert-notifications notifications dd"  data-original-title="" title="">
              <i class="fa fa-bell" style="color: red;"></i>
              <span  id="no-of-notifications" style="" class="number"><?php echo $i; ?></span>
              <span class="caret"></span>
            </a>       
            <ul class="dropdown-menu" style="color: black; width: 430px;">
              <?php echo $str; ?>
            </ul>

          </li>
          <li class="left"><a href="nhatuyendung/trangchu" target="_blank"><i class="ti-pencil-alt"></i> TUYỂN DỤNG</a></li>
          @if(Auth::user())
          @if(!Auth::user()->quyen==0)
          <li class="right"><a href="dangnhap"><i class="ti-lock"></i>  Đăng nhập</a></li>
          <li class="right"><a href="dangky"><i class="ti-lock"></i>  Đăng ký</a></li>
          @else
          {{-- <li class="right"><a href="hosocanhan"><i class="ti-user"></i>  {{Auth::user()->username}}</a></li> --}}
          <li class="dropdown dropdown-popover-theme user-account dropdown-with-icon">
            <li class="right"><a href="hosocanhan"><i class="ti-user"></i>  {{Auth::user()->username}}</a>
              <ul class="dropdown-menu animated fadeIn" style="background-color: #414141; width: 250px;">
                <li class="menu-header">
                  Quản Lý Nghề Nghiệp
                </li>
                <li>
                  @if(Auth::user()->quyen==0)
                  <?php $cv= Auth::user()->cv; ?>
                  <a href="hosoxinviec">
                    <i class="fa fa-fw fa-lg fa-tachometer"></i>
                    Quản Lý Hồ Sơ
                  </a>
                  @else
                  <a>
                    <i class="fa fa-fw fa-lg fa-tachometer"></i>
                    Quản Lý Hồ Sơ
                  </a>
                  @endif
                </li>
                <li class="with-separator">
                  <a class="no-icon" href="hosocanhan">
                    Tài Khoản
                  </a>
                </li>
                <li>
                  <a class="no-icon" href="dangxuat">
                    Thoát
                  </a>
                </li>
              </ul>
            </li>
            @endif
            @else
            <li class="right"><a href="dangnhap"><i class="ti-lock"></i>  Đăng nhập</a></li>
            <li class="right"><a href="dangky"><i class="ti-lock"></i>  Đăng ký</a></li>
            @endif
          </ul>
        </div> 
      </div>
    </nav>
  </div>
  <div class="page-header" style="background: url(img/banner1.jpg);">
    <div class="container">
      <div class="row">         
        <div class="col-md-12">
          <div class="breadcrumb-wrapper">
            <h2 class="product-title"></h2>
            <ol>
              <br><br><br>
            </ol>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>

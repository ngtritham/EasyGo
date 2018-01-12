@inject('services', 'App\Http\Controllers\StaticFunction')

<!DOCTYPE html>
<html> 
    <head>
        <title>Easy Go</title>
        <meta charset="utf-8">
        <meta content="ie=edge" http-equiv="x-ua-compatible">
        <meta content="template language" name="keywords">
        <meta content="Native Theme" name="author">
        <meta content="Admin Template" name="description">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="favicon.png" rel="shortcut icon">
        <link href="apple-touch-icon.png" rel="apple-touch-icon">
        
        <link rel="stylesheet" href="{{asset('home/assets/plugins/tether/dist/css/tether.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('home/assets/plugins/bootstrap/dist/css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('home/assets/plugins/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('home/assets/plugins/animate/animate.css')}}">
        <link rel="stylesheet" href="{{asset('home/assets/css/main.css')}}"/>
        <link rel="stylesheet" href="{{asset('home/home.css')}}"/>

        <script src="{{asset('home/assets/plugins/jquery/jquery-2.1.1.min.js')}}"></script>
        <script src="{{asset('home/assets/plugins/jquery-count-to/jquery.countTo.js')}}"></script>
        <script src="{{asset('home/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('home/assets/plugins/tether/dist/js/tether.min.js')}}"></script>
        <script src="{{asset('home/assets/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('home/assets/js/app.js')}}"></script>
    </head>
    <body>
        <div class="top-nav">
            <div class="top-nav-box">
                <div class="side-nav-mobile"><i class="fa fa-bars"></i></div>
                <div class="logo-wrapper">
                    <div class="logo-box">
                        <img alt="pongo" src="{{asset('home/assets/images/mainlogo.png')}}">
                        <a href="button.html">
                            <div class="logo-title">easyGo</div>
                        </a>
                    </div>
                </div>
                <div class="top-nav-content">
                    <div class="top-nav-box">
                        <div class="top-notification">
                            <div class="notification-icon">
                                <div class="notification-badge bounceInDown animated timer" data-from="0" data-to="{{ $thongbao->count() }}">{{ $thongbao->count() }}</div>
                                <i class="fa fa-bell"></i>
                                <div class="notification-wrapper animated bounceInUp">
                                    <div class="notification-header">Notifications <span class="notification-count">{{ $thongbao->count() }}</span></div>
                                    <div class="notification-body">
                                        @foreach ($thongbao as $t)
                                            <a class="notification-list">
                                                <div class="notification-image">
                                                    <img alt="pongo" src="{{ $services->getAvatar($t->id_request) }}">
                                                </div>
                                                <div class="notification-content">
                                                    <div class="notification-text"><strong>{{ $services->getUsername($t->id_request) }}</strong> đã đề nghị đi cùng bạn!</div>
                                                    <div class="notification-time">{{ $t->created_at }}</div>
                                                </div>
                                            </a>
                                        @endforeach     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-nav-mobile"><i class="fa fa-cog"></i></div>
            </div>
        </div>
        <div class="wrapper">
            <aside class="side-nav">
                
                <div class="user-side-profile">
                    <div class="user-image">
                        <div class="user-on"></div>
                        <img alt="pongo" src="{{ $user->avatar }}">
                    </div>
                    <div class="clear">
                        <div class="user-name">{{ $user->username }}</div>
                        @if ($user->role_id == 0)
                            <div class="user-group">Administrator</div>
                        @else
                            <div class="user-group">Member</div>
                        @endif
                        <ul class="user-side-menu animated bounceInUp">
                            <li><a href="{{route('AvatarPage')}}">Ảnh đại diện</a></li>
                            <li><a href="{{route('LogoutPage')}}">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <div class="main-menu-title">Thông tin</div>
                <div class="main-menu">
                    <div id="information"> 
                        <ul >                   
                            <li class="name">Tên: <span>{{ $user->name }}</span></li>
                            <li class="phonenumber">Số điện thoại: <span>{{ $user->phonenumber }}</span></li>
                            <li class="email">E-mail: <span>{{ $user->email }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="main-menu">
                    <ul>
                        <li>
                            <a href="#">
                                Trang chủ
                            </a>
                        </li>
                    </ul>
                </div>
                <!--<div class="main-menu-title">Tìm kiếm</div>
                <div class="main-menu">
                    <ul>
                        <li>
                            <a href="button.html">
                                
                                <span>Quận, Huyện</span>
                                
                            </a>
                            <ul>
                            <li><a href="landing.html">Quận 1</a></li>
                                <li><a href="invoice.html">Quận 2</a></li>
                                <li><a href="login.html">Quận 3</a></li>
                                <li><a href="register.html">Quận 4</a></li>
                                <li><a href="lock_screen.html">Quận 5</a></li>
                                <li><a href="media.html">Quận 6</a></li>
                                <li><a href="chat.html">Quận 7</a></li>
                                <li><a href="404.html">Quận 8</a></li>
                                <li><a href="500.html">Quận 10</a></li>
                                <li><a href="blank.html">Quận 12</a></li>
                                <li><a href="blank.html">Quận Tân Bình</a></li>
                                <li><a href="blank.html">Quận Bình Tân</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="button.html">
                                
                                <span>Phường, Xã</span>
                                
                            </a>
                            <ul>
                            <li><a href="landing.html">Phường 1</a></li>
                                <li><a href="invoice.html">Phường 2</a></li>
                                <li><a href="login.html">Phường 3</a></li>
                                <li><a href="register.html">Phường 4</a></li>
                                <li><a href="lock_screen.html">Phường 5</a></li>
                                <li><a href="media.html">Phường 6</a></li>
                                <li><a href="chat.html">Phường 7</a></li>
                                <li><a href="404.html">Phường 8</a></li>
                                <li><a href="500.html">Phường 9</a></li>
                                <li><a href="blank.html">Phường 10</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>-->
            </aside>
            <div class="main">
                <div class="content">
                    <div class="panel">
                        <div class="row">
                            <div class="col-md-9 sm-max" id="dang-bai">
                                <div class="content-box">
                                    <div class="content-box-header">
                                        <div>Đăng bài</div>
                                    </div>
                                    <form class="form-horizontal" method="POST" action="{{ route('PostPage') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group row" >
                                            <label for="content" class="col-sm-2">Nội dung:</label>
                                            <textarea style="height: 80px" name="content" value="{{old('content')}}" class="form-control col-sm-9" id="content" rows="3"></textarea>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label" for>Địa điểm xuất phát:</label>

                                            <div class="col-sm-3">
                                                <label for="sthanhpho">Thành phố:</label>
                                                <select class="form-control" id="sthanhpho" name="sthanhpho">
                                                    <option value="">--Chọn--</option>
                                                    @foreach ($thanhpho as $t)
                                                        <option value="{{$t->id}}">{{$t->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="squan">Quận, huyện:</label>
                                                <select class="form-control" id="squan" name="squan">
                                                </select>
                                            </div>
                                            
                                            <div class="col-sm-3">
                                                <label for="sphuong">Phường, xã:</label>
                                                <select class="form-control" id="sphuong" name="sphuong">
                                                </select>
                                            </div>

                                        </div>  
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label" for>Địa điểm kết thúc:</label>

                                            <div class="col-sm-3">
                                                <label for="ethanhpho">Thành phố:</label>
                                                <select class="form-control" id="ethanhpho" name="ethanhpho">
                                                    <option value="">--Chọn--</option>
                                                    @foreach ($thanhpho as $t)
                                                        <option value="{{$t->id}}">{{$t->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-sm-3">
                                                <label for="equan">Quận, huyện:</label>
                                                <select class="form-control" id="equan" name="equan">
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="ephuong">Phường, xã:</label>
                                                <select class="form-control" id="ephuong" name="ephuong">
                                                </select>
                                            </div>

                                        </div>
                                        <div class="row justify-content-md-center ">
                                            <div class="col align-self-center option">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="state" id="exampleRadios1" value="0" checked>
                                                    Bạn có xe và muốn tìm người đi chung
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" type="radio" name="state" id="exampleRadios2" value="1">
                                                    Bạn không có xe và muốn tìm người cho quá giang
                                                  </label>
                                                </div>
                                            </div>  
                                        </div>
                                        
                                        <button type="submit" class="btn btn-outline-primary" id="btn-post"> Đăng </button>                  
                                    </form>
                                </div>

                                <div class="content-box news-feed" >
                                    <div class="content-box-header">
                                        <div>Bài đăng mới nhất</div>
                                        
                                    </div>
                                    <div class="main-content">
                                        @foreach($baiviet as $b)
                                            <div class="row content-posts content-box">
                                                <form action="{{ route('SendOfferPage') }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id_baiviet" value="{{$b->id}}">
                                                <div class="col-md-2 user">
                                                    <img class="avatar" src="{{ $services->getAvatar($b->id_author) }}"><br>
                                                    <span class="user-name-post">{{ $services->getUsername($b->id_author)}}</span>
                                                    <div class="btn-request">
                                                        <button type="submit" class="btn btn-outline-info"><i class="fa fa-paper-plane"></i></button>
                                                    </div>                    
                                                </div>
                                                </form>

                                                <div class="col-md-10 content-a-post">
                                                    @if( $b->state == 0)
                                                        <span class="user-name-post" style="color: #000">Tìm bạn đồng hành</span>
                                                    @else
                                                        <span class="user-name-post">Tìm người cho quá giang</span>
                                                    @endif <br>
                                                    Đi từ: <span>{{ $services->getDiaChi($b->id_ward_cur, $b->id_district_cur) }}</span><br>
                                                    Đến: <span>{{ $services->getDiaChi($b->id_ward_next, $b->id_district_next) }}</span><br>
                                                    Lời giới thiệu: <span>{{ $b->content }}</span><br>
                                                    Ngày sửa cuối: <span class="date-time">{{ $b->updated_at }}</span><br>
                                                </div>
                                            </div>
                                        @endforeach

                                    <br>
                                    {{ $baiviet->links() }}
                                    </div>
                                    
                                    
                                </div>
                                
                            </div>
                            <div class="col-md-3 sm-max">
                                <div class="content-box" id="your-post">
                                    <div class="content-box-header">
                                        <div class="box-title">Bài đăng của bạn</div>
                                    </div>
                                    
                                        @foreach($baiviet_user as $bu)
                                            <div class="content-box content-your-post">
                                            <div>
                                                <span class="date-time">{{ $bu->created_at }}</span><br>
                                                Đi từ: <span>{{ $services->getDiaChi($bu->id_ward_cur, $bu->id_district_cur) }}</span><br>
                                                Đến: <span>{{ $services->getDiaChi($bu->id_ward_next, $bu->id_district_next) }}</span>
                                            </div>
                                            </div>
                                        @endforeach
                                </div>
                                {{ $baiviet_user->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

<script type="text/javascript">
$(document).ready(function(){
    $('#sthanhpho').on('change',function(){
        var sthanhpho_id = $(this).val();
        var op = "";
        if(sthanhpho_id){
            $.ajax({
                type:'GET',
                url:'{{URL::to('home/getQuan')}}',
                data:'thanhpho_id='+ sthanhpho_id,
                success:function(data){
                    op += '<option value="">--Chọn--</option>';
                    var n = data.length;
                    for (var i = 0; i < n; i++) {
                        op += '<option value="'+data[i].id+'">'+data[i].name+'</option> ';
                    }
                    $('#squan').html(op);
                    $('#spuong').html('<option value=""></option>');
                }
            }); 
        }else{
            $('#squan').html('<option value=""></option>');
            $('#spuong').html('<option value=""></option>');
        }
    });
    
    $('#squan').on('change',function(){
        var squan_id = $(this).val();
        var op = "";
        if(squan_id){
            $.ajax({
                type:'GET',
                url:'{{URL::to('home/getPhuong')}}',
                data:'quan_id='+ squan_id,
                success:function(data){
                    op += '<option value="" select disalbe>--Chọn--</option>';
                    var n = data.length;
                    for (var i = 0; i < n; i++) {
                        op += '<option value="'+data[i].id+'">'+data[i].name+'</option> ';
                    }
                    $('#sphuong').html(op);
                }
            }); 
        }else{
            $('#sphuong').html('<option value=""></option>');
        }
    });

    $('#ethanhpho').on('change',function(){
        var ethanhpho_id = $(this).val();
        var op = "";
        if(ethanhpho_id){
            $.ajax({
                type:'GET',
                url:'{{URL::to('home/getQuan')}}',
                data:'thanhpho_id='+ ethanhpho_id,
                success:function(data){
                    op += '<option value="">--Chọn--</option>';
                    var n = data.length;
                    for (var i = 0; i < n; i++) {
                        op += '<option value="'+data[i].id+'">'+data[i].name+'</option> ';
                    }
                    $('#equan').html(op);
                    $('#epuong').html('<option value=""></option>');
                }
            }); 
        }else{
            $('#equan').html('<option value=""></option>');
            $('#epuong').html('<option value=""></option>');
        }
    });
    
    $('#equan').on('change',function(){
        var equan_id = $(this).val();
        var op = "";
        if(equan_id){
            $.ajax({
                type:'GET',
                url:'{{URL::to('home/getPhuong')}}',
                data:'quan_id='+ equan_id,
                success:function(data){
                    op += '<option value="" select disalbe>--Chọn--</option>';
                    var n = data.length;
                    for (var i = 0; i < n; i++) {
                        op += '<option value="'+data[i].id+'">'+data[i].name+'</option> ';
                    }
                    $('#ephuong').html(op);
                }
            }); 
        }else{
            $('#ephuong').html('<option value=""></option>');
        }
    });
});
</script>

</html>
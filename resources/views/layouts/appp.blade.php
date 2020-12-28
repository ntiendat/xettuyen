<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('../assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{asset('/assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/fonts/simple-line-icons.min.css')}}>
    <link rel="stylesheet" href="{{asset('/assets/css/Dark-NavBar-1.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/Dark-NavBar-2.css')}}">
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    <link rel="stylesheet" href="{{asset('/assets/css/Dark-NavBar.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('/assets/css/Pretty-Search-Form.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/smoothproducts.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('/assets/css/sua.css')}}">
</head>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;
    var pusher = new Pusher('10b13ca2e8f519647699', {
      cluster: 'ap1'
    });
    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      // let a=JSON.stringify(data);
      if(data.user=='admin'){
        // $(".page__main").show();
        // $("#bongbong").hide()
        var x = document.getElementById("page__main");
        x.style.display = "block";
        var y = document.getElementById("bongbong");
        y.style.display = "none";


       var p = document.createElement("li");  
        p.classList.add(['bot__output']); 
       var node = document.createTextNode(data.message);
       var chatList = document.querySelector('.chatlist')
       p.appendChild(node);
       var div = document.getElementById("pr");
       div.appendChild(p);
        chatList.scrollTop = chatList.scrollHeight;

    }
      // var element = document.getElementById(id);
      // element.scrollTop = element.scrollHeight - element.clientHeight;
      // console.log(data);
      // alert(data.message+ data.user);
    });
   
  
  </script>
<script>
function myFunction() {
        var ho                     = document.getElementById("ho").value;
        var ten                    = document.getElementById("ten").value;
        var CMND                   = document.getElementById("CMND").value;
        var SDT                    = document.getElementById("SDT").value;
        var email                  = document.getElementById("email").value;
        var thanhphothuongtru      = document.getElementById("tp").value;
        var quanhuyenthuongtru     = document.getElementById("qh").value;
        var phuongxathuongtru      = document.getElementById("px").value;
        var diachithuongtru        = document.getElementById("diachithuongtru").value;
        var matruonglop12          = document.getElementById("matruonglop12").value;
        var truong12               = document.getElementById("truong12").value;
        var matinhlop12            = document.getElementById("matinhlop12").value;
        if (truong12                 == null || 
            ho                       == null ||
            ten                      == null ||  
            CMND                     == null || 
            SDT                      == null || 
            email                    == null ||
            thanhphothuongtru        == null ||
            quanhuyenthuongtru       == null ||
            phuongxathuongtru        == null ||
            diachithuongtru          == null ||
            matruonglop12            == null || 
            matinhlop12              == null ||
            truong12                 == "" ||
            ho                       == "" ||
            ten                      == "" || 
            CMND                     == "" || 
            SDT                      == "" || 
            email                    == "" || 
            thanhphothuongtru        == "" || 
            quanhuyenthuongtru       == "" ||
            phuongxathuongtru        == "" || 
            diachithuongtru          == "" || 
            matruonglop12            == "" || 
            matinhlop12              == "" 
         ) 
         {
             
             alert("Chưa nhập đủ thông tin");
            return false;
        }
}
var nv = 1
        function themnguyenvong() {
            nv++;
            if(nv<=3){
                var html = $('#nguyenvong1').html();

                html.replace('nguyenvong1','nguyenvong'+nv);
            // alert(html);
                
                $("#nguyenvong").append("<div class='col-md-4'><p style=' line-height: 3;'> Nguyện Vọng "+ nv +" :</p></div><div class='col-md-4'><select class='input-group input-by-me' name='nguyenvong"+nv+"' id='cars'>"+html+"</select>  </div> <div class='col-md-4'></div>");
        }
        else{
            alert("Chỉ được tối đa 3 nguyện vọng");

        }
        }


</script>
<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a href="../index.php"><img src="../assets/img/logo.png"></a><button data-toggle="collapse" class="navbar-toggler"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"
                        style="padding: 0;height: 131px;margin-left: 30px;margin-top: -49px;margin-bottom: -149px;">
                        <form class="form-inline search-form">
                            <div class="input-group">
                               
                                <div class="input-group-append">

                                    @if (isset(Auth::user()->role)&& Auth::user()->role != "AdUSER" && Auth::user()->role != "Root")
                                        <a href='/hoso' style='font-size: 30px;color:blue;'>
                                 <i style='color: darkslateblue;  margin-right: 15px;margin-top: 6px;' class='far fa-address-book'></i>
                                 </a>
                                    @endif

          
                                 
                                 
                                 <a href="{{asset('tracuu')}}"><button class="btn btn-light" type="button"
                                        style="background-color: rgb(27,51,170);color: rgb(255,255,255);">Tra cứu
                                    </button></a>  
                                    <?php if(isset(Auth::user()->email)){
                                        echo " <a href='logout'><input type='button' value='Đăng Xuất'></a>";
                                    }
                                    else{
                                        echo " <a href='login'><input type='button' value='Đăng nhập'></a>";
                                    }
                                    ?>
                                </div>
                            </div>
                            
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main">
   <div class="container main-xethocba">

                
            @section('content')
                
            
            @show

        </div> </div>
        <footer class="page-footer dark" style="background-color: rgb(0,19,115);">
                <div class="footer-copyright dark flex">
                    <div class="col-md-8">
                        <h6 style="color: #fff !important;
                        margin-top: .5rem !important;">© 2020 TRƯỜNG ĐẠI HỌC THỦY LỢI</h6>
                    </div>
                    <div class="col-md-4 socialmedia">
                        <a href="https://www.facebook.com/daihocthuyloi1959/?fref=ts" target="_blank"><img
                                src="http://www.tlu.edu.vn/Portals/_default/skins/tluvie/images/front/fb-icon.png"></a>
                        <a href="https://www.youtube.com/user/daihocthuyloi" target="_blank"><img
                                src="http://www.tlu.edu.vn/Portals/_default/skins/tluvie/images/front/ytb-icon.png"></a>
                        <a href="https://twitter.com/Daihocthuyloihn" target="_blank"><img
                                src="http://www.tlu.edu.vn/Portals/_default/skins/tluvie/images/front/twitter-icon.png"></a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <h5><img style="height: 200px; width: 350px;" alt="Image" src="../assets/img/scenery/map.png"></h5>
                        </div>
                        <div class="col-lg-4" style="margin-top: 30px;">
                            <span>TRƯỜNG ĐẠI HỌC THỦY LỢI <br>Địa chỉ: 175 Tây Sơn, Đống
                                Đa, Hà Nội <br>Điện thoại: (024) 38522201 - Fax: (024) 35633351<br>Email:&nbsp;<a
                                    href="http://www.tlu.edu.vn/#"> <span
                                        style="text-decoration: underline;">phonghcth@tlu.edu.vn</span></a>
                            </span>
                            <hr>
                            <span>PHÂN HIỆU ĐẠI HỌC THỦY LỢI <br> Địa chỉ 1: Số 2 Trường Sa, P.17,Q.Bình Thạnh, Tp.Hồ Chí Minh
                                <br> Điện thoại:(028) 38400532 - Fax:(028) 38400542 <br> Địa chỉ 2: Phường An Thạnh, TP Thuận
                                An, Tỉnh Bình Dương <br> Điện thoại: (065)3748620 - Fax:(065)3833489
                                <br>Email:cs2@tlu.edu.vn</span>
                        </div>
                        <div class="col-lg-4" style="margin-top: 30px;">
                            <span>TRƯỜNG ĐẠI HỌC THỦY LỢI <br>Địa chỉ: 175 Tây Sơn, Đống
                                Đa, Hà Nội <br>Điện thoại: (024) 38522201 - Fax: (024) 35633351<br>Email:&nbsp;<a
                                    href="http://www.tlu.edu.vn/#"> <span
                                        style="text-decoration: underline;">phonghcth@tlu.edu.vn</span></a>
                            </span>
                            <hr>
                            <span>VIỆN ĐÀO TẠO VÀ KHOA HỌC ỨNG DỤNG MIỀN TRUNG <br>Địa chỉ:Số 115 Trần Phú, Thành phố Phan Rang,
                                Tỉnh Ninh Thuận <br>Điện thoại: (0259)3823027, (0259)3823028
                                <br>Email:trungtamdh2@tlu.edu.vn</span>
                        </div>
                    </div>
                </div>
            </footer>
            <div id="page__main" class="page__main">
                <div class="block--background"> 
                  <div class="chatbot__overview">
                    {{-- <p i>X</p> --}}
                    <a id="X" href="">X</a>
                    <ul class="chatlist" id="pr">
                      <li class="userInput">Hello</li>
                      <li class="bot__output bot__output--standard">Chào bạn !!!</li>
                      <li class="bot__output bot__output--standard">Chúng tôi có thể giúp gì bạn ?</li>

                      @foreach ($chat as $item)
                          @if ($item->user == 'user')
                            <li class="userInput">{{$item->content}}</li>
                            @else
                          <li class="bot__output bot__output--standard">{{$item->content}}</li>
                          @endif
                      @endforeach
                    </ul>
                  </div>
                  <div class="chatbox-area">
                    <div  id="chatform">
                        <textarea placeholder="Talk to me!" class="chatbox" name="chatbox" id='content' resize: "none" minlength="2"></textarea>
                        <input class="submit-button" id='send'  type="submit" value="send">
                    </div>
                  </div>
          
                      {{-- <div class="block--background"></div> --}}
            
            </div>
          </div>
            <img id="bongbong" class="bongbong" src="https://www.flaticon.com/svg/static/icons/svg/2111/2111402.svg" alt="">
          
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
           
            <script src="{{asset('assets/js/jquery.min.js')}}"></script>
            <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
            <!-- <script src="assets/js/smoothproducts.min.js"></script> -->
            <script src="{{asset('assets/js/theme.js')}}"></script>
            <script src="{{asset('assets/js/js.js')}}"></script>
            @if (isset(Auth::user()->role)&& Auth::user()->role == "AdUSER")
            <script src="{{asset('assets/js/jsserver.js')}}"></script>
            @else
            <script src="{{asset('assets/js/jsclient.js')}}"></script>
             @endif
        
        </body>
        
        </html>
        
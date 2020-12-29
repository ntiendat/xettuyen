<!DOCTYPE HTML>
<html>
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>

</style>
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<link rel="stylesheet" href="{{asset('/assets/css/sua2.css')}}">

<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="{{asset('js/jquery-2.1.1.min.js')}}"></script> 
<!--icons-css-->
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    {{-- <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script> --}}
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
	<script src="js/chartinator.js" ></script>
	@if (Route::currentRouteName()=='lienhe')
	<script>
		
		Pusher.logToConsole = true;
		var pusher = new Pusher('10b13ca2e8f519647699', {
		  cluster: 'ap1'
		});
		var channel = pusher.subscribe('my-channel');
		channel.bind('my-event', function(data) {

		  // let a=JSON.stringify(data);
		  if(data.user=='user'){
			
			
		// var x = document.getElementById("bongbong");
        // x.style.display = "none";
		var y = document.getElementById("page__main "+data.ip);
		console.log(y);
		y.style.display = "block";

		
		var p = document.createElement("li");  
			p.classList.add(['bot__output']); 
		   var node = document.createTextNode(data.message);
		   var chatList = document.getElementById("pr "+data.ip);
		   p.appendChild(node);
		  
		   var div = document.getElementById("pr "+data.ip);
		   div.appendChild(p);
			chatList.scrollTop = chatList.scrollHeight;
		}
		
	
	});
	  </script>















		
	@else
	<script>
		Pusher.logToConsole = true;
		var pusher = new Pusher('10b13ca2e8f519647699', {
		  cluster: 'ap1'
		});
		var channel = pusher.subscribe('my-channel');
		channel.bind('my-event', function(data) {

		  // let a=JSON.stringify(data);
		  if(data.user=='user'){
			
		var x = document.getElementById("bongbong");
        x.style.display = "none";
        var y = document.getElementById("page__main only");
		y.style.display = "block";

		var p = document.createElement("li");  
			p.classList.add(['bot__output']); 
		   var node = document.createTextNode(data.message);
		   var chatList = document.querySelector('.chatlist')
		   p.appendChild(node);
		   var div = document.getElementById("pr");
		   div.appendChild(p);
			chatList.scrollTop = chatList.scrollHeight;
		}
		});
	  </script>

	@endif

    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],
         
                colIndexes: [2],
             
                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],
              
                ignoreCol: [2],
              
                chartType: 'GeoChart',
              
                chartAspectRatio: 1.5,
             
                chartZoom: 1.75,
             
                chartOffset: [-12,0],
             
                chartOptions: {
                  
                    width: null,
                 
                    backgroundColor: '#fff',
                 
                    datalessRegionColor: '#F5F5F5',
               
                    region: 'world',
                  
                    resolution: 'countries',
                 
                    legend: 'none',

                    colorAxis: {
                       
                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {
                     
                        trigger: 'focus',

                        isHtml: true
                    }
                }

               
            });                       
        });
    </script>
<!--geo chart-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>


<!--//skycons-icons-->
</head>
<body>
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.html"> <h1></h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								<div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p4.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li class="odd"><a href="#">
												<div class="user_img"><img src="images/p2.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											</a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p3.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
									</li>
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new notification</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="user_img"><img src="images/p5.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/p6.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="images/p7.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all notifications</a>
												</div> 
											</li>
										</ul>
									</li>	
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 8 pending task</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Database update</span><span class="percentage">40%</span>
													<div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
											<li><a href="/dashboard">
												<div class="task-info">
													<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar green" style="width:90%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
													<div class="clearfix"></div>	
												</div>
											   <div class="progress progress-striped active">
													 <div class="bar red" style="width: 33%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all pending tasks</a>
												</div> 
											</li>
										</ul>
									</li>	
								</ul>
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
												<div class="user-name">

													{{-- <p>{{ Auth::user()->name }}</p> --}}
													<span>{{Auth::user()->name }}</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="{{ route('profile.show') }}"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="{{asset('logout')}}"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block" style="min-height: 755px">
<!--market updates updates-->
	 <div class="market-updates">
			<div class="col-md-4 market-update-gd">
            <a href="{{route('danhsach')}}">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
						<h4>Danh Sách Thí Sinh</h4>
						<h4>99</h4>
						<p>Liệt kế xem chi tiết</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
                </div>
                 </a>
			</div>
			<div class="col-md-4 market-update-gd">
				<a href="{{route('thongke')}}">
				<div class="market-update-block clr-block-2">
				 <div class="col-md-8 market-update-left">
					<h4>Thống kê</h4>
					{{-- <h4>Daily Visitors</h4> --}}
					<p>Số Liệu Chỉ Tiêu Nguyện Vọng</p>
				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
				</a>
			</div>
			<div class="col-md-4 market-update-gd">
				<a href="{{route('lienhe')}}">

				<div class="market-update-block clr-block-3">
					<div class="col-md-8 market-update-left">
						<h3>Liên Hệ </h3>
						{{-- <h4></h4> --}}
						{{-- <p>Other hand, we denounce</p> --}}
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-envelope-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
				</a>
			</div>
		   <div class="clearfix"> </div>
        </div>
		
		




        @section('content')
          
        @show
    
    
    
    
<!--market updates end here-->
<!--mainpage chit-chating-->
{{-- <div class="chit-chat-layer1">
	<div class="col-md-6 chit-chat-layer1-left">
           a
      </div>
      <div class="col-md-6 chit-chat-layer1-rit">    	
      	 b
      </div>
     <div class="clearfix"> </div>
</div> --}}
<!--main page chit chating end here-->
<!--main page chart start here-->
{{-- <div class="main-page-charts"> --}}
   {{-- <div class="main-page-chart-layer1">
		<div class="col-md-6 chart-layer1-left"> 
		c
		</div>
		<div class="col-md-6 chart-layer1-right"> 
		d
		</div>
	 <div class="clearfix"> </div>
  </div>
 </div> --}}
<!--main page chart layer2-->
{{-- <div class="chart-layer-2">
	
	<div class="col-md-6 chart-layer2-right">
		e
	</div>
	<div class="col-md-6 chart-layer2-left">
	f
	</div>
  <div class="clearfix"> </div>
</div> --}}

<!--climate start here-->
{{-- <div class="climate">
	<div class="col-md-4 climate-grids">
		g
	</div>
	<div class="col-md-4 climate-grids">
		h
	</div>
	<div class="col-md-4 climate-grids">
		i
	</div>
	<div class="clearfix"> </div>
</div> --}}
<!--climate end here-->
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© Copyright <a href="http://w3layouts.com/" target="_blank"></a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="/dashboard"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		

				  <li><a href="/duyet"><i class="fa fa-book nav_icon"></i><span>Duyệt</span></a></li>
				  


		    
		        
		        <li><a href="/danhsachdo"><i class="fa fa-bar-chart"></i><span>Danh sách Đỗ</span></a></li>
		      @if (Auth::user()->role == 'Root')
			  <li><a href="/lichsu"><i class="fa fa-cog"></i><span>Lịch Sử</span></a>
			  </li>
			  @endif
			  <li><a href="/regiterr"><i class="fa fa-plus nav_icon"></i><span>Thêm giảng viên</span></a></li>
		   
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<div id="page__main only" class="page__main" style="position: fixed;bottom: 20px;right: 50px;width: 300px;height: 423px;" >
	<div class="block--background"> 
	  <div class="chatbot__overview">
		{{-- <p i>X</p> --}}
		<a id="X" class="X" href="">X</a>
		<ul class="chatlist" id="pr">
		  <li class="userInput">Hello</li>
		  {{-- <li class="bot__output bot__output--standard">Hey, I'm NTD!</li>
		  <li class="bot__output bot__output--standard">I will guide you through Mees' portfolio!</li> --}}
		  @foreach ($chat as $item)
                          @if ($item->user == 'admin')
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

	@if (Route::currentRouteName()=='lienhe'))
	

		
	@else
	{{-- <img id="bongbong" class="bongbong" src="https://www.flaticon.com/svg/static/icons/svg/2111/2111402.svg" alt=""> --}}

	@endif

{{-- <img id="bongbong" class="bongbong" src="https://www.flaticon.com/svg/static/icons/svg/2111/2111402.svg" alt=""> --}}
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
@if ((Auth::check() && Auth::user()->role == 'AdUSER')|| Auth::user()->role == 'Root')
<script src="{{asset('assets/js/jsserver.js')}}"></script>
@else
<script src="{{asset('assets/js/jsclient.js')}}"></script>
 @endif
		<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
		<script src="{{asset('js/scripts.js')}}"></script>
		<!--//scrolling js-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="{{asset('js/bootstrap.js')}}"> </script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="{{ asset('assets/js/smoothproducts.min.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>
<script src="{{ asset('assets/js/js.js') }}"></script>
<!-- mother grid end here-->
</body>
</html>                     
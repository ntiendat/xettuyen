@extends('layouts.appp')
@section('title','Đăng ký xét tuyển')
    
@section('content')
<form action="{{route('xuly')}}" enctype="multipart/form-data" method="post"  name="myform" onsubmit=" return myFunction()">
    @csrf
    <!-- <form action="" enctype="multipart/form-data" method="post"  name="myform" onsubmit="myFunction()" > -->
     <!-- <div class="main"> -->
     <div class="container main-xethocba">
        <h2 style="padding-top: 29px;"  onclick=" return myFunction()"  >XÉT TUYỂN HỌC BẠ </h2>
        <div class="header-child style-1"  ><div class="stt"><span class="ng-tns-c19-1">1</span></div><div class="content-header"><h2 class="header-title-child" >THÔNG TIN THÍ SINH</h2></div></div>
     <div class="row">
        <div class="col-md-4">
            <input class="input-group input-by-me" type="text" placeholder="Họ"  id ="ho"  name="ho">
            
        </div>
        <div class="col-md-4">
            <input class="input-group input-by-me" type="text" placeholder="Tên"  id="ten" name="ten">
        </div>
        <div class="col-md-4">
                    <input  class="input-group input-by-me" data-date-format="dd-mm-yyyy" type="date" id="start" name="ngaysinh"
                value="22-09-1999"
                min="01-01-1990" max="01-01-1990">
        </div>
        <div class="col-md-4">
        <input class="input-group input-by-me" type="text" placeholder="CMND" id="CMND" name="CMND">
        </div>
        <div class="col-md-4">
                        
                     <select class="input-group input-by-me" name="gioitinh">
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                            <option value="Khac">Khác</option>
                    </select>
        </div>
        <div class="col-md-4">
        <input class="input-group input-by-me" type="text" placeholder="SĐT"  id="SDT"  name="SDT">
        </div>
        <div class="col-md-4">
        <input class="input-group input-by-me" type="text" placeholder="Email" id="email"  name="email">
        </div>
        <div class="col-md-4">
                     <select class="input-group input-by-me" name="khuvucuutien" >
                            <option value="KV1">Khu Vực 1</option>
                            <option value="KV2">Khu Vực 2</option>
                            <option value="KV2-NT">Khu Vực 2-Nông thôn</option>
                            <option value="KV3">Khu Vực 3</option>
                    </select>
        </div>
        <div class="col-md-4">
                      <select class="input-group input-by-me" name="doituonguutien" >
                            <option value="DT0">NONE</option>
                            <option value="DT1">Đối Tượng 1</option>
                            <option value="DT2">Đối Tượng 2</option>
                            <option value="DT3">Đối Tượng 3</option>
                            <option value="DT4">Đối Tượng 4</option>
                            <option value="DT5">Đối Tượng 5</option>
                            <option value="DT6">Đối Tượng 6</option>
                            <option value="DT7">Đối Tượng 7</option>
                    </select>
        </div>
     </div>

     <h3 class="text-bold">Địa chỉ thường trú</h3>

    <div class="row">



    <div class="col-md-4">
        
    <select class="custom-select" name="thanhphothuongtru" id="tp">
        <option>---chọn Thành Phố---</option>
      <?php
                // $sql = "SELECT * FROM devvn_tinhthanhpho";
                // $result = $conn->query($sql);
                
                // if ($result->num_rows > 0) {
                //     echo '   <option>---chọn Thành Phố---</option>';

                //   while($row = $result->fetch_assoc()) {
                //     echo "<option value='".$row['name']."'   data-data='".$row['matp']."' >".$row['name']."</option>";
                //   }
                // }
                
                ?>
                @foreach ($data as $data)
                <option value='{{$data->name}}'   data-data='{{$data->matp}}' >{{$data->name}}</option>
                    
                @endforeach
   
      </select>


    </div>
    <div class="col-md-4">
  
                <select class="form-control" name="quanhuyenthuongtru" id="qh">
                                <option></option>
                                <option></option>
                                <option></option>
          </select>
    </div> 
    <div class="col-md-4">

                <select class="form-control" name="phuongxathuongtru" id="px">
                                <option></option>
                                <option></option>
                                <option></option>
          </select>
               
    </div>









    <div class="col-md-12">
        <input class="input-group input-by-me" type="text" placeholder="Địa chỉ thường trú " id ="diachithuongtru" name="diachithuongtru">
        </div>
    </div>

    <h3 class="text-bold">Địa chỉ tạm trú   <input type="checkbox"  name="liketop" value="liketop" > <span  class="like-top" > như trên</span></h3>

    <div class="row">



    <div class="col-md-4">
        
    <select class="custom-select" name="thanhphotamtru" id="tp2">
        @foreach ($data1 as $data1)
        <option value='{{$data1->name}}'   data-data3='{{$data1->matp}}' >{{$data1->name}}</option>
            
        @endforeach
      <?php
                // $sql = "SELECT * FROM devvn_tinhthanhpho";
                // $result = $conn->query($sql);
                
                // if ($result->num_rows > 0) {
                //     echo '   <option>---chọn Thành Phố---</option>';

                //   while($row = $result->fetch_assoc()) {
                //     echo "<option value='".$row['name']."'   data-data3='".$row['matp']."' >".$row['name']."</option>";
                //   }
                // }
                
                ?>
       
      </select>


    </div>
    <div class="col-md-4">
  
                <select class="form-control" name="quanhuyentamtru" id="qh2">
                                <option></option>
                                <option></option>
                                <option></option>
          </select>
    </div> 
    <div class="col-md-4">

                <select class="form-control" name="phuongxatamtru" id="px2">
                                <option></option>
                                <option></option>
                                <option></option>
          </select>
               
    </div>




    <div class="col-md-12">
        <input class="input-group input-by-me" type="text" placeholder="Địa chỉ  trú tạm" name="diachitamtru">
        </div>
    </div>
    <h3 class="text-bold">Tên trường THPT lớp 12 </h3>
    <div class="row">
    <div class="col-md-8">
        <input class="input-group input-by-me" type="text" placeholder="Trường lớp 12" id="truong12" name="truong12">
    </div>
    <div class="col-md-2">
        <input class="input-group input-by-me" type="text" placeholder="Mã trường lớp 12" id="matruonglop12" name="matruonglop12">
    </div>
    <div class="col-md-2">
        <input class="input-group input-by-me" type="text" placeholder="Mã tỉnh lớp 12"  id="matinhlop12" name="matinhlop12">
    </div>
    <div class="col-md-4">
                      <select class="input-group input-by-me" name="hanhkiemlop12" >
                            <option value="tot">Tốt</option>
                            <option value="kha">Khá</option>
                            <option value="trungbinh">Trung bình</option>
                            <option value="yeu">Yếu</option>
                    </select>
        </div>
        <div class="col-md-4">
                      <select class="input-group input-by-me" name="hocluclop12" >
                             <option value="gioi">Giỏi</option>
                            <option value="kha">Khá</option>
                            <option value="trungbinh">Trung bình</option>
                            <option value="yeu">Yếu</option>
                            <option value="xuatsac">Xuất sắc</option>
                    </select>
        </div>
        <div class="col-md-4">
             <input  class="input-group input-by-me" type="number" name="namtotnghiep" value="2020" min="2010" max="2020" placeholder="Năm tốt nghiệp">
        </div>
        
    </div>







    <div class="header-child style-1"><div class="stt"><span class="ng-tns-c19-1">2</span></div><div class="content-header"><h2 class="header-title-child">THÔNG TIN ĐĂNG KÝ</h2></div></div>
       
       
        <div class="row" >
        <div class="col-md-4">
            <p style=" line-height: 3;"> Nguyện Vọng 1 :</p>
             <!-- <input  class="input-group input-by-me" type="number" id="quantity"name="number" value="2020" min="1" max="3"> -->
        </div>
        <div class="col-md-4">
        <select class="input-group input-by-me" name="nguyenvong1" id="nguyenvong1">
                    <?php 


                    //    $sql = "SELECT * FROM `nguyenvong`";
                    //    $result = $conn->query($sql);
                       
                    //    if ($result->num_rows > 0) {
                         
                    //      while($row = $result->fetch_assoc()) {
                    //        echo " <option value='".$row['nguyen_vong']."'>".$row['nguyen_vong']." </option>";
                    //      }
                    //    } 
                    

                       ?>
      @foreach ($data2 as $data2)
      <option value='{{$data2->nguyen_vong}}'>{{$data2->nguyen_vong}}</option>
          
      @endforeach

                    </select>
        </div>
      
        <div class="col-md-4">
                        <p class="btn btn-primary " onclick="themnguyenvong()">Thêm Nguyện Vọng</p>
        </div>
        <div  class="row col-md-12"id="nguyenvong" >
        
        
        
        
        
        </div>














        <div class="col-md-12">
            <table class="table">
                <th>
                    <tr>
                        <td><h6>Môn</h6></td>
                        <td><h6>Điểm</h6></td>
                    </tr>
                </th>
                <tbody>
                    <tr>
                        <td>Toán</td>
                        <td>
                              <input  class="input-group input-by-me-on-table" type="number" name="toan" value="0" min="0" max="10">
                        </td>
                    </tr>
                    <tr>
                        <td>Văn</td>
                        <td>
                              <input  class="input-group  input-by-me-on-table" type="number" name="van" value="0" min="0" max="10">
                        </td>
                    </tr>
                    <tr>
                        <td>Tiếng Anh</td>
                        <td>
                              <input  class="input-group  input-by-me-on-table" type="number" name="anh" value="0" min="0" max="10">
                        </td>
                    </tr>
                    <tr>
                        <td>Vật lý</td>
                        <td>
                              <input  class="input-group input-by-me-on-table" type="number" name="vatly" value="0" min="0" max="10">
                        </td>
                    </tr>
                    <tr>
                        <td>Hóa học</td>
                        <td>
                              <input  class="input-group  input-by-me-on-table" type="number" name="hoa" value="0" min="0" max="10">
                        </td>
                    </tr>
                    <tr>
                        <td>Sinh học</td>
                        <td>
                              <input  class="input-group  input-by-me-on-table" type="number" name="sinh" value="0" min="0" max="10">
                        </td>
                    </tr>
                    <tr>
                        <td>Lịch Sử</td>
                        <td>
                              <input  class="input-group  input-by-me-on-table" type="number" name="su" value="0" min="0" max="10">
                        </td>
                    </tr>
                    <tr>
                        <td>Địa lý</td>
                        <td>
                              <input  class="input-group  input-by-me-on-table" type="number" name="dia" value="0" min="0" max="10">
                        </td>
                    </tr>
                    <tr>
                        <td>Giáo dục công dân</td>
                        <td>
                              <input  class="input-group  input-by-me-on-table" type="number" name="GDCD" value="0" min="0" max="10">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>

        

        <div class="header-child style-1"><div class="stt"><span class="ng-tns-c19-1">3</span></div><div class="content-header"><h2 class="header-title-child">THÔNG TIN KHẢO SÁT</h2></div></div>
    
  
        <i class="far fa-file mat-icon"> Giấy tờ yêu cầu :</i>

        <div class="upfile">
                <div class="upload-file">
                Hình ảnh 3x4
                <input type="file" id="anhthe" name="anhthe" multiple /></td>
                </div>
                <hr class="hr">
                <div class="upload-file">
                Học Bạ THPT
                <input type="file" id="hocba" name="hocba" multiple /></td>
                </div>
                <hr class="hr">

        </div>
       
     </div>
     </div>

     <p class="ng-tns-c19-1" style="text-align: center;">Tôi xin cam đoan những lời khai trong đơn đăng ký xét tuyển này là đúng sự thật. Nếu sai tôi xin chịu xử lý theo quy chế Tuyển sinh của Bộ GD &amp; ĐT.</p>
     
      
        <input  class="btn btn-primary " style=" margin-left: 75%;margin-bottom: 20px;" 
         onclick=" return myFunction()" 
         type="submit" value="Đăng ký" >
    
      </form>
@endsection
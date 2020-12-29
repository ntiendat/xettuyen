@extends('layouts.appp')
@section('title','Hồ Sơ')
@section('content')
<?php

 
   
//  $id                = $_GET['id'];


            $A  =$data->toan + $data->vat_ly + $data->hoa;
            $A1 =$data->toan + $data->vat_ly + $data->anh;
            $A2 =$data->toan + $data->vat_ly + $data->anh;
            $B  =$data->toan + $data->hoa + $data->sinh;
            $C  =$data->van + $data->su + $data->dia_ly;
            $D  =$data->van + $data->toan + $data->anh;?>
 

<h2>Thông Tin Hồ Sơ</h2>

  <div  style="padding-left : 150px; padding-right:150px;"class="info">
    <div class="row">
    <div class="col-md-8  ">

    <h3 class="float-left"><?php echo $data->ho_ten?></h3>

    <table class="if">
        <tr>
          <th>Ngày Sinh :</th>
          <td><?php echo $data->ngay_sinh?></td>
        </tr>
        <tr>
          <th>Giới tính :</th>
          <td><?php echo $data->gioi_tinh?></td>
        </tr>
        <tr>
          <th>CMND :</th>
          <td><?php echo $data->CMND?></td>
        </tr>
        <tr>
          <th>SDT :</th>
          <td><?php echo $data->SDT?></td>
        </tr>
        <tr>
          <th>SBD :</th>
          <td id="SBD"><?php echo $data->SBD?></td>
        </tr>
        <tr>
          <th>Email :</th>
          <td><?php echo $data->email?></td>
        </tr>
        <tr>
          <th>Địa chỉ thường trú :</th>
          <td><?php echo $data->dia_chi_thuong_tru?></td>
        </tr>
        <tr>
          <th>Địa chỉ tạm trú :</th>
          <td><?php echo $data->dia_chi_tam_tru?></td>
        </tr>
        <tr>
          <th>Khu vực :</th>
          <td><?php echo $data->khuvuc?></td>
        </tr>
        <tr>
          <th>Đối tượng ưu tiên :</th>
          <td><?php echo $data->doituong?></td>
        </tr>
    </table>

   <hr class="hr">
    <h5 class="float-left">Nguyện Vọng</h5>
    <table class="if-lop12">
      


        @if( $data->nguyen_vong_1 !='' ) 
        <tr>
        <th> Nguyện vọng 1 : </th>
        <td>{{$data->nguyen_vong_1}}</td>
        <td>{{check2($data->doituong,$data->khuvuc,$data->nguyen_vong_1,$A,$A1,$A2,$B,$C,$D)}}</td>
        </tr>
        @else
        @endif
        @if( $data->nguyen_vong_2 !='' ) 
        <tr>
        <th> Nguyện vọng 2 : </th>
        <td>{{$data->nguyen_vong_2}}</td>
        <td>{{check2($data->doituong,$data->khuvuc,$data->nguyen_vong_2,$A,$A1,$A2,$B,$C,$D)}}</td>
    </tr>
        @else
        @endif
        @if( $data->nguyen_vong_3 !='' ) 
        <tr>
        <th> Nguyện vọng 3 : </th>
        <td>{{$data->nguyen_vong_3}}</td>
        <td>{{check2($data->doituong,$data->khuvuc,$data->nguyen_vong_3,$A,$A1,$A2,$B,$C,$D)}}</td>
    </tr>
        @else
        @endif
     
        
    
    </table>

    <hr class="hr">
    <h5 class="float-left">Thông tin học tập lớp 12</h5>
    <table class="if-lop12">
        <tr>
          <th>Trường Lớp 12 :</th>
          <td><?php echo $data->truong_lop_12?></td>
        </tr>
        <tr>
          <th>Mã trường 12 :</th>
          <td><?php echo $data->ma_truong_lop_12?></td>
        </tr>
        <tr>
          <th>Hạnh Kiểm :</th>
          <td><?php echo $data->hanh_kiem_lop_12?></td>
        </tr>
        <tr>
          <th>Học lực :</th>
          <td><?php echo $data->hoc_luc_lop_12?></td>
        </tr>
    
    </table>
    <hr class="hr">
    <h5 class="float-left">Thông tin học tập</h5>
    <table class="if-diem">
      <tr>
        <th>Môn</th>
        <th>Điểm khai báo</th>
        <th>Điểm từ Bộ GD & ĐT</th>
      </tr>
        <tr>
          <th>Toán :</th>
          <td><?php echo $data->toan?></td>
          <td id="toan"><?php echo $data->toan?></td>
        </tr>
        <tr>
          <th>Văn :</th>
          <td><?php echo $data->van?></td>
          <td id="van"><?php echo $data->van?></td>
        </tr>
        <tr>
          <th>Anh :</th>
          <td><?php echo $data->anh?></td>
          <td id="anh"><?php echo $data->anh?></td>
        </tr>
        <tr>
          <th>Vật Lý :</th>
          <td><?php echo $data->vat_ly?></td>
          <td id="vat_ly"><?php echo $data->vat_ly?></td>
        </tr>
        <tr>
          <th>Hóa :</th>
          <td><?php echo $data->hoa?></td>
          <td id="hoa"><?php echo $data->hoa?></td>
        </tr>
        <tr>
          <th>Sinh :</th>
          <td><?php echo $data->sinh?></td>
          <td id="sinh"><?php echo $data->sinh?></td>
        </tr>
        <tr>
          <th>Sử :</th>
          <td><?php echo $data->su?></td>
          <td id="su"><?php echo $data->su?></td>
        </tr>
        <tr>
          <th>Địa :</th>
          <td><?php echo $data->dia_ly?></td>
          <td id="dia"><?php echo $data->dia_ly?></td>
        </tr>
        <tr>
          <th>GDCD :</th>
          <td><?php echo $data->GDCD?></td>
          <td id="GDCD"><?php echo $data->GDCD?></td>
        </tr>
    </table>

    <hr class="hr">
    <h5 class="float-left">Điểm các khối xét tuyển</h5>
    <table class="if-lop12">
        <tr>
          <th>Khối A :</th>
          <td><?php echo $A?></td>
        </tr>
        <tr>
          <th>Khối A1 :</th>
          <td><?php echo $A1?></td>
        </tr>
        <tr>
          <th>Khối A2 :</th>
          <td><?php echo $A2?></td>
        </tr>
        <tr>
          <th>Khối B :</th>
          <td><?php echo $B?></td>
        </tr>
        <tr>
          <th>Khối C :</th>
          <td><?php echo $C?></td>
        </tr>
        <tr>
          <th>Khối D :</th>
          <td><?php echo $D?></td>
        </tr>
    
    </table>

    </div>
    <div class="col-md-4">
    <img src="<?php echo "http://127.0.0.1:8000/".$data->hinh_anh;?>" style="width:150px; margin-top:40px;" alt=""></br>
    
     </div>
     <div class="col-md-5"><a style="margin-top:20px;margin-bottom:10px;" class="btn btn-primary float-right" href="<?php echo "http://localhost/xettuyen/public/".$data->hoc_ba;?>">Xem Học Bạ</a></div>
     <div class="col-md-3">
    <ul>
        {{-- <li><a href="/do/{{$data->id}}" style="margin-top:20px;margin-bottom:10px;" class="btn btn-primary float-left">Đỗ</a></li>  --}}
        <li><a href="{{asset('do/'.$data->id)}}" style="margin-top:20px;margin-bottom:10px;" class="btn btn-primary float-left">Đỗ</a></li> 
        <li><a href="{{asset('khongdo/'.$data->id)}}" style="margin-top:20px;margin-bottom:10px;" class="btn btn-primary float-right">Không Đỗ</a></li>

    </ul>
     
      
    
     
    

     </div>

    </div>

  </div>
<script>
   
       
      $(document).ready(function(){
   
        // var iddiachi = $(this).find(':selected').data("data");
           let SBD = $("#SBD").text();     
           console.log(SBD);                  
        $.ajax({
                                            //gửi dữ liệu đi
           url : '/api/diem/' + '09001523',
           type:'GET',
                                         
                                            //nhận dữ liệu về 
           success:function(nhanve){
             var obj = JSON.parse(nhanve);
           
             $("#toan").text(obj[0]);
             $("#van").text(obj[1]);
             $("#anh").text(obj[2]);
             $("#vat_ly").text(obj[3]);
             $("#hoa").text(obj[4]);
             $("#sinh").text(obj[5]);
             $("#su").text(obj[6]);
             $("#dia").text(obj[7]);
             $("#GDCD").text(obj[8]);
           
              // console.log(obj[2]);
        
               
                }
         }
       );
        }
    
  );



 
  
  </script>

@endsection
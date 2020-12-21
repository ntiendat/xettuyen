<?php
use app\Helpes\functions;
?>
@extends('layouts.appquantri')
@section('title','Danh Sách Thí Sinh')
@section('content')

    
<div class="container mt-3">
    <h2 style="text-align: center; color: cadetblue">Tra cứu Hồ sơ sinh viên</h2>
    <p>Type something in the input field to search the table for first names, last names or emails:</p>  
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Họ Tên</th>
          <th>Ngày Sinh</th>
          <th>Giới Tính</th>
          <th>CMND</th>

          <th>Email</th>
          <th>Trường</th>
          <th>Nguyện Vọng 1</th>
          <th>Nguyện Vọng 2</th>
          <th>Nguyện Vọng 3</th>
     
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="myTable">
      

            @foreach ($data as $item)
            <?php
            $A  =$item->toan + $item->vat_ly + $item->hoa;
            $A1 =$item->toan + $item->vat_ly + $item->anh;
            $A2 =$item->toan + $item->vat_ly + $item->anh;
            $B  =$item->toan + $item->hoa + $item->sinh;
            $C  =$item->van + $item->su + $item->dia_ly;
            $D  =$item->van + $item->toan + $item->anh;?>
            <tr>
            <td>{{$item->ho_ten}}</td>
            <td>{{$item->ngay_sinh}}</td>
            <td>{{$item->gioi_tinh}}</td>
            <td>{{$item->CMND}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->truong_lop_12}}</td>
            <td><?php if($item->nguyen_vong_1!=''){check2($item->doituong,$item->khuvuc,$item->nguyen_vong_1,$A,$A1,$A2,$B,$C,$D);}?></td>
            <td><?php if($item->nguyen_vong_2!=''){check2($item->doituong,$item->khuvuc,$item->nguyen_vong_1,$A,$A1,$A2,$B,$C,$D);}?></td>
            <td><?php if($item->nguyen_vong_3!=''){check2($item->doituong,$item->khuvuc,$item->nguyen_vong_1,$A,$A1,$A2,$B,$C,$D);}?></td>
            <td><a href="hoso/{{$item->id}}">Xem</a></td>
            </tr>
        @endforeach
        
      </tbody>
    </table>
    
    
  </div>
  
  <script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>
  
  
@endsection
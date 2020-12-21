<?php
use app\Helpes\functions;
?>
@extends('layouts.appquantri')
@section('title','Thống Kê')
@section('content')
<div class="container">
<div class="form-group">
    <label for="">Chọn Biểu Đồ </label>
    <select class="form-control" name="" id="chonbieudo">
      <option></option>
      <option value="toan">Phổ Điểm Toán</option>
      <option value="van">Phổ Điểm Văn</option>
      <option value="anh">Phổ Điểm Tiếng Anh</option>
      <option value="vat_ly">Phổ Điểm Vật Lý</option>
      <option value="hoa">Phổ Điểm Hóa Học</option>
      <option value="sinh">Phổ Điểm Sinh Học</option>
      <option value="su">Phổ Điểm Lịch Sử</option>
      <option value="dia_ly">Phổ Điểm Đại Lý</option>
      <option value="GDCD">Phổ Điểm GDCD</option>
      <option value="thongkenganh">Thống kê Ngành Xét Tuyển</option>
      
    </select>
    <div class="bieudo"  id="bieudo" >
    {{-- <img  src="" alt=""> --}}
    <iframe src="" frameborder="0"></iframe>
    </div>
  </div>
</div>
  
  
  
  
@endsection
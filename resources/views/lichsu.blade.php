<?php
use app\Helpes\functions;
$index=1;
?>
@extends('layouts.appquantri')
@section('title','Thống Kê')
@section('content')
<div class="container">
    

    <div class="container mt-3">
        <h2 style="text-align: center; color: cadetblue">Tra cứu Hồ sơ sinh viên</h2>
        <p>Type something in the input field to search the table for first names, last names or emails:</p>  
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <br>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tác Vụ</th>
              <th>Thời Gian</th>
              <th>Người Thực Hiện</th>
    
            </tr>
          </thead>
          <tbody id="myTable">
          
    
                @foreach ($data as $item)
              
                <tr>
                    <td>{{$index}}</td>
                <td>{{$item->tac_vu}}</td>
                <td>{{$item->thoi_gian}}</td>
                <td>{{$item->nguoi_thuc_hien}}</td>
                <?php
                
                $index++;
                ?>
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
      


</div>
  
  
  
  
@endsection
@extends('layouts.appp')
@section('title','Tra cứu')
@section('content')


<div class="container mt-3">
    <h2>Tra cứu Hồ sơ sinh viên</h2>
    <p>Type something in the input field to search the table for first names, last names or emails:</p>  
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
  
    <div style="overflow-x:auto;">
    <table class="table table-bordered">
      <thead>
        <tr>
           <th>Họ Tên</th>
          <th>Ngày Sinh</th>
          <th>Giới Tính</th>
          <th>CMND</th>
          <th>Email</th>
          <th>Trường</th>
  
        </tr>
      </thead>
      <tbody id="myTable">
          @foreach ($data as $item)
              <tr>
              <td>{{$item->ho_ten}}</td>
              <td>{{$item->ngay_sinh}}</td>
              <td>{{$item->gioi_tinh}}</td>
              <td>{{$item->CMND}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->truong_lop_12}}</td>
              </tr>
          @endforeach
       <?php
         
//   $sql = "SELECT  * FROM thisinh";
//   $result = $conn->query($sql);
  
//   if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       echo "<tr>
//       <td>".$row['ho']." ".$row['ten']."</td>
//       <td>".$row['ngay_sinh']."</td>
//       <td>".$row['gioi_tinh']."</td>
//       <td>".$row['CMND']."</td>
//       <td>".$row['email']."</td>
//       <td>".$row['truong_lop_12']."</td>
//       <td><a href='infoHS.php?id=".$row['id']."'>Xem</a></td>
  
//     </tr>";
//     }
//   } 
       
//    $conn->close();
       
       ?>
        
      </tbody>
    </table>
    </div>
    <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
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
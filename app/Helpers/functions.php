<?php
   
    function ahihi ($hello){
        $data = DB::table('nguyenvong')->get();
        json_encode($data);
           return json_encode($data);
    }
    function check($doituong,$vung,$tennganh,$A,$A1,$A2,$B,$C,$D){
        $a = DB::table('nguyenvong')->where('nguyen_vong',$tennganh)->value('diem_xet_tuyen');
        $b = DB::table('nguyenvong')->where('nguyen_vong',$tennganh)->value('khoi_xet_tuyen');
        switch ($doituong) {
            case "DT1":
            case "DT2":
            case "DT3":
            case "DT4":
              $doituong =2;
                break;
            case "DT5":
            case "DT6":
            case "DT7" :
              $doituong =1;
                break;
            case "DT0" :
           $doituong =0;
               break;
        }
        switch ($vung) {
          case "KV1":
            $vung =0.75;
               break;
          case "KV2":
            $vung =0.5;
          break;
          case "KV2-NT":
            $vung =0.25;
          break;
          case "KV3":
            $vung =0;
          break;
          
        }     
        // global $A1,$A,$A2,$B,$C,$D;
        switch ($b) {
          case "A":
            $b =$A;
              break;
          case "A1":
            $b =$A1;
              break;
          case "A2":
            $b =$A2;
              break;
          case "B":
            $b =$B;
              break;
          case "C":
            $b =$C;
              break;
          case "D":
            $b =$D;
              break;
      }
    
         $diemtong=$doituong+$b+$vung;
        // echo $a."_".$b."_".$doituong."_".$vung."_".$diemtong;
        if($diemtong<$a){
            return "Bạn Không trúng tuyển $tennganh !!!";
          }
          else{
            return " Chúc mừng bạn đã trúng tuyển $tennganh !!!";
          }
    }
    function  check2($doituong,$vung,$tennganh,$A,$A1,$A2,$B,$C,$D){
        $a = DB::table('nguyenvong')->where('nguyen_vong',$tennganh)->value('diem_xet_tuyen');
        $b = DB::table('nguyenvong')->where('nguyen_vong',$tennganh)->value('khoi_xet_tuyen');
        switch ($doituong) {
            case "DT1":
            case "DT2":
            case "DT3":
            case "DT4":
              $doituong =2;
                break;
            case "DT5":
            case "DT6":
            case "DT7" :
              $doituong =1;
                break;
            case "DT0" :
           $doituong =0;
               break;
        }
        switch ($vung) {
          case "KV1":
            $vung =0.75;
               break;
          case "KV2":
            $vung =0.5;
          break;
          case "KV2-NT":
            $vung =0.25;
          break;
          case "KV3":
            $vung =0;
          break;
          
        }     
        // global $A1,$A,$A2,$B,$C,$D;
        switch ($b) {
          case "A":
            $b =$A;
              break;
          case "A1":
            $b =$A1;
              break;
          case "A2":
            $b =$A2;
              break;
          case "B":
            $b =$B;
              break;
          case "C":
            $b =$C;
              break;
          case "D":
            $b =$D;
              break;
      }
    
         $diemtong=$doituong+$b+$vung;
        
         
        if($diemtong<$a){
            echo "<b style='color:red;' >Không Đỗ</b>";
          }
          else{
            echo "<b style='color:green;' >  Đỗ</b>";
          }
       
    }


?>
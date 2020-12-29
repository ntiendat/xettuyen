<?php
use app\Helpes\functions;
?>
@extends('layouts.appquantri')
@section('title','Liên hệ')
@section('content')
<div class="container">
   

<?php ?>
<div class="block_chat">
    @foreach ($data as $key => $item)
    <div id="page__main <?php echo $key;?>" class="page__main">
        <div class="block--background" id="<?php echo $key;?>"> 
          <div class="chatbot__overview">
            {{-- <p i>X</p> --}}
            <a class="X" href="">X</a>
            <ul class="chatlist" id="pr <?php echo $key;?>">
              <li class="userInput">Hello</li>
              {{-- <li class="bot__output bot__output--standard">Hey, I'm NTD!</li>
              <li class="bot__output bot__output--standard">I will guide you through Mees' portfolio!</li> --}}
              @foreach ($item as $item2)
                              @if ($item2['user'] == 'admin')
                                <li class="userInput">{{$item2['content']}}</li>
                                @else
                              <li class="bot__output bot__output--standard">{{$item2['content']}}</li>
                              @endif
                          @endforeach
            </ul>
          </div>
          <div class="chatbox-area">
            <div  id="chatform">
                <textarea placeholder="Talk to me!" class="chatbox" name="chatbox" id='content' resize: "none" minlength="2"></textarea>
                <input class="submit-button send" id='send'  type="submit" value="send">
            </div>
          </div>
              {{-- <div class="block--background"></div> --}}
    </div>
    </div>
@endforeach
</div>



<div class="lienhe">
<table class="table">
   
    <tbody>
       <?php $index=1; ?>
        @foreach ($ip as $ip)
    
        <tr>
            <td scope="row" >
                <button  name="<?php echo $ip->ip; ?>" class="button" > User {{$index++}}</button>
               
            </td>
           
        </tr>
        @endforeach
    </tbody>
</table>
</div>
       

  </div>

  
  
  
  
@endsection
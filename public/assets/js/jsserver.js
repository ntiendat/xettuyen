$(document).ready(
    $(".button").click(function(){
         let ip = $(this).attr('name'); 
         console.log(ip);
        //   $(".page__main").show();
          var x = document.getElementById("bongbong");
        //   x.style.display = "none";
          var y = document.getElementById('page__main '+ip);
          y.style.display = "block";
          

    }),







    $(".page__main").hide(),
    $('#bongbong').click(function(event){
        event.preventDefault();  
        $(".page__main").show();
        $("#bongbong").hide()
    }),
    // $('#X').click(function(event){
    //     event.preventDefault();  
    //     $(this).parent().parent().remove();
    //     var x = document.getElementById("bongbong");
    //     x.style.display = "block";
    //     var y = document.getElementById("page__main");
    //     y.style.display = "none";
        
    //     // $(".page__main").hide();
    //     // $("#bongbong").show()
    // }),
    $('.X').click(function(event){
        event.preventDefault();  
        $(this).parent().parent().parent().hide();
    //    $(".page__main").show();
        $("#bongbong").show()
    }),
    $('.send').click(function(){
        var inputVal = $(this).parent().children(".chatbox").val();
        var ip = $(this).parent().parent().parent().attr("id");

        // alert(inputVal);
        $(this).parent().parent().parent().children().children('.chatlist').append(" <li class=\"userInput\">"+inputVal+"</li>");
        var chatList = document.getElementById("pr "+ip);
        chatList.scrollTop = chatList.scrollHeight;
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            //gửi dữ liệu đi
            url : 'sendsv',
            type:'POST',
            data:{ user: 'admin' ,content : inputVal,ip:ip},
            // nhận dữ liệu về 
            success:function(nhanve){
                // alert(nhanve);
            }
        },
        $(this).parent().children(".chatbox").val(''),
  
        );
       
    }),
    $(document.activeElement).keypress(function(event) {
      if (event.keyCode == 13 || event.which == 13) {
              event.preventDefault();  
               console.log(  $(document.activeElement).parent().children(".chatbox").val());
              var inputVal = $(document.activeElement).parent().children(".chatbox").val();
              var ip = $(document.activeElement).parent().parent().parent().attr("id");
              $(document.activeElement).parent().parent().parent().children().children('.chatlist').append(" <li class=\"userInput\">"+inputVal+"</li>");
              var chatList = document.getElementById("pr "+ip);
              chatList.scrollTop = chatList.scrollHeight;
              $.ajax({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  //gửi dữ liệu đi
                  url : 'sendsv',
                  type:'POST',
                  data:{ user: 'admin' ,content : inputVal,ip:ip},
                  // nhận dữ liệu về 
                  success:function(nhanve){
                      // alert(nhanve);
                  }
              },
              $(document.activeElement).parent().children(".chatbox").val(''),
        
              );
  
  
         }
     }),
   
  
    
  
  );
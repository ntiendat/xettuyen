$(document).ready(
    $(".page__main").hide(),
    $('#bongbong').click(function(){
        $(".page__main").show();
        $("#bongbong").hide()
    }),
    $('#X').click(function(event){
        event.preventDefault();  
        $(".page__main").hide();
        $("#bongbong").show()
    }),
    $('#send').click(function(){
            function getValue(){
                var value= $.ajax({ 
                   url: 'https://api.ipify.org?format=jsonp&callback=?', 
                   async: false
                }).responseText;
                return value;
             }

           ip = JSON.stringify(getValue());
           ip = JSON.parse(ip);
        console.log(ip);
       

        var subDes = ip.replace("\(",'');
         subDes = subDes.replace("\)",'');
         subDes = subDes.replace("\"",'');
        subDes = subDes.replace("\{",'');
        subDes = subDes.replace("\}",'');
        subDes = subDes.replace("\:",'');
        subDes = subDes.replace("\"",'');
        subDes = subDes.replace("ip",'');
        subDes = subDes.replace("\;",'');
        subDes = subDes.replace("\?",'');
        subDes = subDes.replace("\\",'');
        subDes = subDes.replace("\"",'');
        subDes = subDes.replace("\"",'');
             console.log(subDes);
        var inputVal = $('#content').val();
        // alert(inputVal);
        var p = document.createElement("li");  
        p.classList.add(['userInput']); 
        var node = document.createTextNode(inputVal);
        var chatList = document.querySelector('.chatlist')
        p.appendChild(node);
        var div = document.getElementById("pr");
        div.appendChild(p);
        chatList.scrollTop = chatList.scrollHeight;
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            //gửi dữ liệu đi
            url : 'sendcl',
            type:'POST',
            data:{ user: 'user' ,content : inputVal, ip : subDes},
            // nhận dữ liệu về 
            success:function(nhanve){
                // alert(nhanve);
            }
        },
        $("#content").val(''),
  
        );
       
    }),
    $('#content').keypress(function(event) {
      if (event.keyCode == 13 || event.which == 13) {
              event.preventDefault();  
              function getValue(){
                var value= $.ajax({ 
                   url: 'https://api.ipify.org?format=jsonp&callback=?', 
                   async: false
                }).responseText;
                return value;
             }

           ip = JSON.stringify(getValue());
           ip = JSON.parse(ip);
        console.log(ip);
        var subDes = ip.replace("\(",'');
         subDes = subDes.replace("\)",'');
         subDes = subDes.replace("\"",'');
        subDes = subDes.replace("\{",'');
        subDes = subDes.replace("\}",'');
        subDes = subDes.replace("\:",'');
        subDes = subDes.replace("\"",'');
        subDes = subDes.replace("ip",'');
        subDes = subDes.replace("\;",'');
        subDes = subDes.replace("\?",'');
        subDes = subDes.replace("\\",'');
        subDes = subDes.replace("\"",'');
        subDes = subDes.replace("\"",'');
            //  console.log(subDes);
        var inputVal = $('#content').val();
        // alert(inputVal);
        var p = document.createElement("li");  
        p.classList.add(['userInput']); 
        var node = document.createTextNode(inputVal);
        var chatList = document.querySelector('.chatlist')
        p.appendChild(node);
        var div = document.getElementById("pr");
        div.appendChild(p);
        chatList.scrollTop = chatList.scrollHeight;
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            //gửi dữ liệu đi
            url : 'sendcl',
            type:'POST',
            data:{ user: 'user' ,content : inputVal, ip : subDes},
            // nhận dữ liệu về 
            success:function(nhanve){
                // alert(nhanve);
            }
        },
        $("#content").val(''),
  
        );  
  
         }
     }),
   
);
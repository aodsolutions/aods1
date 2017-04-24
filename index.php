<!DOCTYPE html >
<html >

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>DynamicDNA Chat</title>
    
    <link rel="stylesheet" href="style.css" type="text/css" />
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="chat.js"></script>
    <script type="text/javascript">
    
            
        var name = prompt("Enter your chat name:", "User");
        
        
    	if (!name || name === ' ') {
    	   name = "User";	
    	}
    	
    	
    	name = name.replace(/(<([^>]+)>)/ig,"");
    	
    	
    	$("#name-area").html("You are: <span>" + name + "</span>");
    	
    	
        var chat =  new Chat();
    	$(function() {
    	
    		 chat.getState(); 
    		 
    		 
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
    		 																																																});
    		 
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
               
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text, name);	
    			        $(this).val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
    				
    				
    			  }
             });
            
    	});
    </script>

</head>

<body onload="setInterval('chat.update()', 1000)">

    <div id="page-wrap">
        
     <img src="Capture.jpg" width="30%" height="30%" align="left">
        <h2>DynamicDNA' Level 4 Chat Site</h2>
        
        <p id="name-area"></p>
        
        <div id="chat-wrap"><div id="chat-area"></div></div>
        
        <form id="send-message-area">
            <p>Your message: </p>
            <textarea id="sendie" maxlength = '100' ></textarea>
        </form>
   
    </div>

</body>
<a href="get.php" target="_blank"><h1>History</h1></a>
</html>
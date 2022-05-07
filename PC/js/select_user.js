
var global_friend = ""; 
var global_response = "";

function select_user(Username){

	$.ajax({
         type:'POST',
         url: 'includes/get_messages.php',
         data:{
         friend : Username
         },
         success:function(response){ 

		    console.log(Username);
		    global_friend = Username;
			console.log(response);

			$('#main_chat_window').empty();
			document.getElementById("friend").innerHTML = Username;
			document.getElementById("main_chat_window").innerHTML = response;
 		    // refresh(global_friend);

 
		}

	});

}
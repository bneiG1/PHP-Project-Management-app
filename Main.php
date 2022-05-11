<?php include 'includes/sesion_starter.php';?>
<?php include 'includes/get_users.php';?>
 
<!DOCTYPE html>

<html>

<head>

<title>Dashboard</title>
<link rel="shortcut icon" type="image/x-icon" href="img/icon.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<meta http-equiv="refresh" content="">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/Sidenav.css" rel="stylesheet">
<link href="css/Calendar.css" rel="stylesheet">



<script src="js/Sidenav.js"></script>
<script src="js/Dropdown.js"></script>
<script src="js/Calendar.js"></script>


</head>

<body>


<!-- Left menu -->
<div class="sidenav">

<img src="img/icon.png" style=" width:60px; height:60px; position: relative; padding-left: 10px;"> <h3 style="color:white; position: relative; float: right; padding-right: 25px;"> Dashboard</h3>

<hr>

  <a> <button class="tablinks" onclick="openTab(event, 'Home')" id="defaultOpen"> Home </button></a>
  <a><button class="tablinks" onclick="openTab(event, 'Feed')">Feed</button></a>
  <a><button class="tablinks" onclick="openTab(event, 'Reports')">Reports</button></a>
  <a><button class="tablinks" onclick="openTab(event, 'Calendar')">Calendar</button></a>
   <a><button class="tablinks" onclick="openTab(event, 'Projects')">Projects</button></a>



  <button class="dropdown-btn">Work overview 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
   <a> <button class="tablinks" onclick="openTab(event, 'Tasks')">Tasks</button></a>
   <a> <button class="tablinks" onclick="openTab(event, 'Issues')">Issues</button></a>
   <a> <button class="tablinks" onclick="openTab(event, 'Milestone')">Milestone</button></a>
   <a> <button class="tablinks" onclick="openTab(event, 'Timesheets')">Timesheets</button></a>
   <a> <button class="tablinks" onclick="openTab(event, 'Expenses')">Expenses</button></a>
  </div>



 <button class="dropdown-btn">Tools
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a> <button class="tablinks" onclick="openTab(event, 'HTML & Javascript')">HTML & Javascript</button></a>
  <a> <button class="tablinks" onclick="openTab(event, 'NodeJS')">NodeJS</button></a>
  <a> <button class="tablinks" onclick="openTab(event, 'PHP')">PHP</button></a>
  <a> <button class="tablinks" onclick="openTab(event, 'SQL')">SQL</button></a>
  <a> <button class="tablinks" onclick="openTab(event, 'C')">C</button></a>
  <a> <button class="tablinks" onclick="openTab(event, 'C++')">C++</button></a>
  <a> <button class="tablinks" onclick="openTab(event, 'C#')">C#</button></a>
  <a> <button class="tablinks" onclick="openTab(event, 'Java')">Java</button></a>
  <a> <button class="tablinks" onclick="openTab(event, 'Python')">Python</button></a>
  <a> <button class="tablinks" onclick="openTab(event, 'CLISP')">CLISP</button></a>
  <a> <button class="tablinks" onclick="openTab(event, 'Prolog')">Prolog</button></a>
  <a> <button class="tablinks" onclick="openTab(event, 'Bash')">Bash</button></a>
  <a> <button class="tablinks" onclick="openTab(event, 'Matlab')">Matlab</button></a>
  </div>



  <a> <button class="tablinks" onclick="openTab(event, 'Test')">Test</button></a>


<div class="dropup">
<button class="dropbtn">
<img src="img/Profile.png" style=" width:70px; height:60px; position: relative; padding-left: 10px;">
</button>

<div class="dropup-content">
 <a> <button class="tablinks" onclick="openTab(event, 'admin')">Users Permissions</button></a>
    <a href="#"><button>Gropus Permissions</button></a>
    <div>
<form action="includes/sesion_destroyer.php" method=post>
  <a href="Login.php"><button type="submit" name="exit" style="background:red; " >Logout</button></a>
  </form>
</div>
  </div>
</div>

</div>



<!-- right side content -->

<div class="main">

<div id="Home" class="tabcontent">
  <h3>Home</h3>
  <hr>
  <p>Welcome  
  	<?php 
  	echo $_SESSION["Username"]. ".";
	  ?>
  </p>
</div>

<div id="Feed" class="tabcontent">
  <h3>Feed</h3>
  <p>123412312312.</p> 
</div>

<div id="Reports" class="tabcontent">
  <h3>Reports</h3>
  <p>Twerqwerqwerqwerqrqwerqwqwer.</p>
</div>

<div id="Calendar" class="tabcontent">
  <h3>Calendar</h3>
  <p><div id="calendar"></div>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
</p>
</div>

<div id="Projects" class="tabcontent">
  <h3>Projects</h3>
  <p>qwerdfgdsfghdfgjfgadsfasdfadfdfgfghfghdgfh.</p>
</div>

<div id="Tasks" class="tabcontent">
  <h3>Tasks</h3>
  <p>Waiting for tasks.</p>
</div>

<div id="Issues" class="tabcontent">
  <h3>Issues</h3>
  <p>fligsugso9deurt[oidfghjioxyfg8o9serutoihcgs8[drtu[aiosdua].</p>
</div>

<div id="Milestone" class="tabcontent">
  <h3>Milestone</h3>
  <p>fhdfgjsfghsfdg.</p> 
</div>

<div id="Timesheets" class="tabcontent">
  <h3>Timesheets</h3>
  <p>345eratfdfghdfghdgfhasdf.</p>
</div>

<div id="Expenses" class="tabcontent">
  <h3>Expenses</h3>
  <p>90uilhgjkghjkguty7ighkn.</p>
</div>


<!-- IDE -->
<div id="HTML & Javascript" class="tabcontent">
  <h3>HTML & Javascript</h3>
  <iframe src="https://www.jdoodle.com/html-css-javascript-online-editor/"></iframe>
</div>

<div id="NodeJS" class="tabcontent">
  <h3>NodeJS</h3>
  <iframe src="https://www.jdoodle.com/execute-nodejs-online/"></iframe>
</div>

<div id="PHP" class="tabcontent">
  <h3>PHP</h3>
  <iframe src="https://www.jdoodle.com/php-online-editor/"></iframe>
</div>

<div id="SQL" class="tabcontent">
  <h3>SQL</h3>
  <iframe src="https://www.jdoodle.com/execute-sql-online/"></iframe>
</div>

<div id="C" class="tabcontent">
  <h3>C</h3>
  <iframe src="https://www.jdoodle.com/c-online-compiler/"></iframe>
</div>

<div id="C++" class="tabcontent">
  <h3>C++</h3>
  <iframe src="https://www.jdoodle.com/online-compiler-c++/"></iframe>
</div>

<div id="C#" class="tabcontent">
  <h3>C#</h3>
  <iframe src="https://www.jdoodle.com/compile-c-sharp-online/"></iframe>
</div>

<div id="Java" class="tabcontent">
  <h3>Java</h3>
  <iframe src="https://www.jdoodle.com/online-java-compiler/"></iframe>
</div>

<div id="Python" class="tabcontent">
  <h3>Python</h3>
  <iframe src="https://www.jdoodle.com/python3-programming-online/"></iframe>
</div>

<div id="CLISP" class="tabcontent">
  <h3>CLISP</h3>
  <iframe src="https://www.jdoodle.com/execute-clisp-online/"></iframe>
</div>

<div id="Prolog" class="tabcontent">
<h3>Prolog</h3>
  <iframe src="https://www.jdoodle.com/execute-prolog-online/" ></iframe>
</div>

<div id="Bash" class="tabcontent">
  <h3>Bash</h3>
  <iframe src="https://www.jdoodle.com/test-bash-shell-script-online/" ></iframe>
</div>

<div id="Matlab" class="tabcontent">
  <h3>Matlab</h3>
  <iframe src="https://www.jdoodle.com/execute-octave-matlab-online/" ></iframe>
</div>

<div id="Test" class="tabcontent">
  <h3>Test123</h3>
  <p>    <div data-pym-src=
"https://www.jdoodle.com/embed/v0/2IhG?stdin=1&arg=0">
    </div></p>
</div>

<div id="admin" class="tabcontent">
	<h3>Dashboard</h3>
  	<hr><br>


<?php
  foreach($users as $user){ ?>
    
  	<h3>
  	<?php 
  
	 $Username_of_users = htmlspecialchars($user['Username']);
	 $_SESSION["Username_of_users"] = $Username_of_users;
	?>

  	<button onclick="change_user('<?php echo $user ?>')">

  	<?php

  	echo  $_SESSION["Username_of_users"];

  	}
  	?>
  	</button>

  	<!-- <?php

  // echo "<form action='index.php' method=post>
  // <table>
  // <tr>
  // <th>User</th>
  // <th>Group</th>
  // <th>HTML & Javascript</th>
  // <th>NodeJS</th>
  // <th>PHP</th>
  // <th>SQL</th>
  // <th>C</th>
  // <th>C++</th>
  // <th>C#</th>
  // <th>Java</th>
  // <th>Python</th>
  // <th>CLISP</th>
  // <th>Prolog</th>
  // <th>Bash</th>
  // <th>Matlab</th>
  // </tr>";

    // echo "<tr>
    // <th>" . $Username_of_users . "</th>
    // <th>NUME GRUP</th>
    // <th><input type='checkbox' name='HTML & Javascript' value='HTML & Javascript'></th>
    // <th><input type='checkbox' name='NodeJS' value='NodeJS'></th>
    // <th><input type='checkbox' name='PHP' value='PHP'></th>
    // <th><input type='checkbox' name='SQL' value='SQL'></th>
    // <th><input type='checkbox' name='C' value='C'></th>
    // <th><input type='checkbox' name='C++' value='C++'></th>
    // <th><input type='checkbox' name='C#' value='C#'></th>
    // <th><input type='checkbox' name='Java' value='Java'></th>
    // <th><input type='checkbox' name='Python' value='Python'></th>
    // <th><input type='checkbox' name='CLISP' value='CLISP'></th>
    // <th><input type='checkbox' name='Prolog' value='Prolog'></th>
    // <th><input type='checkbox' name='Bash' value='Bash'></th>
    // <th><input type='checkbox' name='Matlab' value='Matlab'></th>


    // </tr>";

    // echo "</table><div class='give_permissions_button'><button type='submit' name='give_permisions'>Execute actions</button></div></form>";
 ?> -->
</h3>
</div>


</div>



<!-- Scripts -->

<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

<script>
function openTab(evt, Tab_name) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(Tab_name).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>

<script>
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
</script>

</body>

</html>


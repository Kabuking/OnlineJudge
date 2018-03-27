<html><head><style>
<?php
session_start(); 
?>
body{
	background-image: url("/images/bg2.jpg");
    background-repeat: no-repeat;
    background-position: right top;
    margin-left: auto;
    margin-right: auto;
    background-attachment: fixed;
	background-position: center;
}
#example1 {
    background-color:rgba(255, 255, 255, 0.66);
    background-repeat: no-repeat;
    padding:15px;
	margin: auto;
	text-align: right;
	font-family: monospace;
	padding-bottom: 10px;
	color: black;
}
h2{
	font-size:42px;
	text-align: left;
}
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
	background-color:rgba(255, 255, 255, 0.80);
	padding-bottom:20px;
}
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc; 
}

.panel {
    padding: 18px 18px;
    display: none;
    background-color: white;
    overflow: hidden;
}
.button {
	font-family: monospace;
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1 {
	font-family: monospace;
    background-color: #4CAF50; 
    color: white; 
}

.button1:hover {
	font-family: monospace;
    background-color: white;
    color: #4CAF50;
}
iframe {
    border: none;
    margin: 0;
    padding: 0;
    display:block;
}
</style>
</head>
<body>

<div id="example1">
Welcome <b>
<?php 
	echo $_SESSION['regno'];
	if($_SESSION["incorrect"]=="1"){
		$message = "Your output file did not satisfy all test cases. Consider revisions and try again.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	} 
?>
</b><br>
Happy coding!
<h2>Dashboard</h2>
</div>
<iframe src="rep.php"  width=100% height="110" style="display:block;border: none;background-color:rgba(0, 0, 0, 0.66);">
  <p>Your browser does not support iframes.</p>
</iframe>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Problem')"id="defaultOpen">Problem</button>
  <button class="tablinks" onclick="openCity(event, 'Submission')">Submission</button>
</div>

<div id="Problem" class="tabcontent">
  <h3>~Name of problem~</h3>
  <p>In case there are any problems, contact a coordinator</p>
  
  <div>
	<p>blah blahblahblahblahblahblahblahblahblah blahblahblahblahblahblahblahblahblah blahblahblahblahblahblahblahblahblah blahblahblahblahblahblahblahblahblah blahblahblahblahblahblahblahblahblah blahblahblahblahblahblahblahblahblah blah</p>
  </div>
<!--
  <button class="accordion">Question 2</button>
  <div class="panel">
	<p>blah blahblahblahblahblahblahblahblahblah blahblahblahblahblahblahblahblahblah blahblahblahblahblahblahblahblahblah blahblahblahblahblahblahblahblahblah blahblahblahblahblahblahblahblahblah blahblahblahblahblahblahblahblahblah blah</p>
  </div>

  <button class="accordion">Question 3</button>
  <div class="panel">
   <p>blah blahblahblahblahblahblahblahblahblah blahblahblahblahblahblahblahblahblah blahblahblahblahblahblahblahblahblah blahblahblahblahblahblahblahblahblah blahblahblahblahblahblahblahblahblah blahblahblahblahblahblahblahblahblah blah</p>
  </div>
-->
</div>

<div id="Submission" class="tabcontent">
  <h3>Submit your answers here</h3>
  
  <div>
	<form action="code_submission.php" method="post" enctype="multipart/form-data">
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit" name="submit" value="Submit" class="button button1">
	</form> 
  </div>

  
</div>

<div id="Rankings" class="tabcontent">
  <h3>Rankings</h3>
</div>


<script>

/*for tabs*/
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
/*end of tabs*/

/*for default tab*/
document.getElementById("defaultOpen").click();

/*begin accordion code*/
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
/*end of accordion*/
</script>
</body>
</html>
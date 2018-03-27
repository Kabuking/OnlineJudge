<!DOCTYPE html>
<html>
<head><style>
#example1 {
    background-color:rgba(0, 0, 0, 0.66);
    background-repeat: no-repeat;
    padding:15px;
	margin: auto;
	text-align: center;
	font-family: monospace;
	padding-bottom: 40px;
}
body {
    background-image: url("/images/bg2.jpg");
    background-repeat: no-repeat;
    background-position: right top;
    margin-left: auto;
    margin-right: auto;
    background-attachment: fixed;
	background-position: center;
	color: white;
}
.outer {
    display: table;
    position: absolute;
    height: 100%;
    width: 100%;
}

.middle {
    display: table-cell;
    vertical-align: middle;
}

.inner {
    margin-left: auto;
    margin-right: auto; 
    width: 400px; /*whatever width you want*/
}
h2 {
	font-family: monospace;
	font-size: 24px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 26.4px;
}
.foo
{
    padding: 10px 24px;
	font-family: monospace;
	font-size: 16px;
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
</style>
</head>
<body>
<div class="outer">
  <div class="middle">
    <div class="inner">
		<div id="example1">
			<h2>login</h2>
			<form action="redirect.php" method="post">
				<input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="foo" name="regno" value="registration number" onfocus="if (this.value=='registration number') this.value='';">
				<input type="submit" class="button button1" name="submit" value="submit">
			</form>
		</div>
	</div>
  </div>
</div>

</body>
</html>
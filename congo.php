<!DOCTYPE html>
<html>
<head><style>
#example1 {
    background-color:rgba(0, 0, 0, 0.88);
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
    width: 900px; /*whatever width you want*/
}
h2 {
	font-family: monospace;
	font-size: 24px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 26.4px;
}
</style>
</head>
<body>
<div class="outer">
  <div class="middle">
    <div class="inner">
		<div id="example1">
			<h2>Correct solution! Congratulations, you just won 2.5k bucks.<br>Try not to look too smug.</h2>
		</div>
	</div>
  </div>
</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>

<style>
* {
  box-sizing: border-box;
}

body{
    background-color: orange;
  }
.column {
  float: left;
  padding: 10px;
  height: 660px; 
}

.left {
  width: 25%;
 
}

.right {
  width: 75%;

}
#a2{
		width:100%;
		height:645px;
	}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.a1{
font-size:50px;

}
#a3{
  float:right;
}

</style>
</head>
<body>

<h1 id="a1" align="center">DIETS AND NUTRITIONS:- <div id="a3"><a href="routines.html">Go Back</a></div></h1>

<div class="row">
  <div class="column left" style="background-color:#aaa;">
    <h1 align="center">DAYS</h1>
	<br>
	<h2><a href="protein.html" target="iframe_1">Protein</a></h2>
	<h2><a href="creatine.html" target="iframe_1">Creatine</a></h2>
	<h2><a href="bcaa.html" target="iframe_1">BCAA</a></h2>
	<h2><a href="glutamine.html" target="iframe_1">Glutamine</a></h2>
	<h2><a href="gainer.html" target="iframe_1">Gainer</a></h2>
	
  </div>
  <div class="column right" >
    <iframe  align="right" id="a2" src="protein.html" name="iframe_1"></iframe>
  </div>
</div>

</body>
</html>

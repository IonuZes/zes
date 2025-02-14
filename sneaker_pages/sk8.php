<!DOCTYPE html>
<html>
<head>
	<title>2 Navbar CSS</title>
	<style type="text/css">
		body{
		  margin: 0;
		  padding: 0;
		}
		nav{
	  height: auto;
	  padding: 1em;
		}
		#nav1{
		  background-color: gray;
		}
		#nav2{
		  background-color: pink;
		}

		ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		}

		li {
		    float: left;
		}

		li a {
		    display: block;
		    color: black;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		}
	</style>
</head>
<body>
	<nav id="nav1">
	  <ul>
	    <li><a href="#">Menu 1</a></li>
	    <li><a href="#">Menu 2</a></li>
	    <li><a href="#">Menu 3</a></li>
	    <li><a href="#">Menu 4</a></li>
	    <li><a href="#">Menu 5</a></li>
	  </ul>
	</nav>
	<nav id="nav2">
	  <ul>
	    <li><a href="#">Menu 1</a></li>
	    <li><a href="#">Menu 2</a></li>
	    <li><a href="#">Menu 3</a></li>
	    <li><a href="#">Menu 4</a></li>
	    <li><a href="#">Menu 5</a></li>
	  </ul>
	</nav>
</body>
</html>
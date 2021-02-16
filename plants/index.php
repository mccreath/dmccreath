<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="slack-app-id" content="ADJ10B538" />
	<title>David McCreath</title>
	<meta name="viewport" content="width=device-width">
	<link href="http://fonts.googleapis.com/css?family=Crimson+Text:400,700|Roboto+Condensed:700,400" rel="stylesheet" type="text/css">
	<link href="/css/basic.css" rel="stylesheet" type="text/css">
	<style>
		#main {
			margin-top:10px;
			border-top-color:#f93;
		}
		header {
			overflow:hidden;
			padding: 0 0 10px 0;
		}
		header h1 {
			color:#999;
			font-size:1em;
			float:left;
		}
		header h2 {
			font-size:1em;
			float:right;
			color:#f93;
		}
		footer {
			clear:both;
		}
	</style>

	<script>
		function getElementsByClass(searchClass,node,tag) {
			var classElements = new Array();
			if ( node == null )
				node = document;
			if ( tag == null )
				tag = '*';
			var els = node.getElementsByTagName(tag);
			var elsLen = els.length;
			var pattern = new RegExp("(^|\\s)"+searchClass+"(\\s|$)");
			for (i = 0, j = 0; i < elsLen; i++) {
				if ( pattern.test(els[i].className) ) {
					classElements[j] = els[i];
					j++;
				}
			}
			return classElements;
		}

		function prepareToggles(){
			var t = getElementsByClass('toggle',document,'*');
				for ( var i=0; i < t.length; i++) {
				t[i].onclick = function() {
					showMe(this.hash.substr(1));
						return false;
				}
				}
		}

		function foldThemUp(){
			var arts = document.getElementsByTagName('article');
			for(a = 0; a < arts.length; a++){
				arts[a].style.display = 'none';
			}
		}
	
		function showMe(id){
			foldThemUp();
			var c = document.getElementById(id);
			if(c.style.display != 'block'){
				c.style.display = 'block';
			} else {
				c.style.display = 'none';
			}
		}
	
		function addLoadEvent(func) {
			var oldonload = window.onload;
			if(typeof window.onload != 'function') {
				window.onload = func;
			} else {
				window.onload = function() {
					oldonload();
					func();
				}
			}
		}

		addLoadEvent(foldThemUp);
		addLoadEvent(prepareToggles);
	</script>
</head>
<body id="plants">

<div id="main">


<?php include '../includes/site-header.php'; ?>

<h3>Organic Minimalism</h3>

<img src="images/i.jpg" style="display:block;width:500px;height:500px;"/>

<?php include '../includes/site-footer.php'; ?>

<div><!--/#main-->
<script>
//   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
//   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
//   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
//   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
// 
//   ga('create', 'UA-73791-1', 'auto');
//   ga('send', 'pageview');

</script>

</body>
</html>
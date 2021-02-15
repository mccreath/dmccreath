<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="slack-app-id" content="ADJ10B538" />
	<title>David McCreath</title>
	<meta name="viewport" content="width=device-width">
	<link href="http://fonts.googleapis.com/css?family=Crimson+Text:400,700|Roboto+Condensed:700,400" rel="stylesheet" type="text/css">
	<link href="css/basic.css" rel="stylesheet" type="text/css">
	<style>
		#home #main #overview {
			position:relative;
		}
		#home #main section{
			border-bottom:0;
			margin: 0 0 0 0;
			padding: 0 0 0 0;
		}
		#home #main section h3 {
			border-bottom:1px solid #ff0000;
			margin: 0 0 15px 0;
			padding: 0 0 15px 0;
			width: 30%;
			float:right;
			clear: both;
		}
		#home #main section article {
			width: 60%;
			float: left;
			position: absolute;
			top: 0;
			left:0;
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
<body id="home">

<div id="main">


<?php include 'includes/site-header.php'; ?>

<div id="overview">

<section>

	<h3><a href="#approach" class="toggle navigation">About <span>me</span></a></h3>

	<article id="approach">

		<p>I’ve been working on the web since 1993. I still love the web and still try to make it a better place to work and play.</p>
		
		<p>I currently work at <a href="http://slack.com/">Slack</a> as a partner engineer, which means I help companies get their Slack apps built and listed in our App Directory. I work with an incredibly talented crew of people on a product that is pretty dang good.</p>

		<!-- p>I’m a big proponent of responsive design, and while I believe there is genuine value in a mobile-first approach, I don’t think it’s the only way to do things. I try to minimize the number of breakpoints required for a any given design. Generally, if your design is complex enough that you need more than one or two breakpoints, you should probably reassess the design.</p>

		<p>I believe in using the most up-to-date practices possible, to the extent that they are supported. Progressive enhancement is one of the most powerful tools we have for building high-performance, accessible web sites. </p>

		<p>Frameworks certainly have their place, but never dismiss the value of knowing how to code a stripped down codebase specific to the site being built. JavaScript libraries are useful, but if one is being used for a couple of simple functions, knowing how to ditch it for vanilla JavaScript is immensely valuable.</p>

		<p>I think one of the most exciting changes that came with HTML5 was the ability to wrap block elements in anchor tags.</p -->

	</article>

</section>

<!-- section>

	<h2><a href="#workhistory" class="toggle">My Work History</a></h2>

	<article id="workhistory">

		<h3>2006–Present Lead Developer, Mule Design Studio</h3>

		<p>As the lead developer, my role in the design process starts during business development, when I talk with potential clients about our technical approach, coding practices, and documentation process. If there is an implementation team, I'll talk with them about how we'll work together. Once the job is in house, we have a discovery process and I'll get a little further to the technical requirements and available resources and make a recommendation for a CMS and other tools. I will also review their site analytics and figure out if they have any weak spots or unmet potential for engaging with their audience.</p>

		<p>During IA and visual design, I serve as both sounding board and reality check. My goal is to not hamper any big ideas, but to figure how we can build them. However, if I believe a design decision is bad for the user or will create more work than it's worth, I will raise a flag and we'll talk through it. With the advent of responsive design, we started designing in code more, and we started prototyping during IA so that everyone on the team has a better sense of what will work and what won't.</p>

		<p>When we get to the build stage, I set up a Git repository (we use Beanstalk for our Git hosting) and an issue tracker (we use Lighthouse) and start coding up the design. As soon as we have something they can work with, we give the implementation team pull access to the repo and give them access to the issue tracker. We have regular code reviews with the implementation team and continue to review design decisions with the client as the code takes shape.</p>

		<p>If we are doing the final implementation (like a WordPress build), that happens in conjunction with the coding of the example pages.</p>

		<p>At the end of the process, we gather the documentation that was written during the process: the design system, content strategy recommendations, and guiding principles. We wrap all of these up in a static HTML site that we call an Owner's Manual which the client then makes available on server for their staff to reference. </p>

		<p>If we are not doing the implementation, we make ourselves available to the implementation team for troubleshooting and bug fixing.</p>

		<h3>1999-2006 Webmaster, Programmer Analyst; Anchorage School District; Anchorage, Alaska</h3>

		<p>
		I was initially hired by the PR department to take over a nascent and barely managed public website. My first year was primarily occupied with upgrading the server setup (from a PowerPC Mac to a Blue &amp; White G3, and moving from MacHTTP to WebStar) and redesigning the entire site to provide a consistent look and feel. During that time I also built two applications using FileMaker; one was a searchable employee index, the second was a job postings page that the HR department could update with CSV files. As time allowed, I began running workshops for District staff, especially teachers, teaching the fundamentals of building web pages (starting with straight HTML in text editors).
		</p>

		<p>
		At the start of the second year, my position was moved to the IT department and I began working with their sole web developer to plan the integration of the public web site with the slowly growing intranet. We standardized on Windows and began the process of migrating my existing site from FileMaker to ASP/SQL Server. I stayed there for four and a half years, eventually managing a group of three other web developers and building several applications, including a homework/classroom CMS for the teachers, improving the job posting application, a grant application process, and other smaller projects.
		</p>

		<h3>1996-1999 Freelance Designer and Web Developer; Austin, Texas</h3>

		<p>Mostly advertising and promotional projects for small companies around Austin, Texas.</p>

		<h3>1994-1996 Design Director, Monsterbit Media; Austin, Texas</h3>

		<p>Monsterbit was small web design shop started by a friend. In addition to building sites for small businesses, we ran monsterbit.com, where we built sites for musicians and labels, as well as working on ways to live stream concerts.</p>

		<p>A reasonably complete version of monsterbit.com is still viewable at the <a href="https://web.archive.org/web/19961221005227/http://monsterbit.com/">Internet Archive</a>.</p>

		<h3>1993-1994 Designer, Go Media; Austin Texas</h3>

		<p>Hired as a print designer, became fascinated with the web. Prior to the release of Netscape 1.0, built the first web site for Whole Foods Market. Left to help a friend start a new web-only company.</p>

	</article>

</section --><!--/#workhistory-->

<section>

	<h3><a href="#band" class="toggle navigation">My band, <span>The Development</span></a></h3>

	<article id="band">

		<p>The Development consists of my bandmate Ryan Carver and me. I play guitar and sing, using a looper to set up and control the bass line and Ryan plays drums. We write the songs together. The bass line is re-looped every time we play the song. Its creation is used as a structural part of the song. We’re interested in just how much we can do with this minimal set up.</p>

		<p>We have some <a href="https://thedevelopment.bandcamp.com/releases">demos up on Bandcamp</a>.</p>

		<!--<div id="demos">
			<iframe src="http://bandcamp.com/EmbeddedPlayer/album=85731013/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/artwork=small/transparent=true/" seamless><a href="http://thedevelopment.bandcamp.com/album/tiny-telephone-demos">Tiny Telephone Demos by The Development</a></iframe>
		</div>-->

	</article>

</section><!--/#band-->

<section>

	<h3><a href="#imgp" class="toggle navigation">My show, <span>It Might Get Personal</span></a></h3>

	<article id="imgp">
	
		<p><em>It Might Get Personal is currently on hiatus.</em></p>

		<p>It Might Get Personal started life as podcast in 2012; to date fifty-two episodes have been posted. The motto of the show is <strong><em>Be Brave, Have Fun</em></strong>, and the premise of the show is to everyone can sing. Everyone. Every episode, a guest comes on and sings a song that means something special to them, then we have a short chat about the song and whatever else comes up.</p>

		<p>The first thirteen episodes in a small room at my office, with Seven Morris handling the video and audio recording, as well as doing audio engineering post-recording. Upon finishing episode 12, Seven’s attention was required elsewhere, so after taking a short break and rethinking some things, I moved the recording to a San Francisco recording studio, the <a href="http://womensaudiomission.org">Women’s Audio Mission</a>, with <a href="http://ledrecording.com">Laura Dean</a> engineering. Since this is likely to be the first and possibly only time the guest will be recorded singing, I want to make sure it's the best recording we can get.</p>

		<p>In November of 2013, I gave a talk at Creative Mornings in San Francisco about the podcast. <a href="http://www.itmightgetpersonal.com/episodes/25/">Here’s the video of that talk</a>.</p> 

		<p><a href="http://www.itmightgetpersonal.com/episodes/">And here’s a list of all the episodes</a>.</p>

	</article>

</section><!--/#imgp-->

<section>

	<h3><a href="/taxanomie/" class="navigation"><span>taxanomie</span>, a collection of small collages &rarr;</a></h3>

</section>
<section>

	<h3><a href="/music/" class="navigation">a brief sampling of <span>my musical history</span> &rarr;</a></h3>
	
</section>

</div> <!-- #overview -->

<?php include 'includes/site-footer.php'; ?>

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

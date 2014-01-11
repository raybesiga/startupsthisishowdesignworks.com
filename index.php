<?php
// Global Variables
$pageURL = "http://startupsthisishowdesignworks.com/";
$pageTitle = "Startups, This Is How Design Works";
$twPageDescription = "A guide to understanding digital %26 physical product design for startups";
$pageDescription = "A guide to understanding digital & physical product design for startups";
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $pageTitle; ?> – by Wells Riley</title>
	<meta property="og:description" name="description" content="<?php echo $pageDescription; ?>">
	<meta name="author" content="Wells Riley">
	<meta property="og:title" content="<?php echo $pageTitle; ?>" />
	<meta property="og:url" content="<?php echo $pageURL ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php echo $pageURL ?>/fb-icon.png" />
	<meta property="fb:admins" content="1082730090" />
	<meta property="fb:app_id" content="334362973268161" />
	<meta name="viewport" content="width=device-width">
	<link rel="apple-touch-icon-precomposed" href="./touch-icon-iphone4.png" />
	<link href="./favicon.ico" rel="shortcut icon">
	<link href="http://fonts.googleapis.com/css?family=Raleway:100|Crimson+Text:400,400italic,600,600italic" target="_blank" rel="stylesheet" type="text/css">
	<link href="./css/jquery.qtip.min.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="./css/style.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="globalWrapper">

	<div id="tableOfContents">
		<h2><a id="toc" href="#">Table of Contents</a></h2>
		<div class="sectionsWrapper closed">
		<dl class="sections">
			<dt><a class="subsection" href="#">1. Definitions</a></dt>
				<div class="subsectionContent">
					<dd><a href="#sec11" data-offset="70">1.1. What is design?</a></dd>
					<dd><a href="#sec12" data-offset="70">1.2. What is good design?</a></dd>
					<dd><a href="#sec13" data-offset="70">1.3. Ten principles of good design</a></dd>
					<dd><a href="#sec14" data-offset="90">1.4. An example</a></dd>
					<dd><a href="#sec15" data-offset="90">1.5. Video: <i>Objectified</i> trailer</a></dd>
					<dd><a href="#sec16" data-offset="90">1.6. Is your product well-designed?</a></dd>
				</div>
			<dt><a class="subsection" href="#">2. Different kinds of design</a></dt>
				<div class="subsectionContent">
					<dd><a href="#sec21" data-offset="80">2.1. Graphic Design</a></dd>
					<dd><a href="#sec22" data-offset="80">2.2. Interaction Design</a></dd>
					<dd><a href="#sec23" data-offset="90">2.3. Industrial Design</a></dd>
				</div>
			<dt><a class="subsection" href="#">3. Data: what does the industry think?</a></dt>
				<div class="subsectionContent">
					<dd><a href="#sec31" data-offset="90">3.1. What qualities of design do startups <br />consider most important?</a></dd>
					<dd><a href="#sec32" data-offset="90">3.2. How important is product design?</a></dd>
					<dd><a href="#sec33" data-offset="90">3.3. How deep does design go?</a></dd>
				</div>
			<dt><a class="subsection" href="#">4. Designer Founders: the missing link</a></dt>
				<div class="subsectionContent">
					<dd><a href="#sec41" data-offset="90">4.1. Startups + designers = ?</a></dd>
					<dd><a href="#sec42" data-offset="90">4.2. Meet the Designer Founders</a></dd>
					<dd><a href="#sec48" data-offset="50">4.8. Changing the world</a></dd>
				</div>
			<dt><a class="subsection" href="#">5. Finding great talent</a></dt>
				<div class="subsectionContent">
					<dd><a href="#sec51" data-offset="250">5.1. Okay, I need a designer.</a></dd>
					<dd><a href="#sec52" data-offset="250">5.2. Go Where the designers are</a></dd>
					<dd><a href="#sec53" data-offset="100">5.3. A note about Unicorns by Sacha Greif</a></dd>
					<dd><a href="#sec54" data-offset="220">5.4. Resources</a></dd>
				</div>
			<dt><a class="subsection" href="#">About me & Acknowledgements</a></dt>
				<div class="subsectionContent">
					<dd><a href="#section6" data-offset="70">6.&nbsp;&nbsp;&nbsp;About me</a></dd>
					<dd><a href="#section7" data-offset="90">7.&nbsp;&nbsp;&nbsp;Acknowledgements</a></dd>
				</div>
		</dl><!-- / sections -->
		</div><!-- / sectionsWrapper -->
	</div><!-- / tableOfContents -->

	<ul class="socialShareSmall">
				<?php
				function customFShare($url) {
				    $like_results = file_get_contents('http://graph.facebook.com/'.$url);
				    $like_array = json_decode($like_results, true);
				    /* $like_count =  $like_array['shares']; */
				    $like_count = 54329;
				    return ($like_count ) ? $like_count : "0";
				}
				function tweets($url){
				  $tweets = 18406;

				  echo $tweets;
				}
				?>
			<li>
				<a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo "$pageURL"; ?>" target="_blank" class="shareFb" onclick="return popitup('http://www.facebook.com/sharer/sharer.php?u=<?php echo "$pageURL"; ?>')">Share (f)</a>
			</li>
			<li class="shareCount"><?php echo customFShare( $pageURL ); ?></li>

			<li style="margin-left:30px;" >
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://startupsthisishowdesignworks.com/" data-via="wr">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				<?php /*<a href="http://twitter.com/intent/tweet?url=<?php echo $pageURL; ?>&text=<?php echo $pageTitle.": ".$pageDescription; ?>%20@wr&related=wr" target="_blank" class="shareTw">Share (t)</a>
			</li>
			<li class="shareCount"><?php tweets( $pageURL ); ?> */ ?></li>
		</ul><!-- / socialShareSmall -->

	<br class="clear" />

	<header>
		<h1>Startups, this is how design works.</h1>
		<div id="author">A guide for non-designers by <a href="http://wells.ee" target="_blank">Wells Riley</a>.
			<br /><span style="opacity:0.25;line-height:20px;">Format inspired by <a href="http://jessicahische.is" target="_blank">Jessica Hische</a>.</span></div>
		<br class="clear" />
	</header>

	<div id="section1">
		<p class="text col4">Companies like Apple are making design impossible for startups to ignore. Startups like <a href="http://path.com" target="blank">Path</a>, <a href="http://airbnb.com" target="_blank">Airbnb</a>, <a href="http://squareup.com" target="_blank">Square</a>, and <a href="http://massivehealth.com" target="_blank">Massive Health</a> have design at the core of their business, and they're doing phenomenal work. But what is ‘design’ actually? Is it a logo? A Wordpress theme? An innovative <a href="./tooltips.php?q=ui" rel="./tooltips.php?q=ui" class="tip">UI</a>? <span id="tooltipNote"></span></p>
		<p class="text col4">It’s so much more than that. It’s a state of mind. It’s an approach to a problem. It’s how you’re going to kick your competitor’s ass. This handy guide will help you understand design and provide resources to help you find awesome design talent.</p>

		<br class="clear" />

		<div class="col1 colL largeSpace">
			<div class="section right" id="sec11">1.1</div>
		</div>
		<div class="col2 largeSpace">
			<h2>De•sign <span class="phonetic">[dəzajn]</span> is a <br />method of problem solving.</h2>
			<p class="subText">The simplest definition. Design is so many things, executed in many different ways, but the function is always the same. Whether it’s blueprints, a clever UI, a brochure, or a chair – design can help solve a visual or physical problem. <sup><a id="ref-1" href="#cite-1">1</a></sup></p>
		</div><!-- / What is Design? -->

		<div class="col1 largeSpace">
			<div class="section right" id="sec12">1.2</div>
		</div>
		<div class="col2 colR largeSpace">
			<h2>So what is <br /><span style="margin-left:-0.3em;">“good design”?</span></h2>
			<p class="subText">This definition is not so simple. The best designs are notorious for seeming not designed at all – or <a href="./tooltips.php?q=undesigned" rel="./tooltips.php?q=undesigned" class="tip">‘undesigned’</a>.</p>
			<p class="subText">It’s easier if we break things down a bit. If you know what to look for, it’s easier to identify good design when you see it; or perhaps <b>when you can’t see it at all.</b></p>
		</div><!-- / What is Good Design? -->

		<br class="clear" />

		<div class="col2 colL">
			<div id="dieterRamsPhoto"></div>
			<div class="section right" id="sec13">1.3</div>
		</div>
		<div class="col4 colR">
			<h2>Dieter Rams’ Ten Principles of&nbsp;&nbsp;“Good Design”<br />
				<span class="phonetic">(Wow, how convenient is that?)</span></h2>
			<p class="subText col3 noPadding"><strong><em>Dieter Rams</em></strong> is a German <a href="./tooltips.php?q=industrialdesigner" rel="./tooltips.php?q=industrialdesigner" class="tip">industrial designer</a> closely associated with the consumer products company Braun and functionalist industrial design.</p>
			<p class="subText col3 noPadding">According to <a href="http://www.vitsoe.com/en/gb/about/dieterrams/gooddesign" target="_blank">Vitsœ</a>: Back in the early 1980s, aware that his design was a significant contributor to the world, he asked himself an important question:
				<br /><em>"Is my design good design?"</em>
			<p class="subText col3 noPadding">Since good design can't be measured in a finite way, he set about expressing the ten most important principles for what he considered was good design. (Sometimes they are referred as the ‘Ten commandments’.) Here they are. <sup><a id="ref-3" href="#cite-3">3</a></sup></p>
		</div><!-- / Dieter Rams' Principles -->

		<br class="clear" />

		<div class="colL col2"></div>
		<div class="col2"><h3 style="margin-top:10px;margin-bottom:-10px;">Good design is…</h3></div>

		<br class="clear" />

		<div class="col1 colL"></div>

			<ul class="principles col5 colR">
				<li class="colL"><h3><a id="dr1" href="./dieterrams.php?q=innovative" rel="./dieterrams.php?q=innovative">innovative</a></h3></li>
				<li><h3><a id="dr2" href="./dieterrams.php?q=useful" rel="./dieterrams.php?q=useful">makes a product useful</a></h3></li>
				<li><h3><a id="dr3" href="./dieterrams.php?q=aesthetic" rel="./dieterrams.php?q=aesthetic">aesthetic</a></h3></li>
				<li><h3><a id="dr4" href="./dieterrams.php?q=understandable" rel="./dieterrams.php?q=understandable">makes a product understandable</a></h3></li>
				<li class="colR"><h3><a id="dr5" href="./dieterrams.php?q=unobtrusive" rel="./dieterrams.php?q=unobtrusive">unobtrusive</a></h3></li>

				<br class="clear" />

				<li class="colL"><h3><a id="dr6" href="./dieterrams.php?q=honest" rel="./dieterrams.php?q=honest">honest</a></h3></li>
				<li><h3><a id="dr7" href="./dieterrams.php?q=longlasting" rel="./dieterrams.php?q=longlasting">long-lasting</a></h3></li>
				<li><h3><a id="dr8" href="./dieterrams.php?q=thorough" rel="./dieterrams.php?q=thorough">thorough</a></h3></li>
				<li><h3><a id="dr9" href="./dieterrams.php?q=environmental" rel="./dieterrams.php?q=environmental">environmentally friendly</a></h3></li>
				<li class="colR"><h3><a id="dr10" href="./dieterrams.php?q=littledesign" rel="./dieterrams.php?q=littledesign">as little design<br />as possible</a></h3></li>
			</ul><!-- / 10 Principles of Design -->

		<br class="clear" />

		<div id="braunApple">
			<div class="col2 colL">
			<sub><a id="ref-4" style="color:#ddd;" href="#cite-4" style="color:#ddd;">4</a></sub>
			<div class="slideshow">
				<img src="./img/braunapple_1@2x.jpg" width="320px" height="225px" />
				<img src="./img/braunapple_2@2x.jpg" width="320px" height="225px" />
				<img src="./img/braunapple_3@2x.jpg" width="320px" height="225px" />
				<img src="./img/braunapple_4@2x.jpg" width="320px" height="225px" />
				<img src="./img/braunapple_5@2x.jpg" width="320px" height="225px" />
				<img src="./img/braunapple_6@2x.jpg" width="320px" height="225px" />
				<img src="./img/braunapple_7@2x.jpg" width="320px" height="225px" />
			</div>
			</div>
			<div class="col1"></div>
			<div class="col3 colR">
				<blockquote class="oversize" style="margin-top:45px;">&ldquo;We designers, <a href="./tooltips.php?q=vacuum" rel="./tooltips.php?q=vacuum" class="tip">we don’t work in a vacuum</a>. We need business people.  We are not the fine artists we are often confused with. Today you find few companies that take design seriously, as I see it.&rdquo;</p>
				<p class="text"><em>&#8212; Dieter Rams</em></blockquote>
			</div>

			<br class="clear" />

		</div>

		<div id="sec1SummaryWrapper">
			<div id="sec1Summary">
			<div class="col1 colL">
				<div class="section right" id="sec14">1.4</div>
			</div>
			<div class="col3">
				<p class="text">Good design can’t be achieved with glossy buttons or masterful <a href="./tooltips.php?q=wireframes" rel="./tooltips.php?q=wireframes" class="tip">wireframes</a> alone. It’s a merger of all  these principles into something that is meaningful and deliberate.</p>
				<p class="text">Just like a great business plan is nothing without expert execution, a great Photoshop mockup is nothing, for example, without careful consideration to UI or the user’s needs.</p>
			</div>
				<div class="col2 colR" id="paintCan">
					<p class="caption col1 colR">“Fill Can” icon <br />&copy;1983 <a href="http://www.kareprints.com/" target="_blank">Susan Kare</a></p>
				</div>
			</div>
		</div><!-- / sec1SummaryWrapper -->

		<br class="clear" />

		<div class="section" id="sec15">1.5</div>

		<br class="clear" />

		<div class="col1 colL">
			<h3>Objectified</h3>
				<p class="subText">A documentary film that provides a look at the creativity behind everything from toothbrushes to <br />tech gadgets. <sup><a id="ref-15" href="#cite-15">15</a></sup></p>
		</div>
		<iframe id="objVideo" class="col5 colR" src="http://player.vimeo.com/video/12793996?portrait=0&title=0&byline=0&color=ffffff" width="830" height="467" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>

		<br class="clear" />

		<div class="col2 colL" style="margin-top:20px;">
			<div class="section right" id="sec16">1.6</div>
			<div id="ramsProducts" class="slideshow">
				<img src="./img/ramsSpeaker@2x.jpg" width="280px" height="278px" />
				<img src="./img/ramsChair@2x.jpg" width="280px" height="278px" />
				<img src="./img/ramsRadio@2x.jpg" width="280px" height="278px" />
				<img src="./img/ramsClock@2x.jpg" width="280px" height="278px" />
				<img src="./img/ramsRazor@2x.jpg" width="280px" height="278px" />
				<img src="./img/ramsLighter@2x.jpg" width="280px" height="278px" />
			</div>
			<p class="caption" style="padding:290px 60px 0 0">Various Braun and Vitsoe Products<br />&copy;1955-2012 <a href="http://www.braun-time.com/" target="_blank">Braun</a> &amp; <a href="http://vitsoe.com" target="_blank">Vitsoe</a></p>
		</div>
		<div class="col3">
				<p class="text">Take a look at your current product – is design contributing in an innovative way? Does it make the product useful, understandable, and aesthetic? Is it long-lasting, or will it look outdated or break in a few years?</p>
				<p class="text">These are really hard questions to answer. Designers enable you to work within these constraints to create a product customers will fall in love with. <em>Love is a really strong emotion</em>.</p>
				<p class="text">Dieter Rams and his <a href="./tooltips.php?q=contemporaries" rel="./tooltips.php?q=contemporaries" class="tip">contemporaries</a>  started a movement in 20<sup>th</sup> Century towards simple and beautiful products. Design was a strongly valued aspect of business, even 60 years ago. It totally has a place in business today – it’s a proven method.</p>
		</div><!-- / Section 1 wrap-up -->

		<br class="clear" />

	</div><!-- / section1 -->
</div><!-- / globalWrapper -->

<div id="section2">
	<div class="globalWrapper">
		<h2>There are different kinds of design.</h2>

		<div class="col2 colL">
			<div class="section right" id="sec21">2.1</div>
			<div id="designPoster"></div>
			<p class="caption">Poster for Bob Dylan's Greatest Hits <br />&copy;1975 <a href="http://www.miltonglaser.com/the-work/444/columbia-records-poster-for-bob-dylans-greatest-hits-1975/" target="_blank">Milton Glaser</a></p>
		</div>
		<div class="col3">
				<h3>Graphic Design</h3>
				<p class="text">This is a term that describes an array of different kinds of designers. Think of it like the term “entrepreneur”. It describes a wide variety of businesspeople - from founders to VC's to <a href="./tooltips.php?q=ninjas" rel="./tooltips.php?q=ninjas" class="tip">“Chief Ninjas”</a> - but isn’t all-inclusive. Graphic designers work with graphical images, whether they be illustrations, <a href="./tooltips.php?q=typography" rel="./tooltips.php?q=typography" class="tip">typography</a>, or images, and on a variety of media including print and web. Graphic design is typically rendered in 2D – printed on a physical surface or displayed on a screen.</p>
		</div><!-- / Graphic Design -->

		<br class="clear" />

		<div class="col3 colL"></div>
		<div class="col2" style="margin:-300px 0 150px;">
				<h4>↳ Print Design</h4>
				<p class="text">A type of graphic designer that works exclusively with print media. Before the widespread adoption of computers, software, and the web, virtually all graphic designers worked on print media such as posters, magazines, billboards, and books. Print designers are typically masters of typography, illustration, and traditional printing processes like the <a href="./tooltips.php?q=linotype" rel="./tooltips.php?q=linotype" class="tip">Linotype machine</a> or the <a href="./tooltips.php?q=letterpress" rel="./tooltips.php?q=letterpress" class="tip">letterpress machine</a>, a 500-year-old printing method that has regained popularity in recent years for its handmade and traditional feel.</p>
		</div><!-- / Print Design -->

		<br class="clear" />

		<div class="col1 colL">
			<div class="section right" id="sec22">2.2</div>
		</div>

		<div class="col3">
				<h3>Interaction Design</h3>
				<br class="clear" />
				<p class="text">Interaction designers, on the other hand, focus on digital products and interactive software design. Some examples include web apps like <a href="http://facebook.com" target="_blank">Facebook</a> and <a href="http://pinterest.com" target="_blank">Pinterest</a>, mobile apps like <a href="http://tapbots.com" target="_blank">Tweetbot</a>, and operating systems like OS X. While graphic design is meant to be observed, interaction design helps humans experience or manipulate software or interface with screen-based hardware in order to <em>achieve specific goals</em> – checking email, <a href="./tooltips.php?q=atm" rel="./tooltips.php?q=atm" class="tip">withdrawing money from an ATM</a>, or "Liking" a webpage (such as this one!)</p>
				<p class="text"><em>"Interaction design is heavily focused on satisfying the needs and desires <br />of the people who will use the product."</em> <sup><a id="ref-5" href="#cite-5">5</a></sup></p>
		</div><!-- / Interaction Design -->
		<div class="col2 colR">
			<div id="ixdGraphic"></div>
			<p class="caption"style="margin-bottom:80px;">Framework by Bill Verplank <br />&copy;2000 <a href="http://www.billverplank.com/IxDSketchBook.pdf" target="_blank">Bill Verplank</a></p>
		</div>

		<br class="clear" />

		<div class="col2 colL">
			<div id="uxDesign"></div>
			<p class="caption"style="margin-right:30px;padding-top:10px;">ConvertBot and Weightbot UI <br />&copy;2008-2012 <a href="http://tapbots.com" target="_blank">Tapbots, LLC</a></p>
		</div>
		<div class="col2">
			<h4>↳ User Interface Design</h4>
			<p class="text">User Interface (UI) design is the design of software or websites with the focus on the user's experience and interaction. <em>The goal of user interface design is to make the user's interaction as simple and efficient as possible</em>. Good user interface design puts emphasis on goals and completing tasks, and good UI design  never <a href="./tooltips.php?q=skeuomorphism" rel="./tooltips.php?q=skeuomorphism" class="tip">draws more attention to itself</a> than enforcing user goals.</p>
			<p class="text">"The design process must balance technical functionality and visual elements to create a system that is not only operational but also <em>usable and <a href="./tooltips.php?q=interfaces" rel="./tooltips.php?q=interfaces" class="tip">adaptable</a> to changing user needs</em>." <sup><a id="ref-7" href="#cite-7">7</a></sup></p>

		</div><!-- / Interface Design -->

		<div class="col2 colR">
			<h4>↳ User Experience Design</h4>
			<p class="text">User Experience (UX) design "incorporates aspects of <em>psychology, anthropology, sociology, computer science, graphic design, industrial design and cognitive science</em>. Depending on the purpose of the product, UX may also involve content design disciplines such as communication design, instructional design, or game design." <sup><a id="ref-8" href="#cite-8">8</a></sup></p>
			<p class="text">The goal of UX design is to create a seamless, simple, and useful interaction between a user and a product, whether it be hardware or software. As with UI design, user experience design focuses on creating interactions <em>designed to meet or assist a user's goals and needs</em>.</p>
		</div><!-- / User Experience Design -->

		<br class="clear" />

		<div class="col2" style="text-align:center;margin-top:140px;">
			<div class="section right" id="sec23">2.3</div>
			<div id="industrialDesign"></div>
			<p class="caption"style="margin-right:50px;padding-top:10px;">Panton Stacking Chair <br />&copy;1967 <a href="http://www.vitra.com/en-us/home/products/panton-chair-classic/overview/" target="_blank">Verner Panton</a></p>

		</div>
		<div class="col2" style="margin-top:140px;" >
				<h3>Industrial Design</h3>
				<br class="clear" />
				<p class="text">Industrial designers create physical products designated for mass-consumption by <em>millions of people.</em> Motorcycles, iPods, toothbrushes, and nightstands are all designed by industrial designers. These people are masters of physical goods and innovation within the constraints of production lines and machines.</p>
				<p class="text">"The objective is to study both function and form, and the connection between product, the user, and the environment." <sup><a id="ref-9" href="#cite-9">9</a></sup></p>
		</div><!-- / Industrial Design -->

		<br class="clear" />

	</div><!-- / globalWrapper -->
</div><!-- / section2 -->

<div id="sec3top"></div>
<div id="section3">
	<div class="globalWrapper">

		<div class="col6 colL colR">
			<h2>Data: what does the industry think?</h2>
		</div>

		<br class="clear" />

		<div class="col1 colL">
			<div class="section right" id="sec31">3.1</div>
		</div>
		<div class="col5 colR">
			<h3>What qualities of design do startups consider most important?</h3>
		</div>

		<br class="clear" />

		<div class="col1 colL">&nbsp</div>
		<div class="col4">
			<p class="text">I asked 78 CEOs, marketers, engineers, and designers about their opinions and definitions of design. Before I could come up with anything for this project, I had to check my assumptions at the door and get some legit data. <em>It seems that entrepreneurs / engineers and designers are thinking about the same things.</em></p>
		</div>

		<br class="clear" />

		<div id="row1_biz" class="col2 colL chart"></div>
		<div id="row1_dez" class="col2 chart"></div>
		<div id="row1_ramz" class="col2 colR chart"></div>

		<br class="clear" />

		<div class="col1 colL">
			<div class="section right" id="sec32">3.2</div>
		</div>
		<div class="col5 colR">
			<h3>How important is product design?</h3>
		</div>

		<br class="clear" />

		<div class="col1 colL"></div>
		<div class="col4">
			<p class="text">Product design includes both digital and physical products. It represents not only the aesthetic qualities, but <em>what it does, how well a user thinks it's going to do it, and how easily & quickly they can complete a task.</em></p>
			<p class="text">Think for a moment. How important is product design to <em>you?</em> How important do you think aesthetics and ease-of-use are to <em>your</em> customers?</p>
		</div>

		<br class="clear" />

		<div id="row2_biz" class="col3 colL chart"></div>
		<div id="row2_users" class="col3 colR chart"></div>

		<br class="clear" />

		<div class="col1 colL">
			<div class="section right" id="sec33">3.3</div>
		</div>
		<div class="col5 colR">
			<h3>How deep does design go?</h3>
		</div>

		<br class="clear" />

		<div class="col1 colL"></div>
		<div class="col4">
			<p class="text">Now we're getting somewhere. Great design is taking root in startup culture, and it seems like many people are open to change. Not only do many entrepreneurs, devs, and engineers see substantial room to improve their own products, <em>they overwhelmingly believe that designers belong on a founding team.</em></p>
		</div>

		<br class="clear" />


		<div id="row3_gdez" class="col3 colL chart"></div>
		<div id="row3_founders" class="col3 colR chart"></div>

		<br class="clear" />


	</div><!-- / globalWrapper -->
</div><!-- / section3 -->
<div id="sec3bottom"></div>

<div id="section4">
	<div class="globalWrapper">

		<div class="col6 colL colR">
			<h2>Designer Founders: the missing link</h2>
		</div>

		<br class="clear" />

		<div class="col1 colL">
			<div class="section right" id="sec41">4.1</div>
		</div>

		<div class="col4">
			<h3>Startups + designers = ?</h3>
			<p class="text">For a long time, a pair of co-founders consisted of an executive and an engineer. <b>It worked for Facebook, Microsoft, and <a href="./tooltips.php?q=apple" rel="./tooltips.php?q=apple" class="tip">Apple</a></b>, just to name a few. These companies have excellent designers today, <em>because it’s a necessity they can’t afford to ignore</em>. It seems like design is becoming more and more prevalent in new startups as well – <a href="http://squareup.com" target="_blank">Square</a>, <a href="http://path.com" target="_blank">Path</a>, <a href="http://airbnb.com" target="_blank">Airbnb</a>, and more are pushing the envelope.</p>
			<p><em>Design is becoming a key differentiator</em> for companies to acquire funding, press coverage, <br />and loyal users.</p>

			<h3 style="margin-top:40px;color:#ed1c24;">I think it’s time to shake things up a bit.
			<br />Let’s add designers into the mix.</h3>
		</div><!-- / section 4 intro -->

		<br class="clear" />

		<!-- Link thing -->
		<div id="triforce">
			<div id="triforceDrag">
				<p id="dragText">Drag &raquo;</p>
			</div>
			<div id="triforceDrop">
				<div id="triforceDropz"></div>
				<div style="float:left;margin:-185px 0 0 60px;">Business Peeps</div>
				<div style="float:left;margin:20px 0 0 0;">Designers</div>
				<div style="float:right;margin:20px 0 0 65px;">Engineers</div>
			</div>
		</div>

		<br class="clear" />

		<div class="col1 colL">
			<div class="section right" id="sec42">4.2</div>
		</div>

		<div class="col4">
			<h3>Meet the Designer Founders</h3>
			<p class="text">According to <a href="http://designerfund.com" target="_blank">The Designer Fund</a>, startups with designer founders are generating <em>billions of dollars in growth</em>. <sup><a id="ref-16" href="#cite-16">16</a></sup> Below are profiles on five of the most influential designer founders and their incredibly hot startups.</p>
		</div>

		<br class="clear" />

	<div id="totalWrapper">
		<div id="scroll">
			<ul class="navi" id="designerFounders">
				<li class="df_JoeGebbia active"><a href="javascript:void(0)" id="t1"><p>Joe Gebbia</p><p>Airbnb</p></a></li>
				<li class="df_AlexaAndrzejewski"><a href="javascript:void(0)" id="t2"><p>Alexa Andrzejewski</p><p>Foodspotting</p></a></li>
				<li class="df_JessicaHische"><a href="javascript:void(0)" id="t3"><p>Jessica Hische</p><p>Freelance Illustrator</p></a></li>
				<li class="df_MikeMatas"><a href="javascript:void(0)" id="t4"><p>Mike Matas</p><p>Push Pop Press</p></a></li>
				<li class="df_JeffVeen"><a href="javascript:void(0)" id="t5"><p>Jeffrey Veen</p><p>TypeKit</p></a></li>
			</ul><!-- navi -->
			<br class="clear" />
			<div id="founderBios">
				<div class="founderBio">
					<div class="col2 colL">
						<div class="section" id="sec43">4.3</div>
						<h3>Joe Gebbia, Airbnb</h3>

						<br class="clear" />

						<p class="text">Joe defines the <a href="http://airbnb.com" target="_blank">Airbnb</a> experience. He is dedicated to creating an inspiring and effortless user experience through sharp, intuitive design, and crafts the product roadmap to make it so. Joe values products that simplify life and have a positive impact on the environment, and ensures that the company adheres to these tenets.</p>

						<p class="text">Prior to Airbnb, Joe was employed by Chronicle Books, co-founded a green design website, and developed several consumer products. An alumni of the <a href="http://risd.edu" target="_blank">Rhode Island School of Design</a>, Joe earned dual degrees in Graphic Design and Industrial Design. <sup><a id="ref-11" href="#cite-11">11</a></sup></p>
					</div>
					<div class="col3 colR right">
						<ul class="socialLinks">
							<li><a href="http://twitter.com/jgebbia" target="_blank" class="tw">Twitter</a></li>
							<li><a href="http://joegebbia.com/" target="_blank" class="www">Website</a></li>
							<li><a href="http://airbnb.com/" target="_blank" class="airb">Airbnb</a></li>
							<br class="clear" />
						</ul>
						<iframe src="http://player.vimeo.com/video/23275754?portrait=0&title=0&byline=0&color=ffffff" width="491" height="276" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>

					<br class="clear" />

				</div><!-- / founderBio -->
			    <div class="founderBio">
					<div class="col2 colL">
						<div class="section" id="sec44">4.4</div>
						<h3>Alexa Andrzejewski, Foodspotting</h3>

						<br class="clear" />

						<p class="text">Alexa Andrzejewski is the Founder and CEO of <a href="http://www.foodspotting.com" target="_blank">Foodspotting</a>, a website and mobile app for finding and recommending dishes, not just restaurants. As the UX designer behind Foodspotting, Alexa sees herself as the "chief storyteller," responsible for capturing the imagination of her team, partners and investors through metaphors, mantras, user stories, sketches and detailed designs. Foodspotting has received attention from <a href="http://video.today.msnbc.msn.com/today/47229496#47229496" target="_blank">The Today Show</a>, <a href="http://blog.cookingchanneltv.com/2011/03/17/one-mega-bite-food-gets-hi-tech/" target="_blank">The Cooking Channel</a>, <a href="http://www.travelandleisure.com/articles/best-travel-websites-and-apps/23" target="_blank">Travel + Leisure</a>, iTunes and Google Play (repeat "App of the Week"), as well as Mark Zuckerberg in his <a href="http://www.foodspotting.com/blog/posts/236" target="_blank">2011 f8 keynote</a>. Alexa has been profiled in <a href="http://www.ft.com/intl/cms/s/2/3566e886-e32a-11e0-bb55-00144feabdc0.html" target="_blank">Financial Times Magazine</a>, Inc Magazine’s <a href="http://www.inc.com/30under30/2011/profile-alexa-andrzejewski-soraya-darabi-ted-grubb%20founders-foodspotting.html" target="_blank">"30 Under 30"</a> and Gourmet Live's <a href="http://live.gourmet.com/2011/05/app-exclusive-50-women-game-changers/" target="_blank">"50 Women Game-Changers."</a> <sup><a id="ref-10" href="#cite-10">10</a></sup></p>
					</div>
					<div class="col3 colR right">
						<ul class="socialLinks">
							<li><a href="http://twitter.com/ladylexy" target="_blank" class="tw">Twitter</a></li>
							<li><a href="https://foodspotting.com" target="_blank" class="www">Foodspotting</a></li>
							<br class="clear" />
						</ul>
						<iframe src="//player.vimeo.com/video/29961716?title=0&amp;byline=0&amp;portrait=0" width="490" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>

					<br class="clear" />

				</div><!-- / founderBio -->
				<div class="founderBio">
					<div class="col2 colL">
						<div class="section" id="sec45">4.5</div>
						<h3>Jessica Hische, Freelance Illustrator</h3>

						<br class="clear" />

						<p class="text">Jessica Hische is a letterer and illustrator best known for her personal projects <a href="http://www.dailydropcap.com/" target="_blank">Daily Drop Cap</a> and the <a href="http://shouldiworkforfree.com/" target="_blank">Should I Work for Free?</a> flowchart as well as her work for clients like Wes Anderson, Penguin Books, and Google. She’s been named one of Print Magazine’s New Visual Artists, an ADC Young Gun, and one of Forbes 30 under 30 in Art and Design two years in a row. She is currently serving on the Type Directors Club board of directors, has traveled the world speaking about lettering and illustration, and has probably consumed enough coffee to power a small nation. <sup><a id="ref-12" href="#cite-12">12</a></sup></p>
					</div>
					<div class="col3 colR right">
						<ul class="socialLinks">
							<li><a href="http://twitter.com/jessicahische" target="_blank" class="tw">Twitter</a></li>
							<li><a href="http://jessicahische.is/awesome" target="_blank" class="www">Website</a></li>
							<br class="clear" />
						</ul>
						<iframe src="//player.vimeo.com/video/44045435" width="490" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>

					<br class="clear" />

				</div><!-- / founderBio -->
				<div class="founderBio">
					<div class="col2 colL">
						<div class="section" id="sec46">4.6</div>
						<h3>Mike Matas, Push Pop Press</h3>

						<br class="clear" />

						<p class="text">Mike is a user interface designer and cofounder of <a href="http://www.pushpoppress.com" target="_blank">Push Pop Press</a>, a digital publishing company that worked with Al Gore to create the first full-length interactive book <a href="http://www.pushpoppress.com/ourchoice" target="_blank">Our Choice</a>. Recently Push Pop Press was <a href="http://pushpoppress.com/about/" target="_blank">acquired by Facebook</a> where he is now working, giving people better tools to explore and share ideas.</p>
						<p class="text">Prior to starting Push Pop Press he worked at Apple where he designed user interfaces and artwork for the iPhone, the iPad, and Mac OS X. Before that he cofounded <a href="http://www.delicious-monster.com/" target="_blank">Delicious Monster</a>, a software company that created Delicious Library. <sup><a id="ref-13" href="#cite-13">13</a></sup></p>
					</div>
					<div class="col3 colR right">
						<ul class="socialLinks">
							<li><a href="http://twitter.com/mike_matas" target="_blank" class="tw">Twitter</a></li>
							<li><a href="http://mikematas.com" target="_blank" class="www">Website</a></li>
							<li><a href="http://pushpoppress.com" target="_blank" class="pushp">Website</a></li>
							<br class="clear" />
						</ul>
						<object width="490" height="305"><param name="movie" value="http://www.youtube.com/v/LV-RvzXGH2YU?version=3&amp;hl=en_US&amp;rel=0&start=15"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/LV-RvzXGH2Y?version=3&amp;hl=en_US&amp;rel=0&start=15" type="application/x-shockwave-flash" width="490" height="305" allowscriptaccess="always" allowfullscreen="true"></embed></object>
					</div>
				</div><!-- / founderBio -->
				<div class="founderBio">
					<div class="col2 colL">
						<div class="section" id="sec47">4.7</div>
						<h3>Jeffrey Veen, Typekit</h3>

						<br class="clear" />

						<p class="text">Jeffrey Veen is a founder and the CEO of <a href="http://smallbatchinc.com" target="_blank">Small Batch, Inc.</a> where he’s leading a team of developers and creating user-centered web products. Their current effort is <a href="http://typekit.com" target="_blank">Typekit</a> — a widely praised subscription font service that is bringing real typography to the Web for the first time.</p>

						<p class="text">Jeffrey was also one of the founding partners of <a href="http://adaptivepath.com" target="_blank">Adaptive Path</a> and project lead for Measure Map, the well-received web analytics tool acquired by Google in 2006, where he managed the user experience group responsible for some of the largest web apps in the world. <sup><a id="ref-14" href="#cite-14">14</a></sup></p>
					</div>
					<div class="col3 colR right">
						<ul class="socialLinks">
							<li><a href="http://twitter.com/veen" target="_blank" class="tw">Twitter</a></li>
							<li><a href="http://veen.com/jeff" target="_blank" class="www">Website</a></li>
							<li><a href="http://typekit.com" target="_blank" class="tkit">Website</a></li>
							<br class="clear" />
						</ul>
						<object width="490" height="305"><param name="movie" value="http://www.youtube.com/v/8CtC_qbQ51U?version=3&amp;hl=en_US&amp;rel=0&start=45"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/8CtC_qbQ51U?version=3&amp;hl=en_US&amp;rel=0&start=45" type="application/x-shockwave-flash" width="490" height="305" allowscriptaccess="always" allowfullscreen="true"></embed></object>
					</div>
				</div><!-- / founderBio -->
			</div><!-- / founderBios -->
			<div id="navButtons">
				<div class="prev">Prev</div>
				<div class="next">Next</div>
			</div>
		</div><!-- / scroll -->
	</div><!-- totalWrapper-->

	<br class="clear" />

		<div class="col2 colL" style="text-align:center;margin-top:800px;">
			<div id="linkSword"></div>
			<div id="linkLike">eek!</div>
		</div>

		<div id="sec48" class="col4 colR" style="margin-top:800px;">
			<p class="text oversize" style="margin:30px 0 110px;">It’s getting harder and harder to differentiate based on tech talent alone. Designers like Jonathan Ive at Apple, Joe Gebbia at Airbnb, and the rockstar design team at Dropbox (just to name a few) are changing the world today – not entirely because Apple, Airbnb, or Dropbox have better tech, but because they make their products more usable, aesthetic, and <em>human</em>.</p>

			<h3 class="bigRed"><a href="http://www.fastcodesign.com/1665795/silicon-valleys-new-secret-weapon-designers-who-found-startups" target="_blank">Design is the link missing</a> from your founding team. The perfect balance of business, tech, and design is an incredibly powerful tool…
				<br /><br />and an even more powerful business model.</h3>
		</div><!-- / \ 4 wrap-up -->

		<br class="clear" />

	</div><!-- / globalWrapper -->
</div><!-- / section4 -->

<div id="sec5top"></div>
<div id="section5">
	<div class="globalWrapper">
		<br />
		<h2>Finding Great Talent</h2>

		<div class="col1 colL">
			<div class="section right" id="sec51">5.1</div>
		</div>
		<div class="col2">
			<h3>Okay, I need a designer. <br /><span class="phonetic">What do I look for?</span></h3>
			<p class="text">Founders need to share passion, drive, and vision. Find someone who can solve problems and think critically about more than just designing a website. Someone who makes your founding team <a href="./tooltips.php?q=startupteam" rel="./tooltips.php?q=startupteam" class="tip">unstoppable</a>.</p>
		</div>
		<!--
<div class="col2 colR">
			<p class="text">Non-founding designers should share many of these qualities too. As with any employee in a startup, they need to believe in your product and be driven to make it great, not just good. Technical skills aside, learn their process. What kind of thinking goes into their work? How do they arrive at the final product? Good process lays the foundation for great design.</p>
		</div>
-->


		<div class="col1 colL">
			<div class="section right" id="sec52">5.2</div>
		</div>
		<div class="col2 colR">
			<h3>Go where the designers are.<br />&nbsp;</h3>
			<p class="text">The design community is small and nuanced. Many designers aren’t aware of their increasing demand within startups, but that doesn't make them impossible to find.</p>
			<p class="text"><em>Here are a few places where you can find excellent local designers right now.</em></p>
		</div>

		<br class="clear" />

		<div class="col2 colL orangeLinks">

			<div class="goToDesigners">
				<a id="plancastLogo" href="http://plancast.com/search?q=design" target="_blank">Plancast</a>
				<a id="meetupLogo" href="http://meetup.com/find/?keywords=design" target="_blank" style="margin-left:33px;margin-right:33px;">Meetup.com</a>
				<a id="eventbriteLogo" href="http://eventbrite.com/" target="_blank">Eventbrite</a>
			</div>

			<p class="text">Meetups and events are a great way to break into the design culture and mingle with prospective talent face-to-face. I strongly recommend you attend at least one design meetup – it’s really important to have that perspective going into your designer search.</p>
			<p>
			<a href="http://creativemornings.com" target="_blank">Creative Mornings</a><br />
			<a href="http://warmgun.com" target="_blank">Warm Gun</a><br />
			<a href="http://meetup.com/find/?keywords=design" target="_blank">Meetup.com – Search for “Design”</a><br />
			<a href="http://plancast.com/search?q=design" target="_blank">Plancast.com – Search for “Design”</a>
			<a href="http://www.eventbrite.com/directory?q=design" target="_blank">Eventbrite.com – Search for “Design”</a>
			</p>
			<p class="text">There’s always something going on.</p>

		</div>
		<div class="col2 orangeLinks">

			<div class="goToDesigners">
				<a id="zerplyLogo" href="http://zerply.com" target="_blank">Zerply</a>
			</div>

			<p class="text">Think of <a href="http://zerply.com" target="_blank">Zerply</a> as LinkedIn for designers, developers, and entrepreneurs. It’s an exquisitely designed platform that operates on a network connections and recommendations. Members can be “recommended” for excellence in a variety of disciplines and skills.</p>
			<p class="text">Zerply allows you to search for designers by location, skills, and talents. The system is free to use.</p>

		</div>

		<div class="col2 colR orangeLinks">

				<div class="goToDesigners">
					<a id="dribbbleLogo" href="http://dribbble.com" target="_blank">Dribbble</a>
				</div>

				<p class="text"><a href="http://dribbble.com" target="_blank">Dribbble</a> is an exclusive online community of designers from around the world. Signup is by (rare) invite only, which helps cultivate some of the best design talent in the world.</p>
				<p class="text">Designers post works-in-progress (wip), completed projects, teasers, and fun work so designers and 'spectators' from anywhere can catch a glimpse of what they're working on.</p>
				<p class="text">The site allows you to search for designers by skill, availability, and location. You can also advertise on the dribbble job board to allow some of the world’s best designers to come to you.</p>

		</div>

		<br class="clear"/>

		<div class="col2 colL" style="margin-top:50px;">
			<a id="behanceLogo" href="http://behance.net" target="_blank">Behance</a>
		</div>

		<div class="col4 colR orangeLinks" style="margin-top:70px;">
			<p style="font-weight:bold;color:#000;">Behance: The Platform to Showcase &amp; Discover Creative Work</p>

			<p class="text"><a href="http://behance.net" target="_blank">Behance</a> is a great place for anyone to browse top creative works attributed to the actual designers who created them, not agencies. It lets designers showcase work as their own and on sites like LinkedIn, RISD, Zerply, and AIGA, and their own personal websites – enticing some of the world's best talent to join the network.</p>

			<p class="text">The <a href="http://www.behance.net/joblist" target="_blank">JobList</a> makes it easy to reach over 1,000,000 skilled designers, sorted by field, location, or even specific tools and skills. Tons of startups and big companies (like Apple!) are already using Behance to recruit top designers around the world.</p>

		</div>

		<br class="clear"/>

		<div class="col1 colL" style="margin-top:130px;">
			<div class="section right" id="sec53">5.3</div>
		</div>
		<div class="col3 colR" style="margin-top:130px;">
			<h3>A note about Unicorns by <a href="http://sachagreif.com/" target="_blank">Sacha Greif</a> <br /><span class="phonetic">Understand your expectations.</span></h3>
			<p class="text">In a smart <a href="http://thenextweb.com/dd/2012/03/31/why-cant-startups-find-designers/" target="_blank">article about finding designers on TNW</a>, Sacha Greif tells a cautionary tale. "Instead of looking for a unicorn ["a magical designer that can solve all [of a company’s] problems," according to <a href="http://www.designstaff.org/articles/hiring-a-designer-2011-11-01.html" target="_blank">Braden Kowitz</a>], think about hiring a web designer who will focus on design, and a front-end engineer who will focus on code. Like WePay’s Aberman states, “When looking for a designer, you can’t have it all. You need to prioritize visual design, product design, front-end development, etc.”</p>

			<p class="text">If your budget doesn’t let you hire both, another option is to hire a horse and let them grow a horn on the job: find a good visual designer who’s also willing to learn front-end coding, or a great front-end engineer who wants to get better at design." <sup><a id="ref-17" href="#cite-17">17</a></sup></p>
		</div>
		<div class="col2 colR">
			<div id="unicorn"></div>
			<p class="caption"style="margin-right:30px;padding-top:10px;">Canned Unicorn Meat <br />Courtesy of <a href="http://www.thinkgeek.com/caffeine/wacky-edibles/e5a7/" target="_blank">ThinkGeek</a></p>
		</div>

		<br class="clear"/>

		<h2 style="margin:100px 0 30px;">Resources!</h2>

		<div class="col2 colL">
			<div class="section right" style="margin-top:20px;" id="sec54">5.4</div>
		</div>

		<div class="col3">
			<p class="text">This is just a primer on design for startups. There is so much information out there, and so many brilliant minds talking about great design.</p>
			<p class="text">Here are a few resources I highly recommend: </p>
		</div>

		<br class="clear" />

		<ul id="resources">
			<li><a id="HD" href="http://hackdesign.org?ref=stihdw" target="_blank">
				An easy to follow design course for hackers who do amazing things.</a></li>
			<li><a id="TDF" href="http://thedesignerfund.com" target="_blank">
				We’re a community of designers who invest in designer founders through mentorship, funding, and access to our network.</a></li>
			<li><a id="CM" href="http://creativemornings.com" target="_blank">
				A monthly breakfast lecture series for creative types. Each event is free of charge, and includes a 20 minute talk, plus coffee!</a></li>
			<li><a id="TDO" href="http://designobserver.com" target="_blank">
				Writings on Design and Culture. Edited by Michael Bierut, William Drenttel, Jessica Helfand, Julie Lasky and Nancy Levinson.</a></li>
			<li><a id="ALA" href="http://alistapart.com" target="_blank">
				Explores the design, development, and meaning of web content, with a special focus on web standards and best practices.</a></li>
			<li><a id="SM" href="http://swiss-miss.com" target="_blank">
				A design blog and studio run by Tina Roth Eisenberg. Besides swissmiss, she founded and runs CreativeMornings, TeuxDeux, and Tattly.</a></li>
			<li><a id="ILT" href="http://ilovetypography.com" target="_blank">
				I Love Typography: Where do our letters originate? Why do they look the way they do? And what makes for good typography?</a></li>
			<li><a id="TK" href="http://typekit.com" target="_blank">
				Add a line of code to your pages and choose from hundreds of web fonts. Simple, bulletproof, standards compliant, accessible, and totally legal.</a></li>
			<li><a id="GA" href="http://generalassemb.ly" target="_blank">
				A campus for technology, design, and entrepreneurship.</a></li>
			<li><a id="OCTB" href="http://ourchoicethebook.com" target="_blank">
				Our Choice, the digital book by Al Gore and Push Pop Press, will change the way we read books. And quite possibly change the world.</a></li>
			<li><a id="TKG" href="http://type.method.ac" target="_blank">
				The Kerning Game. Your mission is simple: achieve pleasant and readable text by distributing the space between letters.</a></li>
			<li><a id="DBBB" href="http://dribbble.com" target="_blank">
				Dribbble is show and tell for designers, who share shots — small screenshots of the designs and applications they’re working on.</a></li>
			<li><a id="HEL" href="http://amazon.com/Helvetica/dp/B002RIOGI0/ref=sr_1_1?s=instant-video&ie=UTF8&qid=1331186392&sr=1-1" target="_blank">
				A feature-length independent film about typography, graphic design and global visual culture.</a></li>
			<li><a id="SMAG" href="http://www.smashingmagazine.com/" target="_blank">
				Delivers useful and innovative information to Web designers and developers.</a></li>
			<li><a id="OBJ" href="http://amazon.com/Objectified/dp/B002SOUVKU/ref=pd_sim_mov_aiv_2" target="_blank">
				A feature-length documentary about our complex relationship with manufactured objects and, by extension, the people who design them.</a></li>
			<li><a id="TED" href="http://ted.org" target="_blank">Riveting talks by remarkable people, free to the world. Facts, insight and humor - in shareable bites.</a></li>
			<li><a id="ZRP" href="http://zerply.com" target="_blank">Go beyond the résumé - showcase your work and your talent.</a></li>
			<li><a id="C77" href="http://core77.com" target="_blank">
				Provides a gathering point for designers and enthusiasts alike by producing design competitions, lecture series, parties, and exhibits.</a></li>
			<li><a id="FIVE" href="http://500.co" target="_blank">Seed fund and mentorship-driven accelerator program focused on helping startups succeed through design, data & distribution.</a></li>
			<li><a id="AIGA" href="http://aiga.org" target="_blank">
				 The professional association for design, is committed to advancing design as a professional craft, strategic tool and vital cultural force.</a></li>
			<li><a id="ATP" href="http://atypeprimer.com" target="_blank">
				A practical introduction to typography, this book analyses the basic principles and applications of type.</a></li>
			<li><a id="LTC" href="http://losttype.com" target="_blank">
				The Lost Type Co-Op is a Pay-What-You-Want Type foundry, the first of its kind. Users can pay what they like, even $0.</a></li>
			<li><a id="THR" href="http://37signals.com/svn" target="_blank">
				Signal vs. Noise, a weblog by 37signals about design, business, experience, simplicity, the web, culture, and more.</a></li>
			<li><a id="BH" href="http://behance.net" target="_blank">Behance empowers creative professionals and teams to make ideas happen.</a></li>
			<li><a id="BBETA" href="http://brooklynbeta.org/t" target="_blank">Brooklyn Beta is a small, friendly web conference aimed at the “work hard and be nice to people” crowd.</a></li>
			<li><a id="BBSC" href="http://brooklynbeta.org/summer-camp" target="_blank">Brooklyn Beta Summer Camp aims to help designer-developer teams build the next generation of web products.</a></li>
			<li><a id="DTB" href="http://www.designthenewbusiness.com/" target="_blank">A documentary on how design is changing the way we see and do business.</a></li>
			<li><a id="FOLYO" href="http://www.folyo.me/" target="_blank">Folyo is a private job board. Post your project, and they'll send it to a list of hand-picked freelance designers all over the world.</a></li>
		</ul>

		<br class="clear" />

	</div><!-- globalWrapper -->
</div><!-- section5 -->

<div id="sec5bottom"></div>

<div class="globalWrapper">
	<div id="section6">

		<h2>Helpful? Share it!</h2>

		<ul class="socialShare">
			<li>
				<a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo "$pageURL"; ?>" target="_blank" class="shareFb" onclick="return popitup('http://www.facebook.com/sharer/sharer.php?u=<?php echo "$pageURL"; ?>')">Share (f)</a>
			</li>
			<li class="shareCount"><?php echo customFShare( $pageURL ); ?></li>

			<li>
				<a href="http://twitter.com/intent/tweet?url=<?php echo $pageURL; ?>&text=<?php echo $pageTitle.": ".$twPageDescription; ?>%20by%20@wr&related=wr" target="_blank" class="shareTw">Share (t)</a>
			</li>
			<li class="shareCount"><?php tweets( $pageURL ); ?></li>
		</ul><!-- / socialShare -->

		<br class="clear" />

		<div class="col4 colL colR">
			<p class="text">I love startups and design, and I want them to be best friends forever. I'm Wells Riley, and I'm currently the Product Designer at <a href="http://kicksend.com">Kicksend</a>. I’ve been working with startups for several years, and designing on the Web for even longer.</p>
			<p class="text">Design and entrepreneurship are among the most important things in my life, and it’s so exciting to see design taking a stronger role in new companies. I hope this will be a valuable resource to help designers and entrepreneurs speak the same language.</p>
			<p class="text">If you have any feedback, please feel free to tweet me <a href="https://twitter.com/intent/tweet?in_reply_to=186892397454688256&related=wr">@wr</a>.</p>
		</div>

		<div class="col1" style="text-align:center;width:285px;padding:0 0 0 20px;">
			<img class="me" src="./img/wellsosaurus.jpg" />
		</div>

		<br class="clear" />

	</div>
</div>

<div id="section7">
	<div class="globalWrapper">

		<div class="col3 colL">
			<h2>Thank you so much</h2>

		<ul class="acknowledgements">
			<li>Special thanks:</li>
			<li><a href="http://fictivecameron.com" target="_blank">Cameron Koczon</a></li>
			<li><a href="http://thedesignerfund.com" target="_blank">The Designer Fund</a></li>
			<li><a href="http://www.vitsoe.com/en/us/about/dieterrams/who-is-dieter-rams" target="_blank">Dieter Rams</a></li>
			<li><a href="http://twitter.com/enriqueallen" target="_blank">Enrique Allen</a></li>
			<li><a href="http://www.amazon.com/s/ref=sr_nr_scat_2649512011_ln?rh=n%3A2649512011%2Ck%3Agary+hustwit&keywords=gary+hustwit&ie=UTF8&qid=1331486160&scn=2649512011&h=db9370a14fa03cf4c75d5c07cbd58d3549e24ec8#/ref=sr_nr_p_n_format_browse-bi_0?rh=n%3A2625373011%2Cn%3A%212625374011%2Cn%3A2649512011%2Ck%3Agary+hustwit%2Cp_n_format_browse-bin%3A2650306011&bbn=2649512011&keywords=gary+hustwit&ie=UTF8&qid=1331486168&rnid=2650303011" target="_blank">Gary Hustwit</a></li>
			<li><a href="http://ianhirschfeld.com" target="_blank">Ian Hirschfeld</a></li>
			<li><a href="http://jessicahische.is" target="_blank">Jessica Hische</a></li>
			<li><a href="http://www.amazon.com/Type-Primer-2nd-John-Kane/dp/0205066445/ref=ntt_at_ep_dpt_1" target="_blank">John Kane</a></li>
			<li><a href="http://losttype.com" target="_blank">Lost Type Co-op</a></li>
			<li><a href="http://mantia.me" target="_blank">Louie Mantia</a></li>
			<li><a href="http://squaredeye.com" target="_blank">Matthew Smith</a></li>
			<li><a href="http://rogieking.com" target="_blank">Rogie King</a> & <a href="http://finegoodsmarket.com" target="_blank">Fine Goods</a></li>
			<li><a href="http://dribbble.com/shots/183766-Pattern-Kit-One-Ribbon-Dancer-" target="_blank">Seth Nickerson</a></li>
			<li><a href="http://www.apple.com/stevejobs/" target="_blank"> Steve Jobs</a></li>
			<li>&nbsp;<br />And everyone else who helped me<br />in some way. There are lots of you.</li>
		</ul>
		</div>

		<div class="sources col3 colR">
			<p>Sources:</p>
			<ol>
				<li id="cite-1"><a href="http://atypeprimer.com/" target="_blank">A Type Primer (pp. vii) : John Kane</a></li>
					<a class="jumpBack" href="#ref-1">⇈ Jump back</a>
				<li id="cite-2"><a href="http://www.telegraph.co.uk/technology/apple/8555503/Dieter-Rams-Apple-has-achieved-something-I-never-did.html" target="_blank">Apple has achieved something I never did : The Telegraph</a></li>
					<a class="jumpBack" href="#ref-2">⇈ Jump back</a>
				<li id="cite-3"><a href="http://www.vitsoe.com/en/gb/about/dieterrams/gooddesign" target="_blank">Dieter Rams - ten principles for good design : Vitsoe</a></li>
					<a class="jumpBack" href="#ref-3">⇈ Jump back</a>
				<li id="cite-4"><a href="http://gizmodo.com/343641/1960s-braun-products-hold-the-secrets-to-apples-future" target="_blank">1960s Braun Products Hold the Secrets to Apple’s Future : Gizmodo</a></li>
					<a class="jumpBack" href="#ref-4">⇈ Jump back</a>
				<li id="cite-5"><a href="http://en.wikipedia.org/wiki/Interaction_design" target="_blank">Interaction Design : Wikipedia</a></li>
					<a class="jumpBack" href="#ref-5">⇈ Jump back</a>
				<li id="cite-6"><a href="http://wellsosaur.us/EvUB" target="_blank">This isn't a source don't click here.</a></li>
					<a class="jumpBack" href="#ref-6">⇈ Jump back</a>
				<li id="cite-7"><a href="http://en.wikipedia.org/wiki/User_interface_design" target="_blank">User Interface Design : Wikipedia</a></li>
					<a class="jumpBack" href="#ref-7">⇈ Jump back</a>
				<li id="cite-8"><a href="http://en.wikipedia.org/wiki/User_experience_design" target="_blank">User Experience Design : Wikipedia</a></li>
					<a class="jumpBack" href="#ref-8">⇈ Jump back</a>
				<li id="cite-9"><a href="http://en.wikipedia.org/wiki/Industrial_design" target="_blank">Industrial Design : Wikipedia</a></li>
					<a class="jumpBack" href="#ref-9">⇈ Jump back</a>
				<li id="cite-10"><a href="https://flavors.me/ladylexy" target="_blank">Alexa Andrzejewski</a></li>
					<a class="jumpBack" href="#ref-10">⇈ Jump back</a>
				<li id="cite-11"><a href="http://www.airbnb.com/founding-team" target="_blank">Founding Team - Joe Gebbia : Airbnb</a></li>
					<a class="jumpBack" href="#ref-11">⇈ Jump back</a>
				<li id="cite-12"><a href="http://jessicahische.is/awesome" target="_blank">Jessica Hische - Awesome</a></li>
					<a class="jumpBack" href="#ref-12">⇈ Jump back</a>
				<li id="cite-13"><a href="http://mikematas.com/#!about" target="_blank">About : Mike Matas</a></li>
					<a class="jumpBack" href="#ref-13">⇈ Jump back</a>
				<li id="cite-14"><a href="http://aneventapart.com/speakers/jeffveen/" target="_blank">Jeffrey Veen : An Event Apart</a></li>
					<a class="jumpBack" href="#ref-14">⇈ Jump back</a>
				<li id="cite-15"><a href="http://www.objectifiedfilm.com/about/" target="_blank">About the Film : Objectified</a></li>
					<a class="jumpBack" href="#ref-15">⇈ Jump back</a>
				<li id="cite-16"><a href="http://designerfund.com/infographic" target="_blank">Infographic : The Designer Fund</a></li>
					<a class="jumpBack" href="#ref-16">⇈ Jump back</a>
				<li id="cite-17"><a href="http://thenextweb.com/dd/2012/03/31/why-cant-startups-find-designers/" target="_blank">Why Can't Startups Find Designers? : TNW</a></li>
					<a class="jumpBack" href="#ref-17">⇈ Jump back</a>
			</ol>
		</div>
		<br class="clear" />
	</div>
</div>

<footer>
	&copy; <?php echo date('Y'); ?> <a href="http://wells.ee" target="_blank">Wells Riley</a>. All rights reserved.
</footer>

</div>
<!-- Preload some images FTW -->
<div id="preload">
	<img src="./img/triforceComplete.jpg" />
	<img src="./img/triforceComplete@2x.jpg" />
	<img src="./img/linkHappy@2x.jpg" />
	<img src="./img/hover_bg.png" />
	<img src="./img/hover_bg2.png" />
	<img src="./img/loader.gif" />
</div>
<!-- Javascript -->
<script src="./js/libs/jquery-1.7.1.min.js"></script>
<script src="./js/libs/modernizr-2.5.3.min.js"></script>
<script src="./js/libs/jquery.cycle.lite.js"></script>
<script src="./js/libs/jquery.qtip.min.js"></script>
<script src="./js/libs/highcharts.js"></script>
<script src="./js/libs/jquery.tools.min.js"></script>
<script src="./js/libs/jquery-ui.min.js"></script>
<script src="./js/libs/jquery.ui.touch-punch.min.js"></script>
<script src="./js/script.js"></script>
<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=334362973268161";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Google Analytics -->
<script>
	var _gaq=[['_setAccount','UA-4881230-13'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>

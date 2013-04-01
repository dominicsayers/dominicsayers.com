<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html><head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title>Dominic Sayers - RFC-compliant email address validator</title>

<style type="text/css">
.isemail {
	font-size:12px;
	clear:left;
	margin:0;
	padding:0;
}

.isemail_address {
	line-height:12pt;
	float:left;
	overflow:hidden;
	width:110px;
	margin:0 0 0 12px;
	padding:3px;
}

.isemail_result {
	float:left;
	width:60px;
	margin:0 3px 0 3px;
	padding:3px;
}

.isemail_expected			{background-color:white;}
.isemail_unexpected			{background-color:#FFCCCC;}
.isemail_header				{background-color:#CCCCCC;margin-bottom:3px;}

.isemail_tooltip			{position:relative;}
.isemail_tooltip:hover span		{display: block;}
.isemail_tooltip span {
	display: none;
	position: absolute;
	top: 20px;
	left: 10px;
	padding: 5px;
	z-index: 100;
	background-color: #323232;
	color: #fff;
	width:auto;
	-moz-border-radius: 5px; /* this works only in camino/firefox */
	-webkit-border-radius: 5px; /* this is for Safari, Chrome etc. */
	border-radius: 5px; /* this is for CSS3 browsers */
}

.imglink {
	vertical-align: middle;
	margin-right:3px;
}
</style>
<link href="../CSS/style.php" rel="stylesheet" type="text/css" />
<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />

</head>

<body>

<div id="centre_content">
	<h2>RFC-compliant email address validator - <em>is_email()</em></h2>
	<br/>
	<div style="float:left;width:330px;">
		<a target="_blank" href="http://isemail.googlecode.com">
			<img alt="Download" src="http://chart.apis.google.com/chart?chs=80x80&cht=qr&chl=http://isemail.googlecode.com&chld=|0" class="imglink" style="float:left;"/>
		</a>
		<div>
			<a target="_blank" href="http://isemail.googlecode.com/files/is_email-3.0.zip">
				<span>Download the PHP validator <img alt="Download" src="<?php echo $browseroot; ?>/static/images/icons/is_email_16.png"/ style="vertical-align:text-bottom;"/> <span style="font-size:9px;background-color:yellow;">NEW</span></span>
			</a>
			<br/>
			<p class="small">Version 3.0 released February 22nd 2011</p>
		</div>
		<div>
			<a target="_blank" href="http://code.google.com/p/isemail/downloads/detail?name=is_email_java.zip">
				<span>Download the Java validator <img alt="Download" src="<?php echo $browseroot; ?>/static/images/icons/is_email_16.png"/ style="vertical-align:text-bottom;"/></span>
			</a>
			<br/>
			<p class="small">Version 2.10 released October 9th 2010</p>
		</div>
	</div>
	<div style="float:left;width:280px;background-color:#D7DFE3;">
		<h3>News</h3>
		<p>Version 3.0 of the PHP validator was released on 22nd February 2011</p>
		<p>Many thanks to collaborator Daniel Marschall for creating the Java version, <a href="http://code.google.com/p/isemail/source/browse/Java/#Java/trunk">IsEMail</a>. His thoughts and comments have improved the PHP version too.</p>
	</div>
	<br style="clear:left;"/>
	<p>This is code to validate an email address against the various relevant internet <a target="_blank" href="http://en.wikipedia.org/wiki/Request_for_Comments">RFCs</a>.</p>
	<p>I have also collected together some of the other widely-used validators
	that are in the public domain, along with their test cases, and compared them
	below. After a close reading of the RFCs (and their published <a target="_blank" href="http://www.rfc-editor.org/errata_search.php?rfc=3696">errata</a>) I disagree with a few of the test cases proposed by other authors. I've listed these exceptions and my reasoning after the results below.</p>
	<h2>What can you do on this page?</h2>
	<ul>
		<li><a target="_blank" href="../source/is_email/test">You can test any email address with <em>is_email()</em>.</a></li>
		<li>Read my summary of common myths about email addresses (below)</li>
		<li><a target="_blank" href="http://code.google.com/p/isemail">Download <em>is_email()</em> and the test cases.</a> (or <a target="_blank" href="http://code.google.com/p/isemail/source/browse/PHP/trunk">review the source code</a>)</li>
		<li><a target="_blank" href="http://blog.dominicsayers.com/category/email-address-validation/">Read what I've written elsewhere about email address validation.</a></li>
		<li><a href="results.php">You can compare the validators against all the test cases.</a></li>
		<li>You can download your chosen validator to use in your project (click on the author's name below).</li>
		<li>You can consult the RFCs yourself (good luck):
		<ul>
			<li><a target="_blank" href="http://tools.ietf.org/html/rfc5321#section-4.1.2">RFC 5321</a>,</li>
			<li><a target="_blank" href="http://tools.ietf.org/html/rfc5322#section-3.4.1">RFC 5322</a>,</li>
			<li><a target="_blank" href="http://tools.ietf.org/html/rfc4291#section-2.2">RFC 4291</a>,</li>
			<li><a target="_blank" href="http://tools.ietf.org/html/rfc5952">RFC 5952</a> <span style="font-size:9px;background-color:yellow;">NEW</span>,</li>
			<li><a target="_blank" href="http://tools.ietf.org/html/rfc5336">RFC 5336</a> <span style="font-size:9px;background-color:yellow;">NEW</span>,</li>
			<li><a target="_blank" href="http://tools.ietf.org/html/rfc1123#section-2.1">RFC 1123</a>,</li>
			<li><a target="_blank" href="http://tools.ietf.org/html/rfc3696">RFC 3696</a> (especially the errata).</li>
			<li>Let me also point out some RFCs that are <em>less</em> relevant, even thought they are frequently cited: RFC 822 (obsoleted by RFC 5322), RFC 2822 (obsoleted by RFC 5322) and RFC 1035 (updated by RFC 1123).</li>
		</ul>
		</li>
	</ul>
	<p>If there's an industrial-strength validation function that I've missed please let me know using the contact channels on the left.</p>
	<hr />
	<h2>The Validators - head-to-head</h2>
	<br />
	<div class="isemail isemail_tooltip">
		<p class="isemail_address"><br />164 tests included</p>
		<p class="isemail_result isemail_header">
		<a href="http://code.google.com/p/isemail" target="_blank">
		Dominic<br />Sayers</a></p>
		<p class="isemail_result isemail_header">
		<a href="http://squiloople.com/2009/12/20/email-address-validation/" target="_blank">
		Michael<br />Rushton</a></p>
		<p class="isemail_result isemail_header">
		<a href="http://code.google.com/p/php-email-address-validation" target="_blank">
		Dave<br />Child</a></p>
		<p class="isemail_result isemail_header">
		<a href="http://haacked.com/archive/2007/08/21/i-knew-how-to-validate-an-email-address-until-i.aspx" target="_blank">
		Phil<br />Haack</a></p>
		<p class="isemail_result isemail_header">
		<a href="http://php.net/manual/en/function.filter-var.php" target="_blank">
		PHP<br />5.2.0+</a></p>
		<p class="isemail_result isemail_header">
		<a href="http://www.pgregg.com/projects/php/code/showvalidemail.php" target="_blank">
		Paul<br />Gregg</a></p>
		<p class="isemail_result isemail_header">
		<a href="http://code.iamcal.com/php/rfc822/" target="_blank">
		Cal<br />Henderson</a></p>
<!--		<p class="isemail_result isemail_header">
		<a href="http://simonslick.com/VEAF/" target="_blank">Simon<br />Slick</a></p> -->
	</div>
	<div class="isemail isemail_tooltip">
		<p class="isemail_address">Percent correct</p>
		<p class="isemail_result isemail_expected">100%</p>
		<p class="isemail_result isemail_expected">88%</p>
		<p class="isemail_result isemail_expected">90%</p>
		<p class="isemail_result isemail_expected">82%</p>
		<p class="isemail_result isemail_expected">80%</p>
		<p class="isemail_result isemail_expected">53%</p>
		<p class="isemail_result isemail_expected">84%</p>
<!--		<p class="isemail_result isemail_expected">0%</p> -->
	</div>
	<p style="clear:left;margin-top:0.5em"><strong><a href="results.php">See the full results and analysis &raquo;</a></strong></p>
	<p class="mini">A note on the Cal Henderson result: Cal's validator is validating against RFC 5322 with additional constraints imposed by RFC 5321 where appropriate. In other words, he is validating the <em>To:</em> field in an email message. The envelope address has a more restrictive format, so his validator allows certain elements that are not allowed in the envelope - like comments for instance. This reduces his score on my test, which is designed to validate envelope addresses.</p>
	<hr />
	<h2>Myths</h2>
	<p>There's some misinformation that is often repeated about email address formats. I'll attempt to quash a few myths here:</p>
	<h3>Myth: A plus sign is not valid in an email address</h3>
	<p>There are <em>still</em> some websites that won't allow you to use a plus sign (+) in an email address. In fact it's a perfectly valid character to use and it can be really useful. Gmail, for instance, will pre-tag your incoming emails with the part after the plus sign.</p>
	<p>Why is this useful? Well if you register at a particular website as <em>john.doe+dating@example.com</em> then Gmail will label all messages from that website with the <em>dating</em> label.</p>
	<h3>Myth: The maximum length of an email address is 320 characters</h3>
	<p>This arises from the simple arithmetic of <em>maximum length of a domain</em> (255 characters) + <em>maximum length of a mailbox</em> (64 characters) + <em>the @ symbol</em> = 320 characters. Wrong.</p>
	<p>This canard is actually documented in the original version of RFC 3696. It was corrected in the errata, but nobody reads the errata (except me it would appear).</p>
	<p>There's actually a restriction from <a target="_blank" href="http://tools.ietf.org/html/rfc5321#section-4.5.3.1.3">RFC 5321</a> on the path element of an SMTP transaction of 256 characters. But this includes angled brackets around the email address, so the maximum length of an email address is 254 characters. You read it here first.</p>
	<p>This is not a new restriction - it goes right the way back to RFC 821 and was also in RFC 2821.</p>
	<h3>Myth: You can use funny characters in an email address if you put a backslash in front of them</h3>
	<p>This is only true if you also put double quotes around the recipient part. Some of the examples given in RFC 3696 are actually wrong, and were corrected in the errata.</p>
	<p>This is OK: <em>"Abc\@def"@example.com</em> and so is this: <em>"Abc@def"@example.com</em>. But this isn't: <em>Abc\@def@example.com</em></p>
	<p>The range of characters you can use without quotes is as follows: any letter, any digit, any of the following !#$%&amp;'*+-/=?^_`{|}~. You can't use these without quoting them: ()&lt;&gt;[]:;@\, with one exception: you can use parentheses for comments.</p>
	<p>Comments are text surrounded by parentheses (like these). These are OK but don't form part of the address. In other words mail sent to <em>first.last@example.com</em> will go to the same place as <em>first(a).last(b)@example(c).com(d)</em>. Strange but true.</p>
	<h3>Myth: Domain names must begin with a letter</h3>
	<p>Nope. Check out <a href="http://www.3com.com">http://www.3com.com</a>. This old rule from RFC 1035 was changed in RFC 1123 in 1989.</p>
	<p>More interesting is whether Top Level Domains (TLDs) need to begin with a letter. At the moment they all do, but ICANN is introducing all sorts of new ones. RFC 1123 assumes that TLDs will always start with a letter, and this is clearly sensible since there needs to be a systematic way of distinguishing a domain name from an IP address.</p>
	<p>Consider 123.123.123.123. If TLDs could be numeric then this might be a valid domain name. If you entered it into your browser, how would it know whether to straight to the IP address 123.123.123.123 or go via the Domain Name System (DNS)?</p>
	<h3>Myth: RFC 2822 is the authority on valid email addresses</h3>
	<p>RFC 5322 is a <a target="_blank" href="http://en.wikipedia.org/wiki/Internet_standard">Draft Standard</a>. This trumps the Proposed Standard status of RFC 2822.</p>
	<h3>Myth: RFC 822 is the authority on valid email addresses</h3>
	<p>Are you from, like, the olden days?</p>
	<h3>Myth?: You can validate an email address with a Regular Expression (regex)</h3>
	<p>I can't, but then I suck at regexes. If you think you can, please feel free to use my test cases to verify your regex.</p>
	<hr />
	<h2>Test cases I disagree with</h2>
	<p>Here are the test cases I think are wrong (in other words, the expected result given by the author is different to mine):</p>
	<h3>{^c\@**Dog^}@cartoon.com</h3>
	<p>Doug Lovell's Linux Journal article (see below) casually cites this as an address you could adopt to fool a spambot. Unfortunately it's not a valid address.</p>
	<h3>phil.h\@\@ck@haacked.com</h3>
	<p>Phil gives this as an example of an address he could have if he was perverse enough to want it. By my reading of RFC 5322, however, you can't escape an unquoted string like this. In fact John Klensin added an <a target="_blank" href="http://www.rfc-editor.org/errata_search.php?rfc=3696">erratum</a> to RFC 3696 for exactly this reason. Phil: you need to read the RFCs <em>and</em> the errata!</p>
	<h3>test."test"@example.com</h3>
	<p style="text-decoration:line-through">This is one of Dave Child's test cases and he claims it is a valid address. I don't agree that you can quote part of the string like this. If you read <a target="_blank" href="http://www.apps.ietf.org/rfc/rfc5322.html#sec-3.4.1">RFC 5322 Section 3.4.1</a> carefully, the local-part must be <strong>either</strong> a quoted-string or a dot-atom, not both.</p>
	<p>Both <a target="_blank" href="http://www.addedbytes.com/blog/email-address-validation-v2/">Dave Child</a> and <a target="_blank" href="http://www.iamcal.com/publish/articles/php/parsing_email/">Cal Henderson</a> kindly wrote to me and pointed out that this form is valid, although obsolete. This is clear if you read RFC 5322 right down to the small print at the bottom :-)</p>
	<h3>test@123.123.123.123</h3>
	<p>Another one of Dave Child's test cases which also turns out to be invalid contrary to his expectation. Looking at <a target="_blank" href="http://www.apps.ietf.org/rfc/rfc3696.html#sec-2">RFC 3696 Section 2</a>, it says "There is an additional rule that essentially requires that top-level domain names not be all-numeric." I'm not sure what authority the author of RFC 3696 is citing here, and it's only an informational RFC, but I think it most unlikely there will ever be all-numeric TLDs.</p>
	<h3>"test\test"@example.com</h3>
	<p style="text-decoration:line-through">Dave Child expects this to fail - in other words it is an invalid address. I disagree, citing RFC 3696 again: "any ASCII character, including control characters, may appear quoted, or in a quoted string". This includes the backslash, so this is a perfectly good email address (although not one I'd recommend you take).</p>
	<p>I've rethought this and I now believe Dave Child was right all along. It all comes down to what RFC 3696 means by "quoted" and "quoted string". These are technical terms, defined in RFC 5322, and it's clear from there that a backslash must be escaped even in a quoted string. Apologies to Dave Child for doubting him :-).</p>
	<p>Cal Henderson weighed in on this example too. Our consensus is that a backslash can escape <em>anything</em> in a quoted string (but it has to escape <em>something</em> - it can't be the last character in the string).</p>
	<h3>Doug Lovell's function</h3>
	<p>Doug Lovell <a target="_blank" href="http://www.linuxjournal.com/article/9585">published</a> a well-argued function in Linux Journal in 2007, but I can't use it here because his code is copyright All Rights Reserved by Linux Journal (ironically).</p>
	<p>Unfortunately this widely-read article completely ignores the errata to RFC 3696 and is thus dangerously misleading. I'm disappointed that such a widely-cited article has not been corrected either by the author or the publisher since 2007.</p>
	<p>Doug's article is also wrong to claim that domain labels must start with an alphabetic character. This was changed in 1989 by <a target="_blank" href="http://tools.ietf.org/html/rfc1123#section-2.1" target="_blank">RFC 1123</a> to allow domains such as <a target="_blank" href="http://www.3com.com" target="_blank">3com.com</a>.</p>
	<h3>A final note</h3>
	<p>I've extracted the raw specification of a valid email address in BNF (<a target="_blank" href="http://en.wiktionary.org/wiki/Backus-Naur_form">Backus-Naur form</a>) from RFC 5322 and put it here: <a target="_blank" href="../source/is_email/extras/RFC5322BNF.html">The BNF from RFC 5322 defining parts of a valid email address</a>. If you try to follow this in the RFC you end up going backwards and forwards and getting confused - it's much easier to understand in the way I've laid it out.</p>
	<hr />
	<p style="clear:left"><strong><a href="results.php">Go to full results and analysis &raquo;</a></strong></p>

	<p class="thrust mini">
	&lt; Back to <a href="<?php echo $_SESSION['path']['browseroot'] ?>/">Home</a>
	| Blog posts: <a target="_blank" href="http://blog.dominicsayers.com/tag/email-address-validation/">Email address validation</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/tag/code/">Code</a>
	| <a target="_blank" href="http://blog.dominicsayers.com">Latest post</a>
	</p>
	<hr />
	<div id="comments">
		<div id="disqus_thread">
		</div>
	</div>
	<script src="http://disqus.com/forums/dominicsayers/embed.js" type="text/javascript"></script>
	<noscript>
	<a target="_blank" href="http://dominicsayers.disqus.com/?url=ref">View the discussion
	thread.</a>
	</noscript>
	<a class="dsq-brlink" href="http://disqus.com">blog comments
	powered by <span class="logo-disqus">Disqus</span></a>
</div>

<div id="sidebar_left"> <?php include("../_includes/left-sidebar.php"); ?> </div>
<div id="sidebar_right"><?php include("../_includes/right-sidebar.php"); ?></div>
<div id="banner">       <?php include("../_includes/banner.php"); ?>       </div>

<?php include("../_includes/analytics.php"); ?>
</body>
</html>

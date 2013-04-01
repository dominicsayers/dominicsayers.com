<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<meta content="text/html;charset=UTF-8" http-equiv="Content-type" />
<title><?php echo $_owner_full_name?> - <?php echo $_section_title?> - <?php $page_title="Tagging in the corporate environment, part 1"; echo $page_title; ?></title>
<style type="text/css">
@import url('../CSS/style.php');
/* just some basic formatting, no layout stuff */
@import url('../CSS/layout.php');
/* 3-column liquid layout */
</style>
</head>

<body>

	<?php include "../_includes/banner.php"; ?>
<div id="sidebar_left">
	<!--#include virtual="/_includes/inbrief.html" --></div>
<div id="sidebar_right">
	<!--#include virtual="/_includes/sidebar_right.htm" --></div>
<div id="centre_content">
	<h2>Tagging in the corporate environment, part 1</h2>
	<p class="justify">Right, so if you’ve read <a href="tagging101.php">Tagging
	101</a> and <a href="gloryofthegarden.php">The Glory of the Garden</a> we should
	all be on the same page now? That or you’ve flamed me and gone somewhere else.
	If you’re still reading I assume we are in general agreement so far.</p>
	<p class="justify">What is special about the corporate environment?</p>
	<h3>Tagging heterogeneous assets</h3>
	<p class="justify">Flickr, Gmail and delicious.com all allow tagging of a particular
	object: photographs, emails and internet links respectively. Corporate networks
	contain assets of many kinds. Those listed are joined by documents on fileshares
	and objects in databases and applications. Should we implement a separate tagging
	mechanism for each asset class?</p>
	<h3>Documents</h3>
	<p class="justify">I mentioned in Tagging 101 that there was no good way of
	tagging your local documents at the moment. We are stuck with the file name
	and the folder hierarchy they live in to classify them. This is bad on a personal
	scale, but in a corporate environment with hundreds of teams working on thousands
	of document sets it is a ridiculous way to manage documents.</p>
	<p class="justify">This is why document management tools gained some traction
	a few years ago. What they provided was, seemingly, exactly what we are after
	- a way of appending multiple classifications to a document so as to be able
	to extract any subset with simple filters. The way they did it was to seize
	the document, put it in a walled garden and restrict the ways you could access
	it to conform to their modus operandi. There are some good reasons for this:
	if you implement a tagging system separate from the document storage then you
	are open to the link becoming stale if a document is moved.</p>
	<p class="justify">The operating system vendors are aware of this. Microsoft
	has repeatedly tried to add this functionality to their filing system but has
	never got <a href="http://en.wikipedia.org/wiki/WinFS" target="_blank">WinFS</a>
	actually released, either separately or bundled with Windows. Apple are working
	on a similar concept that may be in OS X 10.5 or more likely OS XI (or whatever).
	No doubt Linux file system coders are catching up fast.</p>
	<p class="justify">The key thing is to know why you are tagging a document:
	is it so you can be sure of finding it again later, or is it so it comes high
	up in a general search for relevant material? For the former you want a sure-fire
	way of knowing that whenever you enter that tag, the document will appear. For
	the latter it is probably OK if the odd document drops down the search results
	due to losing its tags.</p>
	<h3>Objects in applications</h3>
	<p class="justify">A portfolio of applications in any corporate environment
	is likely to have several key systems whose data is consumed by many other applications.
	Many corporations invest large sums of money in enterprise data management solutions
	to ensure that the key objects like customer and contact data, product data
	and transaction data are warehoused centrally and consumed widely.</p>
	<p class="justify">It would surely be beneficial if there was a mechanism whereby
	a user could tag these objects with keywords that were meaningful to him or
	her. Some functions of a CRM system could be replaced by allowing people to,
	say, make their own christmas card list by tagging contacts with “Xmas card”
	(or “holiday greetings” if they are PC enough). Maybe not a great example, but
	one can see the principle and the opportunities such a general mechanism would
	present.</p>
	<p class="justify">I do not believe there exists a tagging system that will
	allow us to aggregate the tags from all these sources, still less one that allows
	us to centrally manage the tags on heterogeneous assets.</p>
	<h3>Respecting access control lists (ACLs)</h3>
	<p class="justify">This is a challenge for any public paradigm that wants to
	live in the corporate ecosystem. Public search engines tag what is public. It
	is a simple binary decision: can I see it? Yes, so index it.</p>
	<p class="justify">A corporate search engine needs privileged access to everything,
	but needs to restrict who sees which search results. It needs to preserve the
	ACL of each link it discovers and match that with the credentials of the person
	doing the search.</p>
	<p class="justify">The parallel with corporate tagging is exact.</p>
	<p class="justify">You should be able to tag what you can see (whatever it is)
	and manage your tags like any set of bookmarks. However much of the value of
	tagging for the enterprise lies in the aggregation of those tags over the whole
	population of users and this cannot be done without preserving the ACLs of the
	assets being tagged. If I wanted to see what other people had tagged with “merger
	rumour” then the results have to depend on my access to the tagged documents,
	emails, whatever.</p>
	<h3>Integration with other tagspaces</h3>
	<p class="justify">If we cannot create a single uber-tagging system for the
	entire enterprise then the task remains to integrate all the separate tags from
	individual systems. This can be achieved with the right enterprise search platform,
	which can be trained to understand a search term such as “tag:merger_rumour”
	as relating to intranet page tags, SocialText page categories, Sharepoint document
	categories, CRM system tags and others, and integrate them in the search results.</p>
	<p class="justify">We should also recognise that the external tag-based systems
	may also have value in this context. The analogy here is with the internal knowledge-base
	wiki and the external Wikipedia. If there is a perfectly good article in the
	Wikipedia then there is no need to write one for the internal wiki, and if it
	doesn’t exist then write one. Externally. If there is specific local knowledge
	of commercial sensitivity then a codicil can be written for the internal wiki.
	It is only for purely internal knowledge that a full internal wiki article needs
	to be written. The challenge is to combine these two resources seamlessly into
	a single knowledge base.</p>
	<p class="justify">Again there is an exact analogy with tagging systems. To
	tag an internet link with a general-purpose tag might as well be done in delicious.com,
	then it is available to you even outside the work context. Tags with an internal
	meaning should be done in the internal system even if it relates to an external
	resource.</p>
	<p class="justify">But wait - this is too complicated for people to operate!
	In the end people will tag wherever it is easiest for them to do so. We have
	to accept that and make sure that a search produces useful results wherever
	it finds the tags. If we enable heuristic tools like tag clusters and tag clouds
	in the corporate environment they need (optionally to the user) to include tags
	from external systems too.</p>
	<p class="justify">It’s a sizeable challenge. I don’t see any of the current
	contenders (<a href="http://domino.watson.ibm.com/cambridge/research.nsf/242252765710c19485256979004d289c/1c181ee5fbcf59fb852570fc0052ad75" target="_blank">dogear</a>
	[more
	<a href="http://acmqueue.com/modules.php?name=Content&amp;pa=showpage&amp;pid=344" target="_blank">
	here</a>] or <a href="http://blog.cogenz.com/?p=8" target="_blank">Cogenz</a>)
	really stepping up to the plate. It’s taken a long time for the search engine
	people to understand the corporate space, I think it will take an equally long
	time for vendors to get to grips with enterprise tagging to deliver its full
	value.</p>
	<p class="ramble mini">I would welcome feedback on this article. Please leave
	a comment
	<a href="http://blog.dominicsayers.com/2006/03/23/tagging-in-the-corporate-environment/" target="_blank">
	here</a></p>
	<p class="thrust mini">&lt; Back to <a href="<?php echo $_SESSION['path']['browseroot'] ?>/tagging">Tagging and social software</a>
	|
	<a href="http://blog.dominicsayers.com/2006/03/23/tagging-in-the-corporate-environment/" target="_blank">
	Original post</a> |
	<a href="http://blog.dominicsayers.com/tag/social-software/tagging/" target="_blank">
	Other posts with this tag</a> |
	<a href="http://blog.dominicsayers.com" target="_blank">Latest post</a> </p>
</div>

<?php include("../_includes/analytics.php"); ?>
</body>

</html>

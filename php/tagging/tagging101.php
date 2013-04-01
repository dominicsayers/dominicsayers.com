<?php require_once 'context/section-context.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html><head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title><?php echo $_owner_full_name?> - <?php echo $_section_title?> - <?php $page_title="Tagging 101"; echo $page_title; ?></title>

<link href="../CSS/layout.php" rel="stylesheet" type="text/css" />
<link href="../CSS/style.php" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="centre_content">
	<h2>Tagging 101</h2>
	<p class="emphasis">
Background – the drivers for tagging
	</p><p>
How do you find stuff on your computer and on the internet? Most people use a variety of ways. You will probably use a search engine to find internet sites and maybe a desktop search tool to find files on your computer. In all likelihood you will also put your documents in a set of folders that means something to you: a different folder for different projects maybe.
	</p><p>
A lot of people have found the folder hierarchy gets unmanageable after a while. If you have a folder for each project and a folder for each person you correspond with, where do you put a document that relates to a project from a particular correspondent? If you go with a single hierarchy (e.g. project folders) then how do you find all correspondence from a particular person if you have worked on multiple projects together?
	</p><p>
And this only covers documents. Your emails will probably be organized in a similar way so you will have two folder hierarchies that you need to keep synchronized. Is a particular document in its project folder or still attached to an email in the other set of folders?
	</p><p>
People who consume a lot of information on the internet sometimes work in a similar way. Your browser supports bookmarks (or Favorites in Internet Explorer). When you accumulate a lot of bookmarks you start organizing them into folders that are meaningful at the time. Then you run into exactly the same problems you have with your documents and emails, except now you have three folder hierarchies to keep in synchronization.
	</p><p>
For internet links there is an answer: <a target="_blank" href="http://delicious.com">delicious.com</a> and other similar services let you simply tag a web page with some keywords that are meaningful to you. You can be as systematic about this as you want, but the essential feature that makes it better than organizing stuff in folders is that you can add multiple tags to a particular web page. So if it relates to a particular project then tag it with the project name and if it relates to your work with a particular person then tag it with that person’s name too.
	</p><p>
You can easily retrieve all your stored links that relate to a particular tag by clicking on the tag. Of course you can also restrict that list to any combination of tags – all the links that relate to a project and a particular person. It’s so easy I have never met anybody who didn’t get it almost instantly, and that’s why delicious.com has been such a success.
	</p><p>
Tagging has been extended to email by <a target="_blank" href="http://www.gmail.com">Gmail</a>. Uniquely, Gmail does not allow you to organize your emails into folders. Instead it allows you to give them multiple labels. Finding an old email in Gmail is easy because you can use the labels as if they were folders but you can also search for any text in the email very quickly.
	</p><p>
One thing you can’t use full-text search for is photographs. Digital cameras are now so ubiquitous that Kodak have stopped making film cameras. Many people are now building up large collections of photographs on their hard disks and face the same organizational problems that they have with other documents. But the added problem with photographs is that the filing system is the only way to find them: the folder name and the file name are the only clues to the content of the photograph. If you want to find all photographs that show Aunt Mabel then good luck – I hope your naming convention is thorough.
	</p><p>
Tagging is the answer to this problem too. There have always been image database applications you can install on your PC, but now many people upload their photographs to sites like <a target="_blank" href="http://www.flickr.com">Flickr</a>. Flickr lets you add as many tags to the photograph as you like so you can always find photographs that show Aunt Mabel, were taken on your holiday to Cleethorpes or show a sunset even if a particular photograph matches all three categories.
	</p><p>
So how do I find all material that relates to the Andromeda Project that I am working on? Well here’s the gotcha (today anyway) – there’s nowhere I can go to type “Andromeda” and find all my Gmail labeled with Andromeda, all my Flickr photographs tagged with Andromeda, all my web pages tagged with Andromeda in delicious.com and all the documents on my computer tagged with Andromeda. There isn’t even a way to tag my local documents with a project name except by putting them in the Andromeda folder.
	</p><p>
So tagging is good. It’s better than multiple synchronized folder hierarchies. But it’s not delivering everything it could to me today. If you start tagging things now you will find yourself in a better position with your stuff straight away, but tomorrow you may find things are even more magical when somebody figures out a way to integrate all these tag repositories together at your desktop.
	</p>
	<p class="ramble mini">I would welcome feedback on this article. Please leave a comment
	<a target="_blank" href="http://blog.dominicsayers.com/2006/03/23/tagging-101/">here</a></p>
	<p class="thrust mini">
	&lt; Back to <a href="<?php echo $_SESSION['path']['browseroot'] ?>/tagging">Tagging and social software</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/2006/03/23/tagging-101/">Original post</a>
	| <a target="_blank" href="http://blog.dominicsayers.com/tag/social-software/tagging/">Other posts with this tag</a>
	| <a target="_blank" href="http://blog.dominicsayers.com">Latest post</a>
	</p>
</div>

<div id="sidebar_left"> <?php include("../_includes/left-sidebar.php"); ?> </div>
<div id="sidebar_right"><?php include("../_includes/right-sidebar.php"); ?></div>
<div id="banner">       <?php include("../_includes/banner.php"); ?>       </div>

<?php include("../_includes/analytics.php"); ?>
</body>
</html>

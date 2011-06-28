<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009 
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	$pageTitle 		= "EMF Client Platform - Communication";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>How to get in contact with us or receive news about EMF Client Platform</h2>

<h3>Mailinglists and Newsgroup</h3>

<p>Please post any questions about the EMF Client Platform in the <a href="http://www.eclipse.org/forums/eclipse.emfstore"> EMFT Eclipse newsgroup </a>.

If you have feature requests, questions, bugs or if you want to discuss something, you can send us email to this mailinglist, where all EMF Client Platform framework developers are subscribed to:

<a href="mailto:emfstore-dev@eclipse.org"> emfstore-dev@eclipse.org </a>
</p>


<h3>Bug Reports and Feature Requests</h3>

You can report bugs and feature requests in the <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=EMFT.emfclient"> bugzilla of Eclipse</a>.

Also you can report bugs and feature requests to the <a href="mailto:emfclient-dev@eclipse.org"> developer mailinglist</a>.

<h3>Twitter</h3>

We announce import news such as releases on Twitter:
<a href="http://twitter.com/emfstore">http://twitter.com/emfcp</a>
We always use the #emfcp tag.



<h3>Plain Email</h3>

<p>Of course you can also send direct email to one of the project leads:</p>

</br>
<p>
<img src="images/maximilian.jpg" height =210 />
<a href="mailto:maximilian@emfstore.org">Maximilian</a>
</p>
</br>
<p>
<img src="images/jonas.jpg" height =210 />
<a href="mailto:jonas@emfstore.org">Jonas</a>
</p>
</p>





</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
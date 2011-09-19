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

	$pageTitle 		= "EMF Client Platform - Register a model";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>Register a model</h2>

<div id="screencast">


<object height="344" width="425"><param name="movie" value="http://www.youtube.com/watch?v=tqQhB2L0cno?hl=de&fs=1">
</param>
<param name="allowFullScreen" value="true">
</param>
<param name="allowscriptaccess" value="always">
</param>
<embed src="http://www.youtube.com/watch?v=tqQhB2L0cno?hl=de&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="344"></embed></object>
<p>
The only information required by the EMF Client Platform, is which model shall be used. Usually there are several EMF models registered in an Eclipse instance, for example GMF. As you probably only want to see your own model in the application, in our example the library model. The EMF Client Platform will try to guess the right model, once you launch it with your own model. A better way is to register your model and explicitly tell EMF Client Platform which modle to use. This is done with the following extension point. The example shows the registration of the library example model, please replace the model package with your model URI. The URI can be found in your Ecore: Open the Properties View on the root node of your model.</p>
<pre style='color:#000000;background:#ffffff;'><span style='color:#a65700; '>&lt;</span><span style='color:#5f5035; '>extension</span> <span style='color:#274796; '>point</span><span style='color:#808030; '>=</span><span style='color:#0000e6; '>"</span><span style='color:#0000e6; '>org.unicase.ui.common.ecpModelPackage</span><span style='color:#0000e6; '>"</span><span style='color:#a65700; '>></span>
      <span style='color:#a65700; '>&lt;</span><span style='color:#5f5035; '>modelPackage</span>
            <span style='color:#274796; '>modelPackage</span><span style='color:#808030; '>=</span><span style='color:#0000e6; '>"</span><span style='color:#0000e6; '>http:///org/eclipse/example/library.ecore</span><span style='color:#0000e6; '>"</span><span style='color:#a65700; '>></span>
      <span style='color:#a65700; '>&lt;/</span><span style='color:#5f5035; '>modelPackage</span><span style='color:#a65700; '>></span>
<span style='color:#a65700; '>&lt;</span><span style='color:#5f5035; '>extension</span><span style='color:#a65700; '>></span>
</pre>

 
</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
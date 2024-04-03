<<<<<<< HEAD
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>XVWA - Xtreme Vulnerable Web Application </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php include("header.php") ?>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <?php include("sidepanel.php") ?>
             </div>

            <div class="col-md-9">

               <?php include("home.html") ?>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <?php include("footer.html") ?>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<?php include_once('about.html'); ?>
</body>

</html>
=======
<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Welcome' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'home';

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>Welcome to Damn Vulnerable Web Application!</h1>
	<p>Damn Vulnerable Web Application (DVWA) is a PHP/MySQL web application that is damn vulnerable. Its main goal is to be an aid for security professionals to test their skills and tools in a legal environment, help web developers better understand the processes of securing web applications and to aid both students & teachers to learn about web application security in a controlled class room environment.</p>
	<p>The aim of DVWA is to <em>practice some of the most common web vulnerabilities</em>, with <em>various levels of difficultly</em>, with a simple straightforward interface.</p>
	<hr />
	<br />

	<h2>General Instructions</h2>
	<p>It is up to the user how they approach DVWA. Either by working through every module at a fixed level, or selecting any module and working up to reach the highest level they can before moving onto the next one. There is not a fixed object to complete a module; however users should feel that they have successfully exploited the system as best as they possible could by using that particular vulnerability.</p>
	<p>Please note, there are <em>both documented and undocumented vulnerability</em> with this software. This is intentional. You are encouraged to try and discover as many issues as possible.</p>
	<p>There is a help button at the bottom of each page, which allows you to view hints & tips for that vulnerability. There are also additional links for further background reading, which relates to that security issue.</p>
	<hr />
	<br />

	<h2>WARNING!</h2>
	<p>Damn Vulnerable Web Application is damn vulnerable! <em>Do not upload it to your hosting provider's public html folder or any Internet facing servers</em>, as they will be compromised. It is recommend using a virtual machine (such as " . dvwaExternalLinkUrlGet( 'https://www.virtualbox.org/','VirtualBox' ) . " or " . dvwaExternalLinkUrlGet( 'https://www.vmware.com/','VMware' ) . "), which is set to NAT networking mode. Inside a guest machine, you can download and install " . dvwaExternalLinkUrlGet( 'https://www.apachefriends.org/','XAMPP' ) . " for the web server and database.</p>
	<br />
	<h3>Disclaimer</h3>
	<p>We do not take responsibility for the way in which any one uses this application (DVWA). We have made the purposes of the application clear and it should not be used maliciously. We have given warnings and taken measures to prevent users from installing DVWA on to live web servers. If your web server is compromised via an installation of DVWA it is not our responsibility it is the responsibility of the person/s who uploaded and installed it.</p>
	<hr />
	<br />

	<h2>More Training Resources</h2>
	<p>DVWA aims to cover the most commonly seen vulnerabilities found in today's web applications. However there are plenty of other issues with web applications. Should you wish to explore any additional attack vectors, or want more difficult challenges, you may wish to look into the following other projects:</p>
	<ul>
		<li>" . dvwaExternalLinkUrlGet( 'https://github.com/webpwnized/mutillidae', 'Mutillidae') . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'https://owasp.org/www-project-vulnerable-web-applications-directory', 'OWASP Vulnerable Web Applications Directory') . "</li>
	</ul>
	<hr />
	<br />
</div>";

dvwaHtmlEcho( $page );

?>
>>>>>>> bitbucket/master

<?php 

/* Created By   : Kalpesh Thakkar
 * Created Date : 27-Nov-2012
 * File Name	: index.php
*/
// start the output buffer
ob_start();
session_start();
//GENERAL SETTINGS
error_reporting(E_ALL ^ E_NOTICE);	// display all errors except notices
@ini_set('display_errors', '1');	// display all errors
@ini_set('register_globals', 'Off');	// make globals off runtime
@ini_set('short_open_tag','On');

include("settings/db_settings.php");		//database connection configuration
include('settings/general_settings.php');	//general global variable declaration
include("settings/message_settings.php");	//All types of message declaration
include("lib/general_functions.class.php");	//General Functions definition
$GenFun=new GeneralFunction();
include("header.php");
?>

	<section role="main">
        <!--<article>
            <h2>Another article</h2>

            <p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in <a href="#">reprehenderit in voluptate</a> velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <img src="http://www.apexwallpapers.com/wp-content/uploads/2011/04/img-wallpapers-mac-osx-leopard-wallpaper-apple-osx-7820.jpg" width="1280" height="800" />
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
			<blockquote>
                <p>Lorem ipsum dolor sit amet.</p>

                <p>- Jean Paul II</p>
            </blockquote>
			<p>sunt in culpa qui officia deserunt mollit anim id est laborum.ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>-->		
		<?php 
			switch($_GET['p'])
			{
				case 'register' :
					include("register.php");
					break;
				case 'find' :
					include("find.php");
					break;
				case 'login' :
					include("login.php");
					break;
				case 'logout' :
					include("logout.php");
					break;
				default:
					include("index_body.php");
					break;
			}
		?>
	</section>
<?php include("footer.php"); ?>
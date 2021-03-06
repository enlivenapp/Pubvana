<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// sitemap
$route['sitemap\.xml'] 							= "sitemap/index";

// robots.txt
$route['robots\.txt'] 							= "sitemap/robots";

// single pages
$route['page/(:any)'] 						= 'pages/page/$1';

// blog posts

$route['blog/pagi/(:any)']					= 'blog/index/$1';
$route['blog/pagi']							= 'blog/index';
// anything else should be an actual post
$route['blog/(:any)'] 						= 'blog/post/$1';

// extra stuff 
$route['archive/(:any)']					= 'blog/archive/$1';
$route['category/(:any)'] 					= 'blog/category/$1';



// default stuff
$route['404_override'] 						= '';
$route['translate_uri_dashes'] 				= FALSE;

/*
   determine the default controller from the 
   admin settings.  

   code modified from: https://osvaldas.info/smart-database-driven-routing-in-codeigniter

 */
require_once( BASEPATH .'database/DB.php' );
$db =& DB();
if ( $result = $db->where('name', 'base_controller')->limit(1)->get('settings')->row() )
{
	// if we were able to connect and got a result
	// we set it to that result.
	$route['default_controller'] = $result->value;
}
else
{
	// else something went wrong and we'll 
	// default to the blog controller.
	$route['default_controller'] = 'blog';
}


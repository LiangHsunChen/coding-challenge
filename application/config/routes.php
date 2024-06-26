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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'books';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Required routes
# GET /books → Books::get_books
$route['books']['GET'] = 'books/get_books';
# POST /books/create → Books::create_book
$route['books/create']['POST'] = 'books/create_book';
# GET /books/{id} → Books::get_book
$route['books/(:num)']['GET'] = 'books/get_book/$1';
# POST /books/{id} → Books::update_book
$route['books/(:num)']['POST'] = 'books/update_book/$1';
# GET /books/delete/{id} → Books::delete_book
$route['books/delete/(:num)']['GET'] = 'books/delete_book/$1';

// Custom routes (for displaying views)
# GET /books/create → Books::view_create_page
$route['books/create']['GET'] = 'books/view_create_page';
# GET /books/view/{id} → Books::view_book
$route['books/view/(:num)'] = 'books/view_book/$1';

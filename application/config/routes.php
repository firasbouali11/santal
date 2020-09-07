<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Main';
$route["produits/filtred"] = "main/filtred";
$route["produits/searchProduct"] = "products/searchProduct";
$route["produits/(:any)"] = "main/single_product/$1";
$route["dashboard/product/(:any)"] = "dashboardMain/product/$1";
$route["dashboard/order/(:any)"] = "dashboardMain/order_details/$1";
$route["dashboard/category/(:any)"] = "dashboardMain/edit_category/$1";
$route["dashboard/admin"] = "dashboardMain/admin";
$route["dashboard/(:any)"] = "dashboardMain/home/$1";
$route["(:any)"] = "main/page/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

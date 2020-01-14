<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "principal";
$route['usuarios/login'] = 'usuarios/login';
$route['principal/usuario_panel'] = 'principal/usuario_panel';
$route['principal/inmuebles'] = 'principal/inmuebles';
$route['areas/ver_area'] = 'areas/ver_area';
$route['inmuebles/ver_inmueble'] = 'inmuebles/ver_inmueble';
$route['paneldecontrol/inicio'] = 'paneldecontrol/inicio';
$route['404_override'] = '';
//$route['permisos/panel_control_permiso/(:num)'] = 'permisos';//cuando no sea la primera página
//$route['permisos/panel_control_permiso/'] = 'permisos';//cuando no sea la primera página

/* End of file routes.php */
/* Location: ./application/config/routes.php */

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

$route['default_controller'] = 'HomeController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*$route['default_controller'] = 'LoginController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;*/

//login
$route['login'] = 'LoginController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//loguot
$route['logout'] = 'LoginController/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Forgot password
$route['forgotPassword'] = 'LoginController/forgotPassword';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['updatepassword'] = 'LoginController/updateAdminpassword';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Admin signup
$route['adminsignup'] = 'LoginController/signup';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['addadmin'] = 'LoginController/addAdmin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//dashboard
$route['dashboard'] = 'LoginController/dashboardView';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['vdashboard'] = 'LoginController/loadDashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['directorboardList'] = 'Directorboard/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['directorboard'] = 'Directorboard/directorboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['addupdatedirectorboard'] = 'Directorboard/addupdatedirectorboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['editdirectorboard/(:any)'] = "Directorboard/directorboard/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['achievementList'] = 'Achievement/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['achievement'] = 'Achievement/achievement';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['addupdateAchievement'] = 'Achievement/addupdateAchievement';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['editAchievement/(:any)'] = "Achievement/achievement/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['departmentCategoryList'] = 'DepartmentCategory/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['departmentCategory'] = 'DepartmentCategory/departmentCategory';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['addupdateDepartmentCategory'] = 'DepartmentCategory/addupdateDepartmentCategory';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['editDepartmentCategory/(:any)'] = "DepartmentCategory/departmentCategory/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['departmentInformationList'] = 'DepartmentInformation/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['departmentInformation'] = 'DepartmentInformation/departmentInformation';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['addupdateDepartmentInformation'] = 'DepartmentInformation/addupdateDepartmentInformation';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['editDepartmentInformation/(:any)'] = "DepartmentInformation/departmentInformation/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



$route['awardsEventsList'] = 'AwardsEvents/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['awardsEvents'] = 'AwardsEvents/awardsEvents';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['addupdateAwardsEvents'] = 'AwardsEvents/addupdateAwardsEvents';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['editAwardsEvents/(:any)'] = "AwardsEvents/awardsEvents/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



$route['socialActivityList'] = 'SocialActivity/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['socialActivity'] = 'SocialActivity/socialActivity';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['addupdateSocialActivity'] = 'SocialActivity/addupdateSocialActivity';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['editSocialActivity/(:any)'] = "SocialActivity/socialActivity/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['photoGallaryList'] = 'PhotoGallary/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['photoGallary'] = 'PhotoGallary/photoGallary';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['addupdatePhotoGallary'] = 'PhotoGallary/addupdatePhotoGallary';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['editPhotoGallary/(:any)'] = "PhotoGallary/photoGallary/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['certificateList'] = 'Certificate/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['certificate'] = 'Certificate/certificate';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['addupdateCertificate'] = 'Certificate/addupdateCertificate';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['editCertificate/(:any)'] = "Certificate/certificate/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['careerList'] = 'Career/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['career'] = 'Career/career';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['addupdateCareer'] = 'Career/addupdateCareer';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['editCareer/(:any)'] = "Career/career/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['tendarList'] = 'Tendar/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['tendar'] = 'Tendar/tendar';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['addupdateTendar'] = 'Tendar/addupdateTendar';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['editTendar/(:any)'] = "Tendar/tendar/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['financialPerformanceList'] = 'FinancialPerformance/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['financialPerformance'] = 'financialPerformance/FinancialPerformance';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['addupdateFinancialPerformance'] = 'financialPerformance/addupdateFinancialPerformance';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['editFinancialPerformance/(:any)'] = "FinancialPerformance/financialPerformance/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*................................................................*/

$route['about'] = 'AboutController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['department/(:any)'] = 'DepartmentController/index/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['portfolio'] = 'PortfolioController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['tender'] = 'TenderController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['financial_performance'] = 'FinancialController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['careers'] = 'CareerController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['contact'] = 'ContactController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function(){

     return "<h1> This is Home Page</h1>";
});




$router->get('/ChartDataSelect', ['middleware'=>'auth','uses'=>'ChartDataController@onAllSelect']);
$router->get('/ClientReviewSelect', ['middleware'=>'auth','uses'=>'ClientReviewController@onAllSelect']);
$router->post('/ContactDataInsert', ['middleware'=>'auth','uses'=>'ContactController@onContactDataSend']);


/*CoursesTable*/
$router->get('/CourseHomeSelect', ['middleware'=>'auth','uses'=>'CourseController@onSelectHome']);
$router->get('/CourseAllSelect', ['middleware'=>'auth','uses'=>'CourseController@onSelectAll']);
$router->post('/CourseDetailsSelect', ['middleware'=>'auth','uses'=>'CourseController@onSelectDetails']);


$router->get('/FooterSelect', ['middleware'=>'auth','uses'=>'FooterController@onSelect']);
$router->get('/InformationSelect', ['middleware'=>'auth','uses'=>'InformationController@onSelect']);
$router->get('/ServiceSelect', ['middleware'=>'auth','uses'=>'ServiceController@onSelect']);


/*Projects_Table*/
$router->get('/ProjectHomeSelect', ['middleware'=>'auth','uses'=>'ProjectController@onSelectHome']);
$router->get('/ProjectAllSelect', ['middleware'=>'auth','uses'=>'ProjectController@onSelectAll']);
$router->post('/ProjectDetailsSelect', ['middleware'=>'auth','uses'=>'ProjectController@onSelectDetails']);


/*Home_Etc_Table*/
$router->get('/SelectVideoHome', ['middleware'=>'auth','uses'=>'HomeEtcController@SelectVideoHome']);
$router->get('/SelectTotalProjectClient', ['middleware'=>'auth','uses'=>'HomeEtcController@TotalProjectClientHome']);
$router->get('/SelectTechDescription', ['middleware'=>'auth','uses'=>'HomeEtcController@SelectTechDescription']);
$router->get('/SelectHomeTopTitle', ['middleware'=>'auth','uses'=>'HomeEtcController@SelectHomeTopTitle']);







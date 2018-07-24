<?php

use App\Project;

Route::get('/', function () {
    
    return view('welcome');
});

Route::get('/events', 'EventsController@index');

Route::get('/events-realized', 'EventsController@realized');

Route::get('/events-planed', 'EventsController@planed');

Route::get('/events/{id}','EventsController@show');
    

Route::get('/projects', 'ProjectsController@index');

Route::post('/projects', 'ProjectsController@store');

Route::get('/projects/create', 'ProjectsController@create');

Route::get('/projects/{id}', 'ProjectsController@show');

Route::get('/projects-active', 'ProjectsController@active');

Route::get('/projects-closed', 'ProjectsController@closed');

Route::post('/projectcomments', 'ProjectCommentsController@store');
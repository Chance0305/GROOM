<?php
use src\App\Route;

// index page
Route::GET("/", "MainController@main");
Route::GET("/error", "MainController@error");

Route::GET("/login", "UserController@loginView", "logout");
Route::POST("/login", "UserController@login", "logout");
Route::GET("/join", "UserController@joinView", "logout");
Route::POST("/join", "UserController@join", "logout");
Route::GET("/logout", "UserController@logout", "login");

Route::GET("/filelist", "FileController@filelistView", "login");
Route::GET("/filemanage", "FileController@filemanageView", "login");
Route::GET("/filemanage/out/{idx}", "FileController@outshareFile", "login");
Route::GET("/filemanage/del/{idx}", "FileController@deleteFile", "login");

Route::GET("/uploader", "FileController@uploaderView", "login");
Route::POST("/uploader", "FileController@uploader", "login");

Route::GET("/outshare", "FileController@outshareView", "login");
Route::GET("/outshare/{code}", "FileController@outshare");

Route::GET("/mailform", "MailController@mailformView", "login");
Route::POST("/mailform", "MailController@mailform", "login");
Route::GET("/mailbox", "MailController@mailbox", "login");
Route::GET("/mailbox/{idx}", "MailController@mailView", "login");


Route::init();
?>
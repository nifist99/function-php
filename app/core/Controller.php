<?php 

Class Controller{

//ini adalah method untuk memanggil views

 public function view($view,$data=[]){
 	
 	require_once('../app/views/'.$view.'.php');
 }


 //ini adalah method untuk memanggil model atau tabel di database

  public function model($model){
 	
 	require_once('../app/model/'.$model.'.php');
 	return new $model;

 }

}
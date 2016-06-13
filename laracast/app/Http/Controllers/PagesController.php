<?php

namespace App\Http\Controllers;



class PagesController extends Controller
{
    public function home()
    {


    	$people = ["Sam", "Joe", "Kelly"];

	return view('welcome', compact('people'));
    }

    public function contact()
    {

    	return view('contact');

    }

    // This function will show the view
 public function showForm()
 {
  return View::make('contactform');
 }

 public function handleFormPost()
 {
  // All code for handling the input comes here later on
 }




}

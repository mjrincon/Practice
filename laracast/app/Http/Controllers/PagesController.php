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
  $input = Input::only('name', 'email', 'msg');

  $validator = Validator::make($input,
      array(
          'name' => 'required',
          'email' => 'required|email',
          'msg' => 'required',
      )
  );

  if ($validator->fails())
  {
      return Redirect::to('contact')->with('errors', $validator->messages());
  } else { // the validation has not failed, it has passed


   // Send the email with the contactemail view, the user input
   Mail::send('contactemail', $input, function($message)
   {
       $message->from('your@email.address', 'Your Name');

       $message->to('your@email.address');
   });

   // Specify a route to go to after the message is sent to provide the user feedback
   return Redirect::to('thanks');
  }

 }





}
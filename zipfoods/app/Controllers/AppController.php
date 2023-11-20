<?php

namespace App\Controllers;

class AppController extends Controller
    //{
    /**
     * This method is triggered by the route "/"
     */
    //    public function index()
    //   {
    //       $welcomes = ['Welcome', 'Aloha', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];

    //      return $this->app->view('index', [  // two parameters, name of view file without directory, index om view ends with .blade.php - has syntax
    //         'welcome' => $welcomes[array_rand($welcomes)],  //$welcomes[array_rand($welcomes)
    //  'time' => date('g:ia') //returns the view
    //       ]);
    //   }
    //   public function contact()
    //   {
    //  return  "hello";  returns a string as a test  NOT WORKING
    //      return $this->app->view('contact', ['email' => 'support@zipfoods.com']);  // make contact file in views

    //   }
    //}

    // 3.  next:  views<index.blade - has content,

    // any data you want available to view needs to be explicitly passed
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {

        return $this->app->view('index');
    }

    public function contact()
    {
        return $this->app->view('contact', [
            'email' => 'support@zipfoods.com'
        ]);
    }

    // HOMEWORK
    public function about()
    {
        return $this->app->view(
            'about',
            ['about' => 'About'
            ]
        );
    }
}
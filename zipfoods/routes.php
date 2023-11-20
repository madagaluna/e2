<?php

# Define the routes of your application

//return [
# Ex: The path `/` will trigger the `index` method within the `AppController`
//    '/' => ['AppController', 'index'],
//   '/contact' => ['AppController', 'contact'],  // then go to appcontroller to create method for this
//];

// 2. has array - each element entry to application, default is the '/' in url  Controllers is here work is delegated.  Gt app>controllers>appcontroller next
return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    '/contact' => ['AppController', 'contact'],
     '/about' => ['AppController', 'about'],  //hmwrk - which controller and what method. then go to appcontroller
     '/products' => ['ProductsController', 'index'],
];
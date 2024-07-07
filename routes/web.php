<?php
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home',[
        'name' => "Developer",
        'frameworks' => [
            'Laravel', 'Vue' , "Inertia","TailwindCss"
        ]
    ]);
});

Route::get('Users',function (){
   return Inertia::render('Users',[
       'time' => now()->toTimeString(),
   ]);
});


Route::get('Setting',function (){
   return Inertia::render("Setting");
});

Route::post('logout',function (){
   return dd("Login the User Out");
});

//nav>ul>li*3>a[href=#]

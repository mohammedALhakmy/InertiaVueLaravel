<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home',[
        'frameworks' => [
            'Laravel', 'Vue' , "Inertia","TailwindCss"
        ]
    ]);
});

//Route::get('Users',function (){
//   return Inertia::render('Users',[
//       'users' => User::all()->map(fn($user)=>[
//           'id' => $user->id,
//          'name' => $user->name,
//       ]),
//   ]);
//});

Route::get('Users', function () {
        return Inertia::render('Users', [
            'users' =>  User::paginate(5)->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name
            ]),
        ]);
});

Route::get('Users/{id}/edit',function (){
   dd("ddd");
});


Route::get('Setting',function (){
   return Inertia::render("Setting");
});

Route::post('logout',function (){
   return dd("Login the User Out");
});

//nav>ul>li*3>a[href=#]

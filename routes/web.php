<?php

use App\Models\User;
use Illuminate\Support\Facades\Request;
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
        return Inertia::render('Users/Users', [
            'users' =>  User::query()
                            ->when(Request::input('search'),function ($query,$search){
                                $query->where('name','Like',"%{$search}%");
                            })
                            ->paginate(5)
                ->withQueryString()
                            ->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name
            ]),
            'filters' => Request::only(['search'])
        ]);
});

Route::get('Users/{id}/edit',function (){
   dd("ddd");
});

Route::post('/Users',function (){
   $validate = Request::validate([
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required',
   ]);
   User::create($validate);
   return redirect("/Users");
});

Route::get('/Users/Create',function (){
   return Inertia::render('Users/Create');
});

Route::get('Setting',function (){
   return Inertia::render("Setting");
});

Route::post('logout',function (){
   return dd("Login the User Out");
});

//nav>ul>li*3>a[href=#]

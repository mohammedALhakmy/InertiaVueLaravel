<?php

use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'store']);
Route::middleware('auth')->group(function (){
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
                'name' => $user->name,
                'email' => $user->email,
                'can' => [
                    'edit' => \Illuminate\Support\Facades\Auth::user()->can('edit',$user)
                ]
            ]),
            'filters' => Request::only(['search']),
            'can' => [
//                'createUser' => \Illuminate\Support\Facades\Auth::user()->email === "mohammed@gmail.com"
                'createUser' => \Illuminate\Support\Facades\Auth::user()->can('create',User::class)
            ]
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
//})->middleware('can:create,App\Models\User');
})->can('create','App\Models\User');

Route::get('Setting',function (){
   return Inertia::render("Setting");
});

    Route::post('/logout',[LoginController::class,'destroy'])->middleware('auth');

});

//nav>ul>li*3>a[href=#]
// npm install lodash --save-dev
//https://dar-co.com.sa/projects/
// php artisan make:policy UserPolicy --model=User

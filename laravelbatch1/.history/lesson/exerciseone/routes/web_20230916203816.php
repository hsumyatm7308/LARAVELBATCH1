<?php

use App\Http\Controllers\employeesController;
use App\Http\Controllers\membersController;
use App\Http\Controllers\staffsController;
use App\Models\Role;
use App\Models\Tag;
use Doctrine\DBAL\Types\Types;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentsController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Models\Gender;
use App\Models\User;
use App\Models\Type;
use App\Models\Item;
use App\Models\Photo;
use App\Models\Phone;
use Carbon\Carbon;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sayar', function () {
    return 'Hey,Sayar Nay Kaung Lar??';
});

Route::get('sayhi', function () {
    return 'Hi Mingalarpar';
});


// Route::get("/",function(){
//    return view("aboutme");
// });

// // (or) 

// Route::view("about","aboutme");

Route::get('/about/company', function () {
    return view('aboutcompany');
});


// // Route::get('about/company','aboutcompany');

Route::redirect('contact', 'about/company');

route::get('about/company/{staff}', function ($staff) {
    return view('aboutcompanystaff', ['sf' => $staff]);
});

route::get('about/company/{staff}/{city}', function ($staff, $city) {
    return view('aboutcompnaystaffbycity', ['sf' => $staff, 'ct' => $city]);
});


Route::get('profile', function () {
    return view('profilme');
})->name('profiles');



// Route::get("students",[\App\Http\Controllers\studentsController::class,'index'])->name('students.index');
// Route::get("students/show",[\App\Http\Controllers\studentsController::class,'show'])->name('students.show');
// Route::get("students/edit",[\App\Http\Controllers\studentsController::class,'edit'])->name('students.edit');

// Route::group(['prefix=>students'],function(){
// Route::get("students",[\App\Http\Controllers\studentsController::class,'index'])->name('students.index');
// Route::get("students/show",[\App\Http\Controllers\studentsController::class,'show'])->name('students.show');
// Route::get("students/edit",[\App\Http\Controllers\studentsController::class,'edit'])->name('students.edit');

// });

Route::name('students.')->group(function () {
    Route::get("students", [studentsController::class, 'index'])->name('index');
    Route::get("students/show", [studentsController::class, 'show'])->name('show');
    Route::get("students/edit", [studentsController::class, 'edit'])->name('edit');

});


Route::get('/staffs', [staffsController::class, 'home'])->name('staffs.home');
Route::get('/staffsparty', [staffsController::class, 'party'])->name('staffs.party');
Route::get('/staffsparty/{total}', [staffsController::class, 'partytotal'])->name('staffs.total');
Route::get('/staffsparty/{total}/{status}', [staffsController::class, 'partytotalcomfirm'])->name('staffs.status');


Route::get('employees', [employeesController::class, 'index'])->name('employees.index');
Route::get('/employees/show', [employeesController::class, 'index'])->name('employees.show');
Route::get('/employees/show', [employeesController::class, 'show'])->name('employees.show');
Route::get('employees/passingdataone', [employeesController::class, 'passingdataone'])->name('employees.dataone');
Route::get('employees/passingdatatwo', [employeesController::class, 'passingdatatwo'])->name('employees.datatwo');
Route::get('employees/passingdatathree', [employeesController::class, 'passingdatathree'])->name('employees.datathree');
Route::get('employees/passingdatafour', [employeesController::class, 'passingdatafour'])->name('employees.datafour');
Route::get('/employees/edit', [employeesController::class, 'edit'])->name('employees.edit');
Route::get('/employees/update', [employeesController::class, 'update'])->name('employees.update');



Route::get('/dashboards', [dashboardController::class, 'index'])->name('dashboards.index');
Route::get('/members', [membersController::class, 'index'])->name('members.index');



//Data Insert from route 
// use Illuminate\Support\Facades\DB 
Route::get('types/insert', function () {
    DB::insert("INSERT INTO types(name) value(?)", ["book"]);
    return "Successfully Insert";
});

Route::get('types/insert', function () {
    DB::insert("INSERT INTO types(name) value(?)", ["pdf"]);
    return "Successfully Insert";
});


Route::get('types/read', function () {
    $result = DB::select("SELECT * FROM types");
    return $result;
});


// Route::get('types/read',function(){
//     $result =  DB::select("SELECT * FROM types");

//     foreach($result as $type){
//    echo $type->name. "<br>";
//     }
//  });


//  Route::get('types/read',function(){
//     $result =  DB::select("SELECT * FROM types");

//   var_dump($result);
//  });


//  Route::get('types/read',function(){
//     $result =  DB::select("SELECT * FROM types WHERE id=?",[3]);
//      return $result;
//  });




Route::get('students/insert', function () {
    DB::insert('INSERT INTO students(name, phonenumber, city, address) VALUES (?, ?, ?, ?)', ['aung aung', '11111', 'yangon', 'alone']);
    return "Data Insert";
});

Route::get('students/update', function () {
    DB::update("UPDATE types SET name='ebook' WHERE id=? ", ['4']);
    DB::update("UPDATE types SET name='pdf' WHERE id=? ", ['4']);
    return "Data Updated";

});


Route::get('shopper/update', function () {
    DB::update("UPDATE shopper SET fullname=?,phone=?,city=? WHERE id =?", ['kyaw kayw', '222222', 'bago']);
    return "Data Updated";

});

Route::get('shopper/delete', function () {
    DB::delete("DELETE FROM shopper WHERE id=?", [1]);
    return "Data Delete";

});


Route::get('shoppers/read', function () {

    // $results = DB::select("SELECT * FROM shoppers");
    // $results = DB::select("SELECT * FROM shoppers WHERE id = ?",[6]);


    // =>selet(columns)
    // =>selectRaw(expression)

    //  $results = DB::table('types')->get();
    //  $results = DB::table('shopper')->select('*')->get();
    //  $results = DB::table('shopper')->selectRaw('*')->get();
    //  $results = DB::table('shopper')->select(DB::raw('*'))->get();
    //  $results = DB::table('shopper')->selectRaw(DB::raw('*'))->get();

    // $results = DB::table('shopper')->select('fullname')->where('id', 5)->get();
    // $results = DB::table('shopper')->select('fullname', 'phonenumber', 'city')->where('id', 5)->get();
    // $results = DB::table('shopper')->select('fullname', 'phonenumber', 'city')->where('id', "<>", 5)->get();


    // $results = DB::table('shopper')->select(DB::raw('fullname,phonenumber,city'))->where('id', 5)->get();


    //  $results = DB::table('shopper')->selectRaw('*')->get();
    //  $results = DB::table('shopper')->selectRaw('phone')->get();
    //  $results = DB::table('shopper')->selectRaw(DB::raw('*'))->get();
    //  $results = DB::table('shopper')->selectRaw(DB::raw('phone,number'))->where('id',2)->get();

    // *error   (select know only columns)
    // $results = DB::table('shopper')->select('count(*) AS totalshopper,city')->where('id',"<>",3)->groupBy('city')->get();

    //ok
    // $results = DB::table('shopper')->select(DB::raw('count(*) AS totalshopper,city'))->where('id',"<>",3)->groupBy('city')->get();


    // $results = DB::table('shopper')->selectRaw('count(*) AS totalshopper,city')->where('id',"<>",3)->groupBy('city')->get();

    // $results = DB::table('shopper')->selectRaw(DB::raw('count(*) AS totalshopper,city'))->where('id',"<>",3)->groupBy('city')->get();


    // $results = DB::table('types')->first();
    $results = DB::table('types')->pluck('fullname'); //array
    $results = DB::table('types')->pluck('fullname', 'id'); //object

    return $results;

    // 16PK 
});



// =>Database Eloquent ORM 
// sro 
Route::get('article/read', function () {
    // use App\Models\Article
    $articles = Article::all();
    return $articles;
    // return "Hello";


    foreach ($articles as $article) {
        echo "$article->title  <br> $article->description";
    }
});



Route::get('article/types', function () {
    // use App\Models\Article
    $types = Type::all();
    // return "Hello";

});



Route::get('article/find', function () {
    // use App\Models\Article
    // $articles = Article::find(5);

    // =Not Found Exception 
    $articles = Article::findOrFail(20); //404 NOT FOUND    
    return $articles;





});



Route::get('article/where', function () {



    // $articles = Article::where('user_id',2)->orderBy('id','desc')->get();     
    // return $articles;



    // $articles = Article::where('user_id',2)->orderByDesc('id')->get();     
    // return $articles;

    // $articles = Article::where('user_id',2)->take(5)->orderBy('id','desc')->get();     
    // return $articles;



    // $articles = Article::where('user_id',2)->limit(5)->orderBy('id','desc')->get();     
    // return $articles;



    // $articles = Article::where('id',2)->first();  //Object    
    // return $articles;



    // $articles = Article::where('id',2)->select('user_id','title','decription')->get();  //array     
    // return $articles;

    // $articles = Article::where('id',2)->select('user_id','title','decription')->first();     
    // return $articles;



    // $articles = Article::where('id',2)->pluck('description'); //array      
    // return $articles;




    // $articles = Article::where('id',2)->pluck('description','id'); //array      
    // return $articles;





    // $articles = Article::firstWhere('user_id',2);     
    // return $articles;


    // $articles = Article::where('id','>',50)->firstOrFail();     
    // return $articles; //404 NOT FOUND 



    // $article = Article::findOr('50',function(){
    //     return "Hello sir there is no data";
    // });
    // return $article;


    $article = Article::where('user_id')->firstOr(function () {
        return "Hello sir there is no data";
    });
    return $article;

});



// =>Retreving Aggregates 

Route::get('articles/aggregates', function () {
    $data = [
        ['price' => 100],
        ['price' => 200],
        ['price' => 300],
        ['price' => 400],

    ];


    // var_dump($data);
    // echo "<br>";
    // var_dump(collect($data));

    // dd(
    //     $data,
    //     collect($data)
    // );


    // return collect($data)->count();  //4
    // return collect($data)->min() //{"price":100}
    // return collect($data)->max(function($num){

    //     return $num['price'];

    // });

    //  $result =  collect($data)->max(function($num){

    //     return $num['price'];

    // });

    // return $result;




    // return collect($data)->min(function($num){
    //     return $num['price'];
    // }); //250


    // return collect($data)->average(function($num){
    //     return $num['price'];
    // });

    // return collect($data)->avg(function($num){
    //     return $num['price'];
    // }); //250

    // return collect($data)->sum(function($num){
    //     return $num['price'];
    // }); //1000

    // $articles = Article::where('user_id',1)->min('rating');
// return $articles; //2 

    // $articles = Article::where('user_id',1)->min('rating');
// return $articles;

    // $articles = Article::where('user_id',1)->average('rating');
// return $articles;

    // $articles = Article::where('user_id',1)->avg('rating');
// return $articles;


    $articles = Article::where('user_id', 1)->sum('rating');
    return $articles;

});


// -------------------------------------------

// =>Retrieving or Creating Data to Model 

Route::get('articles/create', function () {
    //   $article = Article::firstOrCreate([
//     'title'=>'this is new article 1'
//   ]);

    //   return "Retrive Data or Insert $article";


    // $article = Article::firstOrCreate([
//     'title'=>'this is new article 15',
//     'description'=>'Loream Ipsum is simply dummy tet of the sdf;sa',
//     'user_id'=>3,
//     'rating'=>2 
// ]);
// return "Retrive Data or Insert $article";



    $article = Article::firstOrCreate(
        [
            'title' => 'this is new article 15'

        ],
        [
            'description' => 'Loream Ipsum is simply dummy tet of the sdf;sa',
            'user_id' => 3,
            'rating' => 2
        ]

    );
    return "Retrive Data or Insert $article";


});


Route::get('article/filter', function () {
    // $articles = Article::all()->filter(function($article){
    //     return $article->id > 5;
    // })   ;


    // $articles = Article::get()->filter(function($article){
    //     return $article->id > 5;
    // })   ;


    // $articles = Article::cursor()->filter(function($article){
    //     return $article->id > 5;
    // })   ;

    $articles = Article::all()->filter(function ($article) {
        return $article->id > 5;
    });


    foreach ($articles as $article) {
        echo "$article->id <br> $article->title <br> $article->description";
    }


});


Route::get('articles/reject', function () {
    $data = [
        100,
        200,
        300,
        0,
        '0',
        1,
        '1',
        'aung aung',
        '',
        ' ',
        null,
        true,
        false,
        [],
        ['red', 'green', 'blue'],
        ['price' => 100]
    ];

    // return $data;
    // dd(
    //     $data,
    //     collect($data)
    // );

    $collections = collect($data);
    // return $collections->reject(); //{"3":0,"4":"0","8":"","10":null,"12":false,"13":[]}

    // return $collections->reject(function($value){
    //       return empty($value); //{"0":100,"1":200,"2":300,"5":1,"6":"1","7":"aung aung","9":" ","11":true,"14":["red","green","blue"],"15":{"price":100}}
    // });

    // return $collections->filter(function($value){
    //   return $value; //{"0":100,"1":200,"2":300,"5":1,"6":"1","7":"aung aung","9":" ","11":true,"14":["red","green","blue"],"15":{"price":100}}
    // return empty($value); //{"3":0,"4":"0","8":"","10":null,"12":false,"13":[]}
    // return is_numeric($value); //[100,200,300,0,"0",1,"1"]
    // return is_string($value); //{"4":"0","6":"1","7":"aung aung","8":"","9":" "}
    // return is_bool($value); //{"11":true,"12":false}
    // return is_array($value); //{"13":[],"14":["red","green","blue"],"15":{"price":100}}
    // return is_null($value);  //{"10":null}


    // });


});


// =>WhereColumn('column1','column2') //compare and rewult same value
// =>WhereColumn('column1','co(>,<,=,etc...)','column2') //compare and rewult same value
// =>WhereColumn([['column1','column2],['column3','column4']]) //multi compare 

Route::get('articles/wherecolumn ', function () {
    // $articles = Article::whereColumn('id','user_id')->get();
    // return $articles;

    // $articles= Article::whereColumn('created_date','updated_date')->get();
    // return $articles;



    // $articles= Article::whereColumn('created_date','>','updated_date')->orderByDESC('id')->get();
    // return $articles;

    $articles = Article::whereColumn([['id', 'user_id'], ['created_date', 'updated_date']])->orderByDESC('id')->get();
    return $articles;
});


Route::get('articles/insert', function () {
    // Method 1 
    // invoke Modle 

    // $article = new Article;
    // $article->title = "this is new article 18";
    // $article->description = "Lorem Ipsum is lijlsjdf;s";
    // $article->user_id = 1;
    // $article->rating = 3 ;
    // $article->save();

    // return "Data Inserted $article";

    // Method 2 

    // direct call modle // create()  => not pull and just add 
    // $article = Article::create([
    //     'title'=>'this is new article 22',
    //     'description'=>'loream Ipakfj;sdkf',
    //     'user_id'=>2,
    //     'ratiing'=>5

    // ]);

    // return "Data Inserted $article";

    // echo now();
    // var_dump(now()) // objcect  => Classic php ka yuu htar tar

    // to string 
    // now()->toDateString(); => laravel ka thonde htar tar 




    date_default_timezone_set('Asia/Bangkok');
    $getdate = now("Asia/Yangon")->toDateTimeString();
    $today = date("Y-m-d H:i:s");


    // use Carbon\Carbon
    $curdatetime = Carbon::now();
    var_dump($curdatetime); //object  from laravel 



    $article = DB::table('article')->insert([
        'title' => 'this is new article 22',
        'description' => 'loream Ipakfj;sdkf',
        'user_id' => 2,
        'ratiing' => 5,
        'created_date' => $getdate,
        // 'updated_date'=>$todauy
        'updated_date' => $curdatetime


    ]);

    return "Data Inserted $article";


});

Route::get('articles/update', function () {

    // $article = Article::findOrFail(10);
    // $article = "This is new article 012";
    // $article->user_id = 4;
    // $article->save();

    // return "Data Updated $article";

    // =>Mass Updates 
    // $article = Article::whre('rating', 1)->update(['rating' => 2]);
    //                            //user id 2 & rating 5 shi tae kaung tway ko rating 3 phiyt pay ya mal
    // $article = Article::where('user_id', 2)->where('rating', 5)->update(['rating' => 3]);
    // return "Data Updated $article";

    $article = Article::updateOrCreate(
        ['title' => 'this is new articel 12', 'description' => 'Loremljfd;asf;akl'],
        ['user_id' => 1, 'rating' => 5]
    );

    return "Data Updated $article";



});


Route::get('articles/delete', function () {
    // $article = Article::find(1);

    // $article = Article::findOrFail(2);
    // $article->delete();
    // return "Data delete successfully = $article" ;

    // $article = Article::where('rating',3);
    // $article->delete();
    // return "Data delete successfully = $article" ;

    // $article = Article::where('rating',3)->delete();
    // return "Data delete successfully = $article" ;


    // => Bulk Delete (Note :: must be primary key)

    // $article = Article::destroy(12); 
    // $article = Article::destroy(10,11); 
    // $article = Article::destroy([10,11]); 
    // $article = Article::destroy(collect([3,4,6])); 

    // return "Data delete successfully = $article" ;







    // = truncate (Be careful & ID will start from 1 again) 
    // Article::turncate();
    // return "Data delete successfully = $" ;




    // $article = Article::findOrFail(2);
    // $article->delete();
    $article = Article::destroy(collect([3, 4, 6]));

    return "Data delete successfully = $article";




});


Route::get('articles/restore', function () {
    // Article::withTrashed()->restore();
    // return "Restore from trash successfully";

    Article::withTrashed()->where('rating', 5)->restore();
    return "Restore from trash successfully";
});


Route::get('articles/forcedelete', function () {


    // $article = Article::findOrFail(5);
    // $article->forceDelete();
    // $article->delete();


    // *Result = 404 not found cuz 21 is already in soft delte 
    $article = Article::findOrFail(21);
    $article->delete();


    return "Data Force Delete Successfully";
});


Route::get('articles/gettrash', function () {

    // $articles = Article::all();
    // return $articles; //not inc from trash 

    // $articles = Article::withTrashed()->get();
    // return $articles;// all inc frm trash & non trasn 

    // $articles = Article::withTrashed()->where('rating',3)->get();
    // return $articles;// all inc frm trash & non trasn 



    // $articles = Article::onlyTrashed()->where('rating',3)->get();
    // return $articles;// all inc frm trash only



    $articles = Article::onlyTrashed()->findOrFail(12);
    return $articles;
});


Route::get('articles/restoresingle', function () {

    $articles = Article::onlyTrashed()->findOrFail(12)->restore();
    return $articles;
});


// ----------------------------------------

// =>Eloquent Relationships 

// =>One to One 

Route::get('users/{id}/article', function ($id) {
    $articles = User::findOrFail($id)->customearticle->title;
    $articles = User::findOrFail($id)->customearticle->description;
    $articles = User::findOrFail($id)->customearticle->rating;

    return $articles;
});


Route::get('articles/{id}/user', function ($id) {
    $articles = Article::findOrFail($id)->userfromuserphp->name;
    return $articles;

});

Route::get('articles/{id}/byusers', function ($id) {
    $user = User::findOrFail($id);
    foreach ($user->customearticles as $article) {

        echo $article->title . "<br>";

    }
    return $user;
});


// Many to Many 

Route::get('user/{id}/role', function ($id) {
    // $user = User::findOrFail($id);
    // return $user->rolemanytomany;


    // $user = User::findOrFail($id);

    // foreach($user->rolemanytomany as $role){

    //     echo $role->name."<br>";

    //  }



    $user = User::findOrFail($id)->rolemanytomany()->orderBy('id', 'desc')->get();
    return $user;


});

Route::get('users/{id}/rolecreatedate', function ($id) {
    $user = User::findOrFail($id);
    foreach ($user->rolecreatedate as $role) {
        echo $role->pivot->created_at . "<br>";
    }
});


// Has Many Through 
Route::get('genders/{id}/article', function ($id) {
    $gender = Gender::findOrFail($id);


    foreach ($gender->articles as $article) {
        echo $article->title . "<br>";
    }
});



// = Polymorphic Relationship 

Route::get('users/{id}/photo', function ($id) {
    $user = User::findOrFail($id);

    foreach ($user->photos as $photo) {
        echo $photo->path . "<br>";
    }

});


Route::get('users/{id}/photo', function ($id) {
    $article = Article::findOrFail($id);

    foreach ($article->photos as $photo) {
        echo $photo->path . "<br>";
    }

});


// Reverse thinking 

Route::get('photo/{id}/result', function ($id) {
    $result = Photo::findOrFail($id);
    echo $result->imageable . "<br>"; //Note:: 


    $result = Photo::findOrFind($id);
    echo $result->imageable->title . "<br>"; //Note:: 

});


// ------ 

Route::get('articles/{id}/comment', function ($id) {
    $article = Article::findOrFail($id);

    foreach ($article->comments as $comment) {
        return $comment->message . "<br>";
    }
});




Route::get('Users/{id}/comment', function ($id) {
    $article = User::findOrFail($id);

    foreach ($article->comments as $comment) {
        return $comment . "<br>";
    }
});

// =>Polymorphic Relactionship Many to Many 

Route::get('item/{id}/results', function ($id) {
    $item = Item::findOrFail($id);
    foreach ($item->tags as $tag) {
        echo $tag->name . "<br>";
    }
});

Route::get('tag/{id}/article', function ($id) {
    $item = Tag::findOrFail($id);
    foreach ($item->articles as $article) {
        echo $article->title . "<br>";
    }
});


Route::get('tag/{id}/items', function ($id) {
    $item = Tag::findOrFail($id);
    foreach ($item->item as $item) {
        echo $item->name . "<br>";
    }
});


// --------------------------------------------

// =>Eloquent One to One 

Route::get('users/{id}/phone/insert', function ($id) {
    $user = User::findOrFail($id);

    // Method 1 
    // $phone = new Phone;
    // $phone->number = "09444444";
    // $phone->user_id = $user->id;
    // $phone->save();
    // return "data insert";

    // Method 2   // User_id must be include 
    // $phone = Phone::create([
    //     'number'=>'09555555',
    //     'user_id'=>$user->id
    // ]);

    // return "Data Inserted";

    // Method 3 
    // $phone = new Phone([
    //     'number' => '09666666',
    //     'user_id'=>$user->id
    // ]);

    // $user->phone()->save($phone);  //user_id  ma pay lal ya tal 
    // return "Data Inserted";


    // Method 4  //No ndeed user id
    // $phone = new Phone([
    //     'number' => '09666666',
    // ]);

    // $user->phone()->save($phone);  //user_id  ma pay lal ya tal 
    // return "Data Inserted";



    // Method 5  //No ndeed user id
    $user->phone()->save(new Phone([
        'number' => '09666666'
    ]));

    return "Data Inserted";






});


Route::get('users/{id}/phone/update', function ($id) {
    //   $phone = Phone::whereUserId($id)->first();
//   $phone->number = "09-111-111";
//   $phone->save();
//   return "Data Updated";

    $phones = Phone::whereUserId($id)->get();
    foreach ($phones as $phone) {
        $phone->number = "09-111-112";
        $phone->save();
    }
    return "Data Update";
});


Route::get('users/{id}/phone/read', function ($id) {

    $user = User::findOrFail($id);
    $user = $user->phone->number;
    return "Data Reading = $user";
});



Route::get('users/{id}/phone/delete', function ($id) {
    //    $user = User::findOrFail($id); //Single delete 
//    $user->phone->delete();
//    return "Data delete $user";


    $user = User::findOrFail($id); //Bulk delete 
    $user->phone()->delete();
    return "Data delete $user";
});



// ----------------------------------------
// =>Eloquent One to Many  (hasMany)
Route::get('users/{id}/article/insert', function ($id) {
    $user = User::findOrFail($id);

    // Method 1 
    // $article = new Article;
    // $article->title = "this is articleb 1";
    // $article->description = "Loream Ipsum is kj;a";
    // $article->user_id = $user->id;
    // $article->rating = 5;
    // $article->save();
    // return "data insert";

    // Method 2   // User_id must be include 
    // $phone = Phone::create([
    //     'number'=>'09555555',
    //     'user_id'=>$user->id
    // ]);

    // return "Data Inserted";

    // Method 3 
    // $phone = new Phone([
    //     'number' => '09666666',
    //     'user_id'=>$user->id
    // ]);

    // $user->phone()->save($phone);  //user_id  ma pay lal ya tal 
    // return "Data Inserted";


    // Method 4  //No ndeed user id
    // $phone = new Phone([
    //     'number' => '09666666',
    // ]);

    // $user->phone()->save($phone);  //user_id  ma pay lal ya tal 
    // return "Data Inserted";



    // Method 5  //No ndeed user id
    $user->customearticles()->save(new Article([
        'title' => 'This is new article 1',
        'description' => 'Loream Ipsum is simple',
        'user_id' => $id,
        'rating' => 3,
    ]));

    return "Data Inserted";






});



Route::get('users/{id}/article/update', function ($id) {
    // $article = Article::whereUserId($id)->first();
    // $article->title = "this is articleb 10";
    // $article->description = "Loream Ipsum is kj;a";
    // $article->rating = 1;
    // $article->save();
    // return "Data Updated";

    // $articles = Article::whereUserId($id)->get();
    // foreach ($articles as $article) {
    //     $article->title = "this is new article 001";
    //     $article->description = "Loream";
    //     $article->save();
    // }
    // return "Data Update";

    // $user = User::findOrFail($id); 
    // $user->customearticles()->where('id' , '=', 1)->update([
    //     'title'=>'New Title 1000',
    //     'rating'=> 3
    // ]);
    // return "Data Update";



    $user = User::findOrFail($id);
    // Note:find Userid and continue search Article id 
    // $user->customearticles()->where('id', '=', 1)->update([
    //     'title' => 'New Title Id One',
    //     'rating' => 5
    // ]);
    // return "Data Update";


    // Note:find Userid and continue search Article id 
    $user->customearticles()->where('rating', '=', 5)->update([
        'title' => 'New Title rating 3',
        'rating' => 2
    ]);
    return "Data Update";
});

Route::get("users/{id}/article/read", function ($id) {
    $user = User::findOrFail($id);


    foreach ($user->customearticles as $article) {
        echo $article->title . "<br>";

    }
});


Route::get("users/{id}/article/delete", function ($id) {

    // Route::get("users/article/delete/{rating}", function ($rating) {
    // NOte:: error  cuz this is one to many relationship 
    // $user = User::findOrFail($id);
    // $user->customearticles->delete();


    // $user = User::findOrFail($id);
    // $user->customearticles()->whereId(7)->delete();
    // return "Data delete";


    // $user = User::findOrFail();
    // $user->customearticles()->delete();
    // return "Data delete";



    // ---------------------- 
    // $user = Article::where('rating','=',5);
    // $user->delete();



});

// -------------------------------------------- 

// Route::get('users/{id}/role/insert',function($id){
//     $user = User::findOrFail($id);
//     $user->rolemanytomany()->save(new Role([
//      'name' => 'adviser'
//     ]));

//     return "Data Inserted";
// });


Route::get('users/{id}/role/update', function ($id) {
    $user = User::findOrFail($id);

    if ($user->has('roles')) {
        foreach ($user->rolemanytomany as $role) {
            if ($role->name = "admin") {
                $role->name = "co-worker";
                $role->save();
            }
        }
    }
    return $user;
});




Route::get('users/{id}/role/read', function ($id) {
    $user = User::findOrFail($id);

    if ($user->has('roles')) {
        foreach ($user->rolemanytomany as $role) {
            $role->name . "<br";
        }
    }

});


Route::get('users/{id}/role/delete', function ($id) {

    // single delete 

    // $user = User::findOrFail($id);
    // foreach($user->roles as $role){
    //     $role->whereId(4)->delete();
    // }


    // Bulk delete 
    $user = User::findOrFail($id);
    $user->roles()->delete();
    return "Data Deleted";
});



Route::get('users/{id}/role/attach', function ($id) {

    // Note:: check Role table  & UserRoletable (no action/action)
    // Note   :: added role permissionn to user id 
    $user = User::findOrFail($id);
    $user->roles()->attach(5);
    return "Data Deleted";
});



Route::get('users/{id}/role/detach', function ($id) {
    // remobed user permmision for refer user id 
    $user = User::findOrFail($id);
    $user->roles()->detach(5);
    return "Data Deleted";
});





Route::get('users/{id}/role/sync', function ($id) {

    // Note :: wabt to keep only role id 2 for refer user id 
    $user = User::findOrFail($id);
    // $user->roles()->sync(2);


    // want to keep only role id 2 , 4 for refer user id 
    // $user->roles()->sync([2,4]);


    // want to keep existing role 2,4 and add more role id 1,5 for refer user id  
    $user->roles()->sync([2, 4, 1, 5]);



    return "Data Synced";
});

// ----------------------------------------------


// =>Eloquent Polymorphic Relationship  morphTo() morphMany()

Route::get('users/{id}/photo/insert', function ($id) {
    $user = User::findOrFail($id);
    // $user->photos()->save(new Photo([
    //     'path'=>'public\assets\photo1'
    // ]));


    $user->photos()->create([
        'path' => 'public\assets\photo3'
    ]);

    return "Data insert";
});




Route::get('users/{id}/photo/read', function ($id) {
    $user = User::findOrFail($id);

    if ($user->has('photos')) {
        foreach ($user->photos as $photo) {
            echo $photo->path . "<br>";
        }
    }



    return "Data read";
});



Route::get('users/{id}/photo/update', function ($id) {
    $user = User::findOrFail($id);

    $photo = $user->photos()->whereId(9)->first();

    $photo->path = "public\assets\userphoto";
    $photo->save();


    return "Data Update";

});




Route::get('users/{id}/photo/updateimgtype', function ($id) {
    $user = User::findOrFail($id);

    $photo = Photo::findOrFail(1);


    $photo->save($photo);


    return "Data update";
});





Route::get('users/{id}/photo/delete', function ($id) {
    $user = User::findOrFail($id);
    $user->photos()->whereId(1)->delete();
  

    // $user->photos()->delete();




    return "Data delete";
});


// ----------------------------------------------------


// =>Eloquent Polymorphic Many to Many Relationship 

Route::get('items/tag/{id}/insert',function($id){

    //   Note:: check Item table & Taggable table (action/action)
    $item = Item::create([
        'name'=>'Joey'
    ]);

    $tag = Tag::findOrFail($id);

    $item->tags()->save($tag);

});


Route::get('items/{id}/tag/read',function($id){

  

    $item = Item::findOrFail($id);

    if($item->has('tags')){
        foreach($item->tags as $tag){
            echo $tag->name . "<br>";
        }
    }

    return "Data read";

});




Route::get('items/{id}/tag/update',function($id){

  

    $item = Item::findOrFail($id);

    if($item->has('tags')){
        foreach($item->tags as $tag){
            return $tag->whereId(4)->update([
          
                'name'=>'Insect Killer'
            ]);
        }
    }

    return "Data read";

});
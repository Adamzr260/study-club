<?php

use App\Http\Controllers\StudentController;
// use App\Models\product;
// use App\Models\student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route :: get('/tampilan', function(){
//     return view('tampilan');
// });

// Route :: get('/tampilan/{nilai}', function($nilai){
//     return view('tampilan', ['var' => $nilai]);
// });

// Route :: get('/tampilan/{nilai}/{nilai2}', function($nilai, $nilai2){
//     return view('tampilan', [
//         'nilai_1' => $nilai,
//         'nilai_2' => $nilai2,

//     ]);
// });

// Route :: get('/datadiri/{nilai}/{nilai2}/{nilai3}/{nilai4}', function($nilai, $nilai2, $nilai3, $nilai4){
//     return view('datadiri', [
//         'nama' => $nilai,
//         'asal_daerah' => $nilai2,
//         'prodi' => $nilai3,
//         'angkatan' => $nilai4,
//     ]);
// });

// //  section baru
// Route :: get('/dashboard', function(){
//     return view('latihan2.dashboard');
// })->name('dashboard');

// Route :: get('/daftar', function(){
//     return view('latihan2.daftar');
// })->name('daftar');


// // ujian
// Route :: get('/nama', function(){
//     return view('ujian.nama');
// })->name('nama');

// Route :: get('/asal_daerah', function(){
//     return view('ujian.asal_daerah');
// })->name('asal_daerah');

// Route :: get('/angkatan', function(){
//     return view('ujian.angkatan');
// })->name('angkatan');

// Route :: get('/prodi', function(){
//     return view('ujian.prodi');
// })->name('prodi');

// Route :: get('/my/home', function(){
//     return view('ujian.home');
// })->name('my.home');


// Route :: get('/students', function(){
//     $students = Student::all();
//     return view('student', ['students'=> $students]);
// });

// Route :: get('/students/create', function(){
//     DB :: table([
//         "nim" => "234",
//         "name" => "agus",
//         "prodi" => "SI",
//         "angkatan" => 2023,
//         "alamat" => "bali"
//     ]);
// });

// Route::get("/students/update/{id}", function ($id) {
//     DB::table($id)->update([
//         "nim" => "234 update",
//         "name" => "agus update",
//         "prodi" => "SI update",
//         "angkatan" => 2023,
//         "alamat" => "bali update"
//     ]);
//     echo "Data dengan id $id berhasil di update";
// });

// Route::get("/students/delete/{id}", function ($id) {
//     DB::table("students")->where('id', $id)->delete();
//     echo "Data dengan id $id berhasil di delete";
// });

// Route :: get('/products', function(){
//     $products = product::all();
//     return view('product', ['products'=> $products]);
// });

// Route :: get('/products/create', function(){
//     DB :: table('products')->insert([
//         "code" => 2610057864,
//         "name" => "PC",
//         "description" => "Hardware Computer",
//         "qty" => 7,
//         "price" => 20000
//     ]);
// });

// Route::get("/products/update/{id}", function ($id) {
//     DB::table('products')->where('id', $id)->update([
//         "code" => 2610327864,
//         "name" => "Charge",
//         "description" => "Hardware Computer",
//         "qty" => 7,
//         "price" => 21000
//     ]);
//     echo "Data dengan id $id berhasil di update";

// });

Route :: resource("/student", StudentController::class);
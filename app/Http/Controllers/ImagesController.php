<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function index(){
        $users = DB::table('images')->select('*')->get();   /* запращиваем все данные */
        // $myImages = $users->pluck('image')->all();  /* из всех данных выбираем только поле 'image' */
        /* ->all() - на выходе простой ассациотивный массив данных из поля 'image' */
        /* $myImages = $plucked->all(); */   /* на выходе простой ассациотивный массив данных из поля 'image' */
        $myImages = $users->all();  /* на выходе простой ассациотивный массив всех данных */
    
        return view('welcome', ['imagesInView' => $myImages]);   /* передача данных в Вид, в виде будем ловить данные через 'imagesInView' */
    }

    public function about(){
        return view('about');
    }

    public function create(){
        return view('create');
    }

    public function show($id) {
        // получение данных записи
        $users = DB::table('images')
                         ->select('*')
                         ->where('id', $id)
                         ->first();     /* возвращантся одна запись */
        
        $myImages = $users->image;
        
        return view('show', ['imagesInView' => $myImages]);
    }


    public function edit ($id) {
        // получение данных записи
        $users = DB::table('images')
                    ->select('*')
                    ->where('id', $id)
                    ->first();     /* возвращантся одна запись */
    
        return view('edit', ['imagesInView' => $users]);
    }

    public function update(Request $request, $id) {
        // запрос в базу за старой картинкой
        $users = DB::table('images')->select('*')->where('id', $id)->first();     /* возвращантся одна запись */
        
        // удаление картинки с серевера
        Storage::delete($users->image);
    
        // загрузка новой картинки
        $image = $request->file('image');            /* получаем экземпляр UploadedFile */
        $nameImage = $image->store('uploads');     /* метод возвратит путь: папка/имя.расшир */
    
        // запись в базу новой картинки
        DB::table('images')
                ->where('id', $id)
                ->update(['image' => $nameImage]);
    
        return redirect('/');
    }

    public function store(Request $request) {
        /* dd($request->all()); */                   /* посмотреть все методы Экземпляра */
        /* dd($request->file('image')); */           /* доступ к Экземпляру UploadedFile */
        
        // загрузка картинки
        $image = $request->file('image');
        /* dd(get_class_methods($image)); */         /* просмотр всех методов Экземпляра */
        $nameImage = $image -> store('uploads');                  /* метод возвратит путь: папка/имя.расшир */
    
        // запись в базу имени картинки
        DB::table('images')->insert(
            ['image' => $nameImage]
        );
    
        return redirect('/');
    }

    public function delete ($id) {
        // получение данных записи
        $users = DB::table('images')
                    ->select('*')
                    ->where('id', $id)
                    ->first();     /* возвращантся одна запись */
    
        // удаление картинки с серевера
        Storage::delete($users->image);
    
        // удаление из базы            
        DB::table('images')->where('id', $id)->delete();
    
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Services\ImagesService;

class ImagesController extends Controller
{
    private $myImages;
    public function __construct(ImagesService $imagesService)
    {
        // в переменную кладём, Экземпляр класса
        $this->myImages = $imagesService;
    }

    public function index(){
        // в переменную кладём, результат вызова метода-класс
        $images = $this->myImages->all();
        return view('welcome', ['imagesInView' => $images]);   /* передача данных в Вид, в виде будем ловить данные через 'imagesInView' */
    }

    // загрузка картинки на сервер и в базу
    public function store(Request $request) {
        /* dd($request->all()); */                   /* посмотреть все методы Экземпляра */
        /* dd($request->file('image')); */           /* доступ к Экземпляру UploadedFile */
        /* dd(get_class_methods($image)); */       /* просмотр всех методов Экземпляра */

        // получаем картинку обёрнутую в экземпляр UploadedFile
        $image = $request->file('image');          
        
        // вызов метода, для загрузки картинки на сервер и в базу
        $this->myImages->add($image);

        return redirect('/');
    }

    public function show($id) {
        // получение изображения по id
        $myImages = $this->myImages->imageID($id);

        return view('show', ['imagesInView' => $myImages]);
    }

    public function edit ($id) {
        // получение данных по id
        $data = $this->myImages->dataID($id);

        return view('edit', ['imagesInView' => $data]);
    }

    public function update(Request $request, $id) {
        // метод заменяет картинку
        $this->myImages->updateModel($id, $request);

        return redirect('/');
    }

    public function delete ($id) {
        // метод удаляет картинку
        $this->myImages->deleteModel($id);
    
        return redirect('/');
    }

    public function create(){
        return view('create');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about(){
        // рендер страниц about.blade.php
        //return view('about');

        // получаем массив из Базы
        $users = [
            [
                "id" => 1,
                "name" => "jon",
                "status" => "active",
                "sex" => "m"
            ],
            [
                "id" => 2,
                "name" => "san",
                "status" => "ban",
                "sex" => "m"
            ],
            [
                "id" => 3,
                "name" => "dash",
                "status" => "ban",
                "sex" => "w"
            ],
            [
                "id" => 4,
                "name" => "kate",
                "status" => "active",
                "sex" => "w"
            ],
        ];

        
        $bannedUsers = [];
        $mUsers = [];

        // обчный способ, получить только забаненных юзеров
        foreach ($users as $user) {
            if($user["status"] == "ban" ) {
                // в массив кладём только забаненых
                $bannedUsers[] = $user;
                // из забаненных, только женщин
                if($user["sex"] == "w") {
                    $mUsers[] = $user;
                }
            }
        }

        // оборачиваем в Экземпляр Класс Collection
        $collectUsers = collect($users);
        //dd($collectUsers);

        // map() - перебирает $collectUsers, и передаёт в колбэк каждый элемент
        // далее с каждым элементом можно поработать
        // используем метод map() для выборки "name"
        // возвращается массив только с именами юзеров
        // по итогу формируется новый массив
        $name = $collectUsers->map(function ($user) {
            return $user['name'];
        });

        // filter() - колбэк возвращает элементы прошедшие по критерию отбора
        // хотим вернуть только элементы, в которых "sex" => "m"
        $sexM = $collectUsers->filter(function ($user) {
            return $user['sex'] == 'm';
        });


        // можно применять цепочки вызовов
        $sexMban = $collectUsers->filter(function ($user) {
            return $user['sex'] == 'm';
        })->filter(function ($user) {
            return $user['status'] == 'ban';
        });

        dd($sexMban);
    }
}

@extends('layout') {{-- указавается базовый шаблон, который подгрузиться сюда, и вставим в него секцию --}}

{{-- создаётся секция, которая будет вставлятся в нужное место --}}
@section('content')
<div class="container">
    <h1 align="center">Моя Галерея</h1>
    <div class="row">
       
        <div class="col-md-3 gallery-items">
            <div>
                <img src="/image.jpg" class="img-thumbnail" alt="">
            </div>
            <a href="/show" class="btn btn-info my-button">Просмотр</a>
            <a href="/edit" class="btn btn-warning my-button">Редактировать</a>
            <a href="#" class="btn btn-danger my-button">Удалить</a>
        </div>
        
    </div>
</div>

@endsection
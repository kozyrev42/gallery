@extends('layout') {{-- указавается базовый шаблон, который подгрузиться сюда, и вставим в него секцию --}}

{{-- создаётся секция, которая будет вставлятся в нужное место --}}
@section('content')
<div class="container">
    <h1 align="center">Моя Галерея</h1>
    <div class="row">
        <style>
            button.my-button {
                width: 100%;
                margin: 5px 0px;
            }

            .img-thumbnail {
                width: 100%;
            }

            div.gallery-items {
                margin: 10px 0px;
            }
        </style>

        <div class="col-md-3 gallery-items">
            
            <div>
                <img src="/image.jpg" class="img-thumbnail" alt="">
            </div>
            <button type="button" class="btn btn-info my-button">Info</button>
            <button type="button" class="btn btn-warning my-button">Warning</button>
            <button type="button" class="btn btn-danger my-button">Danger</button>
        </div>
        <div class="col-md-3 gallery-items">
            
            <div>
                <img src="/image.jpg" class="img-thumbnail" alt="">
            </div>
            <button type="button" class="btn btn-info my-button">Info</button>
            <button type="button" class="btn btn-warning my-button">Warning</button>
            <button type="button" class="btn btn-danger my-button">Danger</button>
        </div>
        <div class="col-md-3 gallery-items">
            
            <div>
                <img src="/image.jpg" class="img-thumbnail" alt="">
            </div>
            <button type="button" class="btn btn-info my-button">Info</button>
            <button type="button" class="btn btn-warning my-button">Warning</button>
            <button type="button" class="btn btn-danger my-button">Danger</button>
        </div>
        <div class="col-md-3 gallery-items">
            
            <div>
                <img src="/image.jpg" class="img-thumbnail" alt="">
            </div>
            <button type="button" class="btn btn-info my-button">Info</button>
            <button type="button" class="btn btn-warning my-button">Warning</button>
            <button type="button" class="btn btn-danger my-button">Danger</button>
        </div>

        <div class="col-md-3 gallery-items">
            
            <div>
                <img src="/image.jpg" class="img-thumbnail" alt="">
            </div>
            <button type="button" class="btn btn-info my-button">Info</button>
            <button type="button" class="btn btn-warning my-button">Warning</button>
            <button type="button" class="btn btn-danger my-button">Danger</button>
        </div>
        <div class="col-md-3 gallery-items">
            
            <div>
                <img src="/image.jpg" class="img-thumbnail" alt="">
            </div>
            <button type="button" class="btn btn-info my-button">Info</button>
            <button type="button" class="btn btn-warning my-button">Warning</button>
            <button type="button" class="btn btn-danger my-button">Danger</button>
        </div>
        <div class="col-md-3 gallery-items">
            
            <div>
                <img src="/image.jpg" class="img-thumbnail" alt="">
            </div>
            <button type="button" class="btn btn-info my-button">Info</button>
            <button type="button" class="btn btn-warning my-button">Warning</button>
            <button type="button" class="btn btn-danger my-button">Danger</button>
        </div>
        <div class="col-md-3 gallery-items">
            
            <div>
                <img src="/image.jpg" class="img-thumbnail" alt="">
            </div>
            <button type="button" class="btn btn-info my-button">Info</button>
            <button type="button" class="btn btn-warning my-button">Warning</button>
            <button type="button" class="btn btn-danger my-button">Danger</button>
        </div>
    </div>
</div>

@endsection
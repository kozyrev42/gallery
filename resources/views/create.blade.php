@extends('layout'); {{-- указавается базовый шаблон, который подгрузиться сюда, и вставим в него секцию --}}

{{-- создаётся секция, которая будет вставлятся в нужное место --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h3>Добавить изображение</h3>
                <form action="" method="POST">
                    <div class="form-control">
                        <input type="file">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
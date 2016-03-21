
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Страницы</div>

                <div class="panel-body">
                    <form>
                        <input type="text" value="{{$model->title}}" />
                        <br/>
                        <input type="text" />
                        <br/>
                        <textarea rows="10" cols="125" id="editor1">{{$model->discrab}} </textarea>
                        <button>Отправить</button>
                    </form>
                    
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


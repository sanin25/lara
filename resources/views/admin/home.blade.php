@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Страниц
                        <a  class="pull-right hidden-xs  btn btn-default btn-sm"  href="dd">Добавит</a>
                                            
                </div>
                
                <div class="panel-body">
                  <ul>
                        @foreach($page as $pages )
                        <li><a href="admin/edit/{{$pages->id}}">{{$pages->title}}</a><a href="admin/edit/{{$pages->id}}"><i class="fa fa-pencil-square-o"></i></a><a href="admin/del/{{$pages->id}}"> <i class="fa fa-times"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('title', $user->name . '的个人中心')

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media">
                    <div class="center">
                        <img alt="" class="thumbnail img-responsive" width="300px" height="300px" src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600">
                    </div>
                    <div class="media-body">
                        <hr>
                        <h4><strong>个人简介</strong></h4>
                        <p>😄</p>
                        <hr>
                        <h4><strong>注册于</strong></h4>
                        <p>{{ $user->created_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <span>
                    <h1 class="panel-title pull-left" style="font-size:30px;">
                        {{ $user->name }} <small>{{ $user->email }}</small>
                    </h1>
                </span>
            </div>
        </div>
        <hr>

        {{-- 用户发布的内容 --}}
        <div class="panel panel-default">
            <div class="panel-body">
                暂无数据
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="proverb-area col-md-5">
                <div class="proverb-title">
                    本日のおさない学長の格言
                </div>
                <div class="card">
                    <div class="card-body text-center">
                        知識定着させたいなら、誰かにアウトプット！
                    </div>
                </div>
            </div>
            <div class="home-title col-md-12">お気に入り投稿</div>
            <div class="posts">
                @for ($i = 0; $i < 10; $i++)
                    @component('components.postcard')
                    @endcomponent
                @endfor
                <div class="home-title col-md-12">新着順</div>
                @for ($i = 0; $i < 10; $i++)
                    @component('components.postcard')
                    @endcomponent
                @endfor
            </div>
        </div>
    </div>
@endsection

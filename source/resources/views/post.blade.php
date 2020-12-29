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

            <div class="card text-gray ml-3 mr-3 mb-3 col-md-12">
                <div class="card-header title-area">
                    <div class="card-title post-title">Laravelの導入をしてみたけど、いいかんじだった件</div>
                    <div class="btn-area">
                        <a class="icon-btn"><i class="fas fa-paper-plane "></i></a>
                        <a class="icon-btn"><i class="fas fa-window-close"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                </div>
            </div>
        </div>
        <div class="links justify-content-start">
            <div class="blue-linkcard">
                <div class="link-title bd-black">同じ題名</div>
                <div class="link-info"></div>
            </div>
            @for ($i = 0; $i < 10; $i++)
                @component('components.postcard')
                @endcomponent
            @endfor
        </div>
        <div class="links">
            <div class="yellow-linkcard">
                <div class="link-title bd-black">同リンク</div>
                <div class="link-info bd-black">Laravel</div>
            </div>
            @for ($i = 0; $i < 10; $i++)
                @component('components.postcard')
                @endcomponent
            @endfor
        </div>
    </div>
@endsection

@extends('layouts.header')

@section('content')
<div class="container bg-white">
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
            @for ($i = 0; $i < 10; $i++) <div class="post">
                <div class="post-title">Laravelの導入をしてみたけど、いいかんじだった件</div>
                <div class="post-info">
                    <div class="post-info-left">
                        <div class="contributor"><i class="fas fa-user-alt post-icon"></i><span>みけ</span></div>
                        <div class="likes"><i class="fas fa-heart post-icon"></i><span>4</span></div>
                    </div>
                    <div class="post-info-right">
                        <img src="../images/osanaimark.png" class="osanai-mark">
                    </div>
                </div>
        </div>
        @endfor
        <div class="home-title col-md-12">新着順</div>
        @for ($i = 0; $i < 10; $i++) <div class="post">
            <div class="post-title">Laravelの導入をしてみたけど、いいかんじだった件</div>
            <div class="post-info">
                <div class="post-info-left">
                    <div class="contributor"><i class="fas fa-user-alt post-icon"></i><span>みけ</span></div>
                    <div class="likes"><i class="fas fa-heart post-icon"></i><span>4</span></div>
                </div>
                <div class="post-info-right">
                    <div class="osanai-mark"><span>おさない学長</span></div>
                </div>
            </div>
    </div>
    @endfor
</div>
</div>
</div>
@endsection

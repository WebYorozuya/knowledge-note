@extends('layouts.homelayout')

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
                    <button class="post-btn">投稿</button>
                    <button class="cancel-btn">キャンセル</button>
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
        <div class="link bg-yellow">
            <div class="link-title bd-black">同じ題名</div>
            <div class="link-info"></div>
        </div>
        <div class="post">
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
        <div class="post">
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
        <div class="post">
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
    </div>
    <div class="links">
        <div class="link bg-blue">
            <div class="link-title bd-black">同リンク</div>
            <div class="link-info bd-black">Laravel</div>
        </div>
        <div class="post">
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
        <div class="post">
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
    </div>
</div>
@endsection
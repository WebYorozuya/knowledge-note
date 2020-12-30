@extends('layouts.header')
@section('content')
    <div class="container justify-content-center col-md-8">
        <div class="item justify-content-center col-md-12">RANKING</div>
        <div class="sub-item">投稿別</div>
        <div class="sub-sub-item">いいね取得数</div>
        <div class="ranking-form">
            @for ($i = 1; $i < 6; $i++)
                <div class="ranking">
                    <div class="rank">
                        <div class="rank-icon">
                            <div><i class="fas fa-crown crown"></i>{{ $i }}</div>
                        </div>
                    </div>
                    <div class="ranking-post-title"></div>
                    <div class="ranking-like-counter"></div>
                    <div class="contributor"></div>
                </div>
            @endfor
        </div>
        <div class="sub-item">総合</div>
        <div class="sub-sub-item">いいね総取得数</div>
        <div class="ranking-form">
            @for ($i = 1; $i < 6; $i++)
                <div class="ranking">
                    <div class="rank">
                        <div class="rank-icon">
                            <div><i class="fas fa-crown crown"></i>{{ $i }}</div>
                        </div>
                    </div>
                    <div class="ranking-post-title"></div>
                    <div class="ranking-like-counter"></div>
                    <div class="contributor"></div>
                </div>
            @endfor
        </div>
        <div class="sub-sub-item">投稿数</div>
        <div class="ranking-form">
            @for ($i = 1; $i < 6; $i++)
                <div class="ranking">
                    <div class="rank">
                        <div class="rank-icon">
                            <div><i class="fas fa-crown crown"></i>{{ $i }}</div>
                        </div>
                    </div>
                    <div class="ranking-post-title"></div>
                    <div class="ranking-like-counter"></div>
                    <div class="contributor"></div>
                </div>
            @endfor
        </div>
        <div class="sub-sub-item">おさないマーク取得総数</div>
        <div class="ranking-form">
            @for ($i = 1; $i < 6; $i++)
                <div class="ranking">
                    <div class="rank">
                        <div class="rank-icon">
                            <div><i class="fas fa-crown crown"></i>{{ $i }}</div>
                        </div>
                    </div>
                    <div class="ranking-post-title"></div>
                    <div class="ranking-like-counter"></div>
                    <div class="contributor"></div>
                </div>
            @endfor
        </div>
    </div>

@endsection

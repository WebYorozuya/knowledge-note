@extends('layouts.header')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <h2> ランキング</h2>
        <div class="col-md-12">
            <span>投稿別</span>
            <div>いいね取得数</div>
            <div class="rankings">
                @for ($i = 1; $i < 6; $i++) <div class="ranking">
                    <span>{{$i}}</span>
                    <div class="post">
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
            </div>
            @endfor
        </div>
    </div>

    <div class=" col-md-12">
        <span>総合</span>
        <div class="total-ranking row justify-content-start">
            <table>
                <tr>
                    <th colspan="3">いいね総取得数</th>
                </tr>
                @for ($i = 1; $i < 6; $i++) <tr>
                    <td>{{$i}}</td>
                    <td>みけ</td>
                    <td>69</td>
                    </tr>
                    @endfor
            </table>
            <table>
                <tr>
                    <th colspan="3">投稿数</th>
                </tr>
                @for ($i = 1; $i < 6; $i++) <tr>
                    <td>{{$i}}</td>
                    <td>みけ</td>
                    <td>69</td>
                    </tr>
                    @endfor
            </table>
            <table>
                <tr>
                    <th colspan="3">おさないマーク</br>取得総数</th>
                </tr>
                @for ($i = 1; $i < 6; $i++) <tr>
                    <td>{{$i}}</td>
                    <td>みけ</td>
                    <td>69</td>
                    </tr>
                    @endfor
            </table>
        </div>
    </div>
</div>
@endsection
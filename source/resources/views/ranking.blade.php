@extends('layouts.header')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h2> ランキング</h2>
            <div class="col-md-12">
                <span>投稿別</span>
                <div>いいね取得数</div>
                <div class="rankings">
                    <div class="ranking">
                        @for ($i = 1; $i < 6; $i++)
                            <span>{{ $i }}</span>
                            @component('components.postcard')
                            @endcomponent
                        @endfor
                    </div>
                </div>
            </div>

            <div class=" col-md-12">
                <span>総合</span>
                <div class="total-ranking row justify-content-start">
                    <table>
                        <tr>
                            <th colspan="3">いいね総取得数</th>
                        </tr>
                        @for ($i = 1; $i < 6; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>みけ</td>
                                <td>69</td>
                            </tr>
                        @endfor
                    </table>
                    <table>
                        <tr>
                            <th colspan="3">投稿数</th>
                        </tr>
                        @for ($i = 1; $i < 6; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>みけ</td>
                                <td>69</td>
                            </tr>
                        @endfor
                    </table>
                    <table>
                        <tr>
                            <th colspan="3">おさないマーク</br>取得総数</th>
                        </tr>
                        @for ($i = 1; $i < 6; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>みけ</td>
                                <td>69</td>
                            </tr>
                        @endfor
                    </table>
                </div>
            </div>
        </div>
    @endsection

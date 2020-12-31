@extends('layouts.header')
@section('content')
    <div class="container justify-content-center col-md-8">
        <div class="setting-item justify-content-center">SETTING</div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tab1">profile change</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab2">delet account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab3"></a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane active" id="tab1">
                <div class="tab-pane-header">
                    <form>
                        <div class="form-group col-md-6">
                            <label for="email">Your e-mail</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your name</label>
                            <input type="name" class="form-control" id="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="profile-image">Your profile image</label>
                            <div class="form-control profile-image" id="profile-image"></div>
                        </div>
                        <button type="submit" class="btn blue-btn-middle ml-3">change</button>
                    </form>
                </div>
            </div>
            <div class="tab-pane" id="tab2">
                <div class="tab-pane-header">
                    <form>
                        <div class="form-group col-md-10">
                            <span>あなたのアカウントを削除しますか？</span>
                            <span class="form-item">アカウントを削除しても、過去のあなたの投稿は残ります。</span>
                            <label for="name">確認入力</label>
                            <input type="name" class="form-item form-control" id="name">
                            <span class="form-item">あなたのアカウント名を入力して「削除する」のボタンを押してください。</span>
                            <button type="submit" class="btn blue-btn-middle">削除する</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane" id="tab3">
                <div class="tab-pane-header">
                </div>
            </div>
        </div>
    </div>
@endsection

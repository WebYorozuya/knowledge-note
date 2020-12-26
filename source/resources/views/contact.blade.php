@extends('layouts.homelayout')

@section('content')

<div class="container">
    <form>
        <h2>CONTACT US</h2>
        <div class="form-group col-md-6">
            <label for="email">Your email address</label>
            <input type="email" class="form-control" id="email" placeholder="例：xxx@example.ne.jp">
        </div>
        <div class="form-group col-md-6">
            <label for="name">Your name</label>
            <input type="password" class="form-control" id="name" placeholder="例：山田　太郎">
        </div>
        <div class="form-group col-md-6">
            <label for="text">Message</label>
            <textarea type="textarea" class="form-control" id="text" class="textarea" name="textarea" rows="4" cols="40">ここにお問い合わせ内容を記入してください。</textarea>
        </div>
        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
    </form>
</div>
@endsection
@extends('layouts.header')

@section('content')
    <div class="container justify-content-center col-md-10">
        <div class="linkchips col-md-12">
            @for ($i = 0; $i < 30; $i++)
                @component('components.linkchip')
                @endcomponent
            @endfor
        </div>
    </div>
@endsection

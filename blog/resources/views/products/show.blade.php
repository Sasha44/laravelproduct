@extends('layouts.app')
@section('content')
@if ($product)
<div class="col-md-9 blogShort">
    <h2>{{$product->name}}</h2>
    <article>
        <p>{{$product->description}}</p>        
    </article>     
    <a class="btn btn-blog pull-right marginBottom10" href="/">На главную</a>
</div>
@endif
@endsection
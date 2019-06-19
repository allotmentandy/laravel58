@extends('layouts.github')

@section('content')
    <div class="flex items-center">
        {!! $page->title !!}
    </div>

     {!! $page->body !!} 

@endsection

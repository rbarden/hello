@extends('private.layout')

@section('content')

    @if(session('hello.success'))
        <div class="max-w-5xl mx-auto mb-3 bg-secondary border-l-4 border-primary text-primary p-4">
            <p> {{ session('hello.success') }} </p>
        </div>    
    @endif
    
    @include('hello::submissions.partials.index')

@endsection

@extends('public.layout')

@section('head-title') Contact Us @endsection

@section('content')

    @if(session('hello.success'))
        <div class="max-w-5xl mx-auto mb-3 bg-secondary border-l-4 border-primary text-primary p-4">
            <p> {{ session('hello.success') }} </p>
        </div>    
    @endif

    <h1 class="text-center text-2xl pt-16"> Contact Us </h1>

    @include('hello::submissions.partials.create')
@endsection

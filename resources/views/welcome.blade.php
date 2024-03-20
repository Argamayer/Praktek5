@extends('layouts.app')

@section('title, Halaman 1')

@section('content')

<div class="bg-gray-100">
    <h1 class="text-blue-500">
        Hello world!
    </h1>

<br>

    <a href="{{url('/halaman2')}}" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
        Halaman 2
    </a>
</div>
@endsection
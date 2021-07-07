@extends('app')

@section('sidebar')
    @parent
    <ul>
        <li>demo 1</li>
        <li>demo 2</li>
    </ul>
@endsection
@foreach ( as )

@endforeach
@section('content')
    <h1>my content</h1>

    @component('components.modal')
        @slot('bug')
            lỗi
        @endslot
        bugs ne
    @endcomponent
@endsection

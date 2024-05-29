@extends('layouts.app')
@section('content')
    @include('layouts.default')
    <div class="p-6 m-20 bg-white rounded shadow">
        {!! $chart->container() !!}
    </div>

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
@endsection

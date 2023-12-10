@extends('layouts')


@section('content')
<div class="max-w-[1200px] mx-auto">
    <img src="{{ $project['img'] }}" class="w-full shadow" alt="portfolio image" />
    <div class="text-center my-19">
        <h3 class="text-3xl mb-13 text-center font-semibold">{{ $project['name'] }}</h3>
        <h4 class="text-2xl mb-13">Project Type : {{$project['type']}}</h4>
        <h4 class="text-2xl mb-13">Project Duration : {{$project['duration']}}</h4>
        <h4 class="text-2xl mb-13">Project Budget : {{$project['budget']}}</h4>
    </div>
</div>
@endsection

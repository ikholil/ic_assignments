@extends('layouts');


@section('content');

  {{-- Portfolio --}}
  <div class="container py-16 md:py-20" id="portfolio">
    <h2
        class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
        Check out my Portfolio
    </h2>
    <h3 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
        Here's what I have done with the past
    </h3>

    <div
        class="mx-auto grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 md:gap-10 lg:w-full lg:grid-cols-2">
        @foreach ($projects as $project )
        <a href="{{route("projectsDetails", $project['id'])}}" class="mx-auto transform transition-all hover:scale-105 md:mx-0">
            <img src="{{$project['img']}}" class="w-full shadow"
                alt="portfolio image" />
            <h3 class="text-3xl my-2 text-center font-semibold">{{$project['name']}}</h3>
        </a>
        @endforeach
    </div>
</div>

@endsection()

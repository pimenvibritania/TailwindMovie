<div class="mt-8">
    <a href="{{route('movies.show', $movie['id'])}}">
        <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" class="hover:opacity-75 transition ease-in-out duration-150" alt="">
    </a>
    <div class="mt-2">
        <a href="{{route('movies.show', $movie['id'])}}" class="text-lg mt-2 hover:text-gray-300">{{$movie['title']}}</a>
        <div class="flex items-center text-gray-400 text-sm">
            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600"><path d="M499.92 188.26l-165.839-15.381L268.205 19.91c-4.612-10.711-19.799-10.711-24.411 0l-65.875 152.97L12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.749 14.348L256 413.188l143.207 85.034c10.027 5.954 22.314-2.972 19.75-14.348l-36.619-162.476 125.126-109.922c8.761-7.696 4.068-22.139-7.544-23.216z" fill="#ffdc64"/><path d="M268.205 19.91c-4.612-10.711-19.799-10.711-24.411 0l-65.875 152.97L12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.749 14.348l31.963-18.979c4.424-182.101 89.034-310.338 156.022-383.697L268.205 19.91z" fill="#ffc850"/></svg>
            <span class="ml-1">{{$movie['vote_average'] * 10 .'%'}}</span>
            <span class="mx-2">|</span>
            <span>{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
        </div>
        <div class="text-gray-400 text-sm">
            @foreach ($movie['genre_ids'] as $genre)
                {{$genres->get($genre)}}@if (!$loop->last), @endif
            @endforeach
        </div>
    </div>
</div>
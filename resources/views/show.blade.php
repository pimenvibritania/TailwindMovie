@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row"> 
            <img src="/img/parasite.jpg" alt="" class="w-64 md:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
                <div class="flex items-center text-gray-400 flex-wrap text-sm">
                    <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600"><path d="M499.92 188.26l-165.839-15.381L268.205 19.91c-4.612-10.711-19.799-10.711-24.411 0l-65.875 152.97L12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.749 14.348L256 413.188l143.207 85.034c10.027 5.954 22.314-2.972 19.75-14.348l-36.619-162.476 125.126-109.922c8.761-7.696 4.068-22.139-7.544-23.216z" fill="#ffdc64"/><path d="M268.205 19.91c-4.612-10.711-19.799-10.711-24.411 0l-65.875 152.97L12.08 188.26c-11.612 1.077-16.305 15.52-7.544 23.216l125.126 109.922-36.618 162.476c-2.564 11.376 9.722 20.302 19.749 14.348l31.963-18.979c4.424-182.101 89.034-310.338 156.022-383.697L268.205 19.91z" fill="#ffc850"/></svg>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Comedy</span>
                </div>

                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi, beatae. Ipsa velit dicta commodi, iste quos voluptatem molestias in repudiandae maiores a blanditiis temporibus et voluptate laborum quis sequi aliquid?,
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>pimenvibritania</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                        <div class="ml-4">
                            <div>pimenvibritania</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                        <svg class="w-6 fill-current" viewBox="0 0 499.999 499.999" xmlns="http://www.w3.org/2000/svg"><path d="M171.875 372.237c-2.701 0-5.402-.702-7.812-2.09a15.622 15.622 0 01-7.812-13.535V140.625a15.614 15.614 0 017.797-13.519c4.837-2.792 10.788-2.838 15.625-.015l187.5 107.94c4.837 2.777 7.828 7.95 7.828 13.535s-2.975 10.742-7.828 13.535l-187.5 108.047a15.656 15.656 0 01-7.798 2.089zM187.5 167.648v161.926l140.564-81.009L187.5 167.648z"/><path d="M250 499.999c-137.848 0-250-112.152-250-250S112.152 0 250 0s250 112.152 250 250-112.153 249.999-250 249.999zm0-468.749C129.38 31.25 31.25 129.379 31.25 250S129.379 468.75 250 468.75 468.749 370.62 468.749 250 370.62 31.25 250 31.25z"/></svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="">
                        <img src="/img/actor1.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                        <div class="text-gray-400 text-sm">
                            Actors
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/actor1.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                        <div class="text-gray-400 text-sm">
                            Actors
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/actor1.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                        <div class="text-gray-400 text-sm">
                            Actors
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/actor1.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                        <div class="text-gray-400 text-sm">
                            Actors
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/actor1.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                        <div class="text-gray-400 text-sm">
                            Actors
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/actor1.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="">
                    </a>
                    <div class="mt-2">
                        <a href="" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                        <div class="text-gray-400 text-sm">
                            Actors
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    TEST

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="mt-8">
                    <a href="">
                        <img src="/img/image1.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/image1.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/image1.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
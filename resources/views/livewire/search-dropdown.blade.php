<div class="relative mt-3 md:mt-0">
    <input type="text" wire:model.debounce.500ms="search" class="bg-gray-800 rounded-full w-64 px-4 py-1 pl-8 focus:outline-none text-sm focus:shadow-outline" placeholder="Search">
    <div class="absolute top-0">
        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-500 w-4 mt-2 ml-2" viewBox="0 0 600 600"><path class="heroicon-ui" d="M225.474 0C101.151 0 0 101.151 0 225.474c0 124.33 101.151 225.474 225.474 225.474 124.33 0 225.474-101.144 225.474-225.474C450.948 101.151 349.804 0 225.474 0zm0 409.323c-101.373 0-183.848-82.475-183.848-183.848S124.101 41.626 225.474 41.626s183.848 82.475 183.848 183.848-82.475 183.849-183.848 183.849z"/><path d="M505.902 476.472L386.574 357.144c-8.131-8.131-21.299-8.131-29.43 0-8.131 8.124-8.131 21.306 0 29.43l119.328 119.328c4.065 4.065 9.387 6.098 14.715 6.098 5.321 0 10.649-2.033 14.715-6.098 8.131-8.124 8.131-21.306 0-29.43z"/></svg>
    </div>

    <div wire:loading class="spinner right-0 mr-4 mt-fix" ></div>

    @if (strlen($search) >= 2)
        <div class="absolute bg-gray-800 rounded w-64 mt-4 text-sm">
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border-b border-gray-700">
                            <a href="{{route('movies.show', $result['id'])}}" class="block hover:bg-gray-700 px-3 py-2 flex items-center" >
                                
                                @if ($result['poster_path'])
                                    <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path']}}" alt="" class="w-8">
                                @else
                                    <img src="https://via.placeholder.com/50x75" alt="" class="w-8">
                                @endif
                                
                                <span class="ml-4">{{$result['title']}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>    
            @else
                <div class="px-3 py-3">No result for "{{$search}}"</div>
            @endif    
        </div>
    @endif
</div>
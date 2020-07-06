
    <div class="col-md-3 col-sm-6 mt-2 mb-4 px-4">
        <div>
            <a href="{{ route('movies.show', $movie['id']) }}">
            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="parasite" 
                class=".img-fluid w-100" style="height: 250px">
            </a>
            <div class="mt-2">
            <a href="{{ route('movies.show', $movie['id']) }}" class="text-success text-decoration-none font-weight-bold"><h5>{{ $movie['title'] }}</h5></a>
                <div class=" mt-1 text-white">
                    <span>Rating</span>
                    <span class="ml-1">{{ $movie['vote_average']*10 . "%"  }}</span>
                    <span class="mx-2">|</span>
                    <span>
                        {{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}
                    </span>
                </div>
                <div class="text-white">
                    @foreach($movie['genre_ids'] as $genre)
                        {{ $genres->get($genre)}}{{ $loop->last? '':',' }}
                    @endforeach
                </div>
            </div>
        </div>

    
    </div>

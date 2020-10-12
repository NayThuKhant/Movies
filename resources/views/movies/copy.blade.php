@extends('layouts.main')

@section('content')
    <div class="container border-bottom border-dark py-4">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="" style="height: 350px" class="w-100 img-fluid">
            </div>

            <div class="col-md-9 text-dark pt-2">
                <h2 class="font-weight-bold">
                    {{ $movie['title'] }}
                </h2>
                <div>
                    <span>star</span>
                    <span class="ml-1">{{ $movie['vote_average']*10 . "%"  }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                    <span class="mx-2">|</span>
                    <span>
                        @foreach($movie['genres'] as $genre)
                            {{ $genre['name']}}{{ $loop->last? '':',' }}
                        @endforeach
                    </span>

                </div>
                <p class="mt-4">
                    {{ $movie['overview'] }}
                </p>


                <div class="mt-4">
                    <h4>
                        Featured Crew
                    </h4>
                    <div class="mt-2 row">
                        @foreach ($movie['credits']['crew'] as $crew)
                            @if ($loop->index < 3)
                            <div class="col">
                                <div class="font-weight-bold">{{ $crew['name'] }}</div>
                                <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                            </div>
                            @endif
                        @endforeach
                    </div>

                </div>

                @if (count($movie['videos']['results']) > 0)
                    <div class="row mt-4">
                        <div class="container">
                            <button class="px-5 py-2 btn btn-warning"
                            data-toggle="modal" data-target="#exampleModalCenter"
                            >
                            <span class="ml-2">Play Trailer</span>
                            </button>
                        </div>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" id="modal">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">{{ $movie['title'] }}</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body" id="video">
                                    
                                    <iframe class="w-100" style="height: 350px" src="https://youtube.com/embed/{{ $movie['videos']['results'][0]['key'] }}" frameborder="0" 
                                    allow="autoplay; encrypted-media"
                                    allowfullscreen
                                    ></iframe>

                                </div>
                                <div class="modal-footer">
                                    
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                @endif

                
            </div>

        </div>
    </div>

    <div class="container border-bottom border-dark py-4">
        <div class="movie-cast mt-2">
                <h4 class="mb-4 font-weight-bold">
                    Cast
                </h4>
    
                <div class="row">
                    
                    @foreach ($movie['credits']['cast'] as $cast)
                        @if ($loop->index < 6)
                            <div class="col-md-2 mb-4 mt-2">
                                <a href="#">
                                    <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$cast['profile_path'] }}" alt="{{ $cast['name'] }}" 
                                    class="w-100 img-fluid">
                                </a>
                                <div class="mt-2">
                                    <h5>{{ $cast['name'] }}</h5>
                                    <div class="">
                                        <span>{{ $cast['character'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="movie-cast mt-2">
                <h4 class="mb-4 font-weight-bold">
                    Images
                </h4>
    
                <div class="row">
                    
                    @foreach ($movie['images']['backdrops'] as $image)
                        @if ($loop->index < 6)
                            <div class="col-md-3 mb-4 mt-2">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="{{ $cast['name'] }}" 
                                class="w-100 img-fluid">
                            </div>
                        @endif
                    @endforeach

                </div>
        </div>
    </div>
@endsection
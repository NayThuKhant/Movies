
<form class="my-2 my-lg-0 mr-4 position-relative" x-data="{isOpen:true}" 
@click.away="isOpen=false"
>
    <input wire:model.debounce.500ms="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
    @focus="isOpen=true"
    @keydown="isOpen=true"
    @keydown.escape.window="isOpen=false"
    @keydown.shift.tab.window="isOpen=false"
    x-ref="search"
    @keydown.window="{
        if(event.keyCode >= 65 && event.keyCode <= 90){
            $refs.search.focus();
        }
    }"
    >
    <div wire:loading class="spinner-border text-primary position-absolute" role="status" style="top:30%;right:10px;font-size: 10px; width: 20px;height: 20px;"></div>

        <ul class=" position-absolute mt-3 w-100 " 
        x-show="isOpen"
        @keydown.escape.window="isOpen=false"
        >
            @forelse ($searchResult as $result)
                <li class="border-bottom border-dark bg-white py-1 px-2"
                @if($loop->last) @keydown.tab.exact="isOpen=false"  @endif
                >
                    <a href="{{ route('movies.show',$result['id']) }}" class="d-block">{{$result['title']}}</a>
                </li>
            @empty
                @if (strlen($search)>=2)
                <li class="border-bottom border-dark bg-white py-1 px-2">
                    <a href="#" class="d-block">No result for "{{ $search }}"</a>
                </li>
                @endif     
            @endforelse    
        </ul>

</form>






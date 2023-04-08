<div x-data="{ dropdownOpen: false }" class="header-action-icon-2" wire:poll.5s>
    <button @click="dropdownOpen = !dropdownOpen" class="mini-cart-icon"><i class="fas fa-comment-alt"></i>
    </button>

    <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
    
    @if(count($demandes) > 0)
        <div class="absolute top-0 right-2">
            <p class="w-4 h-4 rounded-full bg-red-700 font-bold text-white text-center text-xs">!</p>
        </div>
    @endif
   
    <div x-show="dropdownOpen" class=" max-h-96 overflow-y-scroll absolute right-0 mt-2 bg-white rounded-md shadow-lg overflow-hidden z-20" style="width:20rem;">
       
        @forelse($demandes as $demande)
        <div class="py-2">
            <div class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                 <div class="p-2 w-20"><img src="{{--{{$demande->images}}--}}assets/imgs/shop/product-1-1.jpg" alt="{{ $demande->title}}" width="50" height="50"></div>
                <div class="flex-auto text-sm text-black w-32">
                    <div class="font-bold text-xs">The rent has been complish</div>
                    <div class="text-gray-500 text-xs">{{ $demande->updated_at->diffForHumans() }}</div>
                    <a href="{{ route('feedback.details', ['demande_id' => $demande->id, 'id' => (auth()->user()->role == 1) ? $demande->user_id : $demande->annonces->id]) }}" class="truncate text-red-500 mt-2">Give us your feedback</a> 
                    {{-- <a href="{{ route('feedback.details', ['demande_id' => $demande->id, 'id' => (auth()->user()->role == 1) ? $demande->user_id : $demande->annonces->id]) }}"> --}}

                    {{-- {{route('product.details',['slug'=>$annonce->slug])}} --}}
                </div>
            </div>
        </div>
        @empty
        <div class="py-2">
            <p class="uppercase text-red-500 text-center"> Nothing to feedback</p>
        </div>
        @endforelse
    
    </div>
</div>
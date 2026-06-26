<div class="bg-[#1a1a1a] rounded-lg overflow-hidden">

    @if($portfolio->image)
        <img 
            src="{{ asset('storage/' . $portfolio->image) }}"
            class="w-full h-48 object-cover"
        >
    @endif

    <div class="p-4">
        <h2 class="text-xl font-semibold">
            {{ $portfolio->title }}
        </h2>

        <p class="text-sm text-gray-400">
            {{ $portfolio->category }}
        </p>
    </div>

</div>
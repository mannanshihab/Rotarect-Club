<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    <span wire:loading.remove>{{ $slot }}</span>
    <span wire:loading>
        <div class="animate-spin inline-block size-6 border-[3px] border-current border-t-transparent text-white rounded-full" role="status" aria-label="loading">
            <span class="sr-only">Loading...</span>
        </div>
      </span>  
</button>

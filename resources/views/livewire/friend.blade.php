<div>
    <div>
        @if (Auth::user()->id !== $user->id)
            <p><button wire:click="friendRequest({{ $user->id }})"
                class="inline-flex items-center mt-3 px-4 py-2 bg-blue-500 hover:bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                Добавить в друзья
            </button></p>
        @endif
    </div>

    @if (session()->has('message'))
        <div class="text-white px-2 py-2 border-0 rounded relative mt-2 bg-blue-400">
            <span class="inline-block align-middle">
                {{ session('message') }}
            </span>
        </div>
    @endif
</div>

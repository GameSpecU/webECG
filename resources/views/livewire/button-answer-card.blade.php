<div class="xl:w-1/3 md:w-1/2 p-4">
    <button wire:click="chooseAnswer"
            class="border border-gray-300 p-6 rounded-lg hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50">
        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
            {{--            <svg class=" fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"/></svg>--}}
        </div>
        <h2 class="text-lg  font-medium title-font mb-2">{{ $answer->contents }}</h2>
        {{--        <p class="leading-relaxed text-base">Description</p>--}}
    </button>
</div>
<div>
    <div class="m-auto max-w-6xl mx-auto px-5 py-24 ">
        <div class="flex flex-wrap  mb-20 flex-col items-center text-center">
            <h1 class=" title-font mb-2 text-4xl font-extrabold leading-10 tracking-tight text-left sm:text-5xl sm:leading-none md:text-6xl">
                {{ $question->contents }}</h1>
            <p class="lg:w-1/2 w-full leading-relaxed text-base">
                OPIS.
            </p>
        </div>
        <div class="flex flex-wrap -m-4">
            @foreach($question->answers as $answer)
                @livewire($answer->livewireComponent(), ['answer' => $answer], key($answer->id) )
            @endforeach
        </div>
    </div>

</div>


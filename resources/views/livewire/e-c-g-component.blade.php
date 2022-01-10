<div class="m-auto max-w-6xl mx-auto px-5 py-24 ">

    @livewire(\App\Http\Livewire\QuestionComponent::class, ['question' => $question], key($question->id))
    @foreach($disorders as $disorder)
        {{$disorder['name']}} - {{$disorder['rules_passes']}}/{{$disorder['rules_count']}}
    @endforeach
</div>

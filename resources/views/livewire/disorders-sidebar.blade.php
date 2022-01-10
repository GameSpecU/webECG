<div>
    @foreach($disorders as $disorder)
        {{$disorder['name']}} - {{$disorder['rules_passes']}}/{{$disorder['rules_count']}}
    @endforeach
    {{time()}}
</div>

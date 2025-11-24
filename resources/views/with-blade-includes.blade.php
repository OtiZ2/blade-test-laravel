<p>
    with blade includes
</p>

<ul>
    @foreach($items as $item)
        @include('partials.part', ['item' => $item])
    @endforeach
</ul>
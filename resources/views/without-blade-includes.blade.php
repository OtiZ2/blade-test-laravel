<p>
    without blade includes
</p>

<ul>
    @foreach($items as $item)
        <li>
            {{ $item }}
            <small>detail</small>
            <small>info</small>
        </li>
    @endforeach
</ul>
@foreach($items as $item)

    <li>
        {{ $item }}

        @include('partials.part-detail')
        @include('partials.part-info')
        {{--    @include('partials.part-info')--}}
    </li>

@endforeach
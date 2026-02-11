<x-layout title='Home page'>
    @if (count($ads))
    <div>
        <h2>Annonser</h2>
        <ul>
            @foreach($ads as $ad)
            <li>{{ $ad }} </li>
            @endforeach
        </ul>
    </div>
    @endif
</x-layout>
<x-layout title='Home page'>
    <div>
        <h2>Annonser</h2>
        <ul>
            @foreach($ads as $ad)
            <li>{{ $ad }} </li>
            @endforeach
        </ul>
    </div>
</x-layout>
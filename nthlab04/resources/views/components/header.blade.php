<div>
    <h1> This is Header Component </h1 >
    <h3> Welcome to, {{ $name }} </h3>
    <h3> Fruits are :</h3>
    <ul>
        @foreach ($fruits as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>
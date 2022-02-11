<h1>ciao sono la homepage</h1>
<h2>lista libri</h2>

@foreach ($film as $single_film)
    <h2>{{$single_film->title}}</h2>
    <p>{{$single_film->original_title}}</p>
    <p>{{$single_film->nationality}}</p>
    <p>{{$single_film->date}}</p>
    <p>{{$single_film->vote}}</p>
@endforeach

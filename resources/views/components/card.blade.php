<section> 
    <div class="card-container">       
        @foreach ($film as $single_film)
        <div class="single_card">
            <h2>Titolo: {{$single_film->title}}</h2>
            <p>Titolo originale: {{$single_film->original_title}}</p>
            <p>Provenienza: {{$single_film->nationality}}</p>
            <p>Data: {{$single_film->date}}</p>
            <p>Voto{{$single_film->vote}}</p>
        </div>
        @endforeach
    </div>
</section>

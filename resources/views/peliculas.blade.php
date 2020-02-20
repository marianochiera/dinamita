@forelse ($peliculas as $pelicula)

    {{ $pelicula['titulo'] }} - {{ $pelicula['rating'] }}
    @if ($pelicula['rating'] > 8 )
    
      - recomendado
     @else 
      - cagada
    
@endif
    <br>
@empty
    no hay pelicula
@endforelse


<!-- resources/views/livewire/carrusel-vacantes.blade.php -->
<div id="carrusel" class="carrusel-home">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
        <ol class="carousel-indicators">
            @foreach($vacantes as $index => $vacante)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($vacantes as $index => $vacante)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="card mx-auto" style="width: 50rem; margin: auto;">
                        <img class="card-img-top" src="{{ Storage::url('public/vacantes/' . $vacante->imagen) }}" alt="Slide {{ $index + 1 }}" style="width: 100%; height: 400px; object-fit: contain;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $vacante->titulo }}</h5>
                            <p class="card-text">{{ $vacante->descripcion }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="color: black;">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="color: black;">
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black;"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


{{-- <!-- Styles -->
<style>
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: black !important;
    }
</style> --}}

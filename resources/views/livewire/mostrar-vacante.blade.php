<div>
<div class="p-10">
    <div class=" mb-5">

            <h1 class="font-bold text-3xl text-gray-800 my-3">
                    {{$vacante->titulo}}
            </h1>

                <div class="md:grid md:grid-cols-2 bg-gray- p-4 my-10">
                        <p class="font-bold text-sm uppercase text-gray-800 my-3"> Empresa:
                        <span class="normal-case font-normal">
                            {{$vacante->empresa}}
                        </span>
                        </p>

                    {{-- formatearr las fechas desde la vista --}}
                    @php
                    use Carbon\Carbon;
                    $ultimoDiaFormateado = Carbon::createFromFormat('d/m/Y', $vacante->ultimo_dia)->toFormattedDateString();
                    @endphp
                    
                        
                        <p class="font-bold text-sm uppercase text-gray-800 my-3"> Ultimo dia para postularse:
                        <span class="normal-case font-normal">
                            {{ $ultimoDiaFormateado}}
                        </span>
                        </p>

                        <p class="font-bold text-sm uppercase text-gray-800 my-3"> Categoria:
                        <span class="normal-case font-normal">
                            {{ $vacante->categoria->categoria }}
                        </span>
                        </p>

                        <p class="font-bold text-sm uppercase text-gray-800 my-3"> Salario:
                        <span class="normal-case font-normal">
                            {{ $vacante->salario->salario}}
                        </span>
                        </p>
                </div>
    </div>

    <div class="md:grid md:grid-cols-6 gap-4>
        {{-- se agregara la imagen --}}
            <div class="md:col-span-2">
                <img src="{{asset('storage/vacantes/' . $vacante->imagen )}}" alt="{{'imagen vacante' . $vacante->titulo}}">
            </div>
            {{-- descripcion del peusto --}}

            <div class="md:col-span-4">
                <h2 class="text-2xl font-bold mb-5">Descripcion del Puesto</h2>
                <p class="">{{$vacante->descripcion}}</p>
            </div>
    </div>
@guest
<div class="mt-5  bg-gray-50 border border-dashed p-5 text-center">
    <p>
            Deseas aplicar a esta vacante <a class="font-bold text-indigo-600" href="route{{'register'}}">obten una cuenta y aplica a esta y a otrass vacantes</a>
    </p>

</div>
@endguest


</div>
</div>
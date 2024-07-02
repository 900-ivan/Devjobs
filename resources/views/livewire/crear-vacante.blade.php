<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent="crearVacante">
            <div>
                <x-input-label for="titulo" :value="__('Titulo Vacante')" />

                    <x-text-input 
                    id="titulo"
                    class="block mt-1 w-full" 
                    type="text" 
                    wire:model="titulo" 
                    :value="old('titulo')" 
                    placeholder="Titulo Vacante" />
                    
                    @error('titulo')
                        <livewire:mostra-alerta :message="$message">
                    @enderror
            </div>
            
            <div>
                <x-input-label for="salario" :value="__('Salario Mensual')" />
                
                <select 
                wire:model="salario" 
                id="salario" 
                class="rounded-md shadow-sm border-gray-300
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 
                focus:ring-opacity-50 w-full"
                >

                <option>--Seleccione--</option>
                    @foreach ($salarios as $salario)
                    <option value="{{$salario->id}}">{{$salario->salario}}</option>
                    @endforeach
                </select>
                @error('salario')
                    <livewire:mostra-alerta :message="$message">
                @enderror
            </div>

            <div>
                <x-input-label for="categoria" :value="__('Categoria')" />
                
                <select 
                wire:model="categoria" 
                id="categoria" 
                class="rounded-md shadow-sm border-gray-300
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 
                focus:ring-opacity-50 w-full"
                >
                <option>--Seleccione--</option>
                @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                @endforeach
                </select>

                @error('categoria')
                        <livewire:mostra-alerta :message="$message">
                    @enderror
            </div>

            <div>
                <x-input-label for="empresa" :value="__('Empresa')" />

                    <x-text-input 
                    id="empresa"
                    class="block mt-1 w-full" 
                    type="text" 
                    wire:model="empresa" 
                    :value="old('empresa')" 
                    placeholder="Empresa: ej. Netflix, Uber, Shopify" /> 
                    
                    @error('empresa')
                    <livewire:mostra-alerta :message="$message">
                @enderror
            </div>

            <div>
                <x-input-label for="ultimo_dia" :value="__('Ultimo dia para postularse')" />

                    <x-text-input 
                    id="ultimo_dia"
                    class="block mt-1 w-full" 
                    type="date" 
                    wire:model="ultimo_dia" 
                    :value="old('ultimo_dia')" />
                    
                    @error('ultimo_dia')
                    <livewire:mostra-alerta :message="$message">
                @enderror
            </div>

            <div>
                <x-input-label for="descripcion" :value="__('Descripcion de Puesto')" />
                <textarea wire:model="descripcion" 
                placeholder="Descripcion General del Puesto, Experiencia"
                class="rounded-md shadow-sm border-gray-300
                focus:border-indigo-300 focus:ring focus:ring-indigo-200 
                focus:ring-opacity-50 w-full h-72"
                >
                </textarea>

                @error('descripcion')
                <livewire:mostra-alerta :message="$message">
            @enderror
            </div>

            <div>
                <x-input-label for="imagen" :value="__('Imagen')" />

                    <x-text-input 
                    id="imagen"
                    class="block mt-1 w-full" 
                    type="file" 
                    wire:model="imagen" 
                    accept="image/*"/>  

                    <div class="my-5 w-80">
                        @if ($imagen)
                            Imagen:
                            <img src="{{$imagen->temporaryUrl()}}">
                        @endif
                    </div>

                    @error('imagen')
                    <livewire:mostra-alerta :message="$message">
                @enderror
            </div>

            <x-primary-button class=" mt-6">
               Crear Vacante
            </x-primary-button>
            
</form>
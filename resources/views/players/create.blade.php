<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Players') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-sm-8 mx-auto">
                <div class="card shadow-xl">
                    <div class="card-header">
                        Ingresar los datos para la creación del nuevo jugador en el sistema
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" action="{{route('players.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <strong><label for="Player_name" class="form-label">Nombre del jugador:</label></strong>
                                </div>
                                <div class="col-md-6">
                                    <strong><label for="Player_document" class="form-label">N° documento:</label></strong>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="Player_name" id="Player_name" value="{{ old('Player_name') }}">
                                    @error('Player_name')
                                        <div class="col-md-12 text-center text-danger mb-3"><strong>{{$message}}</strong></div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="Player_document" id="Player_document" value="{{old('Player_document')}}">
                                    @error('Player_document')
                                        <div class="col-md-12 text-center text-danger mb-3"><strong>{{$message}}</strong></div>
                                    @enderror
                                </div>
                                <div class="col-md-8">
                                    <strong><label for="Player_email" class="form-label">Correo del jugador:</label></strong>
                                </div>
                                <div class="col-md-4">
                                    <strong><label for="Player_phone" class="form-label">N° contacto:</label></strong>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="Player_email" id="Player_email" value="{{old('Player_email')}}">
                                    @error('Player_email')
                                        <div class="col-md-12 text-center text-danger mb-3"><strong>{{$message}}</strong></div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="Player_phone" id="Player_phone" value="{{old('Player_phone')}}">
                                    @error('Player_phone')
                                        <div class="col-md-12 text-center text-danger mb-3"><strong>{{$message}}</strong></div>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <strong><label for="Player_age" class="form-label">Edad del jugador:</label></strong>
                                </div>
                                <div class="col-md-3">
                                    <strong><label for="Player_number" class="form-label">N° del jugador:</label></strong>
                                </div>
                                <div class="col-md-6">
                                    <strong><label for="Player_position" class="form-label">Posicion del jugador</label></strong>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="Player_age" id="Player_age" value="{{old('Player_age')}}">
                                    @error('Player_age')
                                        <div class="col-md-12 text-center text-danger mb-3"><strong>{{$message}}</strong></div>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="Player_number" id="Player_number" value="{{old('Player_number')}}">
                                    @error('Player_number')
                                        <div class="col-md-12 text-center text-danger mb-3"><strong>{{$message}}</strong></div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    {{-- <input class="form-control" type="text" name="Player_position" id="Player_position"> --}}
                                    <select class="form-control select-buscar" id="Player_position" name="Player_position" required>
                                        <option value="" hidden selected>Selecciona posicion del jugador</option>
                                        <option value="Alero">Alero</option>
                                        <option value="cierre">Cierre</option>
                                        <option value="pivot">Pivot</option>
                                        <option value="arquero">Arquero</option>
                                    </select>
                                    @error('Player_position')
                                        <div class="col-md-12 text-center text-danger mb-3"><strong>{{$message}}</strong></div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <strong><label for="Player_photo" class="form-label">Equipo al que pertenece el jugador</label></strong>
                                </div>
                                <div class="col-md-6">
                                    <strong><label for="Player_photo" class="form-label">Foto del jugador</label></strong>
                                </div>
                                <div class="col-md-6">
                                    <select name="team_id" id="team_id" class="form-control">
                                        <option value="" hidden selected>Selecciona equipo</option>
                                        @foreach($teams as $id => $name)
                                            <option value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                    @error('Player_position')
                                        <div class="col-md-6 text-center text-danger mb-3"><strong>{{$message}}</strong></div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="file" name="Player_photo" id="Player_photo">
                                    @error('Player_photo')
                                        <div class="col-md-12 text-center text-danger mb-3"><strong>{{$message}}</strong></div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt-2  text-center">
                                    <input class="btn btn-secondary btn-sm sombra" type="submit" name="save_Player" value="{{__('Create Player')}}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

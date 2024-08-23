<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Teams') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-sm-8 mx-auto">
                <div class="card shadow-xl">
                    <div class="card-header">
                        Ingresar los datos para la creación del nuevo equipo en el sistema
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" action="{{route('teams.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <strong><label for="Team_name" class="form-label">Nombre del equipo:</label></strong>
                                </div>
                                <div class="col-md-6">
                                    <strong><label for="Team_manager" class="form-label">Nombre del delegado:</label></strong>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="Team_name" id="Team_name" value="{{ old('Team_name') }}">
                                    @error('Team_name')
                                        <div class="col-md-12 text-center text-danger mb-3"><strong>{{$message}}</strong></div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="Team_manager" id="Team_manager" value="{{old('Team_manager')}}">
                                    @error('Team_manager')
                                        <div class="col-md-12 text-center text-danger mb-3"><strong>{{$message}}</strong></div>
                                    @enderror
                                </div>
                                <div class="col-md-8">
                                    <strong><label for="Team_email" class="form-label">Correo del delegado:</label></strong>
                                </div>
                                <div class="col-md-4">
                                    <strong><label for="Team_phone" class="form-label">N° contacto:</label></strong>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" class="form-control" name="Team_email" id="Team_email" value="{{old('Team_email')}}">
                                    @error('Team_email')
                                        <div class="col-md-12 text-center text-danger mb-3"><strong>{{$message}}</strong></div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" name="Team_phone" id="Team_phone" value="{{old('Team_phone')}}">
                                    @error('Team_phone')
                                        <div class="col-md-12 text-center text-danger mb-3"><strong>{{$message}}</strong></div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <strong></strong>
                                    <strong><label for="Team_neighborhood" class="form-label">Barrio del equipo:</label></strong>
                                </div>
                                <div class="col-md-6">
                                    <strong><label for="Team_shield" class="form-label">Escudo del equipo</label></strong>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="Team_neighborhood" id="Team_neighborhood" value="{{old('Team_neighborhood')}}">
                                    @error('Team_neighborhood')
                                        <div class="col-md-12 text-center text-danger mb-3"><strong>{{$message}}</strong></div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="file" name="Team_shield" id="Team_shield">
                                    @error('Team_shield')
                                        <div class="col-md-12 text-center text-danger mb-3"><strong>{{$message}}</strong></div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt-2  text-center">
                                    <input class="btn btn-secondary btn-sm sombra" type="submit" name="save_team" value="{{__('Crear equipo')}}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

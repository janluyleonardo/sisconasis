<div>
    <div class="modal fade" id="editModal{{ $team->id }}" tabindex="-1" aria-labelledby="EditModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <form action="{{ route('teams.update', $team->id) }}" method="post" class="requires-validation" novalidate>
                    @method('put')
                    @csrf
                    <div class="modal-header text-center">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                            <strong>{{ Str::title($team->Team_name) }}</strong>
                        </h1>
                        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="bi bi-x-circle-fill"style="width:150%;"></i>
                        </button> --}}
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <strong>Nombre del equipo:</strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="Team_name" id="Team_name" value="{{ old('Team_name', $team->Team_name) }}">
                            </div>
                            <div class="col-md-12">
                                <strong>Nombre del delegado:</strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="Team_manager" id="Team_manager" value="{{ old('Team_manager', $team->Team_manager) }}">
                            </div>
                            <div class="col-md-12">
                                <strong>Correo del delegado:</strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="Team_email" id="Team_email" value="{{ old('Team_email', $team->Team_email) }}">
                            </div>
                            <div class="col-md-7">
                                <strong>Localidad del equipo:</strong>
                            </div>
                            <div class="col-md-5">
                                <strong>N° contacto:</strong>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="Team_neighborhood" id="Team_neighborhood" value="{{ old('Team_neighborhood', $team->Team_neighborhood) }}">
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="Team_phone" id="Team_phone" value="{{ old('Team_phone', $team->Team_phone) }}">
                            </div>
                            {{-- <div class="col-md-12">
                                <strong>Escudo del equipo:</strong>
                            </div>
                            <div class="col-md-12">
                                <img class="mx-auto" src="{{asset('shields/'.$team->Team_shield)}}" alt="escudo-{{$team->Team_name}}" width="150">
                                <input class="form-control" type="file" name="Team_shield" id="Team_shield">
                            </div> --}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="sombra btn btn-secondary" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                        <button type="submit" class="sombra btn btn-success" onclick="mostrar()">{{ __('Save changes') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

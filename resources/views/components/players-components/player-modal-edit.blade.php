<div>
    <div class="modal fade" id="PlayerEditModal{{ $player->id }}" tabindex="-1" aria-labelledby="EditModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <form action="{{ route('players.update', $player->id) }}" method="post" class="requires-validation" novalidate>
                    @method('put')
                    @csrf
                    <div class="modal-header text-center">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                            <strong>{{ Str::title($player->Player_name) }}</strong>
                        </h1>
                        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="bi bi-x-circle-fill"style="width:150%;"></i>
                        </button> --}}
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8">
                                <strong>Nombre del jugador:</strong>
                            </div>
                            <div class="col-md-4">
                                <strong>Documento:</strong>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="Player_name" id="Player_name" value="{{ old('Palyer_name', $player->Player_name) }}">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="Player_document" id="Player_document" value="{{ old('Palyer_name', $player->Player_document) }}">
                            </div>
                            <div class="col-md-12">
                                <strong>Correo:</strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="Player_email" id="Player_email" value="{{ old('Team_manager', $player->Player_email) }}">
                            </div>
                            <div class="col-md-4">
                                <strong>N° contacto:</strong>
                            </div>
                            <div class="col-md-3">
                                <strong>Posicion:</strong>
                            </div>
                            <div class="col-md-2">
                                <strong>Edad:</strong>
                            </div>
                            <div class="col-md-3">
                                <strong>Camiseta:</strong>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="Player_phone" id="Player_phone" value="{{ old('Team_manager', $player->Player_phone) }}">
                            </div>
                            <div class="col-md-3">
                                {{-- <input type="text" class="form-control" name="Player_email" id="Player_email" value="{{ old('Team_manager', $player->Player_position) }}"> --}}
                                @php
                                    $AleroSelect = str::lower($player->Player_position) == 'alero' ? 'selected' : '';
                                    $cierreSelect = str::lower($player->Player_position) == 'cierre' ? 'selected' : '';
                                    $pivotSelect = str::lower($player->Player_position) == 'pivot' ? 'selected' : '';
                                    $arqueroSelect = str::lower($player->Player_position) == 'arquero' ? 'selected' : '';
                                @endphp
                                <select class="form-control select-buscar" id="Player_position" name="Player_position" required>
                                    <option value="" hidden selected>Selecciona posicion del jugador</option>
                                    <option value="Alero" {{ $AleroSelect }}>Alero</option>
                                    <option value="cierre" {{ $cierreSelect }}>Cierre</option>
                                    <option value="pivot" {{ $pivotSelect }}>Pivot</option>
                                    <option value="arquero" {{ $arqueroSelect }}>Arquero</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="Player_age" id="Player_age" value="{{ old('Team_manager', $player->Player_age) }}">
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="Player_number" id="Player_number" value="{{ old('Team_manager', $player->Player_number) }}">
                            </div>
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

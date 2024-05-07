<div>
    <div class="modal fade" id="editModal{{ $team->id }}" tabindex="-1" aria-labelledby="EditModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <form action="{{ route('teams.update', $team->id) }}" method="post" class="requires-validation"
                    novalidate>
                    @method('put')
                    @csrf
                    <div class="modal-header text-center">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                            <strong>{{ Str::title($team->Nombre_completo_participante) }}</strong>
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="bi bi-x-circle-fill"style="width:150%;"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <strong>Nombre del participante:</strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="Nombre_completo_participante"
                                    id="Nombre_completo_participante"
                                    value="{{ old('Nombre_completo_participante', $team->Nombre_completo_participante) }}">
                            </div>
                            <div class="col-md-12">
                                <strong>Correo del participante:</strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="Email" id="Email"
                                    value="{{ old('Email', $team->Email) }}">
                            </div>
                            <div class="col-md-7">
                                <strong>Tipo de documento:</strong>
                            </div>
                            <div class="col-md-5">
                                <strong>N° documento:</strong>
                            </div>
                            <div class="col-md-7">
                                @php
                                    $ccSelect =
                                        str::lower($team->Tipo_documento) == 'cédula de ciudadanía' ? 'selected' : '';
                                    $tiSelect =
                                        str::lower($team->Tipo_documento) == 'tarjeta de identidad' ? 'selected' : '';
                                    $ceSelect =
                                        str::lower($team->Tipo_documento) == 'cédula de extrangeria' ? 'selected' : '';
                                    $deSelect =
                                        str::lower($team->Tipo_documento) == 'documento de extrangería'
                                            ? 'selected'
                                            : '';
                                    $paSelect = str::lower($team->Tipo_documento) == 'pasaporte' ? 'selected' : '';
                                    $rcSelect = str::lower($team->Tipo_documento) == 'registro civil' ? 'selected' : '';
                                @endphp
                                <select class="form-control select-buscar" id="Tipo_documento" name="Tipo_documento"
                                    required>
                                    <option value="" hidden selected>Selecciona tipo de documento</option>
                                    <option value="cédula de ciudadanía" {{ $ccSelect }}>Cédula de ciudadanía
                                    </option>
                                    <option value="tarjeta de identidad" {{ $tiSelect }}>Tarjeta de identidad
                                    </option>
                                    <option value="cédula de extrangeria" {{ $ceSelect }}>Cédula de extranjería
                                    </option>
                                    <option value="documento de extrangería" {{ $deSelect }}>Documento de identidad
                                        extranjera</option>
                                    <option value="pasaporte" {{ $paSelect }}>Pasaporte</option>
                                    <option value="registro civil" {{ $rcSelect }}>Registro civil</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="Numero_documento" id="Numero_documento"
                                    value="{{ old('Numero_documento', $team->Numero_documento) }}">
                            </div>
                            <div class="col-md-12">
                                <strong>Realizó {{ $team->Tipo_producto }}</strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="Nombre_producto" id="Nombre_producto"
                                    value="{{ old('Nombre_producto', $team->Nombre_producto) }}">
                            </div>
                            <div class="col-md-6">
                                <strong>fecha inical:</strong>
                            </div>
                            <div class="col-md-6">
                                <strong>fecha final:</strong>
                            </div>
                            <div class="col-md-6">
                                <input type="date"class="form-control" name="Fecha_inicial" id="Fecha_inicial"
                                    value="{{ old('Fecha_inicial', $team->Fecha_inicial) }}">
                            </div>
                            <div class="col-md-6">
                                <input type="date"class="form-control" name="Fecha_final" id="Fecha_final"
                                    value="{{ old('Fecha_final', $team->Fecha_final) }}">
                            </div>
                            <div class="col-md-6">
                                <strong>Duración:</strong>
                            </div>
                            <div class="col-md-6">
                                <strong>Ciudad de expedición:</strong>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Duración" id="Duración"
                                    value="{{ old('Duración', $team->Duración) }}">
                            </div>
                            <div class="col-md-6">
                                <input type="text"class="form-control" name="Ciudad_expedición"
                                    id="Ciudad_expedición"
                                    value="{{ old('Ciudad_expedición', $team->Ciudad_expedición) }}">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="sombra btn btn-secondary"
                            data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                        <button type="submit" class="sombra btn btn-success"
                            onclick="mostrar()">{{ __('Save changes') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

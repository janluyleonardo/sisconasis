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
                            <strong>{{ Str::title($team->Team_name) }}</strong>
                        </h1>
                        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="bi bi-x-circle-fill"style="width:150%;"></i>
                        </button> --}}
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <strong>Nombre del delegado:</strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="Team_name" id="Team_name" value="{{ old('Team_name', $team->Team_manager) }}">
                            </div>
                            <div class="col-md-12">
                                <strong>Correo del delegado:</strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="Email" id="Email"
                                    value="{{ old('Email', $team->Team_email) }}">
                            </div>
                            <div class="col-md-7">
                                <strong>Localidad del equipo:</strong>
                            </div>
                            <div class="col-md-5">
                                <strong>N° contacto:</strong>
                            </div>
                            {{-- <div class="col-md-7">
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
                            </div> --}}
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="Numero_documento" id="Numero_documento"
                                    value="{{ old('Numero_documento', $team->Team_neighborhood) }}">
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="Numero_documento" id="Numero_documento"
                                    value="{{ old('Numero_documento', $team->Team_phone) }}">
                            </div>
                            {{-- <div class="col-md-12">
                                <strong>Realizó {{ $team->Tipo_producto }}</strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="Nombre_producto" id="Nombre_producto"
                                    value="{{ old('Nombre_producto', $team->Nombre_producto) }}">
                            </div> --}}
                            <div class="col-md-6">
                                <strong>fecha  registro:</strong>
                            </div>
                            <div class="col-md-6">
                                <strong>fecha modificación:</strong>
                            </div>
                            <div class="col-md-6">
                                <input type="date"class="form-control" name="Fecha_inicial" id="Fecha_inicial" value="{{ old('Fecha_inicial', $team->created_at->format('Y-m-d')) }}">
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="Fecha_final" id="Fecha_final" value="{{ old('Fecha_final', $team->updated_at->format('Y-m-d')) }}">
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

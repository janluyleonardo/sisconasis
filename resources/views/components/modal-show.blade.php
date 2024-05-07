<div>
    <div class="modal fade" id="showModal{{ $team->id }}" tabindex="-1" aria-labelledby="ShowModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">
                        <strong>{{ Str::upper($team->Team_name) }}</strong>
                    </h1>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <strong>Nombre delegado:</strong>
                        </div>
                        <div class="col-md-7">
                            {{ $team->Team_manager }}
                        </div>
                        <div class="col-md-5">
                            <strong>Número de contacto:</strong>
                        </div>
                        <div class="col-md-7">
                            {{ $team->Team_phone }}
                        </div>
                        <div class="col-md-5">
                            <strong>Correo electrónico:</strong>
                        </div>
                        <div class="col-md-7">
                            {{ $team->Team_email }}
                        </div>
                        <div class="col-md-5">
                            <strong>Localidad:</strong>
                        </div>
                        <div class="col-md-7">
                            {{ $team->Team_neighborhood }}
                        </div>
                        <div class="col-md-5">
                            <strong>Escudo:</strong>
                        </div>
                        <div class="col-md-7">
                            {{ $team->Team_shield }}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="sombra btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle"> {{ __('Close') }}</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

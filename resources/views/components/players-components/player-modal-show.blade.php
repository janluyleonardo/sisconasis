<div>
    <div class="modal fade" id="PlayerShowModal{{ $player->id }}" tabindex="-1" aria-labelledby="ShowModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">
                        <strong>
                            <img src="https://ui-avatars.com/api/?name={{ generateInitials($player->Player_name) }}&color=EBF4FF&background=ff0000" alt="avatar-{{ $player->Player_name }}">
                        </strong>
                    </h1>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Equipo al que pertenece:</strong>
                        </div>
                        <div class="col-md-6">
                            {{ $player->Team->Team_name }}
                        </div>
                        <div class="col-md-5">
                            <strong>Nombre del jugador:</strong>
                        </div>
                        <div class="col-md-7">
                            {{ $player->Player_name }}
                        </div>
                        <div class="col-md-5">
                            <strong>Número de documento:</strong>
                        </div>
                        <div class="col-md-7">
                            {{ $player->Player_document }}
                        </div>
                        <div class="col-md-5">
                            <strong>Correo electrónico:</strong>
                        </div>
                        <div class="col-md-7">
                            {{ $player->Player_email }}
                        </div>
                        <div class="col-md-5">
                            <strong>Edad:</strong>
                        </div>
                        <div class="col-md-7">
                            {{ $player->Player_age }}
                        </div>
                        <div class="col-md-5">
                            <strong>Numero de camiseta:</strong>
                        </div>
                        <div class="col-md-7">
                            {{ $player->Player_number }}
                        </div>
                        <div class="col-md-5">
                            <strong>Posición:</strong>
                        </div>
                        <div class="col-md-7">
                            {{ $player->Player_position }}
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

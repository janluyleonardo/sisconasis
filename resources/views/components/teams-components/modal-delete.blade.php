<div>
    <div class="modal fade" id="deleteModal{{ $team->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content sombra bg-white">
                <div class="modal-header bn-100">
                    <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">
                        {{ Str::upper($team->Team_name) }}
                    </h1>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-circle-fill"style="width:150%;"></i>
                    </button> --}}
                </div>
                <div class="modal-body text-center">
                    Esta seguro(a) de eliminar el registro de:<br>
                    <strong>{{ Str::upper($team->Team_name) }}</strong>
                </div>
                <div class="modal-footer bn-100">
                    <button type="button" class=" sombra btn btn-warning" data-bs-dismiss="modal">Close</button>
                    <form action="{{ route('teams.destroy', $team) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class=" sombra btn btn-danger" onclick="mostrar()">
                            Eliminar registro
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

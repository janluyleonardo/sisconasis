<div>
    <table class="table table-striped table-hover table-sm mx-auto">
        <caption>
            Listado de equipos agregados recientemente
        </caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre jugador</th>
                <th scope="col">Equipo</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->Player_name}}</td>
                    <td>{{$item->Team->Team_name}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="sombra btn btn-sm btn-info" href="#PlayerShowModal{{ $item->id }}" data-bs-toggle="modal">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a class="sombra btn btn-sm btn-warning" href="#PlayerEditModal{{ $item->id }}" data-bs-toggle="modal">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a class="sombra btn btn-sm btn-danger" href="#PlayerDeleteModal{{ $item->id }}" data-bs-toggle="modal">
                                <i class="bi bi-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <!-- showModal -->
                <x-player-modal-show :player="$item"></x-player-modal-show>
                <!-- editModal -->
                <x-player-modal-edit :player="$item"></x-player-modal-edit>
                <!-- Modal delete-->
                <x-player-modal-delete :player="$item"></x-player-modal-delete>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    {{-- {{$players->links()}} --}}
                    {{$players}}
                </td>
            </tr>
        </tfoot>
    </table>
</div>

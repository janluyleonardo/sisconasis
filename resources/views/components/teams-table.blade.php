<div>
    <table class="table table-striped table-hover mx-auto">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Delegado</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Barrio</th>
                <th scope="col">Escudo</th>
                <th scope="col">Registro</th>
                <th scope="col">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->Team_name}}</td>
                    <td>{{$item->Team_manager}}</td>
                    <td>{{$item->Team_phone}}</td>
                    <td>{{$item->Team_email}}</td>
                    <td>{{$item->Team_neighborhood}}</td>
                    <td>{{$item->Team_shield}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="sombra btn btn-sm btn-info" href="#showModal{{ $item->id }}" data-bs-toggle="modal">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a class="sombra btn btn-sm btn-warning" href="#editModal{{ $item->id }}" data-bs-toggle="modal">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a class="sombra btn btn-sm btn-danger" href="#deleteModal{{ $item->id }}" data-bs-toggle="modal">
                                <i class="bi bi-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <!-- showModal -->
                <x-modal-show :team="$item"></x-modal-show>
                <!-- editModal -->
                <x-modal-edit :team="$item"></x-modal-edit>
                <!-- Modal delete-->
                <x-modal-delete :team="$item"></x-modal-delete>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="9">
                    {{-- {{$teams->links()}} --}}
                    {{$teams}}
                </td>
            </tr>
        </tfoot>
    </table>
</div>

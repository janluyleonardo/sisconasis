<div>
    <table class="table table-striped table-hover">
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
                        <div class="btn-group shadow-xl" role="group" aria-label="Button group">
                            <a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a>
                            <a href="#" class="btn btn-warning"><i class="bi bi-feather"></i></a>
                            <a href="#" class="btn btn-danger ing"><i class="bi bi-trash"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="8">
                    {{$teams}}
                </td>
            </tr>
        </tfoot>
    </table>
</div>

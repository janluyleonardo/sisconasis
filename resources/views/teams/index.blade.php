<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teams') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="card shadow-xl">
                    <div class="card-header">
                        <a class="btn btn-sm btn-success sombra" href="{{route('teams.create')}}">
                            <i class="bi bi-person-plus-fill">
                                {{__('Crear nuevo equipo')}}
                            </i>
                        </a>
                    </div>
                    <div class="card-body">
                        <x-teams-table :teams="$teams"></x-teams-table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

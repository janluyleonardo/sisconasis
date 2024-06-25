<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Players') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="card shadow-xl">
                    <div class="card-header">
                        <a class="btn btn-sm btn-success sombra" href="{{route('players.create')}}">
                            <i class="bi bi-person-plus-fill">
                                {{__('Create New Player')}}
                            </i>
                        </a>
                    </div>
                    @if (!$players->isEmpty())
                        <div class="card-body">
                            <x-players-table :players="$players"></x-players-table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

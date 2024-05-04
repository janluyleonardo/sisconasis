<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teams') }}
        </h2>
    </x-slot>

    <div class="container px-5 py-5">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="card shadow-xl">
                    <div class="card-body">
                        <x-teams-table :teams="$teams"></x-teams-table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

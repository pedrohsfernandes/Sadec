<x-app-layout>
    <link rel="stylesheet" href=" {{asset ('public/index.php')}}">
    <script src="{{ asset('resources/app.css')}}"></script>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Veiculos') }}
        </h2>
    </x-slot>


    <!-- \\ php
    $user_id = auth()->id();
    $sql = "SELECT COUNT(*) FROM trucks WHERE user_id > $user_id ";
    $res = $conn->query($sql);
    $count = $res->fetchColumn(); \\ -->

    if ( $cont=0)
     {
        $css= 'py-12';
       echo
        '<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Você não possui nenhum Veiculo") }}

                    <a href="{{route("truck.create")}}">sla</a>
                </div>
            </div>
        </div>
    </div>';

    
</x-app-layout>
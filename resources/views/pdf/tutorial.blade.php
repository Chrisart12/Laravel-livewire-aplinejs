<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> --}}
    

    {{-- <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <!-- livewireStyles -->
    {{-- @livewireStyles --}}

</head>
<body>
    <div id="app">
        
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Select</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Age</th>
                        <th scope="col">Ville</th>
                        <th scope="col">Email</th>
                        <th scope="col">Détail</th>
                        <th scope="col">Editer</th>
                        <th scope="col">Effacer</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <tr>
                            <th>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input">
                            </div>
                            </th>
                            <td>fff</td>
                            <td>ffff</td>
                            <td>55</td>
                            <td>mmm</td>
                            <td>rrrr</td>
                            <td class="td_cursor_pointer"><i class="fas fa-eye"></i></td>
                            <td class="td_cursor_pointer"><i class="fas fa-pen-square"></i></td>
                            <td class="td_cursor_pointer"><i class="fas fa-trash"></i></i></td>
                        </tr>
                
                </tbody>
        </table>
        
    </div>

    {{-- <script src="https://kit.fontawesome.com/a55b727df5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    @livewireScripts --}}
</body>
</html>
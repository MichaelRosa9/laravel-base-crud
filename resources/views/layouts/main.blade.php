<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Base-Crud</title>
</head>
<body>
  {{-- 
    - impostare il progetto
    - creare la migration
    - effettuare il seed dei dati in base al db allegato
    - realizzare la pagina index, poi lo show e il create di questa applicazione CRUD.
    --}}

    @include('partials.header')
    
  @yield('content')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('bite/output.css')}}">
    <title>Dashboard</title>
</head>
<body class="bg-gray-700">
   <div class="grid grid-cols-5 grid-rows">
      <div class=" row-span-1">
         <!-- Sidebar --> 
         @include('layouts.sidebar')
      </div> 

      @yield('content')
  </div>


   <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
   <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
   </script>
   <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>
</html>
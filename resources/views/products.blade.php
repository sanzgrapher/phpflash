 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Include Toastr CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/flasher/flasher.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Other CSS files -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   


</head>

<body>
    
    <main>
        <form action="{{ route('carts.store') }}" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$products}}">
        
        
        
            <input class="form-control" name="quantity" type="number" value="1" min="1" max="5">
            <input class="btn btn-primary" type="submit" value="Add To Cart">
            <hr>
        
        </form>
    </main>
   
    <!-- Include jQuery (if not already included) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Toastr JS -->
    <script src="{{ asset('vendor/flasher/flasher.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

 

</body>

</html>
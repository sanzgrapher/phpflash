<ul>
@php
    $products = ['product1', 'product2', 'product3'];
@endphp
    @foreach ($products as $product)
        <li><a href="{{route('products.show', ['product' => $product])}}">{{$product}}</a></li>
    @endforeach
    
</ul>
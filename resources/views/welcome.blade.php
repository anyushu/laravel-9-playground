<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <div class="container mx-auto">
    <div class="py-12">
      <p class="text-5xl font-bold mb-6">Context</p>
      <h1 class="text-3xl mb-6">Brand: {{ $brand->name }}</h1>
      <h2 class="text-2xl mb-3">Shops</h2>
      <ul class="pl-4">
        @foreach ($brand->shops as $shop)
          <li class="mb-4">
            <h3 class="text-xl mb-3">{{ $shop->name }}</h3>
            <ul class="pl-4">
              @foreach ($shop->products as $product)
                <li class="mb-2">{{ $product->name }}：¥{{ number_format($product->price) }}</li>
              @endforeach
            </ul>
          </li>
        @endforeach
      </ul>
    </div>
    <hr>
    <div class="py-12">
      <table class="table-fixed border-collapse text-left">
        <thead class="bg-slate-100">
          <th class="p-2 border">ID</th>
          <th class="p-2 border">shop_name</th>
          <th class="p-2 border">total_order_amount</th>
          <th class="p-2 border">orderer_name</th>
          <th class="p-2 border">orderer_email</th>
        </thead>
        <tbody>
          @foreach ($brand->shops as $shop)
            @foreach ($shop->orders as $order)
              <tr>
                <td class="p-2 border">{{ $order->id }}</td>
                <td class="p-2 border">{{ $brand->name }} - {{ $shop->name }}</td>
                <td class="p-2 border">¥{{ number_format($order->total_order_amount) }}</td>
                <td class="p-2 border">{{ $order->orderer->name }}</td>
                <td class="p-2 border">{{ $order->orderer->email }}</td>
              </tr>
            @endforeach
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>

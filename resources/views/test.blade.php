<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0ed3cf">
 

    <title> </title>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css">
</head>
<body class="bg-gray-200">

    <section class="container mx-auto p-6 font-mono">
  <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
    <div class="w-full overflow-x-auto">
      <table class="w-full">
        <thead>
          <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
            <th class="px-4 py-3">Id</th>
            <th class="px-4 py-3">Name</th>
            <th class="px-4 py-3">Product Id</th>
            <th class="px-4 py-3">Stock</th>
            <th class="px-4 py-3">Product Name</th>
          </tr>
        </thead>
        <tbody class="bg-white">      
          
           
            @foreach ($location as $item )               
           
          <tr class="text-gray-700">
            <td class="px-4 py-3 border text-md font-semibold">{{$item["id"]}}</td>
            <td class="px-4 py-3 border text-md font-semibold">{{$item["name"]}}</td>
            <td class="px-4 py-3 border text-md font-semibold">{{$item["product_id"]}}</td>
            <td class="px-4 py-3 border text-md font-semibold">{{$item["stock"]}}</td>
            <td class="px-4 py-3 border text-md font-semibold">{{$item["model_location"]["name"]}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>
</body>
</html>

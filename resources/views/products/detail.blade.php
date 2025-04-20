<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title</title>
</head>
<body>
    <h1>Detail Produk</h1>
    @if ($products)
    <p>Nama Produk: {{ $products['name'] }}</p>
    <p>Harga Produk: Rp{{number_format($products['price'] , 0,',','.') }}</p>
    <p>Jenis bahan: {{ $products['material'] }} </p>
    <p>Merek: {{ $products['merek'] }}</p>
    
    @endif
</body>
</html>
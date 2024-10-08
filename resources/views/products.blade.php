<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
<div class="container mt-5">
    <h1 class="mb-4">Product List</h1>

    <!-- Tabel untuk menampilkan produk -->
    <table class="table table-bordered table-striped table-dark">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Created At</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ number_format($product->price, 2, ',', '.') }}</td>
                <td>{{ $product->qty }}</td>
                <td>{{ $product->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Tombol untuk menambahkan produk baru -->
    <form action="/products" method="POST">
        @csrf
        <button type="submit" class="btn btn-info">Add Random Product</button>
    </form>
</div>
</body>
</html>

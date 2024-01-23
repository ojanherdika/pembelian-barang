<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Dashboard</h2>


    @if(Auth::user()->role == 'admin')

    <ul>
        <li><a href="#">Menu 1</a></li>
        <li><a href="#">Menu 2</a></li>
        <li><a href="#">Menu 3</a></li>
    </ul>
    @else
        <!-- Display user menu -->
        <ul>
            <li><a href="#">Pembelian Barang</a></li>
            <li><a href="#">Report Rekap Pembelian Barang</a></li>
        </ul>
    @endif


    <a href="/logout">Logout</a>
</body>
</html>

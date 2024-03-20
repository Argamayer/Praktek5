@extends('layouts.main')
@section('content')

<h1>Form Buku Tamu</h1>
    <form action="proses_form.php" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="pesan">Pesan:</label><br>
        <textarea id="pesan" name="pesan" rows="4" required></textarea><br><br>

        <input type="submit" value="Kirim">
        <input type="reset" value="Reset">
    </form>
@endsection
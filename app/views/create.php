<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
</head>
<body>
    <h1>Add Books</h1>
    <form action="index.php?action=store" method="post">
        <input type="text" name="nama" id="nama" placeholder="Nama Buku" required>
        <input type="text" name="penulis" id="penulis" placeholder="Penulis" required>
        <input type="number" name="thalaman" id="thalaman" placeholder="Jumlah Halaman" required>
        <label for="genre">Genre</label>
        <select name="genre" id="genre" required>
            <option value="philosophy">Philosophy</option>
            <option value="horror">Horror</option>
            <option value="self-improvemment">Self-Improvement</option>
            <option value="politics">Politics</option>
        </select>
        <button type="submit">Add Books</button>
    </form>
</body>
</html>
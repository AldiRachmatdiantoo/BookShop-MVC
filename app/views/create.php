<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #f5f6fa;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 60px 20px;
            margin: 0;
        }

        h1 {
            color: #2d3436;
            margin-bottom: 30px;
        }

        form {
            background: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            gap: 16px;
            width: 100%;
            max-width: 400px;
        }

        input, select {
            padding: 12px 14px;
            border: 1px solid #dcdde1;
            border-radius: 8px;
            font-size: 15px;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input:focus, select:focus {
            border-color: #0984e3;
            box-shadow: 0 0 4px rgba(9,132,227,0.3);
        }

        label {
            font-weight: 600;
            color: #2d3436;
            margin-top: 10px;
        }

        button {
            background-color: #0984e3;
            color: white;
            border: none;
            padding: 12px 0;
            font-size: 16px;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            background-color: #0872c0;
            transform: scale(1.03);
        }

        /* Tombol "Back" terpisah dari form */
        .back-btn {
            margin-top: 25px;
            box-sizing: border-box;
            padding: 10px;
            background-color: #0872c0;
        
        }

        .back-btn:hover {
            background-color: #555e61;
        }

        /* Responsif */
        @media (max-width: 600px) {
            form {
                padding: 25px;
            }

            button, .back-btn {
                width: 100%;
            }
        }
    </style>
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
            <option value="self-improvement">Self-Improvement</option>
            <option value="politics">Politics</option>
        </select>

        <button type="submit">Add Books</button>
    </form>

    <a href="index.php?action=index">
        <button type="button" class="back-btn">Back</button>
    </a>
</body>
</html>

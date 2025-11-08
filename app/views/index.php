<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-Shop Admin</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #f5f6fa;
            margin: 0;
            padding: 40px;
        }

        h1 {
            color: #2d3436;
            text-align: center;
            margin-bottom: 30px;
        }

        a button, .edit-btn {
            background-color: #0984e3;
            color: white;
            border: none;
            padding: 10px 18px;
            font-size: 15px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.2s ease-in-out;
        }

        a button:hover, .edit-btn:hover {
            background-color: #0872c0;
            transform: scale(1.05);
        }

        /* Wrapper agar tabel bisa discroll di layar kecil */
        .table-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            overflow-x: auto;
            max-width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px; /* biar kolom tetap rapi di layar kecil */
        }

        th, td {
            text-align: left;
            padding: 14px 18px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #74b9ff;
            color: white;
            font-weight: 600;
        }

        tr:hover {
            background-color: #f1f2f6;
        }

        .action-cell {
            display: flex;
            gap: 8px;
        }

        @media (max-width: 600px) {
            body {
                padding: 20px;
            }

            h1 {
                font-size: 22px;
            }

            a button {
                width: 100%;
                font-size: 16px;
            }

            th, td {
                padding: 10px 12px;
                font-size: 14px;
            }

            .action-cell {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <h1>Book Shop Admin</h1>
    <a href="index.php?action=create">
        <button type="submit">Add Books</button>
    </a>

    <br>
    <br>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Penulis</th>
                    <th>Total Halaman</th>
                    <th>Genre</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($books as $book): ?>
                    <tr>
                        <td><?= htmlspecialchars($book['nama']) ?></td>
                        <td><?= htmlspecialchars($book['penulis']) ?></td>
                        <td><?= htmlspecialchars($book['thalaman']) ?></td>
                        <td><?= htmlspecialchars($book['genre']) ?></td>
                        <td class="action-cell">
                            <a href="index.php?action=edit&id=<?= $book['id'] ?>">
                                <button class="edit-btn">Edit</button>
                            </a>
                            <a href="index.php?action=delete&id=<?= $book['id'] ?>" onclick="return confirm('Yakin mau hapus buku ini?')">
                                <button class="edit-btn" style="background-color: #d63031;">Delete</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

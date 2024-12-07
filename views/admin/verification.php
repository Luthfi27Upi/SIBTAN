<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            width: 90%;
            max-width: 1200px;
        }

        .card {
            background-color: #d8eaff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
        }

        h3 {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }

        button {
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 14px;
            cursor: pointer;
            transition: 0.3s;
        }

        button.accept {
            background-color: #4caf50;
            color: #fff;
        }

        button.accept:hover {
            background-color: #45a049;
        }

        button.decline {
            background-color: #f44336;
            color: #fff;
        }

        button.decline:hover {
            background-color: #e53935;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php foreach ($filesToVerify as $file): ?>
        <div class="card">
            <h3><?php echo htmlspecialchars($file['FILE_NAME']); ?></h3>
            <p>Status: <?php echo htmlspecialchars($file['STATUS']); ?></p>
            <form method="POST" action="/verif">
                <input type="hidden" name="userId" value="<?php echo htmlspecialchars($file['ID']); ?>">
                <input type="hidden" name="fileName" value="<?php echo htmlspecialchars($file['FILE_NAME']); ?>">
                <button type="submit" name="action" value="approve">Terima</button>
                <button type="submit" name="action" value="decline">Tolak</button>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pdfModal_<?= $file['ID'] ?>">View PDF</button>
            </form>
        </div>
        <div class="modal fade" id="pdfModal_<?= $file['ID'] ?>" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="pdfModalLabel"><?= htmlspecialchars($file['FILE_PATH']) ?> - PDF</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <embed src="<?= htmlspecialchars($file['FILE_PATH']) ?>" type="application/pdf" width="100%" height="500px">
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
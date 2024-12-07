<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        .card {
            background-color: #e7f3ff;
            border: none;
            border-radius: 10px;
            text-align: center;
            padding: 20px;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .status-acc {
            background-color: #d4edda;
            color: #155724;
            border-radius: 15px;
            padding: 5px 10px;
            font-weight: bold;
        }

        .status-fail {
            background-color: #f8d7da;
            color: #721c24;
            border-radius: 15px;
            padding: 5px 10px;
            font-weight: bold;
        }

        .upload-card {
            border: 2px dashed #007bff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            background-color: #f8f9fa;
            color: #6c757d;
        }

        .upload-card:hover {
            background-color: #e9ecef;
        }
    </style>
</head>
<body class="container py-5">
    <div class="row g-4">
        <?php foreach ($cardStatuses as $card): ?>
            <div class="col-md-4">
                <?php if ($card['status'] === null): ?>
                    <!-- Tampilkan Form Upload -->
                    <div class="upload-card">
                        <p><strong>Drag and Drop files here</strong></p>
                        <p>File format: PDF</p>
                        <button class="btn btn-primary">Browse</button>
                    </div>
                <?php else: ?>
                    <!-- Tampilkan Status -->
                    <div class="card">
                        <p><strong><?= $card['label'] ?></strong></p>
                        <span class="<?= $card['status'] === 'ACC' ? 'status-acc' : 'status-fail' ?>">
                            <?= $card['status'] === 'ACC' ? 'Acc' : 'Gagal' ?>
                        </span>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

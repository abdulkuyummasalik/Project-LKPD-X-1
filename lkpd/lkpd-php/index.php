<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">LKPD PHP</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php echo ($pageTitle == 'Tugas 1') ? 'active' : ''; ?>">
                            <a class="nav-link" href="page1.php">LKPD No. 1</a>
                        </li>
                        <li class="nav-item <?php echo ($pageTitle == 'Tugas 2') ? 'active' : ''; ?>">
                            <a class="nav-link" href="page2.php">LKPD No. 2</a>
                        </li>
                        <li class="nav-item <?php echo ($pageTitle == 'Tugas 3') ? 'active' : ''; ?>">
                            <a class="nav-link" href="page3.php">LKPD No. 3</a>
                        </li>
                        <li class="nav-item <?php echo ($pageTitle == 'Tugas 4') ? 'active' : ''; ?>">
                            <a class="nav-link" href="page4.php">LKPD No. 4</a>
                        </li>
                        <li class="nav-item <?php echo ($pageTitle == 'Tugas 5') ? 'active' : ''; ?>">
                            <a class="nav-link" href="page5.php">LKPD No. 5</a>
                        </li>
                        <li class="nav-item <?php echo ($pageTitle == 'Tugas 6') ? 'active' : ''; ?>">
                            <a class="nav-link" href="page6.php">LKPD No. 6</a>
                        </li>
                        <li class="nav-item <?php echo ($pageTitle == 'Tugas 7') ? 'active' : ''; ?>">
                            <a class="nav-link" href="page7.php">LKPD No. 7</a>
                        </li>
                        <li class="nav-item <?php echo ($pageTitle == 'Tugas 8') ? 'active' : ''; ?>">
                            <a class="nav-link" href="page8.php">LKPD No. 8</a>
                        </li>
                        <li class="nav-item <?php echo ($pageTitle == 'Tugas 9') ? 'active' : ''; ?>">
                            <a class="nav-link" href="page9.php">LKPD No. 9</a>
                        </li>
                        <li class="nav-item <?php echo ($pageTitle == 'Tugas 10') ? 'active' : ''; ?>">
                            <a class="nav-link" href="page10.php">LKPD No. 10</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
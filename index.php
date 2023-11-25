<!DOCTYPE html>
<html lang="en">
<head>
    <title>Caesar Cipher</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.css">
    <?php include 'project.php'; ?>
</head>
<body>
    <form action="index.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Caesar Cipher</h2>
                </div>    
            </div>
            <hr/>
            <div class="row">
                <div class="col-lg-6">
                    <label for="key">Kunci: </label>
                    <input type="text" class="key form-control" name="key" id="key" required>
                </div>    
            </div>
            <hr/>
            <div class="row">
                <div class="col-lg-8">
                    <label for="origin">Masukkan teks yang akan di enkripsi atau dekripsi:</label><br>
                    <textarea name="origin" id="origin" class="form-control" required><?php if (isset($_POST['encrypt'])) { cesar(); } elseif (isset($_POST['decrypt'])) { decesar(); }?></textarea>
                </div>
                <div class="col-lg-4 text-center">
                    <button class="btn btn-primary first" name="encrypt">Enkripsi</button>
                    <button class="btn btn-danger" name="decrypt">Dekripsi</button>
                </div>                
            </div>
        </div>
    </form>
    <script src="jquery-3.3.1.js"></script>
    <script src="bootstrap.min.js"></script>
</body>
</html>

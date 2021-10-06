<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="center">
        <form action="konfirmasiUpload.php" method="POST" enctype="multipart/form-data">

            <label for="labelFile">File</label>
            <input type="file" name="inputFileUploadname" id="inputFileUploadid">

            <label for="labelDeskripsiFile">Deksripsi</label>
            <input type="text" name="inputDeskripsiFilename" id="inputFileUploadid">

            <input type="submit" value="upload">

        </form>
    </div>

</body>

</html>
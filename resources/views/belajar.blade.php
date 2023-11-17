<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <form action="mahasiswa/simpan" method="POST">
    <div class="row">
      <div class="col-sm-6">
        <div class="Form-Group">
          <label for="Nama">Nama</label>
          <input type="text" class="Form-Control" name="nama">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="Form-Group">
          <label for="NPM">NPM</label>
          <input type="number" class="Form-Control" name="npm">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="Form-Group">
          <label for="Kelas">Kelas</label>
          <select class="Form-Control" name="Kelas">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
          </select>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="Form-Group">
          <label for="Tanggal_Lahir">Tanggal Lahir</label>
          <input type="date" class="Form-Control" name="Tanggal_Lahir">
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
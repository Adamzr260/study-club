<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>
<body>
    <form action="{{ route('student.store')}}"method="POST">
        @csrf

        <label for="nim">NIM:</label>
        <Input type="text" id="nim" name="nim">
        <br><br>

        <label for="name">Name:</label>
        <Input type="text" id="name" name="name">
        <br><br>

        <label for="prodi">Program Studi:</label>
        <Input type="text" id="prodi" name="prodi">
        <br><br>

        <label for="angkatan">Angkatan</label>
        <Input type="number" id="angkatan" name="angkatan">
        <br><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" rows="4"></textarea>
        <br><br>

        <button type="submit">Submit</button>
    </form> 
    
</body>
</html>
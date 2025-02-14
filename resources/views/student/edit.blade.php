<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>
<body>
<form action="{{ route('student.update',$student ->id )}}" method="POST">
    @csrf
    @method("PUT")

        <label for="nim">NIM:</label>
        <Input type="text" id="nim" name="nim" value="{{ $student ->nim }}">
        <br><br>

        <label for="name">Name:</label>
        <Input type="text" id="name" name="name" value="{{ $student ->name }}">
        <br><br>

        <label for="prodi">Program Studi:</label>
        <Input type="text" id="prodi" name="prodi" value="{{ $student ->prodi }}">
        <br><br>

        <label for="angkatan">Angkatan</label>
        <Input type="number" id="angkatan" name="angkatan" value="{{ $student ->angkatan }}">
        <br><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" rows="4">{{$student ->nim}}</textarea>
        <br><br>

        <button type="submit">Submit</button>
    </form> 
</body>
</html>
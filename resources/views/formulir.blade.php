<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('simpan-formulir') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Field 1 -->
        <label for="field1">Field 1:</label>
        <input type="text" name="field1" id="field1" required>

        <!-- Field 2 (File Upload) -->
        <label for="gambar">Gambar:</label>
        <input type="file" name="gambar" id="gambar" accept=".png, .jpg, .jpeg" required>
        
        <!-- Field 3 to Field 4 (Add more fields as needed) -->
        
        <!-- Field 5 (Double Value) -->
        <label for="double_field">Double Field (2.50 to 99.99):</label>
        <input type="number" name="double_field" id="double_field" step="0.01" min="2.50" max="99.99" required>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
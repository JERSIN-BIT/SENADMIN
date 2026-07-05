<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form apprentice</title>
</head>
<body>
<h1>formulario apprentice</h1>

<form action="{{route('apprentice.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<br>

<label>
    Email:
    <br>
    <input type="text" name="email">
</label>
<br>
<br>

<label>
    Cell_Number:
    <br>
    <input type="text" name="cell_number">
</label>
<br>
<br>

<label>selecciona un course</label>

<select name="course_id" id="course_id" required>
    <option value="">-- Seleccione un course --</option>
    
    @foreach($courses as $course)
        <option value="{{ $course->id }}">{{ $course->course_number}}</option>
    @endforeach
</select>
<br>
<br>

<label>selecciona un computer</label>

<select name="computer_id" id="computer_id" required>
    <option value="">-- Seleccione un cuartel --</option>
    
    @foreach($computers as $computer)
        <option value="{{ $computer->id }}">{{ $computer->number}}</option>
    @endforeach
</select>
<br>
<br>




<button type="submit">Enviar Formulario:</button>
</form>




</body>
</html>
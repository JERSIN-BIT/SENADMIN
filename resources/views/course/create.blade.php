<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form course</title>
</head>
<body>
<h1>formulario course</h1>

<form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Numero de curso:
    <br>
    <input type="text" name="course_number">
</label>
<br>
<br>

<label>
    Dia:
    <br>
    <input type="text" name="day">
</label>
<br>
<br>


<label>selecciona un area</label>

<select name="area_id" id="area_id" required>
    <option value="">-- Seleccione un area --</option>
    
    @foreach($areas as $area)
        <option value="{{ $area->id }}">{{ $area->name}}</option>
    @endforeach
</select>
<br>
<br>

<label>selecciona un trainingcenter</label>

<select name="training_center_id" id="training_center_id" required>
    <option value="">-- Seleccione un cuartel --</option>
    
    @foreach($trainingcenters as $trainingcenter)
        <option value="{{ $trainingcenter->id }}">{{ $trainingcenter->name}}</option>
    @endforeach
</select>
<br>
<br>




<button type="submit">Enviar Formulario:</button>
</form>




</body>
</html>
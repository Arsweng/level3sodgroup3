<html>
    <head>
        <title>view-employees</title>
    <link rel="stylesheet" href="/style.css">

    </head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg navbar-bg-dark bg-body-tertiary">
<div class="container-fluid">
    <a class="navbar-brand" href="#">
       horix
    </a>
  </div>
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav nav-tabs">
      <li class="nav-item">
        <a href="/view" class="nav-link active" aria-current="page">View students</a>
        </li>
        <li class="nav-item">
        <a href="/" class="nav-link">Add student</a>
        </li>
        <li class="nav-item">
        <a href="/attendances" class="nav-link">attendance</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container my-5">
<table class="table table-dark">
  <thead>
  <tr class="table-dark">
      <th>Id</th>
      <th>student Name</th>
      <th>sex</th>
      <th>class</th>
      <th>actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($student as $recs)
    <tr><td>{{$recs->id}}</td>
       <td>{{$recs->name}}</td>
       <td>{{$recs->sex}}</td>
       <td>{{$recs->class}}</td>
    <td>
<a href="/attend/{{$recs->id}}" class="btn btn-secondary">Attended</a>

|
                 </td>
                </tr>
  @endforeach
  </tbody>
  
</table>
</div>
</body>

</html>
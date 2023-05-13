<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View employee</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/style.css">
</head>
<body class="bg-dark color-light">
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
        <a href="/view" class="nav-link">View student</a>
        </li>
        <li class="nav-item">
        <a href="add-item" class="nav-link active">Add student</a>
    </li>
    <li class="nav-item">
        <a href="/attendances" class="nav-link">attendance</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
        <form class="form my-5 mx-5" action="/save-Employee" method="post">
          @csrf
                <div class="mb-3">
                    <label class="form-label text-light">Student Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label text-light">sex</label>
                    <select class="form-control" name="sex">
                      <option>select</option>
                      <option>Female</option>
                      <option>Male</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label text-light" >class</label>
                    <input type="text" name="class" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">add student</button>
               <a href="/" class = "btn btn-danger link-light link-underline-opacity-0 mx-1">cancel</a>
        </form>
</body>
</html>
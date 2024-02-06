<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <title>Nuovo Portfolio </title>
</head>
<body>
  <div class="container">
  <h1>Nuovo Portfolio </h1>

  <form action="{{route('admin.posts.store')}} " method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titolo Portfolio</label>
    <input type="text" class="form-control" name="title"   >
     

   </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contenuto</label>
    <textarea type="text"  class="form-control" name="content" ></textarea> </textarea>
  </div>
  
 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Slug</label>
    <input type="text" class="form-control" name="slug"   >
     

   </div>

   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</body>
</html>
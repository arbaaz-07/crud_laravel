
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Details of Participants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
   
   
    <div class="container mt-5">

          <h1 class="mb-5">Details Of Participants</h1>
          <a href="{{url('/')}}"><button>Add Participant</button></a>
          <a href="{{url('/trash')}}"><button>Go To Trash</button></a>
          <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" value="{{$search}}">
              <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <?php $i=1; ?>

          <table class="table table-dark mt-2">
  <thead>
    <tr>
      <th scope="col">serial no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Hobby</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($participant as $one)
    <tr>
      <td>{{$i}}</td>
       <?php $i++; ?>
      <td>{{$one->name}}</td>
      <td>{{$one->email}}</td>
      <td>{{$one->hobby}}</td>
      <td>
          <button><a href="{{url('/')}}/edit/{{$one->sno}}">Edit</a></button>
          <button><a href="{{url('/')}}/delete/{{$one->sno}}">Trash</a></button>
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
<div class="row">
  {{$participant->links()}}
</div>
          
      </div>
   
   
   
   
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
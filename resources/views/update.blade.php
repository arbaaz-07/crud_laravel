
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
   
   
    <div class="container mt-5">

          <h1 class="mb-5">Update Your Details</h1>

          <form action="{{url('/')}}/update/{{$participant->sno}}" method="post">
              @csrf

            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{$participant->name}}"aria-describedby="nameHelp">
                <span>
                  @error('name')
                    {{$message}}
                  @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{$participant->email}}" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                @error('email')
                    {{$message}}
                  @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputHobby1" class="form-label">Hobby</label>
                <input type="text" class="form-control" name="hobby" value="{{$participant->hobby}}" id="exampleInputHobby1">
                @error('hobby')
                    {{$message}}
                  @enderror
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
      </div>
   
   
   
   
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
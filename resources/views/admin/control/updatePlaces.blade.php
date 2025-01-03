<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tour Control</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container mt-5 mb-5">

        <a class="" href="{{url('admin/places')}}"> <button class="btn btn-lg btn-info"> << Return </button> </a>

        <div class="mt-4">
            <h4 class="text-primary">
                Insert Place
            </h4>
        </div>


        <form action="../updatePlacesPost" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            @foreach ($places as $p)
            <div class="mb-3 mt-3">
                <label>ID</label>
                <input type="text" class="form-control" placeholder="Enter id" name="id" value="{{$p->location_id}}" readonly>
              </div>
            <div class="mb-3">
                <label>Place name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{$p->location_name}}" >
                @error('name')
                <span style="color: red">{{$message}}</span>
            @enderror
              </div>
            <div class="mb-3">
                <label>Place image</label>
                <input type="file" class="form-control" placeholder="Enter img" name="img" value="{{$p->img}}">
                @error('img')
                    <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <br>
              <button class="btn btn-success"> UPDATE </button>
            @endforeach
              <br>
              <br>
        </form>

    </div>

</body>
</html>

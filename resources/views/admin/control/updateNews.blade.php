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

        <a class="" href="{{url('admin/news')}}"> <button class="btn btn-lg btn-info"> << Return </button> </a>

        <div class="mt-4">
            <h4 class="text-primary">
                Update News
            </h4>
        </div>

        @foreach ($news as $n)
        <form action="../updateNewsPost" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="mb-3 mt-3">
                <label>News id</label>
                <input type="text" class="form-control" name="id" value="{{$n->news_id}}" readonly>
              </div>
            <div class="mb-3">
                <label>News name</label>
                <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{$n->news_name}}">
                @error('name')
                    <span style="color: red">{{$message}}</span>
                @enderror
              </div>
              <div class="mb-3">
              <label>News title</label>
              <textarea type="text" class="form-control" rows="2" placeholder="Enter title" name="title" value="">{{$n->newstitle}}</textarea>
              @error('title')
                  <span style="color: red">{{$message}}</span>
              @enderror
            </div>
            <div class="mb-3">
            <label>News date</label>
            <input type="text" class="form-control" placeholder="Enter date" name="date" value="{{$n->news_date}}">
            @error('date')
                <span style="color: red">{{$message}}</span>
            @enderror
          </div>
          <div class="mb-3">
          <label>News content1</label>
          <textarea type="text" class="form-control" rows="3" placeholder="Enter content1" name="content1" value="">{{$n->news_content}}</textarea>
          @error('content1')
              <span style="color: red">{{$message}}</span>
          @enderror
        </div>
        <div class="mb-3">
        <label>News content2</label>
        <textarea type="text" class="form-control" rows="5" placeholder="Enter content2" name="content2" value="">{{$n->content2}}</textarea>
        @error('content2')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Image 1</label>
        <input type="file" class="form-control" placeholder="Enter img1" name="img1" value="{{$n->img1}}">
        @error('img1')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Image 2</label>
        <input type="file" class="form-control" placeholder="Enter img2" name="img2" value="{{$n->img2}}">
        @error('img2')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label>Image 3</label>
        <input type="file" class="form-control" placeholder="Enter img3" name="img3" value="{{$n->img3}}">
        @error('img3')
            <span style="color: red">{{$message}}</span>
        @enderror
      </div>
              <br>
              <button class="btn btn-success"> UPDATE </button>
              <br>
              <br>
        </form>
        @endforeach
    </div>

</body>
</html>

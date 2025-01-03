<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tour Control</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .msg-block {
            margin-top: 1rem;
        }

        .msg {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            background-color: rgba(188, 241, 188, 0.689);
            color: rgb(16, 161, 16);
            height: 2.5rem;
            width: 40%;
            font-size: 1.3rem;
            border-radius: 2%;
        }
    </style>
</head>

<body>

    <div class="container mt-5 mb-5">

        <a class="" href="{{ url('admin/news') }}"> <button class="btn btn-lg btn-info">
                << Return </button> </a>

        <div class="mt-4">
            <h4 class="text-primary">
                Insert New News
            </h4>
        </div>

        @if (session('msg'))
            <div class="msg-block">
                <span class="msg">{{ session('msg') }}</span>
            </div>
        @endif

        <form action="insertNewsPost" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="mb-3 mt-3">
                <label>News name</label>
                <input type="text" class="form-control" placeholder="Enter News name" name="name"
                    value="{{ old('name') }}">
                @error('name')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label>News title</label>
                <input type="text" class="form-control" placeholder="Enter title" name="title"
                    value="{{ old('title') }}">
                @error('title')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label>News date</label>
                <input type="date" class="form-control" placeholder="Enter date" name="date"
                    value="{{ old('date') }}">
                @error('date')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label>News content 1</label>
                <input type="text" class="form-control" placeholder="Enter content1" name="content1"
                    value="{{ old('content1') }}">
                @error('content1')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label>News content 2</label>
                <input type="text" class="form-control" placeholder="Enter content2" name="content2"
                    value="{{ old('content2') }}">
                @error('content2')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label>Image 1</label>
                <input type="file" class="form-control" placeholder="Enter image1" name="img1"
                    value="{{ old('img1') }}">
                @error('img1')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label>Image 2</label>
                <input type="file" class="form-control" placeholder="Enter image2" name="img2"
                    value="{{ old('img2') }}">
                @error('img2')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label>Image 3</label>
                <input type="file" class="form-control" placeholder="Enter image3" name="img3"
                    value="{{ old('img3') }}">
                @error('img3')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <br>
            <button class="btn btn-primary"> INSERT </button>
            <br>
            <br>
        </form>
    </div>

</body>

</html>

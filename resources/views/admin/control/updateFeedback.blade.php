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

        <div>
            <h4 class="text-primary">
                Update Feedback
            </h4>
        </div>


        <form action="../updateFeedbackPost">
            @foreach ($feedback as $f)
            <div class="mb-3 mt-3">
                <label>ID</label>
                <input type="text" class="form-control" placeholder="Enter id" name="id" value="{{$f->feedback_id}}" readonly>
              </div>
              <div class="mb-3">
                <label>User ID</label>
                <input type="text" class="form-control" placeholder="Enter user id" name="" value="{{$f->user_id}}" readonly>
              </div>
              <div class="mb-3">
                <label>Schedule id</label>
                <input type="text" class="form-control" placeholder="Enter schedule id" name="" value="{{$f->schedule_id}}" readonly>
              </div>
            <div class="mb-3">
                <label>Date</label>
                <input type="text" class="form-control" placeholder="Enter date" name="date" value="{{$f->feedback_date}}" readonly>
              </div>
            <div class="mb-3">
                <label>Subject</label>
                <input type="text" class="form-control" placeholder="Enter subject" name="subject" value="{{$f->subject}}" readonly>
              </div>
              <div class="mb-3">
                <label>Content</label>
                <textarea type="text" class="form-control" placeholder="Enter content" name="content" value=""  readonly>{{$f->content}}</textarea>
              </div>
              <div class="mb-3">
                <label>reply</label>
                <textarea type="text" class="form-control" placeholder="Enter reply" name="reply" value="">{{$f->reply}}</textarea>
                @error('reply')
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

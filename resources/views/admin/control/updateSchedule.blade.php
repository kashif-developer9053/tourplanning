<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tour Control</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3 mb-5">

        <a class="" href="{{url('admin/schedule')}}"> <button class="btn btn-lg btn-info"> << Return </button> </a>

       <div class="col-sm-7 p-5 mt-4" style="background-color: rgb(198, 219, 217);border:1px solid rgba(0, 0, 0, 0);border-radius:10px">

        <div>
            <h4 class="text-primary">
                Update Schedule
            </h4>
        </div>

        @foreach ($schedule as $sche)
            <form action="{{url('admin/control/updateSchedulePost')}}">
                <div class="mb-3 mt-3">
                    <label>Schedule id</label>
                    <input type="text" class="form-control" name="id" value="{{ $sche->schedule_id }}" readonly>
                </div>
                <div class="mb-3">
                    <label>Tour name</label>
                    <select class="form-select" name="tour_id">
                        <option value="{{ $sche->tour->tour_id }}" hidden >{{ $sche->tour->tour_name }}</option>
                        @foreach ($tour as $t)
                        <option value="{{ $t->tour_id }}">{{ $t->tour_name }}</option>
                        @endforeach
                    </select>
                </div>
                @php
                    $start = strtotime($sche->date_start);
                    $end = strtotime($sche->date_end);
                @endphp
                <div class="mb-3">
                    <label>Date start  : <strong>default</strong>  {{ date('d-m-y',$start)}}</label>
                    <input type="date" id="date_start" class="form-control" placeholder="Enter Date start" name="date_start"
                        value="{{$sche->date_start}}" >
                    @error('date_start')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Date end  : <strong>default</strong> {{ date('d-m-y',$end)}}</label>
                    <input type="date" id="date_end" class="form-control" placeholder="Enter Date end" name="date_end"
                        value="{{$sche->date_end}}" >
                    @error('date_end')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label>Tour guide id</label>
                    <select class="form-select" name="tour_guide_id">
                        <option value="{{ $sche->tour_guide->tour_guide_id }}" hidden>{{ $sche->tour_guide->name }}</option>
                        @foreach ($guide as $g)
                        <option value="{{ $g->tour_guide_id }}">{{ $g->name }}</option>
                        @endforeach
                        </option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Tour Code ~~ Format ( point + destination + duration + region + date start-date end ) : example NTQN4T0719-0721</label>
                    <input type="text" class="form-control" placeholder="Enter Tour code" name="tour_code"
                        value="{{ $sche->tour_code }}">
                    @error('tour_code')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </div>
                <br>
                <button class="btn btn-success"> UPDATE </button>
                <br>
                <br>
            </form>
        @endforeach

       </div>

    </div>

    <script>
         var d = new Date();
        date_start = [
            d.getFullYear(),
            ('0' + (d.getMonth() + 1)).slice(-2),
            ('0' + d.getDate()).slice(-2)
        ].join('-');

        $("#date_start").attr("min", date_start);

        date_end = [
            d.getFullYear(),
            ('0' + (d.getMonth() + 1)).slice(-2),
            ('0' + (d.getDate() + 1)).slice(-2)
        ].join('-');

        $("#date_end").attr("min", date_end);
    </script>
</body>

</html>

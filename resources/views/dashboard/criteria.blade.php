<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1>form pemeriksaan</h1>
    <div class="col-md-4">



        <form action="{{ route('criteriastore') }}" method="post">
            @csrf
            <input type="hidden" name="donor_continue_id" value="{{ $id_continue_donor }}">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Berat Badan</label>
                <input type="number" name="berat_badan" step="0.01" class="form-control">
            </div>
            <div class="mb-3">
                <label for="temperatur" class="form-label">suhu</label>
                <input type="number" name="suhu" step="0.01" class="form-control">
            </div>
            <div class="mb-3">
                <label for="sistole" class="form-label">sistole</label>
                <input type="number" name="sistole" class="form-control">
            </div>
            <div class="mb-3">
                <label for="diastole" class="form-label">diastole</label>
                <input type="number" name="diastole" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nadi" class="form-label">nadi</label>
                <input type="number" name="nadi" class="form-control">
            </div>
            <div class="mb-3">
                <label for="haemoglobin" class="form-label">haemoglobin</label>
                <input type="number" name="haemoglobin" step="0.01" class="form-control">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>

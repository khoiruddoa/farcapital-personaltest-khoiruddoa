<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>


    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h1 class="card-title">hasil periksa</h1>
            <h2 class="card-subtitle mb-2 text-muted">nama :</h2>
            <p class="card-text">alamat :</p>
            <p class="card-text">tanggal lahir : </p>
            <table class="table">

                <tbody>
                    <tr>
                        <td>Keterangan</td>
                    </tr>
                    <tr>
                        <td>{{ $criteria->keterangan_periksa }}</td>
                    </tr>

                </tbody>
            </table>
            hasil : @if ($criteria->status_periksa == true)
                anda diizinkan donor
            @else
                anda tidak diizinkan donor darah
            @endif

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>

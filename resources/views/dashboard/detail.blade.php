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
            <h1 class="card-title">Form kriteria</h1>
            <h2 class="card-subtitle mb-2 text-muted">nama : {{ $donor->name }}</h2>
            <p class="card-text">alamat : {{ $donor->alamat }}</p>
            <p class="card-text">tanggal lahir : {{ $donor->tanggal_lahir }}</p>
            <table class="table">

                <tbody>
                    <tr>
                        <td>hepatitis</td>
                        <td>
                            @if ($donor->hepatitis == true)
                                iya
                            @else
                                tidak
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>kontak</td>
                        <td>
                            @if ($donor->kontak == true)
                                iya
                            @else
                                tidak
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>transfusi</td>
                        <td>
                            @if ($donor->transfusi == true)
                                iya
                            @else
                                tidak
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>tato</td>
                        <td>
                            @if ($donor->tato == true)
                                iya
                            @else
                                tidak
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>gigi</td>
                        <td>
                            @if ($donor->gigi == true)
                                iya
                            @else
                                tidak
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>operasi</td>
                        <td>
                            @if ($donor->operasi == true)
                                iya
                            @else
                                tidak
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>vaksin</td>
                        <td>
                            @if ($donor->vaksin == true)
                                iya
                            @else
                                tidak
                            @endif
                        </td>
                    </tr>

                </tbody>
            </table>
            hasil : @if ($donor->status_donor == true)
                <a href="{{ route('dashboardcriteria', ['id' => $donor->id]) }}" class="card-link">masuk
                    Kriteria
                    donor. klik untuk isi form</a>
            @else
                tidak
            @endif <a href="#" class="card-link"></a>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>

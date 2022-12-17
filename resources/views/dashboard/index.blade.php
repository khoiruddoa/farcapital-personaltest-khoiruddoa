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
    <div>

        <h1>ini index</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">jenis kelamin</th>
                    <th scope="col">tanggal lahir</th>
                    <th scope="col">alamat</th>
                    <th scope="col">umur</th>
                    <th scope="col">detail</th>


                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donors as $donor)
                    <tr>
                        <td> 1</td>
                        <td>{{ $donor->name }}</td>
                        <td>{{ $donor->jenis_kelamin }}</td>
                        <td>{{ $donor->tanggal_lahir }}</td>
                        <td>{{ $donor->alamat }}</td>
                        @php
                            $now = \Carbon\Carbon::now();
                            $b_day = \Carbon\Carbon::parse($donor->tanggal_lahir); // Tanggal Lahir
                            $age = $b_day->diffInYears($now);
                        @endphp
                        <td>{{ $age }}</td>

                        @if ($age >= 17)
                            <td><a href="/users/donors/continue/create"> anda bisa menjadi pendonor</a></td>
                        @else
                            <td>anda tidak bisa jadi pendonor</td>
                        @endif
                        <td><a href="{{ route('detailadmin', ['donor' => $donor]) }}">detail</a></td>

                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>

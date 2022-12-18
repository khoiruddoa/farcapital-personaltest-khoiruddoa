<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if ($donorContinue->status_donor == true)
        <h1>selamat anda memenuhi kriteria untuk donor darah. silahkan hadir ke kantor pmi terdekat</h1>
    @else
        <h1>anda belum memnuhi kriteria </h1>
    @endif
</body>

</html>

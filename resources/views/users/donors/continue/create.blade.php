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
    <h1>silahkan isi form dibawah ini. untuk melanjutkan pemeriksaan</h1>
    <div class="col-md-4">
        <form action="/users/donors/continue/store" method="post">
            @csrf
            <input type="hidden" name="donor_id" value="{{ $id }}">

            <label for="exampleInputEmail1" class="form-label">apakah pernah menderita hepatitis b?</label>

            <select class="form-select" aria-label="Default select example" name="hepatitis">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>
            <label for="exampleInputEmail1" class="form-label">apakah kontak dengan penderita hepatitis b?</label>

            <select class="form-select" aria-label="Default select example" name="kontak">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>


            <label for="exampleInputEmail1" class="form-label">apakah transfusi dalam jangka waktu 6 bulan?</label>

            <select class="form-select" aria-label="Default select example" name="transfusi">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>
            <label for="exampleInputEmail1" class="form-label">apakah tato dalam jangka waktu 6 bulan?</label>

            <select class="form-select" aria-label="Default select example" name="tato">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>

            <label for="exampleInputEmail1" class="form-label">apakah gigi dalam jangka waktu 72 jam?</label>

            <select class="form-select" aria-label="Default select example" name="gigi">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>
            <label for="exampleInputEmail1" class="form-label">apakah operasi dalam jangka waktu 6 bulan?</label>

            <select class="form-select" aria-label="Default select example" name="operasi">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>

            <label for="exampleInputEmail1" class="form-label">apakah vaksinasi dalam jangka waktu 24 jam?</label>

            <select class="form-select" aria-label="Default select example" name="vaksin">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>

            <label for="exampleInputEmail1" class="form-label">apakah vaksin parotis dalam jangka waktu 2
                minggu?</label>

            <select class="form-select" aria-label="Default select example" name="parotis">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>

            <label for="exampleInputEmail1" class="form-label">apakah imunisasi rabies dalam jangka waktu 1
                tahun?</label>

            <select class="form-select" aria-label="Default select example" name="rabies">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>

            <label for="exampleInputEmail1" class="form-label">apakah alergi 1 minggu ini?</label>

            <select class="form-select" aria-label="Default select example" name="alergi">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>

            <label for="exampleInputEmail1" class="form-label">apakah transplantasi kulit?</label>

            <select class="form-select" aria-label="Default select example" name="kulit">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>

            <label for="exampleInputEmail1" class="form-label">- Sedang hamil dan dalam jangka waktu 6
                bulan sesudah persalinan</label>

            <select class="form-select" aria-label="Default select example" name="hamil">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>
            <label for="exampleInputEmail1" class="form-label">- Sedang menyusui</label>

            <select class="form-select" aria-label="Default select example" name="susui">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>

            <label for="exampleInputEmail1" class="form-label">Ketergantungan obat</label>

            <select class="form-select" aria-label="Default select example" name="obat">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>

            <label for="exampleInputEmail1" class="form-label">- Alkoholisme akut dan kronis</label>

            <select class="form-select" aria-label="Default select example" name="alkohol">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>

            <label for="exampleInputEmail1" class="form-label">sifilis?</label>

            <select class="form-select" aria-label="Default select example" name="sifilis">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>

            <label for="exampleInputEmail1" class="form-label">- Menderita Tuberkulosis secara klinis</label>

            <select class="form-select" aria-label="Default select example" name="tuberkulosis">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>
            <label for="exampleInputEmail1" class="form-label">- Menderita epilepsi dan sering kejang</label>

            <select class="form-select" aria-label="Default select example" name="epilepsi">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>


            <label for="exampleInputEmail1" class="form-label">- Menderita penyakit kulit pada vena
                (pembuluh darah balik) yang akan
                ditusuk</label>

            <select class="form-select" aria-label="Default select example" name="vena">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>

            <label for="exampleInputEmail1" class="form-label">-- Mempunyai kecenderungan perdarahan
                atau penyakit darah, misalnya thalasemia</label>

            <select class="form-select" aria-label="Default select example" name="thalasemia">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>
            <label for="exampleInputEmail1" class="form-label">- Seseorang yang termasuk kelompok
                masyarakat yang berisiko tinggi
                mendapatkan HIV dan AIDS (homoseks,
                morfinis, berganti-ganti pasangan seks
                dan pemakai jarum suntik tidak steril)</label>

            <select class="form-select" aria-label="Default select example" name="hiv">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>

            <label for="exampleInputEmail1" class="form-label">- Pengidap HIV dan AIDS menurut hasil
                pemeriksaan saat donor darah</label>

            <select class="form-select" aria-label="Default select example" name="aids">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>
            <label for="exampleInputEmail1" class="form-label">- Syarat donor darah untuk perempuan,
                sebaiknya sedang tidak dalam masa haid</label>

            <select class="form-select" aria-label="Default select example" name="haid">

                <option value="1">ya</option>
                <option value="0">tidak</option>
            </select>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>

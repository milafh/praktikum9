<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="col-md-12">
    <h3>
    Daftar Mata Kuliah
    </h3>
    <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Kode Mata Kuliah</th>
                    
                </tr>
            </thead>
        <tbody>

            <?php
            $nomor=1;
            foreach($list_matkul as $matkul){
            ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$matkul->nama?></td>
                    <td><?=$matkul->sks?></td>
                    <td><?=$matkul->kode?></td>
                
                </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>



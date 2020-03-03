<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Data</title>
</head>

<body>
    <h1>
        <center>
            Data Guru
        </center>
    </h1>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <table width="100%" class="table table-hover text-center" id="dataTables-example">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Guru</th>
                    <th>Nama</th>
                    <th>TTL</th>
                    <th>Mapel</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($data as $row) : ?>
                    <tr class="odd gradeX">
                        <td><?php echo $no++; ?></td>
                        <td><?= $row->id_guru; ?></td>
                        <td><?php echo $row->nama_guru; ?></td>
                        <td><?php echo $row->ttl; ?></td>
                        <td><?php echo $row->mapel; ?></td>
                        <td><?php echo $row->kelas; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
</body>

</html>
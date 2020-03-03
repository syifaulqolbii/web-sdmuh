<div class="bg"></div>
<section id="about" class="section">
    <div class="container">
        <h4>Guru dan Tenaga Kependidikan</h4>
        <div class="row ">
            <div class="span4 offset1">
                <div>
                    <h2><strong>Sambutan Kepala Sekolah</strong></h2>
                    <p>
                        Selamat datang di website kami, website ini bertujuan untuk mengenalkan sekolah kami kepada khalayak umum.
                        Semoga dengan website ini sekolah kami bisa dikenal lebih banyak orang.
                        Semoga menjadikan berkah untuk kita semua,
                        Selamat berselancar, semoga bisa bermanfaat untuk anda.
                    </p>
                </div>
            </div>
            <div class="span6">
                <div class="aligncenter">
                    <img class="team-thumb img-circle" src="<?= base_url(); ?>assets/img/team/img-4.jpg" alt="" />
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($detail as $dta) : ?>
                <div class="span2 offset1 flyIn">
                    <div class="people">
                        <img class="team-thumb img-circle" src="<?= base_url(''); ?>assets/img/team/img-2.jpg" alt="" />
                        <h3><?= $dta->nama_guru; ?></h3>
                        <p>
                            <?= $dta->mapel; ?>
                        </p>
                        <a data-toggle="modal" data-target="#modal-detail<?= $dta->id_guru; ?>" data-popup="tooltip" data-placement="top">detail</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php foreach ($detail as $dta) :
        $id = $dta->id_guru; ?>
        <div class="row">
            <div id="modal-detail<?= $id; ?>" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <table class="table table-borderless">
                                <tbody>
                                    <h3>Data Guru</h3>
                                    <center>
                                        <img clresult_arrayass="team-thumb img-circle mt-0" src="<?= base_url(''); ?>assets/img/team/img-2.jpg" alt="" />
                                    </center>
                                    <br>
                                    <tr>
                                        <th scope="row">ID Guru</th>
                                        <td><?php echo $dta->id_guru; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama</th>
                                        <td><?php echo $dta->nama_guru; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">TTL</th>
                                        <td><?php echo $dta->ttl; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Mapel</th>
                                        <td><?php echo $dta->mapel; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Kelas</th>
                                        <td><?php echo $dta->kelas; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
</section>
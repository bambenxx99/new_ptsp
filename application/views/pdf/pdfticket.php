<?php for ($l = 1; $l <= 3; $l++) { ?>

    <table cellpadding="0" cellspacing="0" style="width:538.4pt; border-collapse:collapse;">
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($dataku as $ticket) : ?>
                <tr>
                    <td colspan="3" style="width:88.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;<img src="<?= base_url(); ?>./assets/img/logo_depag.png"></p>
                    </td>
                    <td colspan="7" style="width:428.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong>KANTOR KEMENTERIAN AGAMA&nbsp;</strong></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:8pt;"><strong>KABUPATEN KULON PROGO&nbsp;</strong></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:8pt;">Jl. Bhayangkara Wates 55611 Telepon: (0274) 773086; Faksimili: (0274) 773087</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:8pt;">Website: Kulonprogo.kemenag.go.id</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="10" style="width:527.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <hr size="4">

                    </td>
                </tr>
                <tr>
                    <td colspan="10" style="width:527.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:8pt;"><strong>BUKTI PENERIMAAN BERKAS PERMOHONAN</strong></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                    </td>
                </tr>

                <tr>
                    <td style="width:38.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">No. Ticket</p>
                    </td>
                    <td style="width:10.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">:</p>
                    </td>
                    <td colspan="3" style="width:230.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><?= $ticket['kode_ticket']; ?></p>
                    </td>
                    <td colspan="2" style="width:31.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">Bagian</p>
                    </td>
                    <td style="width:10.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">:</p>
                    </td>
                    <td colspan="2" style="width:151.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><?= $ticket['nama_bidang']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td style="width:38.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">Nama</p>
                    </td>
                    <td style="width:10.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">:</p>
                    </td>
                    <td colspan="3" style="width:230.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><?= $ticket['nama']; ?></p>
                    </td>
                    <td colspan="2" style="width:31.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">Waktu</p>
                    </td>
                    <td style="width:10.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">:</p>
                    </td>
                    <td colspan="2" style="width:151.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><?= $ticket['lama_waktu']; ?> Hari</p>
                    </td>
                </tr>
                <tr>
                    <td style="width:38.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">No. Telp</p>
                    </td>
                    <td style="width:10.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">:</p>
                    </td>
                    <td colspan="3" style="width:230.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><?= $ticket['nomorhp']; ?></p>
                    </td>
                    <td colspan="2" style="width:31.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">Tanggal</p>
                    </td>
                    <td style="width:10.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">:</p>
                    </td>
                    <td colspan="2" style="width:151.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><?= $ticket['tanggal']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="width:88.2pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                    </td>
                    <td style="width:152.1pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                    </td>
                    <td colspan="2" style="width:56.45pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                    </td>
                    <td colspan="3" style="width:56.5pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                    </td>
                    <td style="width:131.15pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="10" style="width:527.6pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">Jenis Layanan : <?= $ticket['jenis_layanan']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="10" style="width:527.6pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">Detail Layanan</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><?= $ticket['detail_ticket']; ?></p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" style="width:88.2pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">Pemohon Layanan</p>
                    </td>
                    <td style="width:152.1pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                    </td>
                    <td colspan="5" style="width:123.75pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                    </td>
                    <td style="width:131.15pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">Petugas Penerima</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="width:88.2pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">(<?= $ticket['nama']; ?>)</p>
                    </td>
                    <td style="width:152.1pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                    </td>
                    <td colspan="5" style="width:123.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                    </td>
                    <td style="width:131.15pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;">&nbsp;</p>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:8pt;"><?= $ticket['name']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="10" style="width:527.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:6pt;">*) Harap di bawa pada waktu pengambilan berkas</p>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
        </tbody>
    </table>
    <p>--------------------------------------------------------------------------------------------------------------------------------------</p>
<?php } ?>
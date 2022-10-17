<!DOCTYPE html>
<html>

<head>
    <title>Halaman menu</title>
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../images/listrik.png">
</head>

<body>
    <!-- pembuka section menu -->
    <section class="section-menu">
        <div class="box-menu">
            <h3>Mulai pembayaran</h3>
        </div>
    </section>
    <!-- penutup section menu -->

    <div class="table-container">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Jabatan</th>
                  <th>Nama Jabatan</th>
                  <th>Gaji Pokok</th>
                  <th>Tunjangan Jabatan</th>
                  <th>Tools</th>
                </tr>
              </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($jabatan as $adm) { ?>
                    <tr>
                      <td data-label="No"><?= $i; ?></td>
                      <td data-label="Kode Jabatan"><?= $adm["kode_jabatan"]; ?></td>
                      <td data-label="Nama Jabatan"><?= $adm["nama_jabatan"]; ?></td>
                      <td data-label="Gaji Pokok"><?= $adm["gaji_pokok"]; ?></td>
                      <td data-label="Tunjangan Jabatan"><?= $adm["tunjangan_jabatan"]; ?></td>
                      <td data-label="Tools">
                        <a class="tombol-edit" href="../data-jabatan/?view=edit&kode=<?= $adm["kode_jabatan"]; ?>">Edit</a>
                        <form method="post" action="">
                          <input type="hidden" name="id" value="<?= $adm["kode_jabatan"]; ?>">
                          <input type="hidden" name="nama" value="<?= $adm["nama_jabatan"]; ?>">
                          <input type="hidden" name="kode" value="<?= $adm["kode_jabatan"]; ?>">
                          <button class="tombol-baru" type="submit" name="hapus" onclick="return confirm ('Yakin?');">Hapus</button>
                        </form>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php } ?>
                </tbody>
              </table>
            </div>

    
</body>

</html>
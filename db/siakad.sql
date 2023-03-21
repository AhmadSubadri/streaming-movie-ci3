CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` int(11) PRIMARY KEY,
  `npm_mahasiswa` char(20),
  `nama_mahasiswa` varchar(200),
  `jenis_kelamin_mahasiswa` enum,
  `tempat_lahir_mahasiswa` varchar(100),
  `tanggal_lahir_mahasiswa` date,
  `email_mahasiswa` varchar(200),
  `telp_mahasiswa` char(13),
  `kode_prodi` int(11)
);

CREATE TABLE `tb_alamat_mahasiswa` (
  `id` int(11) PRIMARY KEY,
  `npm_mahasiswa` char(20),
  `alamat_mahasiswa` varchar(200),
  `desa_mahasiswa` varchar(100),
  `kecamatan_mahasiswa` varchar(100),
  `kabupaten_mahasiswa` varchar(100),
  `provinsi_mahasiswa` varchar(100),
  `kodepos_mahasiswa` char(5),
  `no_telp_mahasiswa` char(13)
);

CREATE TABLE `riwayat_pendidikan_mahasiswa` (
  `id` int(11) PRIMARY KEY,
  `npm_mahasiswa` char(20),
  `jenjang_pendidikan` char(5),
  `nama_sekolah` varchar(100),
  `jurusan_sekolah` varchar(100),
  `alamat_sekolah` text,
  `tahun_lulus_sekolah` date
);

CREATE TABLE `matakuliah` (
  `id` int(11) PRIMARY KEY,
  `kode_mk` int(11),
  `nama_mk` varchar(100),
  `sks_mk` char(10),
  `kode_prodi` int(11),
  `type_mk` char(10)
);

CREATE TABLE `kurikulum` (
  `id` int(11) PRIMARY KEY,
  `kode_kurikulum` int(11),
  `nama_kurikulum` varchar(100),
  `kode_mk` int(11),
  `semester` char(10),
  `kode_dosen` int(11)
);

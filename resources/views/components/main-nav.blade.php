<div class="flex flex-col">
    <span class="text-center">Menu Utama</span>
    @php
        $master = [
            ["#","Jabatan"],
            ["#","Spesialis"],
            ["#","Jenis Infus"],
            ["#","Kategori Perawatan"],
            ["#","Jenis Perawatan"],
        ];

        $ruang = [
            ["#","Poliklinik"],
            ["#","Bangsal"],
            ["#","Kamar"],
        ];

        $obatPenyakit = [
            ["#","Kategori Penyakit"],
            ["#","Penyakit"],
            ["#","Obat"],
            ["#","Obat Penyakit"],
        ];

        $file = [
            ["#","Petugas"],
            ["#","Dokter"],
            ["#","Pasien"],
            ["#","Jadwal Praktek"],
        ];

        $transaksi = [
            ["#","Registrasi"],
            ["#","Rawat Jalan"],
            ["#","Resep Obat"],
            ["#","Rujuk"],
            ["#","Kamar Inap"],
            ["#","Rawat Inap"],
            ["#","Pemberian Infus"],
            ["#","Pemberian Obat"],
            ["#","Billing"],
        ];

        $smsCenter = [
            ["#","Log SMS"],
            ["#","SMS Masuk"],
        ];

        $setting = [
            ["#","Setup Admin"],
            ["#","Setup User"],
            ["#","Vakum Tabel"],
        ];

    @endphp
    <x-mainnavitem title="Master" :items="$master"></x-mainnavitem>
    <x-mainnavitem title="Ruang" :items="$ruang"></x-mainnavitem>
    <x-mainnavitem title="Obat dan Penyakit" :items="$obatPenyakit"></x-mainnavitem>
    <x-mainnavitem title="File" :items="$file"></x-mainnavitem>
    <x-mainnavitem title="Transaksi" :items="$transaksi"></x-mainnavitem>
    <x-mainnavitem title="SMS Center" :items="$smsCenter"></x-mainnavitem>
    <x-mainnavitem title="Setting" :items="$setting"></x-mainnavitem>
</div>

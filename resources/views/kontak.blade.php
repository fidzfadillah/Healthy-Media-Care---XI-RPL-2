<h1>Kontak</h1>

<h2>Call center</h2>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Kota</th>
        <th>Call Center</th>
        <th>Hotline</th>
    </tr>

    @foreach ($call_center as $row)
    <tr>
        <td>{{ isset($i) ? ++$i : $i = 1 }}</td>
        <td>{{ $row->nama_kota }}</td>
        <td>{{ $row->call_center }}</td>
        <td>{{ $row->hotline }}</td>
    </tr>
    @endforeach
</table>

<h2>Rs</h2>
<table border="1">
    <tr>
        <td>No</td>
        <td>Rumah Sakit</td>
        <td>Alamat</td>
        <td>No. Telp</td>
        <td>Halaman Web</td>
    </tr>

    @foreach ($rs_rujukan as $raw)
    <tr>
        <td>{{ isset($a) ? ++$a : $a = 1 }}</td>
        <td>{{ $raw->nama_rs }}</td>
        <td>{{ $raw->alamat }}</td>
        <td>{{ $raw->no_telp }}</td>
        <td>{{ $raw->halaman_web }}</td>
    </tr>
    @endforeach
</table>
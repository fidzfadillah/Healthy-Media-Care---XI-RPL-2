<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
	<a href="{{ url('/rs/tambah') }}">+</a>
<div>
    
    <div class="back">
        <table>
            <thead>
                <th>No</th>
                <th>Rumah Sakit</th>
                <th>No. Telp</th>
                <th>Alamat</th>
                <th>Halaman Web</th>
                <th>Aksi</th>
            </thead>
            <tbody>
            @foreach ($rs as $row)
                <tr>
                    <td>{{ isset($i) ? ++$i : $i = 1}}</td>
                    <td>{{ $row->nama_rs }}</td>
                    <td>{{ $row->no_telp }}</td>
                    <td>{{ $row->alamat }}</td>
                    <td><a href="{{ $row->halaman_web }}">{{ $row->halaman_web }}</a></td>
                    <td><a href="{{ url('/rs/' . $row->id . '/edit') }}">Edit</a>
        | <form action="{{ url('/rs', $row->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit">Delete</button>
        </form></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- <div>
        <h3></h3>
        <td>
        </td>
        <p></p>
        <p></p>
        
    </div> -->
    
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <a href="{{ url('/berita/tambah') }}">+</a>&emsp;
    <a href="{{url('/admin')}}">Home admin</a>&emsp;
    <a href="{{ url('/cc') }}">admin call center</a>&emsp;
    <a href="{{ url('/rs') }}">admin rs rujuk</a>&emsp;
    <a href="{{url('/logout')}}">Logout</a>
    <div class="back">
        <table>
            <thead>
                <th>No</th>
                <th>Judul Berita</th>
                <th>Tanggal</th>
                <th>Isi</th>
                <th>Aksi</th>
            </thead>
            <tbody>
            @foreach ($berita as $row)
                <tr>
                    <td>{{ isset($i) ? ++$i : $i = 1}}</td>
                    <td>{{ $row->judul }}</td>
                    <td>{{ $row->tanggal }}</td>
                    <td>{{ $row->isi }}</td>
                    <td><a href="{{ url('/berita/' . $row->id . '/edit') }}">Edit</a>
		 <form action="{{ url('/berita', $row->id) }}" method="POST">
			@method('DELETE')
			@csrf
			<button type="submit">Delete</button>
		</form></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
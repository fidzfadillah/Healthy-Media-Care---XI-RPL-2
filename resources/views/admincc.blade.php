<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
	<a href="{{ url('/cc/tambah') }}">+</a>

    <div class="back">
        <table>
            <thead>
                <th>No</th>
                <th>Nama Kabupaten/Kota</th>
                <th>Call Center</th>
                <th>Hotline</th>
                <th>Aksi</th>
            </thead>
            <tbody>
            @foreach ($cc as $row)
                <tr>
                    <td>{{ isset($i) ? ++$i : $i = 1}}</td>
                    <td>{{ $row->nama_kota }}</td>
                    <td>{{ $row->call_center }}</td>
                    <td>{{ $row->hotline }}</td>
                    <td><a href="{{ url('/cc/' . $row->id . '/edit') }}">Edit</a>
		| <form action="{{ url('/cc', $row->id) }}" method="POST">
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
    @foreach ($cc as $row)
    <div>
        <h3>{{ $row->nama_kota }}</h3>
        
        <p>{{ $row->call_center }}</p>
        <p>{{ $row->hotline }}</p>
    </div>
    @endforeach
</div> -->
</body>
</html>
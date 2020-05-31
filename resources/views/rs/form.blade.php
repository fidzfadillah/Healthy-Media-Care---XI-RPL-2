<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form class="form-add" action="{{ url('rs', @$rs->id) }}" method="POST">
	@csrf
	@if(!empty($rs))
		@method('PATCH')
	@endif
	<h1>Form Berita</h1>
	<table cellpadding="6" cellspacing="6">	
		<tr>
			<td>ID</td>
			<td><input type="text" name="id" value="{{ old('id', @$rs->id) }}" placeholder="ID"></td>
		</tr>
		<tr>
			<td>Nama Rumah Sakit</td>
			<td><input type="text" name="nama_rs" value="{{ old('nama_rs', @$rs->nama_rs) }}" placeholder="Nama Rumah Sakit"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat" value="{{ old('alamat', @$rs->alamat) }}" placeholder="Alamat"></td>
		</tr>
		<tr>
			<td>No Telepon</td>
			<td><input type="text" name="no_telp" value="{{ old('no_telp', @$rs->no_telp) }}" placeholder="No Telepon"></td>
		</tr>
		<tr>
			<td>Alamat Web</td>
			<td><input type="text" name="alamat_web" value="{{ old('alamat_web', @$rs->alamat_web) }}" placeholder="Alamat Web"></td>
		</tr>
		<tr align="center">
			<td colspan="2"><input type="submit" value="Simpan"></td>
			<td></td>
		</tr>
	</table>
</form>	
</body>
</html>
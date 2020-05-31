<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ url('cc', @$cc->id) }}" method="POST">
		@csrf

		<h1>Form Call Center</h1>
	<div class="border"></div><br>		
		<table cellpadding="6" cellspacing="6">
		@if(!empty($cc))
			@method('PATCH')
		@endif
			<tr>
				<td>ID</td>
				<td><input type="text" name="id" value="{{ old('id', @$cc->id) }}" placeholder="ID"></td>
			</tr>
			<tr>
				<td>KOTA</td>
				<td><input type="text" name="nama_kota" value="{{ old('nama_kota', @$cc->nama_kota) }}" placeholder="KOTA"></td>
			</tr>
			<tr>
				<td>cc</td>
				<td><input type="text" name="call_center" value="{{ old('call_center', @$cc->call_center) }}" placeholder="Call Center"></td>
			</tr>
			<tr>
				<td>HotLine</td>
				<td><input type="text" name="hotline" value="{{ old('hotline', @$cc->hotline) }}" placeholder="HotLine"></td>
			</tr>
			<tr align="center">
				<td colspan="2"><input type="submit" value="Simpan"></td>
				<td></td>
			</tr>
		</table>
	</form>	
</body>
</html>
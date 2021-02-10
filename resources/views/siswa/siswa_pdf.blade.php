<!DOCTYPE html>
<html>
<head>
	<title>Pdf Laporan Siswa</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Data Siswa</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                <th>Nomor Induk Siswa</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Telepon</th>
                <th>Tanggal Lahir</th>
                <th>Photo</th>
			</tr>
		</thead>
		<tbody>
            @foreach ($Siswa as $key => $siswa)
            <tr>
              <th class=" text-center" scope="row">{{ $Siswa->firstItem() + $key }}</th>
              <td class=" text-center" scope="row">{{ $siswa->nis }}</td>
              <td class=" text-center" scope="row">{{ $siswa->nama }}</td>
              <td class=" text-center" scope="row">{{ $siswa->jenis_kelamin }}</td>
              <td class=" text-center" scope="row">{{ $siswa->telepon }}</td>
              <td class=" text-center" scope="row">{{ $siswa->tanggal_lahir }}</td>
              <td class=" text-center" scope="row"><img width="40px" height="60px" src="{{ url('/storage/avatar siswa/'.$siswa->photo) }}"></td>
            </tr>
            @endforeach
		</tbody>
	</table>
</body>
</html>
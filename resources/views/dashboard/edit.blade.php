<!DOCTYPE html>
<html>
<head>
	<title>Web QNA</title>
</head>
<body>
 
	<h3>Edit QNA</h3>
 
	<a href="/tatausaha"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($tatausahas as $t)
	<form action="/tatausaha/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->id }}"> <br/>
		Pertanyaan <input type="text" required="required" name="pertanyaan" value="{{ $t->pertanyaan }}"> <br/>
		Jawaban <input type="text" required="required" name="jawaban" value="{{ $t->jawaban }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>
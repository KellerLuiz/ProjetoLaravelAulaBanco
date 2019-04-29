<h1>Lista de Mensagens</h1>
<hr>
@foreach($mensagem as $a)
	<p>{{$a->titulo}}</p>
	<p>{{$a->texto}}</p>
	<p>{{$a->autor}}</p>

	<br>
@endforeach


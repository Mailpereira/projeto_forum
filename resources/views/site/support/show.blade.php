<h1>Detalhes do {{ $support->subject }}</h1>

<ul>
    <li>{{ $support->subject }}</li>
    <li>{{ $support->status }}</li>
    <li>{{ $support->body }}</li>
</ul>
<form action="{{ route('support.delete', $support->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="subimit">Deletar</button>
</form>

<a href="{{ route('support.index')}}">Voltar</a>
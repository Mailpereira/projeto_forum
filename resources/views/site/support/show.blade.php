<h1>Detalhes do {{ $support->subject }}</h1>

<ul>
    <li>{{ $support->subject }}</li>
    <li>{{ $support->status }}</li>
    <li>{{ $support->body }}</li>
</ul>

<a href="{{ route('support.index')}}">Voltar</a>
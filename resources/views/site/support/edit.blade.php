<h1>Form to updated</h1>

@if($errors->any())
    @foreach ($errors as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('support.update', $support->id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" value="{{ $support->subject }}" name="subject">
    <textarea name="body" cols="30" rows="10" placeholder="Descriptions">{{ $support->body }}</textarea>
    <button type="submit">Send</button>
</form>
<h1>Form for doubt</h1>

@if($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('support.store') }}" method="post">
    @csrf
    <input type="text" placeholder="Subject" name="subject" value="{{ old('subject') }}">
    <textarea name="body" cols="30" rows="10" placeholder="Descriptions">{{ old('body' )}}</textarea>
    <button type="submit">Send</button>
</form>
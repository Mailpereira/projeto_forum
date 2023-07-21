<h1>Form for doubt</h1>

<form action="{{ route('support.store') }}" method="post">
    @csrf
    <input type="text" placeholder="Subject" name="subject">
    <textarea name="body" cols="30" rows="10" placeholder="Body"></textarea>
    <button type="submit">Send</button>
</form>
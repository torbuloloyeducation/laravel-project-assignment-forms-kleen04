<x-layout>

<h1>Email</h1>
<p>Add and manage up to 5 email addresses.</p>

<br>

<div class="card">

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('warning'))
        <div class="alert alert-warning">{{ session('warning') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-error">{{ $errors->first('email') }}</div>
    @endif

    @if(count(session('emails', [])) >= 5)
        <div class="alert alert-warning">Maximum of 5 emails reached.</div>
    @else
        <form method="POST" action="/formtest">
            @csrf
            <label for="email">Email Address</label>
            <input
                id="email"
                type="email"
                name="email"
                placeholder="juandelacruz@umindanao.edu.ph"
            />
            <br><br>
            <div style="display:flex; justify-content:flex-end;">
                <button type="submit">Save</button>
            </div>
        </form>
    @endif

</div>

@if(count(session('emails', [])) > 0)
<br>
<div class="card">
    <h2>Saved Emails</h2>
    <p style="margin-top:4px;">{{ count(session('emails', [])) }} of 5 emails saved.</p>

    <ul>
        @foreach(session('emails', []) as $index => $email)
            <li>
                <span>{{ $email }}</span>
                <form method="POST" action="/emails/delete">
                    @csrf
                    <input type="hidden" name="index" value="{{ $index }}" />
                    <button type="submit" class="btn-delete">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endif

</x-layout>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Us</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('contact.store') }}">
        @csrf

        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name') <div style="color: red;">{{ $message }}</div> @enderror
        </div>

        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email') <div style="color: red;">{{ $message }}</div> @enderror
        </div>

        <div>
            <label>No. Hp:</label>
            <input type="text" name="phone" value="{{ old('phone') }}">
            @error('phone') <div style="color: red;">{{ $message }}</div> @enderror
        </div>

        <div>
            <label>Message:</label>
            <textarea name="message">{{ old('message') }}</textarea>
            @error('message') <div style="color: red;">{{ $message }}</div> @enderror
        </div>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Admin</title>
</head>
<body>
    <h1>Form Tambah Admin</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('admin.store') }}">
        @csrf

        <div>
            <label>Nama:</label>
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
            <label>Alamat:</label>
            <input type="text" name="address" value="{{ old('address') }}">
            @error('address') <div style="color: red;">{{ $message }}</div> @enderror
        </div>

        <div>
            <label>Role:</label>
            <select name="role">
                <option value="">-- Pilih Role --</option>
                <option value="Super Admin" {{ old('role') == 'Super Admin' ? 'selected' : '' }}>Super Admin</option>
                <option value="Kasir" {{ old('role') == 'Kasir' ? 'selected' : '' }}>Kasir</option>
            </select>
            @error('role') <div style="color: red;">{{ $message }}</div> @enderror
        </div>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>

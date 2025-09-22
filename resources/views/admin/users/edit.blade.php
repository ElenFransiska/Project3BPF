<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Role Pengguna</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        select, button { padding: 10px; font-size: 16px; }
        button { background-color: #007bff; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #0056b3; }
    </style>
</head>
<body>

    <h1>Edit Role: {{ $user->name }}</h1>
    <a href="{{ route('admin.users.index') }}">&larr; Kembali ke daftar pengguna</a>
    <hr>

    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf
        @method('PUT') <div class="form-group">
            <p><strong>Nama:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
        </div>

        <div class="form-group">
            <label for="role">Pilih Role Baru:</label>
            <select name="role" id="role">
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>
                    Admin
                </option>
                <option value="kasir" {{ $user->role == 'kasir' ? 'selected' : '' }}>
                    Kasir
                </option>
            </select>
        </div>

        <button type="submit">Update Role</button>
    </form>

</body>
</html>
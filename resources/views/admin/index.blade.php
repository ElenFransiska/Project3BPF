<a href="{{ route('admin.menu.create') }}">Tambah Menu Baru</a>

<table>
    <thead>
        <tr>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($menus as $menu)
        <tr>
            <td>{{ $menu->nama_menu }}</td>
            <td>Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
            <td>
                <a href="{{ route('admin.menu.edit', $menu) }}">Edit</a>
                <form action="{{ route('admin.menu.destroy', $menu) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Anda yakin ingin menghapus menu ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
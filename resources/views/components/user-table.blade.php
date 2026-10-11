<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered align-middle mb-0">
        <thead class="table-dark">
            <tr>
                <th scope="col" class="text-center" style="width: 5%">ID</th>
                <th scope="col">Nama</th>
                <th scope="col" style="width: 20%">NPM</th>
                <th scope="col" class="text-center" style="width: 15%">Kelas</th>
                <th scope="col" class="text-center" style="width: 20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td class="text-center">{{ $user->id }}</td>
                <td class="fw-semibold">{{ $user->nama }}</td>
                <td>{{ $user->nim }}</td>
                <td class="text-center"><span class="badge bg-info text-dark px-3 py-2 rounded-pill">{{ $user->nama_kelas }}</span></td>
                <td class="text-center">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning text-dark d-inline-flex align-items-center">
                            <span class="me-1">✏️</span> Edit
                        </a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data pengguna ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger d-inline-flex align-items-center">
                                <span class="me-1">🗑️</span> Hapus
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center text-muted py-4">Belum ada data pengguna.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

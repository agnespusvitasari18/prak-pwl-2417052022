<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th scope="col" class="text-center" style="width: 5%">ID</th>
                <th scope="col">Nama</th>
                <th scope="col" style="width: 20%">NPM</th>
                <th scope="col" class="text-center" style="width: 15%">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td class="text-center">{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->nim }}</td>
                <td class="text-center"><span class="badge bg-info text-dark">{{ $user->nama_kelas }}</span></td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center text-muted">Belum ada data pengguna.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

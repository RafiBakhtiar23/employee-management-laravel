<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Karyawan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 p-10">

    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-slate-700">
                Data Karyawan
            </h1>

<a href="/employees/create"
   class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow">
    + Tambah Karyawan
</a>

        </div>

        <div class="bg-white rounded-xl shadow">
            @if (session('success'))
    <div class="mb-4 bg-green-100 text-green-700 p-3 rounded-lg">
        {{ session('success') }}
    </div>
@endif

            <table class="w-full text-left">
                <thead class="bg-slate-200 text-slate-600">
                    <tr>
                        <th class="p-4">Nama</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Departemen</th>
                        <th>Status</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
@forelse ($employees as $employee)
<tr class="border-t">
    <td class="p-4">{{ $employee->name }}</td>
    <td>{{ $employee->email }}</td>
    <td>{{ $employee->position }}</td>
    <td>{{ $employee->department }}</td>
    <td>
        @if ($employee->status === 'active')
            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                Aktif
            </span>
        @else
            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                Nonaktif
            </span>
        @endif
    </td>
<td class="text-center">
    <div class="flex justify-center gap-3">
        <a href="/employees/{{ $employee->id }}/edit"
           class="text-blue-600 hover:underline font-medium">
            Edit
        </a>

        <form action="/employees/{{ $employee->id }}"
              method="POST"
              onsubmit="return confirm('Yakin mau hapus karyawan ini?')">
            @csrf
            @method('DELETE')

            <button type="submit"
                    class="text-red-600 hover:underline font-medium">
                Hapus
            </button>
        </form>
    </div>
</td>

</tr>
@empty

                        <tr>
                            <td colspan="6" class="text-center p-6 text-slate-400">
                                Belum ada data karyawan
                            </td>
                        </tr>

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>

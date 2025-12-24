<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Karyawan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 p-10">

<div class="max-w-xl mx-auto bg-white p-6 rounded-xl shadow">
    <h1 class="text-xl font-bold text-slate-700 mb-6">
        Tambah Karyawan
    </h1>
<form method="POST" action="/employees">
    @csrf

    <div class="mb-4">
        <label class="block text-sm text-slate-600 mb-1">Nama</label>
        <input type="text" name="name"
               class="w-full border rounded-lg p-2">
    </div>

    <div class="mb-4">
        <label class="block text-sm text-slate-600 mb-1">Email</label>
        <input type="email" name="email"
               class="w-full border rounded-lg p-2">
    </div>

    <div class="mb-4">
        <label class="block text-sm text-slate-600 mb-1">No HP</label>
        <input type="text" name="phone"
               class="w-full border rounded-lg p-2">
    </div>

    <div class="mb-4">
        <label class="block text-sm text-slate-600 mb-1">Jabatan</label>
        <input type="text" name="position"
               class="w-full border rounded-lg p-2">
    </div>

    <div class="mb-4">
        <label class="block text-sm text-slate-600 mb-1">Departemen</label>
        <input type="text" name="department"
               class="w-full border rounded-lg p-2">
    </div>

    <div class="mb-4">
        <label class="block text-sm text-slate-600 mb-1">Status</label>
        <select name="status"
                class="w-full border rounded-lg p-2">
            <option value="active">Aktif</option>
            <option value="inactive">Nonaktif</option>
        </select>
    </div>

    <div class="mb-6">
        <label class="block text-sm text-slate-600 mb-1">Tanggal Masuk</label>
        <input type="date" name="joined_at"
               class="w-full border rounded-lg p-2">
    </div>

    <div class="flex justify-between">
        <a href="/employees" class="text-slate-500">
            ← Kembali
        </a>

        <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg">
            Simpan
        </button>
    </div>
</form>
</div>

</body>
</html>

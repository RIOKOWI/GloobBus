<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create a Product</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <h1 class="text-center mb-4">Create a Bus</h1>

                    <!-- Error Messages -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form -->
                    <form method="POST" action="{{ route('bus.store') }}" class="card shadow p-4">
                        @csrf
                        @method('post')
                        <div class="mb-3">
                            <label for="kode" class="form-label">Kode Bus</label>
                            <input type="text" name="kode" id="kode" class="form-control" placeholder="Kode Bus">
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Bus</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Bus">
                        </div>

                        <div class="mb-3">
                            <label for="tujuan" class="form-label">Tujuan</label>
                            <input type="text" name="tujuan" id="tujuan" class="form-control" placeholder="Tujuan Bis">
                        </div>

                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga Tiket">
                        </div>

                        <div class="mb-3">
                            <label for="jenis" class="form-label">Jenis</label>
                            <select name="jenis" class="form-select" required>
                                <option value="" disabled selected>Pilih Jenis</option>
                                <option value="ekonomi" {{ old('jenis') == 'ekonomi' ? 'selected' : '' }}>Ekonomi</option>
                                <option value="bisnis" {{ old('jenis') == 'bisnis' ? 'selected' : '' }}>Bisnis</option>
                                <option value="eksekutif" {{ old('jenis') == 'eksekutif' ? 'selected' : '' }}>Eksekutif</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="Jadwal_keberangkatan" class="form-label">Jadwal Berangkat</label>
                            <input type="date" name="jadwal_keberangkatan" id="jadwal_keberangkatan" class="form-control" placeholder="Jadwal Berangkat" value="{{ old('jadwal_keberangkatan') }}">

                        </div>

                        <div class="mb-3">
                            <label for="supir" class="form-label">Supir</label>
                            <input type="text" name="supir" id="supir" class="form-control" placeholder="Nama Supir">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Save Bus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
</x-app-layout>

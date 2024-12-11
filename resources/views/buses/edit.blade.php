<x-app-layout>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Bus</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h4 class="text-center mb-0">Edit Bus</h4>
                    </div>
                    <div class="card-body">
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
                        <form method="POST" action="{{ route('bus.update', ['bus' => $bus]) }}">
                            @csrf
                            @method('put')

                            <!-- Nama -->
                            <div class="mb-3">
                                <label for="kode" class="form-label">Nama</label>
                                <input type="text" name="kode" class="form-control" placeholder="Kode Bus" 
                                       value="{{ old('kode', $bus->kode) }}">
                            </div>

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Bus" 
                                       value="{{ old('nama', $bus->nama) }}">
                            </div>

                            <div class="mb-3">
                                <label for="tujuan" class="form-label">Tujuan</label>
                                <input type="text" name="tujuan" class="form-control" placeholder="Tujuan" 
                                       value="{{ old('tujuan', $bus->tujuan) }}">
                            </div>

                            <div class="mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" name="harga" class="form-control" placeholder="Harga" 
                                       value="{{ old('harga', $bus->harga) }}">
                            </div>

                            <div class="mb-3">
                                <label for="jenis" class="form-label">Jenis</label>
                                <select name="jenis" class="form-select" required>
                                    <option value="" disabled selected>Pilih Jenis</option>
                                    <option value="ekonomi" {{ old('jenis', $bus->jenis) == 'ekonomi' ? 'selected' : '' }}>Ekonomi</option>
                                    <option value="bisnis" {{ old('jenis', $bus->jenis) == 'bisnis' ? 'selected' : '' }}>Bisnis</option>
                                    <option value="eksekutif" {{ old('jenis', $bus->jenis) == 'eksekutif' ? 'selected' : '' }}>Eksekutif</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="jadwal_keberangkatan" class="form-label">Jadwal Keberangkatan</label>
                                <input type="date" name="jadwal_keberangkatan" class="form-control" placeholder="Jadwal Keberangkatan" 
                                       value="{{ old('jadwal_keberangkatan', $bus->jadwal_keberangkatan) }}">
                            </div>
                            
                            <div class="mb-3">
                                <label for="supir" class="form-label">Supir</label>
                                <input type="text" name="supir" class="form-control" placeholder="Supir" 
                                       value="{{ old('supir', $bus->supir) }}">
                            </div>

                            
                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning w-100">Update Bus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</x-app-layout>

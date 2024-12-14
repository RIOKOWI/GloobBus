<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Transaksi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card shadow">
                        <div class="card-header bg-warning text-white text-center">
                            <h3>Buat Tiket</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('transactions.store') }}">
                                @csrf
                                <!-- Customer Field -->
                                <div class="mb-3">
                                    <label for="customer_id" class="form-label">Customer</label>
                                    <select name="customer_id" id="customer_id" class="form-select">
                                        <option value="" disabled selected>Pilih Customer</option>
                                        @foreach($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Bus Field -->
                                <div class="mb-3">
                                    <label for="bus_id" class="form-label">Bus</label>
                                    <select name="bus_id" id="bus_id" class="form-select">
                                        <option value="" disabled selected>Pilih Bus</option>
                                        @foreach($buses as $bus)
                                            <option value="{{ $bus->id }}">{{ $bus->nama }} ({{ $bus->tujuan }})</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Jumlah Tiket -->
                                <div class="mb-3">
                                    <label for="jumlah_tiket" class="form-label">Jumlah Tiket</label>
                                    <input type="number" name="jumlah_tiket" id="jumlah_tiket" class="form-control" min="1" placeholder="Masukkan jumlah tiket">
                                </div>

                                <!-- Tanggal Transaksi -->
                                <div class="mb-3">
                                    <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label>
                                    <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" class="form-control">
                                </div>

                                <!-- Submit Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-warning">Buat Tiket</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bootstrap JS Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
</x-app-layout>

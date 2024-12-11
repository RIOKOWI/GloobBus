<x-app-layout>
    <div class="container">
        <h1>Tambah Transaksi</h1>
        <form method="POST" action="{{ route('transactions.store') }}">
            @csrf
            <div class="mb-3">
                <label for="customer_id" class="form-label">Customer</label>
                <select name="customer_id" id="customer_id" class="form-select">
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="bus_id" class="form-label">Bus</label>
                <select name="bus_id" id="bus_id" class="form-select">
                    @foreach($buses as $bus)
                        <option value="{{ $bus->id }}">{{ $bus->nama }} ({{ $bus->tujuan }})</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="jumlah_tiket" class="form-label">Jumlah Tiket</label>
                <input type="number" name="jumlah_tiket" id="jumlah_tiket" class="form-control" min="1">
            </div>

            <div class="mb-3">
                <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label>
                <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" class="form-control" min="1">
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</x-app-layout>

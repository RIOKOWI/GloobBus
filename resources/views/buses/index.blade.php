<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Bus Management</title>
        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container mt-5">
            <h2 class="mb-4 text-center">Bus Management</h2>

            <div style="margin-left: 45px; margin-bottom: 20px;">
                <a href="{{ route('bus.create') }}">
                    <button class="btn btn-sm btn-primary">Create Bus</button>
                </a>
            </div>
            <!-- Success Message -->
            <div>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>

            <!-- Bus Table -->
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Bus Code</th>
                                <th>Nama Bus</th>
                                <th>Tujuan</th>
                                <th>Price</th>
                                <th>Jenis</th>
                                <th>Jadwal keberangkatan</th>
                                <th>Supir</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buses as $bus)
                                <tr>
                                    <td>{{ $bus->id }}</td>
                                    <td>{{ $bus->kode }}</td>
                                    <td>{{ $bus->nama }}</td>
                                    <td>{{ $bus->tujuan }}</td>
                                    <td>{{ $bus->harga }}</td>
                                    <td>{{ $bus->jenis }}</td>
                                    <td>{{ $bus->jadwal_keberangkatan }}</td>
                                    <td>{{ $bus->supir }}</td>
                                    <td>
                                        <!-- Edit Link -->
                                        <a href="{{ route('bus.edit', ['bus' => $bus]) }}" class="btn btn-sm btn-warning">Edit</a>
                                        
                                        <!-- Delete Form -->
                                        <form method="POST" action="{{ route('bus.destroy', ['bus' => $bus ]) }}" style="display: inline;">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger" >Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Bootstrap 5 JS (Optional) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
</x-app-layout>
<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Customer Management</title>
        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container mt-5">
            <h2 class="mb-4 text-center">Customer Management</h2>

            <div style="margin-left: 45px; margin-bottom: 20px;">
                <a href="{{ route('customer.create') }}">
                    <button class="btn btn-sm btn-primary">Create Customer</button>
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

            <!-- Customer Table -->
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Alamat</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customer as $customer)
                                <tr>
                                    <td>{{ $customer->id }}</td>
                                    <td>{{ $customer->nama }}</td>
                                    <td>{{ $customer->alamat }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>
                                        <!-- Edit Link -->
                                        <a href="{{ route('customer.edit', ['customer' => $customer]) }}" class="btn btn-sm btn-warning">Edit</a>
                                        
                                        <!-- Delete Form -->
                                        <form method="POST" action="{{ route('customer.destroy', ['customer' => $customer]) }}" style="display: inline;">
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

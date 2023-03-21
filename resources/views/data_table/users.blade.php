<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Db Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Users</h2>
        <table class="table table-bordered yajra-datatable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Insta Username</th>
                    <th>Phone</th>
                    {{-- <th>Action</th> --}}
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(function() {
        // $.fn.dataTable.ext.errMode = 'throw';
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('dbusers') }}",
            columns: [{
                    data: 'DT_RowIndex',
                },
                {
                    data: 'name',
                },
                {
                    data: 'email',
                },
                {
                    data: 'insta_username',
                },
                {
                    data: 'phone',
                },
            ]
        });

    });
</script>

</html>

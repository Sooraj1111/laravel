<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>



    <div class="container">
        <div class="text-center">
            <h4>USERS</h4>
            <div>
                <form action="">
                    <input type="search" id="search" class="form-control" placeholder="Find user by name"
                        name="search" value="{{ $_GET['name'] ?? null; }}">
                </form>
            </div>
        </div>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name <a href="{{ route('users') . '?col_name=name'.'&'.'order_by=asc' }}"><i
                                class="fas fa-arrow-up "></i></a>
                        <a href="{{ route('users') . '?col_name=name'.'&'.'order_by=desc'  }}"><i class="fas fa-arrow-down"></i></a>
                    </th>
                    <th scope="col">Email <a href="{{ route('users') . '?col_name=email'.'&'.'order_by=asc' }}"><i
                                class="fas fa-arrow-up "></i></a>
                        <a href="{{ route('users') . '?col_name=email'.'&'.'order_by=desc' }}"><i class="fas fa-arrow-down"></i></a>
                    </th>
                    <th scope="col">Number <a href="{{ route('users') . '?col_name=phone'.'&'.'order_by=asc' }}"><i
                                class="fas fa-arrow-up "></i></a>
                        <a href="{{ route('users') . '?col_name=phone'.'&'.'order_by=desc' }}"><i class="fas fa-arrow-down"></i></a>
                    </th>
                    <th scope="col">Insta Username <a href="{{ route('users') . '?col_name=insta_username'.'&'.'order_by=asc' }}"><i
                                class="fas fa-arrow-up "></i></a>
                        <a href="{{ route('users') . '?col_name=insta_username'.'&'.'order_by=desc' }}"><i class="fas fa-arrow-down"></i></a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sr = 1;
                @endphp
                @forelse ($users as $key => $user)
                    <tr>
                        <th scope="row">{{ $sr }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->insta_username }}</td>
                    </tr>
                    @php
                        $sr++;
                    @endphp
                @empty
                    <td colspan="5" class="text-center"><b>No record found</b></td>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{ isset($_GET['name']) ? null  : $users->links()  }}
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>


</body>

</html>

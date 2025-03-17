<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class = "card-body">
    <button class ='btn btn-success btm-sm'>Add Category</button>
        <table class = "table">
            <thead>
                <tr>
                    <th>#</th>
                    <th scope = "col">Category Name</th>
                    <th scope = "col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $categories as $i => $category )
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{  $category -> category_name }}</td>

                    <td>
                        <button class = "btn btn-info btn-sm">Edit</button>
                        <button class = "btn btn-info btn-sm">Delete</button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!!  $categories -> links() !!}
    </div>
</body>
</html>
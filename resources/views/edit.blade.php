<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h1 class="mt-4 mb-4">Edit Book</h1>

        <form action="{{ route('books.update', $book->id) }}" method="post">
            @csrf
            @method('PUT')

            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">Tên sách:</th>
                        <td><input type="text" name="book_name" value="{{ $book->book_name }}" class="form-control" required></td>
                    </tr>
                    <tr>
                        <th scope="row">Số ISBN:</th>
                        <td><input type="text" name="isbn_no" value="{{ $book->isbn_no }}" class="form-control" required></td>
                    </tr>
                    <tr>
                        <th scope="row">Giá:</th>
                        <td><input type="number" name="book_price" value="{{ $book->book_price }}" class="form-control" required></td>
                    </tr>
                </tbody>
            </table>

            <button type="submit" class="btn btn-primary mt-3">Lưu cập nhật</button>
        </form>
    </div>

</body>

</html>

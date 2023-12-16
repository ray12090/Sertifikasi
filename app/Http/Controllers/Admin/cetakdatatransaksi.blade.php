<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Transaksi</title>
    <style>
        table {
            border-collapse: collapse;
            width: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div align="center">
        <h2>History Transactions</h2>
        <table>
            <thead>
                <tr>
                    <th>Borrow Date</th>
                    <th>BORROWER'S NAME</th>
                    <th>Return Date</th>
                    <th>Penalty</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cetakOrders as $cetakOrder)
                    <tr>
                        <td>{{ $cetakOrder->borrow_date }}</td>
                        <td>{{ $cetakOrder->user_name }}</td>
                        <td>{{ $cetakOrder->return_date }}</td>
                        <td>Rp{{ number_format($cetakOrder->penalty, 2) }}</td>
                        <td>Rp{{ number_format($cetakOrder->total_price, 2) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No Products Available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script>
        window.print();
    </script>
</body>
</html>
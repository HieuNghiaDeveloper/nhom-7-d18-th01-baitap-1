<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ví dụ về jQuery Datatable Ajax PHP</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable();
} );
        $(document).ready(function() {
            $('#jquery-datatable-ajax-php').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                'ajax': {
                    'url':'datatable.php'
                },
                'columns': [
                    { data: 'masach' },
                    { data: 'tensach' },
                    { data: 'mota' },
                    { data: 'gia' },
                    { data: 'hinh' },
                    { data: 'manxb' },
                    { data: 'maloai' },
                ]
           });

        } );
    </script>
</head>
<body>

    <div class="container mt-5">
        <h2 style="margin-bottom: 30px;">Ví dụ về jQuery Datatable Ajax PHP</h2>
        <table id="jquery-datatable-ajax-php" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Mã Sách</th>
                    <th>Tên Sách</th>
                    <th>Mô tả</th>
                    <th>Giá</th>
                    <th>Hình</th>
                    <th>Mã Nhà Xuất Bản</th>
                    <th>Mã Loại</th>
                </tr>
            </thead>
        </table>
    </div>
    

</body>
</html>
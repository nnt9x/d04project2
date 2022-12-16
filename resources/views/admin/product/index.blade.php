@extends('layouts.admin_base')

@section('content')
    <h1 class="text-center mx-1">Danh sách sản phẩm</h1>
    <table id="productsTable" class="table table-sm table-striped table-bordered">
        <thead>
        <tr class="table-primary">
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng tồn kho</th>
            <th>Tỷ lệ so với mô hình thật</th>
            <th>Gía bán</th>
        </tr>
        </thead>
        <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{$product->productCode}} </td>
                <td>{{$product->productName}}</td>
                <td>{{$product->quantityInStock}}</td>
                <td>{{$product->productScale}}</td>
                <td>{{$product->MSRP }}</td>
            </tr>

        @empty
            <tr>
                <td>Không có dữ liệu</td>
            </tr>
        @endforelse
        </tbody>

    </table>

@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#productsTable').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>
@endpush

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
@endpush

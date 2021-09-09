@extends('layouts.app')
@section('title', '- Laporan')
@section('content')
<div class="p-2 m-1">
    <div class="container mt-4">
        <div class="">
            <h4><center><b>Data Penjualan IT CLINIC</center></b></h4>
            <p style="margin-left:5px;" class="mb-3">Bulan :</p>
        <table class="table table-hover p-3">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Laptop</th>
                    <th scope="col">Nama Konsumen</th>
                    <th scope="col">Harga Modal</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nota</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>{{$adin}}</td>
                    <td>@mdo</td>
                    <td><button class="badge btn-primary">Download</button> <button class="badge btn-warning">Upload</button></td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>
                            <button class="badge btn-primary">Download</button> <button class="badge btn-warning">Upload</button>
                        </div>
                    </td>
                    </tr>
                  
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@extends('layouts.js')
@extends('templates.administrators.adminlte')
@section('title', 'List Articles')
@section('main')
<div class="container">
    <div class="row">
        <a href="{{ url('articles/create') }}" type="button" class="btn btn-success">Create</a>
    </div>
    <div class="row">
        <table class="table table-light table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Numb</th>
                    <th scope="col">Title</th>
                    <th scope="col">Last Update</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col">1</th>
                    <td>Makanan Sehat</td>
                    <td>04/04/2021 23:59:59</td>
                    <td>Ada gambarnya / nama gambarnya aja</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-warning">Archieve</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col">2</th>
                    <td>Makanan Diet</td>
                    <td>05/04/2021 23:59:59</td>
                    <td>Ada gambarnya / nama gambarnya aja</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-warning">Archieve</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="col">3</th>
                    <td>Hidup Sehat</td>
                    <td>06/04/2021 23:59:59</td>
                    <td>Ada gambarnya / nama gambarnya aja</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined button group">
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-warning">Archieve</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
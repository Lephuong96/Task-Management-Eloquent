
@extends('home')

@section('title', 'Thêm mới công viêc')


@section('content')

    <div class="row">

        <div class="col-md-12">

            <h2>Thêm mới công việc</h2>

        </div>

        <div class="col-md-12">

            <form method="post" action="{{ route('tasks.store') }}" enctype="multipart/form-data">

                @csrf

                <div class="form-group">

                    <label >Tên công việc</label>

                    <input type="text" class="form-control" name="title" required>

                </div>

                <div class="form-group">

                    <label >Nội dung</label>

                    <textarea class="form-control" rows="3" name="content" required></textarea>

                </div>

                <div class="form-group">

                    <label for="exampleFormControlFile1">Ảnh</label>

                    <input type="file" name="image" class="form-control-file" required>

                </div>

                <div class="form-group">

                    <label for="exampleFormControlFile1">Ngày hết hạn</label>

                    <input type="date" name="due_date" class="form-control" required>

                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>

                <a href="{{route('tasks.index')}}">
                    <button type="button" class="btn btn-danger">Hủy</button>
                </a>

            </form>

        </div>

    </div>


@endsection



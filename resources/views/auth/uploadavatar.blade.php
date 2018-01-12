@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ảnh đại diện</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('UpAvatarPage') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <input type="file" name="upfile" accept='image/jpeg , image/jpg, image/png' required="true">

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

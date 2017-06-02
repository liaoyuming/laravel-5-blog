@extends('backend.content.common')

@section('content')
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">创建分类</div>

                @if ($errors->has('error'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <strong>Error!</strong>
                    {{ $errors->first('error', ':message') }}
                    <br />
                    请联系开发者！
                </div>
                @endif

                <div class="panel-body">
                    <form action="{{ url('backend/system/create')}}" method="post" class="form-horizontal" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">类别</label>
                            <div class="col-sm-3">
                                {!! Form::select('cate', App\Model\System::$cate , null , ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">名称</label>
                            <div class="col-sm-3">
                                {!! Form::text('display_name', '', ['class' => 'form-control','placeholder'=>'设置名称']) !!}
                                <font color="red">{{ $errors->first('display_name') }}</font>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">关键字</label>
                            <div class="col-sm-3">
                                {!! Form::text('system_key', '', ['class' => 'form-control','placeholder'=>'英文或下划线组成']) !!}
                                <font color="red">{{ $errors->first('system_key') }}</font>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">值</label>
                            <div class="col-sm-3">
                                {!! Form::text('system_value', '', ['class' => 'form-control','placeholder'=>'设置的值']) !!}
                                <font color="red">{{ $errors->first('system_value') }}</font>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                {!! Form::submit('创建', ['class' => 'btn btn-success']) !!}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection

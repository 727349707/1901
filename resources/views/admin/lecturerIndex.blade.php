@extends('admin/layouts/main')

@section('title', '管理员')


@section('content')
    <form action="">
        搜索讲师：<input type="text" name="lect_name" value="{{$req}}">
        <button>搜索</button>
        <a href="{{url('lecturerAdd')}}?right_id=2">讲师添加</a>
    </form>
    <form action="" method="post">
        <table class="table table-hover">
            <tr>
                <td>ID</td>
                <td>讲师名称</td>
                <td>讲师个人简历</td>
                <td>讲师授课风格</td>
                <td>操作</td>
            </tr>
            @foreach($data as $v)
                <tr>
                    <td>{{$v->lect_id}}</td>
                    <td>{{$v->lect_name}}</td>
                    <td>{{$v->lect_resume}}</td>
                    <td>{{$v->lect_style}}</td>
                    <td>
                        <a href="{{url('del',['lect_id'=>$v->lect_id])}}?right_id=1"  class='btn btn-danger del' >删除</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </form>
    <!-- {{--    <script src="/admin/js/jquery.min.js"></script>--}}
{{--    <script>--}}
{{--    $(function(){--}}
{{--        $('.del').click(function(){--}}
{{--            $(this).parent().parent().remove();--}}
{{--            var  lect_id=$(this).attr('value');--}}
{{--            var  right_id=$(this).attr('right_id');--}}
{{--            var url = 'del?right_id='+right_id;--}}

{{--            $.ajax({--}}
{{--                url:url,--}}
{{--                type:'get',--}}
{{--                data : {lect_id:lect_id},--}}
{{--                dataType:'json',--}}
{{--                success:function(res){--}}
{{--                    if(res.code==1){--}}
{{--                        alert(res.msg);--}}
{{--                    }else{--}}
{{--                        alert(res.msg);--}}
{{--                    }--}}
{{--                }--}}
{{--            });--}}
{{--    })--}}
{{--    });--}}
{{--    </script>--}} -->
    {{ $data->appends($req)->links()}}
    @endsection

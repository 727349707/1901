
<form action="{{url('adminuser/docreate')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">用户名称</label>
            <input type="text" class="form-control id" name='role_name' value="{{$data['role_name']}}">
            <input type="hidden" name="admin_id" value="{{$data['admin_id']}}">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">角色选择</label>
            <select class="form-control menu" name="role_id">
                <option value="">请选择</option>
                @foreach($role as $r)
                <option value="{{$r['role_id']}}">{{$r['role_name']}}</option>
             @endforeach
            </select>
        </div>
        <button type="submit" id="sub"  class="btn btn-default">修改</button>
    </form>
    <script>



    </script>
@extends('user.master')
@section('title','Search member')
@section('content')
    <div class = "container">
        <div class = "row">
            <div class = "col-md-12">
                <br>
                <div align="center"><h1><kbd>ค้นหาข้อมูลสมาชิก</kbd></h1></div>
                <br><br>
                
                <div align="left"><a href = "{{route('user.create')}}" class = " btn btn-success">เพิ่มข้อมูล</a>
                <a href = "{{route('user.index')}}" class = " btn btn-danger">ยกเลิก</a></div>
                <br>
                <input type="text" name="search" id="search" class="code form-control" placeholder="ค้นหาข้อมูล"/>
                <br>
                <h5 align="center">จำนวนข้อมูลสมาชิก : <span id="total_records"></span></h5>
                <br>
                <table class = "table table-dark">
                <thead>
                <tr>
                <th>ลำดับ</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>เบอร์โทร</th>
                <th>อีเมลล์</th>
                <th>ที่อยู่</th>
                <th>จังหวัด</th>
                <th>อำเภอ</th>
                <th>รหัสไปรษณีย์</th>
                </tr>
                </thead>
                <tbody>
                
                </tbody>
            </div></div>
                
        </div>
    </div>

    <script type = "text/javascript">
        $(document).ready(function(){
            fetch_data();
        });
        
        $(document).on('keyup','#search',function(){
            var query = $(this).val();
            fetch_data(query);
        });

        function fetch_data(query = '')
        {
            $.ajax({
            url:"{{ route('user.action') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('tbody').html(data.table_data);
                $('#total_records').text(data.total_data);
            }
        })
        }


    </script>
    
@endsection


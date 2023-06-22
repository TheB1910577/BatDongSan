<div style="text-align: center;">
    Thống kê sơ bộ
</div>
<div class="container">
<select name="" id="boloc">
    <option value="15">7 ngày qua</option>
    <option value="15">15 ngày qua</option>
    <option value="30">30 ngày qua</option>
    <option value="90">90 ngày qua</option>
    <option value="365">1 năm qua</option>
</select>
</div>
<div id="area-example" style="height: 250px;" class="container"></div>

<script>
    $(document).ready(function(){
        thongke();
        var char = new Morris.Line({
        element: 'area-example',
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Doanh số']
        });

        $(document).on('change', '#boloc', function(){
            var thoigian = $(this).val();
            $.ajax({
                url:"models/thongke/xuly.php",
                method:"POST",
                dataType:"JSON",
                data:{thoigian: thoigian},
                success:function(data){
                    char.setData(data);
                }
            })
        })

        function thongke(){
            $.ajax({
                url:"models/thongke/xuly.php",
                method:"POST",
                dataType:"JSON",
                success:function(data){
                    char.setData(data);
                }
            })
        }
    })
</script>
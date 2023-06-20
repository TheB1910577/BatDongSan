<div style="text-align: center;">
    <h1>Chào mừng bạn đến với trang quản lý của Admin</h1>
    <div id="bar-example"></div>
</div>
<script>
    $(document).ready(function(){
        tongthe();
        var tongquan = new Morris.Bar({
        element: 'bar-example',
        
        xkey: 'y',
        ykeys: ['a',],
        labels: ['số lượng']
        });

        function tongthe(){
            $.ajax({
                url:"models/thongke/xulytongthe.php",
                method:"POST",
                dataType:"JSON",
                success:function(data){
                    tongquan.setData(data);
                }
            })
        }
    })
</script>
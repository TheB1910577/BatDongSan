<div style="text-align: center;">
    Thống kê sơ bộ
</div>
<div id="bar-example" style="height: 250px;" class="container"></div>

<script>
    $(document).ready(function(){
        thongke();
        var char = new Morris.Bar({
            element: 'bar-example',
            // data: [
            //     { y: '2006-12-12', a: 100, b: 900000 },
            //     { y: '2007-12-12', a: 75,  b: 650000 },
            //     { y: '2008-12-12', a: 50,  b: 400000 },
            //     { y: '2009-12-12', a: 75,  b: 650000 },
            //     { y: '2010-12-12', a: 50,  b: 400000 },
            //     { y: '2011-12-12', a: 75,  b: 650000 },
            //     { y: '2012-12-12', a: 100, b: 900000 }
            // ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Số tin được đăng', 'Lợi nhuận']
        });
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
<div class="container">
    <h2>Quản lý tiện ích</h2>
    <form method="POST" action="models/ql_tienich/xuly.php">
        <div class="form-group mb-3 row">
            <label class="col-lg-2 col-md-3 col-sm-12 col-12 offset-lg-2 mb-3" for="ten">Tên tiện ích:</label>
            <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                <input class="form-control" type="text" name="ten" id="ten" placeholder="Gara xe..." >
                <label class="error"></label>
            </div>
            
        </div>
        <button type="submit" class="btn btn-primary col-1 offset-2" name="them">Thêm</button>
    </form>
</div>
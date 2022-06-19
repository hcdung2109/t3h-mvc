<section class="content-header">
    <h1>
        Danh Sách Sản Phẩm
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-tools">
                        <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Tên SP</th>
                            <th>Giá</th>
                            <th>Số Lượng</th>
                            <th>Hành Động</th>
                        </tr>
                        <?php foreach ($arrProducts as $product):?>
                        <tr class="product-<?= $product[0] ?>">
                            <td><?= $product[0] ?></td>
                            <td><?= $product[1] ?></td>
                            <td><?= number_format($product[2],0,',','.') ?>đ</td>
                            <td><?= $product[3] ?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">Sửa</button>
                                <button data-id="<?= $product[0] ?>" type="button" class="btn btn-danger btn-sm btnDelete">Xóa</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
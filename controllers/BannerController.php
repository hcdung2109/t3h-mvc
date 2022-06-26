<?php
include_once 'models/Banner.php';

class BannerController
{
    // thêm => danh sách => sửa ||  xóa

    // property
    public function index()
    {
        include_once 'views/banner/index.php';
    }

    // method
    public function create()
    {

        if (!empty($_POST)) {
            // bước 1 : lấy dữ liệu từ form
            $params = $_POST;
            // bước 2 : gọi đến model để insert dữ liệu vào trong CSDL
            $model = new Banner();
            $model->store($params);
        }

        // gọi đến view
        include_once 'views/banner/create.php';
    }

    public function edit()
    {
        include_once 'views/banner/edit.php';
    }
}
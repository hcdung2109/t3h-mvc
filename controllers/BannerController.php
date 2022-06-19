<?php
class BannerController
{
    // thêm => danh sách => sửa =>  xóa

    // property
    public function index()
    {
        include_once 'views/banner/index.php';
    }

    // method
    public function create()
    {
        // gọi đến view
        include_once 'views/banner/create.php';
    }

    public function edit()
    {
        include_once 'views/banner/edit.php';
    }
}
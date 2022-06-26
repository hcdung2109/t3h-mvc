<?php
include_once 'Connection.php';

class Banner extends Connection
{
    // thêm
    public function store($params)
    {
        $title = $params['title'];

        $slug = $this->slugify($params['title']);

        // xử lý upload ảnh
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image = $target_file;
        // end xu ly upload file

        $url = $params['url'];
        $target = $params['target'];
        $description = htmlentities($params['description']);
        $type = $params['type'];
        $position = $params['position'];
        $is_active = !empty($params['is_active']) ? 1 : 0;
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');

        $sql = "INSERT INTO banners (title, slug, image, url, target, description, type, position, is_active, created_at, updated_at) 
                VALUES ('$title', '$slug', '$image', '$url', '$target', '$description', $type, $position, $is_active, '$created_at', '$updated_at')";


        $this->con->query($sql);
    }
}
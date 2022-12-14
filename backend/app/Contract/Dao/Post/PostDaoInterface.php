<?php

namespace App\Contract\Dao\Post;

interface PostDaoInterface
{
    //store collect data
    public function storeCollectData($data);

    //get post list
    public function getPostList($searchData);

    //guest post
    public function guestPost($searchData);

    //delete post
    public function deletePost($id);

    //search data
    // public function search($searchData);

    //find data for update
    public function findPostById($id);

    //update post
    public function updatePost($data,$id);

    // public function showDetail($id);
    public function getDetail($id);
}
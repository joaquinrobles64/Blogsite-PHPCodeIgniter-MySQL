<?php 
namespace App\Controllers;
use App\Models\BlogModel;
use App\Models\PostModel;
use CodeIgniter\Database\Query;

class Blog extends BaseController
{
    
    // main page of site with the top 5 blogs
    public function blogHome()
    {
        $blogModel = new BlogModel();
        // sorting blogs by highest rated a.k.a the top to bottom
        $blogs = $blogModel->orderBy('Rating', 'DESC')->findAll();
        return view('home', [
            'blogs' => $blogs
        ]);
    }
    
    // view all blogs
	public function explore() {
        $blogModel = new BlogModel();
        $blogs = $blogModel->orderBy('Username', 'ASC')->findAll();
        return view('explore', [
            'blogs' => $blogs
        ]);
    }
    public function viewBlog($username) {
        $postModel = new PostModel();
        $posts = $postModel->where('Username', $username)->findAll();
        return view('viewblog', [
            'posts' => $posts,
            'user' => $username
        ]);
    }

    public function createPost() {
        return view('createpost');
    }
}

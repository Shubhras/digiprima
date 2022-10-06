<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Models\Blogdetail;
use App\Models\Category;
use DB;

/**
 * Class BlogsController
 * @package App\Http\Controllers
 */
class BlogsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
    * Find Blog by Slug
    * @param string $slug
    */
    private function findBlogBySlug(string $slug) {
        $ne = DB::table('blogdetails')
        ->where([['blogdetails.slug', '=', $slug], ['blogdetails.deleted_at', '=', null]])
        ->leftJoin('uploads as MI', 'MI.id', '=', 'blogdetails.meta_image')
        ->leftJoin('uploads as BI', 'BI.id', '=', 'blogdetails.bannerimage2')
        ->join('categories as C', 'C.id', '=', 'blogdetails.category')
        ->select('blogdetails.*', 'MI.hash as metaImageHash', 'MI.name as metaImageName', 'BI.hash as bannerImageHash','C.name as category_name', 'BI.name as bannerImageName')
        ->first();
        // print_r($ne);die;

        return $ne;

    }

    /**
    * Find all slugs
    */
    private function fetchAllBlogs(string $category = null) {
        $query = DB::table('blogdetails')
        ->leftJoin('uploads as MI', 'MI.id', '=', 'blogdetails.meta_image')
        ->leftJoin('uploads as BI', 'BI.id', '=', 'blogdetails.bannerimage2')
        ->join('categories as C', 'C.id', '=', 'blogdetails.category')
        ->select('blogdetails.*', 'MI.hash as metaImageHash', 'MI.name as metaImageName', 'BI.hash as bannerImageHash', 'BI.name as bannerImageName', 'C.name as categoryName', 'C.id as categoryId')
        ->where('blogdetails.deleted_at', null)->orderBy('blogdetails.id' , 'desc')->limit(8);
        if($category) {
            $query->where('blogdetails.category', '=', $category);
        }
        // print_r( $query);die;
// print_r($query->get());die;
    	return $query->get();
    }

    private function fetch_Blog(string $category = null) {
        $query = DB::table('blogdetails')
        ->leftJoin('uploads as MI', 'MI.id', '=', 'blogdetails.meta_image')
        ->leftJoin('uploads as BI', 'BI.id', '=', 'blogdetails.bannerimage2')
        ->join('categories as C', 'C.id', '=', 'blogdetails.category')
        ->select('blogdetails.*', 'MI.hash as metaImageHash', 'MI.name as metaImageName', 'BI.hash as bannerImageHash', 'BI.name as bannerImageName', 'C.name as categoryName', 'C.id as categoryId')
        ->where('blogdetails.deleted_at', null)->orderBy('blogdetails.id' , 'desc');
        if($category) {
            $query->where('blogdetails.category', '=', $category);
        }
// print_r($query->get());die;
    	return $query->get();
    }

    private function fetch_similar(string $category = null) {
        $query = DB::table('blogdetails')
        ->leftJoin('uploads as MI', 'MI.id', '=', 'blogdetails.meta_image')
        ->leftJoin('uploads as BI', 'BI.id', '=', 'blogdetails.bannerimage2')
        ->join('categories as C', 'C.id', '=', 'blogdetails.category')
        ->select('blogdetails.*', 'MI.hash as metaImageHash', 'MI.name as metaImageName', 'BI.hash as bannerImageHash', 'BI.name as bannerImageName', 'C.name as categoryName', 'C.id as categoryId')
        ->where('blogdetails.deleted_at', null)->orderBy('blogdetails.id' , 'desc')->limit(4)->get();
        if($category) {
            $query->where('blogdetails.category', '=', $category);
        }
// print_r($query->get());die;
    	return view('blogs.blog_details_data',$category);
    }


    private function fetchAllBlogsRecent(string $category = null) {
        $query = DB::table('blogdetails')
        ->leftJoin('uploads as MI', 'MI.id', '=', 'blogdetails.meta_image')
        ->leftJoin('uploads as BI', 'BI.id', '=', 'blogdetails.bannerimage2')
        ->join('categories as C', 'C.id', '=', 'blogdetails.category')
        ->select('blogdetails.*', 'MI.hash as metaImageHash', 'MI.name as metaImageName', 'BI.hash as bannerImageHash', 'BI.name as bannerImageName', 'C.name as categoryName', 'C.id as categoryId')
        ->where('blogdetails.deleted_at', null)->orderBy('blogdetails.id', 'desc')->limit(4);
        // print_r($query->categoryName);die;
        if($category) {
            $query->where('blogdetails.category', '=', $category);
        }
        // print_r($query->get());die;
    	return $query->get();
        
    }

    private function fetchAllBlogsRecentPost(string $category = null) {
        $query = DB::table('blogdetails')
        ->leftJoin('uploads as MI', 'MI.id', '=', 'blogdetails.meta_image')
        ->leftJoin('uploads as BI', 'BI.id', '=', 'blogdetails.bannerimage2')
        ->join('categories as C', 'C.id', '=', 'blogdetails.category')
        ->select('blogdetails.*', 'MI.hash as metaImageHash', 'MI.name as metaImageName', 'BI.hash as bannerImageHash', 'BI.name as bannerImageName', 'C.name as categoryName', 'C.id as categoryId')
        ->where('blogdetails.deleted_at', null)->orderBy('blogdetails.id', 'desc')->limit(5);
        if($category) {
            $query->where('blogdetails.category', '=', $category);
        }

    	return $query->get();
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $category = $request->query('category');
        $blogs = $this->fetchAllBlogs($category);
        $categories = Category::where('status', 1)->get();
        // print_r($blogs);die;

        // return  view('blogs.index', ['blogs' => $blogs, 'categories' => $categories]) . view('footer2');
        return view('blogs.blog_list', ['blogs' => $blogs, 'categories' => $categories]) . view('footer2');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function findBySlug(Request $request, string $slug)
    {
        $blog = $this->findBlogBySlug($slug);
        $category = $request->query('category');
        $blogs = $this->fetchAllBlogs($category);

        $recent_blog = $this->fetchAllBlogsRecent($category);
        $recent_blogs = $this->fetchAllBlogsRecentPost($category);
        
        $categories = Category::where('status', 1)->get();
        $categoriess = Category::where('status', 1)->first();
        // print_r($categoriess->name);die;

        // $recent_blog['recent_blog'] = DB::table('blogdetails')->select('blogdetails.*')->orderBy('id', 'desc')->limit(3)->get();
        

        if($blog)
        
            // return view('blogs.blog', ['blog' => $blog]) . view('footer2');
             return view('blogs.blog_details_data', ['blog' => $blog, 'blogs' => $blogs, 'categories' => $categories, 'recent_blog' => $recent_blog, 'recent_blogs' =>$recent_blogs ,'categoriess'=>$categoriess]) . view('footer2');
            
        else
        	return redirect()->action('BlogsController@index');
    }

    // public function user($id){
    //     $categories = DB::table('blogdetails')
    //     ->select('name')
    //     ->where('id',$id)->get();
    //     print_r($categories);die;
    
    // }
    public function fetchAllBlog(Request $request) {
        $category = $request->query('category');
        $blogs = $this->fetch_Blog($category);;
        $categories = DB::table('blogdetails')
        ->leftJoin('uploads as MI', 'MI.id', '=', 'blogdetails.meta_image')
        ->leftJoin('uploads as BI', 'BI.id', '=', 'blogdetails.bannerimage2')
        ->join('categories as C', 'C.id', '=', 'blogdetails.category')
        ->select('blogdetails.*', 'MI.hash as metaImageHash', 'MI.name as metaImageName', 'BI.hash as bannerImageHash', 'BI.name as bannerImageName', 'C.name as categoryName', 'C.id as categoryId')
        ->where('blogdetails.deleted_at', null)->orderBy('blogdetails.id' , 'desc')->get();
       
// print_r($category);die;
     return view('blogs.blog_detailes',['blogs' => $blogs,'categories'=>$categories]) . view('footer2');
    }
    public function fetchblog(Request $request) {
        $category = $request->query('category');
        $blogs = $this->fetch_Blog($category);;
        $categories = DB::table('blogdetails')
        ->leftJoin('uploads as MI', 'MI.id', '=', 'blogdetails.meta_image')
        ->leftJoin('uploads as BI', 'BI.id', '=', 'blogdetails.bannerimage2')
        ->join('categories as C', 'C.id', '=', 'blogdetails.category')
        ->select('blogdetails.*', 'MI.hash as metaImageHash', 'MI.name as metaImageName', 'BI.hash as bannerImageHash', 'BI.name as bannerImageName', 'C.name as categoryName', 'C.id as categoryId')
        ->where('blogdetails.deleted_at', null)->orderBy('blogdetails.id' , 'desc')->limit(4)->get();
       
// print_r($category);die;
     return view('blogs.blog_detailes',['blogs' => $blogs,'categories'=>$categories]);
    }

    public function RequMeet($mainTex,$buTex,$bUrl = null){
            return view('request-meeting_dynamic',['mainTex' => $mainTex,'buTex'=>$buTex,'bUrl'=>$bUrl]);
    }
    public function contact($mainTex = null,$secondTex = null){
        return view('contact-form',['mainTex' => $mainTex,'secondTex'=>$secondTex,]);
}

 }


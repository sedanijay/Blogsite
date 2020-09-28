<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;

class RedirectController extends Controller
{
    //
    public function index() {
    	return view('index');
   }

    public function blog($key) {
    	
    	$cat = "select *,BlogCategory.name as cat_name from BlogCategory where BlogCategory.name='".$key."'";

    	$content = "select *,BlogCategory.name as cat_name, users.name as username, blogs.created_at as BCreated_at from blogs left join users on blogs.CreatedBy = users.id left join BlogCategory on blogs.BlogCat = BlogCategory.id where BlogCategory.name='".$key."'";

    	$blog_var["cat"] = DB::select($cat);
    	$blog_var["blogs"] = DB::select($content);

    	return view('Blog',['blogs'=>$blog_var]);
   }

   public function content($key) {
    	
    	$cat = "select *,BlogCategory.name as cat_name from BlogCategory where BlogCategory.name='".$key."'";
    	
    	$content = "select *,BlogCategory.name as cat_name, users.name as username, blogs.created_at as BCreated_at from blogs left join users on blogs.CreatedBy = users.id left join BlogCategory on blogs.BlogCat = BlogCategory.id where blogs.Title='".$key."'";

    	$PopularPosts = "select * from blogs where BlogCat=(select BlogCat from blogs where Title='".$key."') order by id desc LIMIT 3";

    	$blog_var["cat"] = DB::select($cat);
    	$blog_var["blogs"] = DB::select($content);
    	$blog_var["PopularPosts"] = DB::select($PopularPosts);

    	return view('BlogContent',['blogs'=>$blog_var]);
   }

   public function BlogEdit(){
   		return view('BlogEditor');
   }

   public function FetchBlog($key){
   		
   		$content = "select *,blogs.id as blogId,BlogCategory.name as cat_name, users.name as username, blogs.created_at as BCreated_at from blogs left join users on blogs.CreatedBy = users.id left join BlogCategory on blogs.BlogCat = BlogCategory.id where blogs.Title='".$key."'";

    	$blog_var = DB::select($content);

    	return view('editBlog',['blogs'=>$blog_var]);
   }

   public function MyBlogs(){

   		if(isset(Auth::user()->id)){
	   		$id = Auth::user()->id;

	   		$sql = "select blogs.*,blogcategory.name as catname from blogs join blogcategory on blogs.BlogCat = blogcategory.id where CreatedBy=".$id." order by id desc";
	   		$blog_var = DB::select($sql);

	   		return view('MyBlogs',['blogs'=>$blog_var]);
	   	}
	   	else{
	   		return view("/index");
	   	}
   }

   public function Filter_MyBlogs($cat_id){

   		if(isset(Auth::user()->id)){
	   		$id = Auth::user()->id;

	   		if($cat_id==0){
	   			$sql = "select blogs.*,blogcategory.name as catname from blogs join blogcategory on blogs.BlogCat = blogcategory.id where CreatedBy=".$id." order by id desc";
	   		}
	   		else{
	   			$sql = "select blogs.*,blogcategory.name as catname from blogs join blogcategory on blogs.BlogCat = blogcategory.id where CreatedBy=".$id." and BlogCat=".$cat_id." order by id desc";	
	   		}
	   		
	   		$blog_var = DB::select($sql);

	   		return view('MyBlogs',['blogs'=>$blog_var]);
	   	}
	   	else{
	   		return view("/index");
	   	}
   }

   public function DeleteBlog($id)
   {
   		$sql = "delete from blogs where id=".$id;
   		DB::select($sql);


   		$id = Auth::user()->id;
   		$sql = "select * from blogs where CreatedBy=".$id." order by id desc";
   		$blog_var = DB::select($sql);

   		return redirect('/MyBlogs')->with('blogs', $blog_var);
   }


   public function saveBlog(Request $request)
   {	

   		
	    $cover = $request->file('bookcover');
	    $extension = $cover->getClientOriginalExtension();
	    Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

	    $head = $request->input('headData');
	    $cont = $request->input('contData');
	    $blogCat = $request->input('BlogCat');
	    $CD = date("Y-m-d h:i");


		$sql = "insert into blogs(Title,BlogCat,Content,HeadImg,CreatedBy,created_at) values('".$head."',".$blogCat.",'".$cont."','".$cover->getFilename().'.'.$extension."',".Auth::user()->id.",'".$CD."')";
		DB::insert($sql);


		$id = Auth::user()->id;

		$sql = "select blogs.*,blogcategory.name as catname from blogs join blogcategory on blogs.BlogCat = blogcategory.id where CreatedBy=".$id." order by id desc";
		$blog_var = DB::select($sql);

		return view('MyBlogs',['blogs'=>$blog_var]);
   		    	
   }

   public function editBlog(Request $request){

   		
   		if(isset(Auth::user()->id)){

   			    $cover = $request->file('bookcover');
   			    $extension = $cover->getClientOriginalExtension();
   			    Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));


   			    $id = $request->input('blogId');
   			    $head = $request->input('headData');
   			    $cont = $request->input('contData');
   			    $blogCat = $request->input('BlogCat');
   			    $CD = date("Y-m-d h:i");


   			    $sql = "update blogs set Title='".$head."',BlogCat=".$blogCat.",Content='".$cont."',HeadImg='".$cover->getFilename().'.'.$extension."',updated_at='".$CD."' where id=".$id;
   			    
   				DB::update($sql);

   				$id = Auth::user()->id;

   				$sql = "select blogs.*,blogcategory.name as catname from blogs join blogcategory on blogs.BlogCat = blogcategory.id where CreatedBy=".$id." order by id desc";
   				$blog_var = DB::select($sql);

   				return redirect('/MyBlogs')->with('blogs', $blog_var);
   		}
   		else{
   			return view("/index");
   		}
   }
}

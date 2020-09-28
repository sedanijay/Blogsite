@extends('layouts.app2')

@section('content')

  <div class="site-section bg-light">
    <div class="container">
      <div class="row align-items-stretch retro-layout-2">
        <div class="col-md-2"><h2>My Blogs</h2></div>
        <div class="col-md-3">
          <select class="form-control" id="blog_category" onchange="Filter()">
            <option value="0">Select Blog Category</option>
            <option value="0">All</option>
            <option value="1">Business</option>
            <option value="2">Tech</option>
            <option value="3">Entertainment</option>
            <option value="4">Travel</option>
            <option value="5">Bibliography</option>
           </select>
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-2"><button class="btn btn-warning" onclick="newBlog()" style="padding-left: 25%;padding-right: 25%">Write Blog</button></div>

        <br>
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Sr No</th>
                    <th>Blog Title</th>
                    <th>Blog Category</th>
                    <th>Post Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $sr=0; ?>
                  @foreach($blogs as $blog_var)
                  <tr>
                    <td>{{ ++$sr }}</td>
                    <td>{{ $blog_var->Title }}</td>
                    <td>{{ $blog_var->catname }}</td>
                    <td>{{ $blog_var->created_at }}</td>
                    <td><button onclick="editB( '{{ $blog_var->id}}' , '{{$blog_var->Title }}' )" class="btn btn-primary">Edit</button>&emsp;
                      <button onclick="deleteB( '{{ $blog_var->id}}' , '{{$blog_var->Title }}' )" class="btn btn-danger">delete</button></td>
                  </tr>
                  @endforeach

                </tbody>
                <thead>
                  <tr>
                    <th>Sr No</th>
                    <th>Blog Title</th>
                    <th>Blog Category</th>
                    <th>Post Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
            </table>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">

    function Filter()
    {
      var catId = $("#blog_category").val();
      window.location.href = "/Filter_MyBlogs/"+catId;
    }

    function newBlog(argument) {
      window.location.href = "/BlogEditor";
    }

    function deleteB(blogId,BlogTitle) {
      var r = confirm("Are you sure you want delete "+BlogTitle+" ?");
      if (r == true) {
        
        $.ajax({
            url: 'DeleteBlogs/'+blogId,
            type: 'GET',
            data: { },
            success: function(response)
            {
                alert("Blog Deleted.");
                location.reload();
            }
        });
        //window.location.href = "/DeleteBlogs/"+blogId;

      } else {
        alert("You pressed Cancel!");
      }
    }

    function editB(blogId,BlogTitle) {
      
      window.location.href = "/fetchBlog/"+BlogTitle;

    }
  </script>

@endsection
<style>
    
.blogWrapper {
    width: 100%;
    height: fit-content;
    padding-bottom: 12px;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}

.blogWrapper .blogImage {
    width: 100%;
    height: 260px;
    overflow: hidden;
    transition: all 1s;
}

.blogWrapper .blogImage img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.blogWrapper img {
    transition: all 1s;
}

.blog-link {
    text-decoration: none;
    color: black;
}

.blog-link:hover {
    color: black;
}

.blog-btn {
    border: 2px solid #58b064;
    padding: 3px 10px;
    font-weight: 600;
    transition: .5s;
}

.blog-btn:hover {
    background-color: #58b064;
    color: white !important;
    transition: .5s;
}

.view-all-btn {
    background-color: #58b064;
    padding: 6px 30px;
    margin: 10px;
    text-decoration: none;
    outline: none !important;
    border: none !important;
    color: white;
    align-items: center;
}

.blog-header {
    font-size: 1.4rem;
}

.blogWrapper:hover img {
    transform: scale(1.1);
    transition: all 1s;
}

.blogWrapper .blogContent {
    padding-top: 12px;
    padding-left: 14px;
}
.blogWrapper{
    margin:8px 0px
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="#" class="blog-link">
                <div class="blogWrapper">
                    <div class="blogImage">
                        <img src="https://images.unsplash.com/photo-1611080626919-7cf5a9dbab5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8T3JhbmdlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                            alt="">
                    </div>
                    <div class="blogContent">
                        <h5 class="blog-header">You must do this you must do that</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quam?</p>
                        <a href="" class="blog-btn" style="text-decoration: none;color:black;">READ MORE</a>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="#" class="blog-link">
                <div class="blogWrapper">
                    <div class="blogImage">
                        <img src="https://images.unsplash.com/photo-1611080626919-7cf5a9dbab5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8T3JhbmdlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                            alt="">
                    </div>
                    <div class="blogContent">
                        <h5 class="blog-header">You must do this you must do that</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quam?</p>
                        <a href="" class="blog-btn" style="text-decoration: none;color:black;">READ MORE</a>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="#" class="blog-link">
                <div class="blogWrapper">
                    <div class="blogImage">
                        <img src="https://images.unsplash.com/photo-1611080626919-7cf5a9dbab5b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8T3JhbmdlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                            alt="">
                    </div>
                    <div class="blogContent">
                        <h5 class="blog-header">You must do this you must do that</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quam?</p>
                        <a href="" class="blog-btn" style="text-decoration: none;color:black;">READ MORE</a>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-2 col-12 text-right">
            <a href="#" ><button class="view-all-btn">View All</button></a>
        </div>
    </div>
</div>

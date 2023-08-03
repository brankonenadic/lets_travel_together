@extends('layouts.app')

@section('content')
<h1 class="text-center mt-5 pt-5">Blog</h1>
<main class="mt-5 mb-5">
    <div class="container">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-8 mb-4">
          <!--Section: Post data-mdb-->
          @foreach ($posts as $post)
              
          <section class="border-bottom mb-4 bg-light p-3">
            <img src="{{$post->post_image}}"
              class="img-fluid shadow-2-strong rounded-3 mb-4" alt="" />

            <div class="row align-items-center mb-4">
              <div class="col-lg-6 text-lg-start mb-3 m-lg-0">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img (23).jpg" class="rounded-5 shadow-1-strong me-2"
                  height="35" alt="" loading="lazy" />
                <span> Published <u>{{$post->created_at->diffForHumans()}}</u> by</span>
                <a href="" class="text-dark">{{$post->user->username}}</a>
              </div>
            </div>
            <h3>{{$post->title}}</h3>
            <p>
             {{$post->content}}
            </p>
            <p>See More...</p>
    
          </section>
          
          @endforeach
          <!--Section: Post data-mdb-->
    


        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4 border-bottom">
          <!--Section: Sidebar-->
          <section class="sticky-top" >
            <!--Section: Ad-->
            <section class="text-center pb-4 mb-4">
            <!-- Search Widget -->
    <div class="card my-4">
      <h5 class="card-header">Search</h5>
      <div class="card-body">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
      <h5 class="card-header">Categories</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">Web Design</a>
              </li>
              <li>
                <a href="#">HTML</a>
              </li>
              <li>
                <a href="#">Freebies</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">JavaScript</a>
              </li>
              <li>
                <a href="#">CSS</a>
              </li>
              <li>
                <a href="#">Tutorials</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
      <h5 class="card-header">Side Widget</h5>
      <div class="card-body">
        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
      </div>
    </div>
            
            </section>
            <!--Section: Ad-->

           <!--Section: Ad-->
           <section class="text-center pb-4 mb-4">
            <div class="bg-image hover-overlay ripple mb-4">
              <img
                src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/en/_mdb5/standard/about/assets/mdb5-about.webp"
                class="img-fluid" />
              <a href="https://mdbootstrap.com/docs/standard/" target="_blank">
                <div class="mask"></div>
              </a>
            </div>
            <h5>Material Design for Bootstrap 5</h5>

            <p>
              500+ components, free templates, 1-min installation, extensive tutorial, huge
              community. MIT license - free for personal & commercial use
            </p>
          
          </section>
          <!--Section: Ad-->
          </section>
          <!--Section: Sidebar-->
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
  </main>
  <!--Main layout-->
@endsection
@extends('article.template')
<!-- Page Content -->
    <div class="container my-5 py-5">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">{{ $article->title }}</h2>
              <p class="card-text">{{ $article->content }}</p>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by <span class="text-primary">{{ $article->user->name }}</span>
            </div>
          </div>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
          <!-- Categories Widget -->
          <div class="card">
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

        </div>

      </div>
      <!-- /.row -->
<hr>
      <h2>Masukkan Komentar</h2>
      <div id="comment_form">

          <div>
              <input type="text" name="name" id="name" value="" placeholder="Input name...">
          </div>
          <div>
              <input type="email" name="email" id="email" value="" placeholder="Input email...">
          </div>
          <div>
              <textarea rows="10" name="comment" id="comment" placeholder="Comment Here..." style="resize: none;"></textarea>
          </div>
          <div>
              <input type="submit" name="submit" value="Comment">
          </div>

      </div>



    </div>
    <!-- /.container -->
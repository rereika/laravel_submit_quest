{{-- resources/views/conduit/editor.blade.php --}}
@include('conduit.header')

<div class="editor-page">
  <div class="container page">
    <div class="row">

      <div class="col-md-10 col-md-offset-1 col-xs-12">
        <form method="POST" action="{{ route('articles.store') }}">
        @csrf
          <fieldset class="form-group">
            <input class="form-control form-control-lg" type="text" name="title" placeholder="Post Title">
          </fieldset>
          <fieldset class="form-group">
            <textarea class="form-control" rows="8" name="body" placeholder="Write your post (in markdown)"></textarea>
          </fieldset>
          <fieldset class="form-group">
            <input class="form-control" type="text" name="tags" placeholder="Enter tags">
            <div class="tag-list">
              <span class="label label-pill label-default"><i class="ion-close-round"></i> programming</span>
              <span class="label label-pill label-default"><i class="ion-close-round"></i> javascript</span>
              <span class="label label-pill label-default"><i class="ion-close-round"></i> webdev</span>
            </div>
          </fieldset>
          <button class="btn btn-lg btn-primary pull-xs-right">
            Create Post
          </button>
        </form>
      </div>

    </div>
  </div>
</div>


@include('conduit.footer')

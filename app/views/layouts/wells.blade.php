<div class="col-lg-4">

    <div class="well">
        <div class="input-group">
            <input type="text" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <span>Subscribe</span>
                </button>
            </span>
        </div>
    </div>
    <!-- /well -->

    <div class="well">
        <h4>Tags</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    @foreach ($tags as $tag)
                    <li><a href="{{ route('tag.show',$tag->slug) }}">{{$tag->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- /well -->
    
</div>
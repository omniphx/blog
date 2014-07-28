<div class="col-lg-4">

    <div class="well">
        {{ Form::open(array(
            'route'  =>'subscribe',
            'role'   =>'form',
            'class'  =>'form-inline',
            'method' =>'POST')) }}
          <div class="form-group">
            <label class="sr-only" for="inputEmail">Email address</label>
            {{ Form::text('email', null, [
                'placeholder' => 'Subscribe...',
                'class'       =>'form-control input-lg']) }}
            <button type="submit" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-envelope"></span>
            </button>
          </div>
        {{Form::close() }}
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
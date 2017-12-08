<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-12">
    @if(session('pathfinder') && !Auth::user()->has_role('parent'))
    <?php $pathfinder = session('pathfinder'); ?>
    <h2 class="col-lg-11 col-sm-10 col-md-10 col-xs-9" style="text-align: right;">{{ $pathfinder->name}} {{ $pathfinder->lastname}} ({{$pathfinder->tier->name}})</h2>
      <a class="col-lg-1 col-sm-2 col-md-2 col-xs-3" style="text-align: right;" href="{{ url('/search') }}?id={{$pathfinder->id}}"><img alt="image" class="img-circle circle-border m-b-md" src="{{ $pathfinder->avatar_path ? Storage::url('pathfinders/'. $pathfinder->id . '/' . get_thumbnail($pathfinder->avatar_path, 'small')): Storage::url('pathfinders/default.png')}}"></a>
    @endif

  </div>
</div>

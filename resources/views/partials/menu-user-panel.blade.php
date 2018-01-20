<div class="pull-left image">
    <!-- img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" /-->
    <img src="https://avatars3.githubusercontent.com/u/1444526?s=460&v=4" class="img-circle" alt="User Image" />
</div>
<div class="pull-left info">
    <p style="overflow: hidden;text-overflow: ellipsis;max-width: 160px;" data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</p>
    <!-- Status -->
    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte::adminlte.online') }}</a>
</div>


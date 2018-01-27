<div class="pull-left image">
    <img src="{{ env('APP_URL') . storage_path(Auth::user()[config('adminlte.avatar_key')]) }}" class="img-circle" alt="User Image" />
</div>
<div class="pull-left info">
    <p style="overflow: hidden;text-overflow: ellipsis;max-width: 160px;" data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</p>
    <!-- Status -->
    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte::adminlte.online') }}</a>
</div>


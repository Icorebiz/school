@push('menus')
    <li>
        <a href="#" title="@lang('school::breadcrumb.school')"><i
                    class="fa fa-lg fa-fw fa-group"></i> <span
                    class="menu-item-parent">@lang('school::breadcrumb.school')</span></a>
        <ul>
            <li>
                <a href="{{LaravelLocalization::getLocalizedURL(null,'/school')}}" class="menu-item-parent">
                    <i class="fa fa-lg fa-fw fa-user-plus"></i>@lang('school::breadcrumb.school')</a>
            </li>
        </ul>
    </li>
@endpush
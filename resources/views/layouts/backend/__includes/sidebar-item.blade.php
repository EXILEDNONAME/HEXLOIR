<div class="kt-menu-item pt-2.25 pb-px">
    <span class="kt-menu-heading uppercase text-xs font-medium text-muted-foreground ps-[10px] pe-[10px]">
        MAIN
    </span>
</div>
<div class="kt-menu-item {{ (request()->is('dashboard/archives*')) ? 'active' : '' }}" data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
    <a href="/dashboard/archives" class="kt-menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] ps-[10px] pe-[10px] py-[6px]">
        <span class="kt-menu-icon items-start text-muted-foreground w-[20px]"><i class="ki-filled ki-element-11 text-lg"></i></span>
        <span class="kt-menu-title text-sm font-medium text-foreground kt-menu-item-active:text-primary kt-menu-link-hover:!text-primary">
            Archives
        </span>
    </a>
</div>

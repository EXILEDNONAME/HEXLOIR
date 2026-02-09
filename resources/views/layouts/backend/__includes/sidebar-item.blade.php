<div class="kt-menu-item pt-2.25 pb-px">
    <span class="kt-menu-heading uppercase text-xs font-medium text-muted-foreground ps-[10px] pe-[10px]">
        MAIN
    </span>
</div>
<<<<<<< HEAD
<div class="kt-menu-item {{ (request()->is('dashboard/applications/datatables*')) ? 'show' : '' }}" data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
    <div class="kt-menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] ps-[10px] pe-[10px] py-[6px]" tabindex="0">
        <span class="kt-menu-icon items-start text-muted-foreground w-[20px]"><i class="ki-filled ki-abstract-21"></i></i></span>
        <span class="kt-menu-title text-sm font-medium text-foreground kt-menu-item-active:text-primary kt-menu-link-hover:!text-primary">
            Main Menu
        </span>
        <span class="kt-menu-arrow text-muted-foreground w-[20px] shrink-0 justify-end ms-1 me-[-10px]">
            <span class="inline-flex kt-menu-item-show:hidden"><i class="ki-filled ki-plus text-[11px]"></i></span>
            <span class="hidden kt-menu-item-show:inline-flex"><i class="ki-filled ki-minus text-[11px]"></i></span>
        </span>
    </div>
    <div class="kt-menu-accordion gap-1 ps-[10px] relative before:absolute before:start-[20px] before:top-0 before:bottom-0 before:border-s before:border-border">
        <div class="kt-menu-item {{ (request()->is('dashboard/applications/datatables/generals*')) ? 'active' : '' }}">
            <a href="/dashboard/applications/datatables/generals" class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]">
                <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary"></span>
                <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
                    Home
                </span>
            </a>
        </div>
        <div class="kt-menu-item {{ (request()->is('dashboard/applications/datatables/relations*')) ? 'active' : '' }}">
            <a href="/dashboard/applications/datatables/relations" class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]">
                <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary"></span>
                <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
                    Archieve
                </span>
            </a>
        </div>
        <div class="kt-menu-item {{ (request()->is('dashboard/applications/datatables/relations*')) ? 'active' : '' }}">
            <a href="/dashboard/applications/datatables/relations" class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]">
                <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary"></span>
                <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
                    About
                </span>
            </a>
        </div>
        <div class="kt-menu-item {{ (request()->is('dashboard/applications/datatables/relations*')) ? 'active' : '' }}">
            <a href="/dashboard/applications/datatables/relations" class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]">
                <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary"></span>
                <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
                    Projects
                </span>
            </a>
        </div>
        <div class="kt-menu-item {{ (request()->is('dashboard/applications/datatables/relations*')) ? 'active' : '' }}">
            <a href="/dashboard/applications/datatables/relations" class="kt-menu-link border border-transparent items-center grow kt-menu-item-active:bg-accent/60 dark:menu-item-active:border-border kt-menu-item-active:rounded-lg hover:bg-accent/60 hover:rounded-lg gap-[14px] ps-[10px] pe-[10px] py-[8px]">
                <span class="kt-menu-bullet flex w-[6px] -start-[3px] rtl:start-0 relative before:absolute before:top-0 before:size-[6px] before:rounded-full rtl:before:translate-x-1/2 before:-translate-y-1/2 kt-menu-item-active:before:bg-primary kt-menu-item-hover:before:bg-primary"></span>
                <span class="kt-menu-title text-2sm font-normal text-foreground kt-menu-item-active:text-primary kt-menu-item-active:font-semibold kt-menu-link-hover:!text-primary">
                    Contacts
                </span>
            </a>
        </div>
    </div>
</div>
<div class="kt-menu-item {{ (request()->is('dashboard/posts*')) ? 'active' : '' }}" data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
    <a href="/dashboard/posts" class="kt-menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] ps-[10px] pe-[10px] py-[6px]">
        <span class="kt-menu-icon items-start text-muted-foreground w-[20px]"><i class="ki-filled ki-element-11 text-lg"></i></span>
        <span class="kt-menu-title text-sm font-medium text-foreground kt-menu-item-active:text-primary kt-menu-link-hover:!text-primary">
            Posts
        </span>
    </a>
</div>
=======

<div class="kt-menu-item {{ (request()->is('dashboard/contents*')) ? 'active' : '' }}" data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
    <a href="/dashboard/contents" class="kt-menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] ps-[10px] pe-[10px] py-[6px]">
        <span class="kt-menu-icon items-start text-muted-foreground w-[20px]"><i class="ki-filled ki-element-11 text-lg"></i></span>
        <span class="kt-menu-title text-sm font-medium text-foreground kt-menu-item-active:text-primary kt-menu-link-hover:!text-primary">
            Contents
        </span>
    </a>
</div>

<div class="kt-menu-item {{ (request()->is('dashboard/categories*')) ? 'active' : '' }}" data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
    <a href="/dashboard/categories" class="kt-menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] ps-[10px] pe-[10px] py-[6px]">
        <span class="kt-menu-icon items-start text-muted-foreground w-[20px]"><i class="ki-filled ki-element-11 text-lg"></i></span>
        <span class="kt-menu-title text-sm font-medium text-foreground kt-menu-item-active:text-primary kt-menu-link-hover:!text-primary">
            Categories
        </span>
    </a>
</div>

<div class="kt-menu-item {{ (request()->is('dashboard/tags*')) ? 'active' : '' }}" data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
    <a href="/dashboard/tags" class="kt-menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] ps-[10px] pe-[10px] py-[6px]">
        <span class="kt-menu-icon items-start text-muted-foreground w-[20px]"><i class="ki-filled ki-element-11 text-lg"></i></span>
        <span class="kt-menu-title text-sm font-medium text-foreground kt-menu-item-active:text-primary kt-menu-link-hover:!text-primary">
            Tags
        </span>
    </a>
</div>
>>>>>>> e496115e19e44b7cc00b8e745d1d4fa6d6aa5f72

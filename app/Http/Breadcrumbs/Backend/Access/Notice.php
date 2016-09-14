<?php

Breadcrumbs::register('admin.access.notice.index', function ($breadcrumbs) {

    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push('notice',route('admin.access.notice.index'));
});

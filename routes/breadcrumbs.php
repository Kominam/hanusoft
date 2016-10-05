<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('index'));
});

// Home > About
Breadcrumbs::register('about', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', route('about'));
});

// Home > Services
Breadcrumbs::register('services', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Services', route('services'));
});

// Home > Members
Breadcrumbs::register('members', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Members', route('members'));
});

// Home > Project
Breadcrumbs::register('projects', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Projects', route('projects'));
});

// Home > Contact
Breadcrumbs::register('posts', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Posts', route('posts'));
});

// Home > Contact
Breadcrumbs::register('contact', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contact', route('contact'));
});


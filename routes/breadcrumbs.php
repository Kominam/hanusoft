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

// Home > Post
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

//Home > Members > MemberID
Breadcrumbs::register('memberdetail', function($breadcrumbs, $member) {
    $breadcrumbs->parent('members');
    $breadcrumbs->push($member->name, route('member_detail', $member->id));
});
//Home > Projects > Single_Porject
Breadcrumbs::register('single_project', function($breadcrumbs, $project) {
    $breadcrumbs->parent('projects');
    $breadcrumbs->push($project->name, route('single_project', $project->id));
});

//Home > Projects > Single_Post
Breadcrumbs::register('single_post', function($breadcrumbs, $post) {
    $breadcrumbs->parent('posts');
    $breadcrumbs->push($post->tittle, route('post_detail', $post->id));
});


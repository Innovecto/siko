<?php

Breadcrumbs::register('home', function ($breadcrumbs) {
	$breadcrumbs->push('Home', url('/'));
});

/**
 *
 * Master Data Module - Breadcrumbs Register
 *
 */

/* Religions Module Breadcrumbs Register */
Breadcrumbs::register('religion-data', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Religion Data', route('religion::index'));
});

Breadcrumbs::register('religion-create', function ($breadcrumbs) {
	$breadcrumbs->parent('religion-data');
	$breadcrumbs->push('Add Religion', route('religion::create'));
});

Breadcrumbs::register('religion-update', function ($breadcrumbs) {
	$breadcrumbs->parent('religion-data');
	$breadcrumbs->push('Update Religion', route('religion::edit'));
});

/* Location Module Breadcrumbs Register */
Breadcrumbs::register('location-data', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Location Data', route('location::index'));
});

Breadcrumbs::register('location-create', function ($breadcrumbs) {
	$breadcrumbs->parent('location-data');
	$breadcrumbs->push('Add Location', route('location::create'));
});

/*
Breadcrumbs::register('religion-update', function ($breadcrumbs) {
$breadcrumbs->parent('religion-data');
$breadcrumbs->push('Update Religion', route('religion::edit'));
});
 */

/* Event Module Breadcrumbs Register */
Breadcrumbs::register('event-data', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Event', route('event::index'));
});

Breadcrumbs::register('event-create', function ($breadcrumbs) {
	$breadcrumbs->parent('event-data');
	$breadcrumbs->push('Create New Event', route('event::create'));
});

Breadcrumbs::register('event-update', function ($breadcrumbs) {
	$breadcrumbs->parent('event-data');
	$breadcrumbs->push('Update Event', route('event::edit'));
});

/* Timeline Module Breadcrumbs Register */
Breadcrumbs::register('timeline-index', function ($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Global Timeline', route('timeline::index'));
});

Breadcrumbs::register('timeline-create', function ($breadcrumbs) {
	$breadcrumbs->parent('timeline-index');
	$breadcrumbs->push('Create New Timeline', route('timeline::create'));
});

Breadcrumbs::register('timeline-update', function ($breadcrumbs) {
	$breadcrumbs->parent('timeline-data');
	$breadcrumbs->push('Update Timeline', route('timeline::edit'));
});

?>
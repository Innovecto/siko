<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Religion;
use Request;

class ReligionController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {

		$religions = Religion::all();

		return view('religion.index', compact('religions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return view('religion.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(Requests\CreateReligionRequest $request) {

		Religion::create($request->all());

		return redirect('religions');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		$religions = Religion::findOrFail($id);

		return view('religion.show', compact('religions'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		$religions = Religion::findOrFail($id);

		return view('religion.edit', compact('religions'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request  $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Requests\CreateReligionRequest $request, $id) {
		$religions = Religion::findOrFail($id);

		$religions->update($request->all());

		return view('religion.show', compact('religions'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {

		$religions = Religion::findOrFail($id);

		$religions->delete($religions);

		return $this->index();

	}
}

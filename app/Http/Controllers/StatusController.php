<?php

namespace App\Http\Controllers;

use App\Repositories\Status\StatusRepositoryInterface;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * @var StatusRepositoryInterface
     */
    private $statusRepository;

    /**
     * @var Request
     */
    private $request;

    public function __construct(
        StatusRepositoryInterface $statusRepository,
        Request $request
    ) {
        $this->statusRepository = $statusRepository;
        $this->request = $request;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $statuses = $this->statusRepository->findAll();

        return view('status.index', ['statuses' => $statuses]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('status.create');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store()
    {
        $created = $this->statusRepository->create([
            'name' => $this->request->input('name')
        ]);

        return view('status.create', ['message' => $created]);
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $status = $this->statusRepository->findOne($id);

        return view('status.edit', ['status' => $status]);
    }

    public function update($id)
    {
        $this->statusRepository->update($id, [
            'name' => $this->request->input('name')
        ]);

        return redirect("status/edit/$id");
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $this->statusRepository->delete($id);

        return redirect('status');
    }
}
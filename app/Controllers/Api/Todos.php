<?php

namespace App\Controllers\Api;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use App\Models\TodosModel;

class Todos extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index($status = null)
    {
        $model = new TodosModel();

        if ($status !== null && ($status == 0 || $status == 1)) {
            $todos = $model->where('todo_status', $status)->findAll();
        } else {
            $todos = $model->findAll();
        }

        if (empty($todos)) {
            return $this->respond(['status' => false, 'message' => 'No todos found', 'data' => []]);
        }

        return $this->respond(['status' => true, 'message' => 'Todos retrieved successfully', 'data' => $todos]);
    }


    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        $model = new TodosModel();
        $todo = $model->find($id);

        if ($todo === null) {
            return $this->respond(['status' => false, 'message' => 'Todo not found', 'data' => null]);
        }

        return $this->respond(['status' => true, 'message' => 'Todo retrieved successfully', 'data' => $todo]);
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $model = new TodosModel();

        $data = [
            'todo_title' => $this->request->getVar('title'),
            'todo_description' => $this->request->getVar('description'),
        ];

        $model->insert($data);

        return $this->respondCreated(['status' => true, 'message' => 'Todo created successfully', 'data' => $data]);
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        $model = new TodosModel();
        $todo = $model->find($id);

        if ($todo === null) {
            return $this->respond(['status' => false, 'message' => 'Todo not found', 'data' => null]);
        }

        $data = [
            'todo_title' => $this->request->getVar('title'),
            'todo_description' => $this->request->getVar('description'),
        ];

        $model->update($id, $data);

        return $this->respond(['status' => true, 'message' => 'Todo updated successfully', 'data' => $data]);
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }
}
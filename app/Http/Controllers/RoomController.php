<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function response($status, $message, $data)
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ]);
    }
    public function get()
    {
        $get = Room::query()->get();
        if ($get) {
            return $this->response(200, 'success', $get);
        }
    }
    public function add(Request $req)
    {
        $data = $req->validate([
            'type' => 'required|string',
            'price' => 'required|numeric',
            'status' => 'required|string'
        ]);
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move('image', $fileName);
            $data['image'] = $fileName;
        }
        $insert = Room::query()->create($data);
        if ($insert) {
            return $this->response(200, 'inserted succesfully', $insert);
        } else {
            return $this->response(500, 'insertion failed', '');
        }
    }
    public function delete($id)
    {
        $delete = Room::find($id);
        if ($delete) {
            $delete->delete();
            return $this->response(200, 'deleted successfully', '');
        } else {
            return $this->response(500, 'can not deleted', '');
        }
    }
    public function edit(Request $req, $id)
    {
        $edit = Room::find($id);
        if ($edit) {
            $data = $req->validate([
                'type' => 'required|string',
                'price' => 'required|numeric',
                'status' => 'required|string'
            ]);
            if ($req->hasFile('image')) {
                $file = $req->file('image');
                $fileName = $file->getClientOriginalName();
                $file->move('image', $fileName);
                $data['image'] = $fileName;
            }
            $edit->update($data);
            if($edit){
                return $this->response(200, 'updated successfully', $edit);
            }else{
                return $this->response(500, 'can not update', '');
            }
        }else{
            return $this->response(404, 'Can not find id', '');
        }
    }
}

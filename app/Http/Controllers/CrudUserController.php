<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudUserController extends Controller
{
public function createUser() { return view('createuser'); }
public function postUser(Request $request) { /* Code thêm user */ }
public function readUser($id) { /* Code đọc user */ }
public function updateUser($id) { return view('updateUser'); }
public function login() {return view ('login');}
public function postUpdateUser(Request $request, $id) { /* Code cập nhật user */ }
public function deleteUser($id) { /* Code xóa user */ }
public function listUser() { /* Code lấy danh sách user */ }
public function signOut() { /* Đăng xuất */ }
}

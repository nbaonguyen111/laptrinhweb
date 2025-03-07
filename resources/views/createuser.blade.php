<form action="/create" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Tên">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Mật khẩu">
    <button type="submit">Thêm</button>
</form>
## API Aplikasi Todo

Desain aplikasi android:<br/>
https://www.figma.com/file/Lnv6GdopZayd36rxf2uBrF/Todo-App?type=design&node-id=108%3A42&mode=design&t=vDCjqmKqlDvczt0u-1

## API Endpoints

| Method | Endpoint                   | Deskripsi                                    |
| ------ | -------------------------- | -------------------------------------------- |
| GET    | /api/todos                 | Mendapatkan daftar semua todos.              |
| GET    | /api/todos/status/{status} | Mendapatkan daftar todos berdasarkan status. |
| GET    | /api/todos/{id}            | Mendapatkan detail todo berdasarkan ID.      |
| POST   | /api/todos                 | Membuat todo baru.                           |

## Test dengan Postman

GET `http://localhost:8080/api/todos`<br/>
Menampilkan semua data todo baik yang sudah selesai maupun belum
![list-todos](dokumentasi/list-todos.png)

GET `http://localhost:8080/api/todos/status/1`<br/>
Menampilkan data todo berdasarkan status 0 = belum selesai, 1 = sudah selesai
![list-todos-with-status](dokumentasi/list-todos-with-status.png)

GET `http://localhost:8080/api/todos/2`<br/>
Gunakan id untuk menampilkan data detail
![view-todo-by-id](dokumentasi/view-a-todo.png)

POST `http://localhost:8080/api/todos`<br/>
Gunakan id untuk menampilkan data detail
![create-a-todo](dokumentasi/view-a-todo.png)

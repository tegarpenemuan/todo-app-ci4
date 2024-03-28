## API Aplikasi Todo

Desain aplikasi android:
https://www.figma.com/file/Lnv6GdopZayd36rxf2uBrF/Todo-App?type=design&node-id=108%3A42&mode=design&t=vDCjqmKqlDvczt0u-1

## API Endpoints

| Method | Endpoint                   | Deskripsi                                    |
| ------ | -------------------------- | -------------------------------------------- |
| GET    | /api/todos                 | Mendapatkan daftar semua todos.              |
| GET    | /api/todos/status/{status} | Mendapatkan daftar todos berdasarkan status. |

## Test dengan Postman

`http://localhost:8080/api/todos`<br/>
Menampilkan semua data todo baik yang sudah selesai maupun belum
![list-todos](dokumentasi/list-todos.png)

`http://localhost:8080/api/todos/status/1`<br/>
Menampilkan data todo berdasarkan status 0 = belum selesai, 1 = sudah selesai
![list-todos](dokumentasi/list-todos-with-status.png)

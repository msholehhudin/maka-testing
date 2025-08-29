

## Muhammad Sholehhudin - Maka Technical Test

Technical Test | 29 Agustus 2025 

Framework : Laravel 10
Database : MySQL

📡 API Endpoints
## Nomer 1 & 2 

| Endpoint        | Method | Deskripsi                      |
| --------------- | ------ | ------------------------------ |
| `/api/number-1` | GET    | Menjalankan logic soal nomor 1 |
| `/api/number-2` | GET    | Menjalankan logic soal nomor 2 |


## Nomer 3 - CRUD Users

1. List User
```http
Endpoint: GET /api/users
```
Query Params (opsional):
search -> filter berdasarkan nama/address

Contoh Request:
```http
GET /api/users?search=sholeh
```
Contoh Response :

```json
{
    "current_page": 1,
    "data": [
        {
            "id": 2,
            "name": "Sholeh",
            "address": "Jakarta",
            "image": "users/ywWOmdqiME0Bx5x6vSCWQJc19OaMn44qBqkT8azu.jpg",
            "created_at": "2025-08-29T07:08:50.000000Z",
            "updated_at": "2025-08-29T07:08:50.000000Z",
            "deleted_at": null
        }
    ],
    "first_page_url": "http://localhost:8000/api/users?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http://localhost:8000/api/users?page=1",
    "links": [
        {
            "url": null,
            "label": "&laquo; Previous",
            "active": false
        },
        {
            "url": "http://localhost:8000/api/users?page=1",
            "label": "1",
            "active": true
        },
        {
            "url": null,
            "label": "Next &raquo;",
            "active": false
        }
    ],
    "next_page_url": null,
    "path": "http://localhost:8000/api/users",
    "per_page": 10,
    "prev_page_url": null,
    "to": 1,
    "total": 1
}
```

2. Add User :
```http
Endpoint: POST /api/users
```
Contoh Response :
```json
{
    "message": "User Created Successfully",
    "data": {
        "name": "Sholeh",
        "address": "Jakarta",
        "image": "users/ywWOmdqiME0Bx5x6vSCWQJc19OaMn44qBqkT8azu.jpg",
        "updated_at": "2025-08-29T07:08:50.000000Z",
        "created_at": "2025-08-29T07:08:50.000000Z",
        "id": 1
    }
}
```

3. Update User
```http
Endpoint: PUT /api/users/{id}
```
Contoh Response : 
```json
{
    "message": "User updated successfully",
    "data": {
        "id": 2,
        "name": "Muhammad Sholehhudin",
        "address": "Malang",
        "image": "users/ywWOmdqiME0Bx5x6vSCWQJc19OaMn44qBqkT8azu.jpg",
        "created_at": "2025-08-29T07:08:50.000000Z",
        "updated_at": "2025-08-29T07:12:52.000000Z",
        "deleted_at": null
    }
}
```

4. Delete User : 
```http
Endpoint: DELETE /api/users/{id}
```
Contoh Response :
```json
{
  "message": "User deleted successfully"
}
```

Expect deleted user menggunakan softDelete dan isi column deleted_at

## Screenshot

Hasil pengujian API sudah saya dokumentasikan dan tersimpan pada folder:

```
/screenshots
```

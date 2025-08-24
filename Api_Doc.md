# API Documentation – Service Booking System

Base URL: `http://127.0.0.1:8000/api`

---

## Authentication

### 🔹 Register (Customer)
**POST** `http://127.0.0.1:8000/api/register`  
Request:
```json
{
  "name": "Oli",
  "email": "oli@example.com",
  "password": "123456"
}
```
Response:
```json
{
    "user": {
        "id": 2,
        "name": "Oli",
        "email": "oli@example.com",
        "email_verified_at": null,
        "role": "customer",
        "created_at": "2025-08-20T18:06:56.000000Z",
        "updated_at": "2025-08-20T18:06:56.000000Z"
    },
    "token": "14|BQJEHS0TIQ15NcjJdoPN30o19Fyt6GX2P6yF0spq4469748a"
}
```
### Login (Customer)
**POST** `http://127.0.0.1:8000/api/login`  
Request:
```json
{
  "email": "oli@example.com",
  "password": "123456"
}
```
Response:
```json
{
    "user": {
        "id": 2,
        "name": "Oli",
        "email": "oli@example.com",
        "email_verified_at": null,
        "role": "customer",
        "created_at": "2025-08-20T18:06:56.000000Z",
        "updated_at": "2025-08-20T18:06:56.000000Z"
    },
    "token": "14|BQJEHS0TIQ15NcjJdoPN30o19Fyt6GX2P6yF0spq4469748a"
}
```

### Services (Add)
**POST** `http://127.0.0.1:8000/api/services`  
Request:
```json
{
    "name": "test 2",
    "description": "Test service 2",
    "price": "100.00"
}
```
Response(If only login as admin):
```json
{
    "name": "Test service",
    "description": "Test service",
    "price": "100",
    "updated_at": "2025-08-24T18:40:23.000000Z",
    "created_at": "2025-08-24T18:40:23.000000Z",
    "id": 3
}
```
Response(If not login as admin):
```json
{
    "error": "Forbidden"
}
```

### Services (List Services)
**GET** `http://127.0.0.1:8000/api/services`  
Response(If only login as admin):
```json
[
    {
        "id": 2,
        "name": "test",
        "description": "Test service",
        "price": "100.00",
        "status": 1,
        "created_at": "2025-08-22T10:03:27.000000Z",
        "updated_at": "2025-08-22T10:03:27.000000Z"
    },
    {
        "id": 3,
        "name": "Test service",
        "description": "Test service",
        "price": "100.00",
        "status": 1,
        "created_at": "2025-08-24T18:40:23.000000Z",
        "updated_at": "2025-08-24T18:40:23.000000Z"
    }
]
```
### Services (Update Services)
**PUT** `http://127.0.0.1:8000/api/services/{id}`  
Request(If only login as admin):
```json
{
    "name": "Test service update",
    "description": "Test service update",
    "price": "100"
}
```
Response(If only login as admin):
```json
{
    "id": 2,
    "name": "Test service update",
    "description": "Test service update",
    "price": "100",
    "status": 1,
    "created_at": "2025-08-22T10:03:27.000000Z",
    "updated_at": "2025-08-24T18:45:21.000000Z"
}
```

### Services (Delete Services)
**DELETE** `http://127.0.0.1:8000/api/services/{id}`

Authorization: Bearer <admin_token>
Example token: 17|YM7AeywQ1SYr4aZ50C6S9np4mXN6Wnuv5nydFQOw53a7dc66


### Bookings (Create Booking)
**POST** `http://127.0.0.1:8000/api/bookings`  
Request:
```json
{
  "service_id": 1,
  "booking_date": "2025-08-25"
}

```
Response:
```json
{
    "user_id": 2,
    "service_id": 2,
    "booking_date": "2025-08-24",
    "status": "pending",
    "updated_at": "2025-08-24T18:54:15.000000Z",
    "created_at": "2025-08-24T18:54:15.000000Z",
    "id": 2
}
```

### Bookings (All Booking)
**GET** `http://127.0.0.1:8000/api/bookings`  

Response:
```json
[
    {
        "id": 1,
        "user_id": 2,
        "service_id": 2,
        "booking_date": "2025-08-24",
        "status": "pending",
        "created_at": "2025-08-23T04:28:33.000000Z",
        "updated_at": "2025-08-23T04:28:33.000000Z",
        "service": {
            "id": 2,
            "name": "Test service update",
            "description": "Test service update",
            "price": "100.00",
            "status": 1,
            "created_at": "2025-08-22T10:03:27.000000Z",
            "updated_at": "2025-08-24T18:45:21.000000Z"
        }
    },
    {
        "id": 2,
        "user_id": 2,
        "service_id": 2,
        "booking_date": "2025-08-24",
        "status": "pending",
        "created_at": "2025-08-24T18:54:15.000000Z",
        "updated_at": "2025-08-24T18:54:15.000000Z",
        "service": {
            "id": 2,
            "name": "Test service update",
            "description": "Test service update",
            "price": "100.00",
            "status": 1,
            "created_at": "2025-08-22T10:03:27.000000Z",
            "updated_at": "2025-08-24T18:45:21.000000Z"
        }
    }
]
```

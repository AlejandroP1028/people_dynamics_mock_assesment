Feature Overview (Maps to Requirements)

User Authentication (sessions): Registration, login, logout via Breeze; sessions managed by Laravel.

Restrict dashboard/CRUD to authenticated users: Routes wrapped with auth middleware + policies.

PDO + Prepared Statements: Laravel's DB layer uses PDO. Example raw prepared query included.

CRUD Dashboard: Implemented for an example resource Contact (name, email, phone, notes). Owned by the logged-in user.

Security

XSS: Blade auto‑escapes {{ }}; additional server-side sanitization via Form Requests.

Password hashing: password_hash() equivalent via Laravel's Hash::make(); verification via guard.

Session management: Secure cookies, same-site, HTTPOnly; custom inactivity timeout middleware.

CSRF: Built-in @csrf and VerifyCsrfToken middleware.

Form Handling: Sensitive ops via POST/PUT/PATCH/DELETE; client + server validation.

Error Handling: Friendly validation errors; exceptions hidden from users; logs to storage.

Bonus

CSRF: built-in.

Password reset via email: Included with Breeze routes/views.

Role-based access control (RBAC): Simple role column (user/admin) + middleware

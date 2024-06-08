# Space Blog Platform

## Frameworks Used

- **Laravel**: The primary PHP framework for building the web application.
- **PHP**: The server-side scripting language that Laravel is built on.
- **MySQL**: Relational database management system used to store blog content, user data, etc.
- **HTML/CSS/JavaScript**: Front-end technologies for building the user interface and adding interactivity.
- **Bootstrap and Tailwind CSS**: Front-end frameworks for styling and layout.
- **Composer**: Dependency manager for PHP used in Laravel to manage project dependencies.

## How to Run

1. Run Apache and MySQL servers.
2. Open the Space Blog app directory in a terminal.
3. Enter `php artisan serve`.
4. Open another terminal in the directory.
5. Enter `npm run dev`.
6. Go to `localhost:8000` in your browser to access the site.

### Viewing Emails

1. Download an SMTP testing tool such as Mailpit.
2. Run the SMTP testing tool.
3. In the Space Blog app directory, enter `php artisan queue:work`.
4. Go to `localhost:8025` to see emails needed for email verification and password recovery.

## How to Use

1. **Register**: Click the register button and enter your details in all fields. Verification is required, so if you are running the SMTP testing tool, you’ll be able to see it and complete your registration.
2. **Post**: Click the space button and enter what’s on your mind.
3. **Comment**: You can comment on posts made by other users.
4. **Search**: Click the search button to begin searching tags made on posts.
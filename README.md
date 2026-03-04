# Personal Blog

This is a simple PHP-based personal blog project. It allows you to manage articles, including creating, editing, and deleting posts via an admin interface.

## How to Run

1. **Requirements:**
   - PHP 7.4 or higher
   - A web server (e.g., Apache, Nginx) or PHP's built-in server

2. **Setup:**
   - Clone or download this repository to your local machine.
   - Place the project folder in your web server's root directory (e.g., `/var/www/html`).
   - Make sure the `data/articles.json` file is writable by the web server (for article management).

3. **Run Locally (using PHP built-in server):**
   - Open a terminal in the project directory.
   - Run:
     ```bash
     php -S localhost:8000
     ```
   - Visit [http://localhost:8000](http://localhost:8000) in your browser.

4. **Admin Panel:**
   - Access the admin panel at `/admin` (e.g., [http://localhost:8000/admin](http://localhost:8000/admin)).
   - Default login credentials are set in `admin/auth.php` (change them for security).

## Project Roadmap

This project follows the roadmap from [roadmap.sh: Personal Blog](https://roadmap.sh/projects/personal-blog).

See the full roadmap and suggested features at: [https://roadmap.sh/projects/personal-blog](https://roadmap.sh/projects/personal-blog)

## Folder Structure

- `index.php` — Main blog page
- `admin/` — Admin panel for managing articles
- `data/` — Stores articles in JSON format
- `includes/` — Shared PHP includes (header, footer, functions)
- `script.js` — Frontend JavaScript
- `style.css` — Stylesheet

## License

This project is open source. See LICENSE for details.

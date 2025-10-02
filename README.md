# JobBoard

A modern job board application built with Laravel that connects employers with job seekers.

## Features

- **Job Listings**: Browse and search job opportunities
- **Employer Profiles**: Company information and job postings
- **User Authentication**: Secure login and registration
- **Job Management**: Create, edit, and manage job postings
- **Comments System**: Interactive feedback on posts
- **Tag System**: Categorize and filter content
- **Responsive Design**: Mobile-friendly interface

## Tech Stack

- **Backend**: Laravel 12.x
- **Database**: SQLite
- **Frontend**: Blade Templates, Tailwind CSS
- **Testing**: Pest PHP
- **Development**: Laravel Debugbar, Vite

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/jobboard.git
   cd jobboard
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup**
   ```bash
   touch database/database.sqlite
   php artisan migrate --seed
   ```

5. **Start development server**
   ```bash
   npm run dev
   php artisan serve
   ```

## Usage

- Visit `http://localhost:8000` to access the application
- Register as a new user or login with existing credentials
- Employers can create and manage job postings
- Job seekers can browse and apply for positions

## Testing

Run the test suite:
```bash
php artisan test
```

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
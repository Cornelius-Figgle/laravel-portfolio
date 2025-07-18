# Laravel Portfolio

This is my personal website/portfolio built in [Laravel](https://laravel.com/) with [TailwindCSS](https://tailwindcss.com/) and [Alpine.JS](https://alpinejs.dev/).

It is hosted on [DigitalOcean](https://digitalocean.com) and available [here](https://maxharrison.dev).

## Setup

*These instructions are mainly written for my future reference, so bare that in mind.*

1. I recommend that you create a dedicated WSL instance/LXC container/Linux VM for this. I personally use Debian, but the programs and commands should be adaptable to any distro.

2. Install the system packages and enable the services

```bash
sudo apt update
sudo apt upgrade -y
sudo apt install -y nodejs npm curl git gh
cd ~
```

3. Install [PHP](https://php.net/), [Composer](https://getcomposer.org/) (the PHP package manager), and the Laravel installer

```bash
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
composer global require laravel/installer
```

4. Setup [Git](https://git-scm.com) and [Github CLI](https://cli.github.com/) the website repository

```bash
gh auth login  # Accept defaults, select "Login with web browser" and go to the link in your browser to sign in
gh auth setup-git
git config --global user.email "john@example.com"
git config --global user.name "John Doe"
mkdir source && cd source
git clone https://github.com/Cornelius-Figgle/laravel-portfolio
cd laravel-portfolio
```

5. Configure the `.env` file

```bash
cp .env.example .env

# setup the SMTP server variables
nano .env
```

6. Install the NodeJS dependencies

```bash
npm install && npm run build
```

7. Setup the SQLite database

```bash
php artisan migrate
```

8. Start the server

```bash
composer run dev
```

Open your browser to `http://127.0.0.1:8000` and you should be greeted with the homepage!

Feel free to open an issue for any problems you encounter with these instructions.

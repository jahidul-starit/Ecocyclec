# EzygoBD — Bangladesh's #1 EV Rental Network

A fully responsive, static multi-page website for **EzygoBD Electric** — Bangladesh's leading electric vehicle rental platform offering e-scooters, e-bikes, and e-rickshaws for personal commutes, last-mile deliveries, and corporate fleets.

## Live Pages

| Page | Description |
|------|-------------|
| `index.html` | Homepage — hero video, services grid, fleet showcase, stats, testimonials, FAQ, contact |
| `pages/evs.html` | Our EVs — vehicle specs, comparison chart, fleet platform overview |
| `pages/services.html` | Services — rental plans for riders & delivery partners |
| `pages/about.html` | About Us — mission, vision, team, impact stats, corporate video |
| `pages/franchise.html` | Franchise — FOCO & FOFO partnership models, comparison table, application form |
| `pages/advertising.html` | Advertising — EV fleet branding, ad format cards, enquiry form |

## Tech Stack

- **HTML5** — semantic, accessible markup
- **CSS3** — custom properties, grid/flexbox layouts, responsive breakpoints, animations
- **Vanilla JavaScript** — IntersectionObserver animations, animated counters, carousel, form UX
- **Google Fonts** — Poppins (300–900)
- **Font Awesome 6.5.1** — icon library via CDN

No build tools, frameworks, or package managers required.

## Project Structure

```
EzygoBD/
├── index.html                  # Homepage
├── README.md
├── pages/
│   ├── about.html
│   ├── advertising.html
│   ├── evs.html
│   ├── franchise.html
│   └── services.html
└── assets/
    ├── css/
    │   ├── styles.css          # Global / shared styles
    │   ├── about.css
    │   ├── advertising.css
    │   ├── evs.css
    │   ├── franchise.css
    │   └── services.css
    ├── js/
    │   ├── script.js           # Global / shared interactions
    │   ├── about.js
    │   ├── advertising.js
    │   ├── evs.js
    │   ├── franchise.js
    │   └── services.js
    └── videos/
        └── HUAIHAI Sparky Teaser.mp4
```

## Run Locally

No installation needed — just serve static files.

### Option 1: Python (built-in)

```bash
cd EzygoBD
python -m http.server 5500
```

Open [http://localhost:5500](http://localhost:5500)

### Option 2: VS Code Live Server

Install the **Live Server** extension, right-click `index.html` → "Open with Live Server".

### Option 3: Node.js (npx)

```bash
npx serve .
```

## Deploy to VPS (Nginx)

### 1. Upload files to server

```bash
scp -r index.html pages/ assets/ README.md user@your-server-ip:/var/www/ezygobd/
```

### 2. Nginx config

```nginx
server {
    listen 80;
    server_name ezygobd.com www.ezygobd.com;

    root /var/www/ezygobd;
    index index.html;

    location / {
        try_files $uri $uri/ =404;
    }

    # Cache static assets
    location ~* \.(css|js|mp4|jpg|png|webp|svg|ico|woff2)$ {
        expires 30d;
        add_header Cache-Control "public, immutable";
    }

    # Gzip compression
    gzip on;
    gzip_types text/html text/css application/javascript;
    gzip_min_length 256;
}
```

### 3. Enable & restart

```bash
sudo ln -s /etc/nginx/sites-available/ezygobd /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl restart nginx
```

### 4. SSL (optional but recommended)

```bash
sudo apt install certbot python3-certbot-nginx
sudo certbot --nginx -d ezygobd.com -d www.ezygobd.com
```

## Browser Support

- Chrome 111+
- Firefox 113+
- Safari 16.4+
- Edge 111+

## License

© 2026 EzygoBD. All rights reserved.

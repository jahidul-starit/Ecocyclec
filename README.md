<div align="center">

<img src="https://ezygobd.com/assets/images/logo.png" alt="EzygoBD Logo" width="100" />

# EzygoBD — Bangladesh's #1 EV Rental Network

**A modern, full-stack PHP website for Bangladesh's leading electric vehicle rental platform.**

[![Live Site](https://img.shields.io/badge/🌐_Live_Site-ezygobd.com-22c55e?style=for-the-badge)](https://ezygobd.com)
[![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![CSS3](https://img.shields.io/badge/CSS3-Custom_Design-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://ezygobd.com)
[![JavaScript](https://img.shields.io/badge/JavaScript-Vanilla_JS-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://ezygobd.com)
[![License](https://img.shields.io/badge/License-All_Rights_Reserved-red?style=for-the-badge)](https://ezygobd.com)

</div>

---

## 📸 Screenshots

<div align="center">

| Services & Pricing | Franchise Opportunities |
|:---:|:---:|
| <img src="https://github.com/user-attachments/assets/e3f36627-f626-4421-8b47-a4957e315018" width="420" alt="Services Page"/> | <img src="https://github.com/user-attachments/assets/2d19b989-051f-40e4-8ca9-75a447a90308" width="420" alt="Franchise Page"/> |

| Our Electric Fleet | Our Mission |
|:---:|:---:|
| <img src="https://github.com/user-attachments/assets/88d0a446-9e2a-415e-aeab-38e6608f6262" width="420" alt="EVs Page"/> | <img src="https://github.com/user-attachments/assets/c0e2f28f-6508-4453-b321-d736ffab6d1e" width="420" alt="About Page"/> |

</div>

---

---

## 🌟 Overview

**EzygoBD** connects riders, operators, and businesses across Bangladesh — reducing costs, emissions, and complexity. This website was built and delivered as a freelance project for **Ezygo Electric Limited**, providing:

- 🛵 **EV Booking** — E-scooters, e-bikes, and e-rickshaws for personal and corporate use
- 🤝 **Franchise Opportunities** — FOCO and FOFO partnership models
- 📢 **Advertising** — EV fleet branding and ad formats
- 🏢 **Corporate Fleets** — Last-mile delivery solutions

> 🔗 **Live at:** [https://ezygobd.com](https://ezygobd.com)

---

## 📄 Pages

| Page | File | Description |
|------|------|-------------|
| 🏠 Homepage | `index.php` | Hero section, services grid, fleet showcase, stats, testimonials, FAQ, contact |
| 🛵 Our EVs | `evs.php` | Vehicle specs, comparison chart, Rent Our EV application form |
| 🔧 Services | `services.php` | Rental plans for riders, delivery partners and corporate clients |
| 👥 About Us | `about.php` | Mission, vision, team, impact stats, company story |
| 🤝 Franchise | `franchise.php` | FOCO and FOFO models, comparison table, application form |
| 📢 Advertising | `advertising.php` | EV fleet branding, ad format cards, enquiry form |
| 📬 Contact | `contact.php` | Contact form, location, phone and WhatsApp integration |
| ⚙️ Form Handler | `form-handler.php` | Backend PHP form processing |

---

## 🛠️ Tech Stack

| Technology | Usage |
|-----------|-------|
| **PHP 8.x** | Server-side rendering, form handling, reusable includes/components |
| **CSS3** | Custom properties, Grid/Flexbox, responsive breakpoints, dark mode |
| **Vanilla JavaScript** | GSAP animations, IntersectionObserver, animated counters, carousel |
| **Font Awesome 6.5.1** | Icon library via CDN |
| **Google Fonts (Poppins)** | Typography — weights 300–900 |

### Key Features

- 🌙 **Dark / Light Mode** toggle with localStorage persistence
- 📱 **Fully Responsive** — mobile-first across all screen sizes
- ⚡ **GSAP Animations** — smooth scroll-triggered transitions throughout
- 🍞 **Toast Notifications** — real-time feedback on form submissions
- 🔖 **OG Tags and Favicon** — social media sharing optimized
- 🗂️ **Modular PHP Includes** — reusable `header.php` and `footer.php` components
- 📋 **Document Checklist** — required documents for EV rental applications

---

## 📁 Project Structure

```
Ecocyclec/
├── index.php               # Homepage
├── about.php               # About Us
├── advertising.php         # Advertising
├── contact.php             # Contact
├── evs.php                 # Our EVs
├── form-handler.php        # PHP form processor
├── franchise.php           # Franchise
├── services.php            # Services
├── README.md
├── includes/
│   ├── header.php          # Global header and nav
│   └── footer.php          # Global footer
└── assets/
    ├── css/
    │   ├── styles.css       # Global styles + dark mode
    │   ├── about.css
    │   ├── advertising.css
    │   ├── evs.css
    │   ├── franchise.css
    │   └── services.css
    ├── js/
    │   ├── script.js        # Global JS interactions
    │   ├── about.js
    │   ├── advertising.js
    │   ├── evs.js
    │   ├── franchise.js
    │   └── services.js
    └── images/
```

---

## 🚀 Run Locally

> **Requirements:** PHP 8.x installed on your machine.

```bash
# Clone the repository
git clone https://github.com/jahidul-starit/Ecocyclec.git
cd Ecocyclec

# Start PHP built-in server
php -S localhost:8000
```

Open **http://localhost:8000** in your browser.

---

## 🌐 Deployment (Nginx + PHP-FPM)

```nginx
server {
    listen 80;
    server_name ezygobd.com www.ezygobd.com;
    root /var/www/ezygobd;
    index index.php;

    location / {
        try_files $uri $uri/ =404;
    }

    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass unix:/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }

    location ~* \.(css|js|jpg|png|webp|svg|ico|woff2)$ {
        expires 30d;
        add_header Cache-Control "public, immutable";
    }
}
```

---

## 🌍 Browser Support

| Browser | Version |
|---------|---------|
| Chrome | 111+ |
| Firefox | 113+ |
| Safari | 16.4+ |
| Edge | 111+ |

---

## 👨‍💻 Developer

**Jahidul Islam** — Freelance Web Developer

[![GitHub](https://img.shields.io/badge/GitHub-jahidul--starit-181717?style=flat-square&logo=github)](https://github.com/jahidul-starit)

> 💼 Available for freelance projects — building fast, responsive PHP and JavaScript websites for businesses across Bangladesh and beyond.

---

## 📃 License

© 2026 **Ezygo Electric Limited**. All rights reserved.

This project was built as a client freelance delivery. Source code is shared for portfolio purposes only.

---

<div align="center">
  <strong>Built with ❤️ for a greener Bangladesh 🇧🇩</strong>
</div>

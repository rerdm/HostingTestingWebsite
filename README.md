# ☕ HostingTestingWebsite - Coffee Shop Website

A modern coffee shop website project built with Tailwind CSS and a warm brown theme.

## 📋 Table of Contents

- [✨ Features](#-features)
- [🚀 Quick Deployment to GitHub Pages](#-quick-deployment-to-github-pages)
  - [Step 1: Create GitHub Repository](#step-1-create-github-repository)
  - [Step 2: Upload Code to GitHub](#step-2-upload-code-to-github)
  - [Step 3: Enable GitHub Pages](#step-3-enable-github-pages)
  - [Step 4: Access Your Website](#step-4-access-your-website)
- [🛠️ Technical Details](#️-technical-details)
- [🚀 Development Setup](#-development-setup)
- [📁 Project Structure](#-project-structure)
- [🎨 Tailwind CSS Integration](#-tailwind-css-integration)
- [📱 Responsive Design](#-responsive-design)
- [🔧 Troubleshooting](#-troubleshooting)
- [📄 License](#-license)

## ✨ Features

- **Pure Tailwind CSS**: No external CSS files - everything built with Tailwind utility classes
- **Responsive Design**: Optimized for desktop, tablet, and mobile devices
- **Interactive Image Slider**: Features real coffee images with auto-play, navigation, and touch support
- **Coffee Theme**: Warm brown color palette using Amber/Stone colors
- **Mobile Navigation**: Hamburger menu for mobile devices
- **GitHub Pages Ready**: Automatic deployment with GitHub Actions
- **Smooth Animations**: Hover effects and seamless transitions
- **PHP-based Structure**: Modular includes for header and footer
- **SEO Optimized**: Meta tags and semantic HTML structure

## 🚀 Quick Deployment to GitHub Pages

### Step 1: Create GitHub Repository
1. Go to [GitHub.com](https://github.com)
2. Click "New repository"
3. Repository Name: `HostingTestingWebsite`
4. Set repository to **"Public"** (important for free GitHub Pages!)
5. Click "Create repository"

### Step 2: Upload Code to GitHub
Open Terminal/PowerShell in your project folder and execute:

```powershell
git init
git add .
git commit -m "Initial commit - Coffee Shop Website"
git branch -M main
git remote add origin https://github.com/[YOUR-USERNAME]/HostingTestingWebsite.git
git push -u origin main
```

*Replace `[YOUR-USERNAME]` with your GitHub username!*

### Step 3: Enable GitHub Pages
1. Go to your repository on GitHub
2. Click **"Settings"** (top right)
3. Scroll to **"Pages"** (left menu)
4. Under "Source" select **"GitHub Actions"**
5. Save - the deployment process starts automatically!

### Step 4: Access Your Website
After 2-3 minutes, your website will be live at:
**`https://[YOUR-USERNAME].github.io/HostingTestingWebsite`**

## ️ Technical Details

### Technologies Used:
- **Tailwind CSS** (via CDN)
- **PHP 8.2** for server-side logic
- **Vanilla JavaScript** for interactivity
- **SVG Icons** for graphics
- **GitHub Actions** for automated deployment

### Key Components:
- Responsive image slider with coffee images
- Mobile-first navigation system
- Modular PHP includes architecture
- Automated PHP-to-HTML conversion for static hosting

## 🚀 Development Setup

### Option 1: Five Server (Recommended)
1. Install Five Server VS Code Extension
2. Open `index.php` in VS Code
3. Right-click and select "Open with Five Server"
4. Website opens at `http://localhost:5500`

### Option 2: PHP Built-in Server
1. Install PHP (or XAMPP with PHP)
2. Open terminal in project directory
3. Run: `php -S localhost:8000`
4. Open `http://localhost:8000` for PHP version

### Option 3: XAMPP
1. Copy project to `htdocs` folder
2. Start XAMPP Apache
3. Visit `http://localhost/HostingTestingWebsite`

## 📁 Project Structure

```
HostingTestingWebsite/
├── index.php                    # Main page (completely redesigned)
├── agb.php                      # Terms of Service page
├── fiveserver.config.js         # Live Server configuration
├── README.md                    # Documentation (updated)
├── .github/
│   └── workflows/
│       └── deploy.yml           # GitHub Pages deployment
├── images/                      # Images and assets
│   ├── kaffe_1.jpeg            # Coffee image 1
│   ├── kaffe_2.png             # Coffee image 2
│   └── kaffe_3.png             # Coffee image 3
└── includes/                    # PHP includes
    ├── navbar.php              # Navigation (redesigned)
    └── footer.php              # Footer (improved)
```

## 🎨 Tailwind CSS Integration

### Custom Configuration:
```javascript
tailwind.config = {
    theme: {
        extend: {
            animation: {
                'fade-in-up': 'fadeInUp 0.8s ease-out',
                'spin': 'spin 1s ease-in-out infinite',
            },
            keyframes: {
                fadeInUp: {
                    '0%': { opacity: '0', transform: 'translateY(30px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                }
            }
        }
    }
}
```

### Color Scheme:
- **Primary**: Amber colors (amber-50 to amber-900)
- **Secondary**: Stone colors (stone-100 to stone-800)
- **Accents**: White and warm grays
- **Theme**: Coffee-inspired warm browns

## 📱 Responsive Design

- **Mobile First**: Designed for mobile devices first
- **Breakpoints**: Tailwind's default responsive breakpoints
- **Touch Support**: Swipe gestures for image slider
- **Flexible Grid**: CSS Grid and Flexbox layouts
- **Optimized Images**: Lazy loading and proper sizing

## 🔧 Troubleshooting

### GitHub Pages Issues:
1. **"Not Found" Error**: Ensure repository is public and Pages is enabled
2. **Workflow Fails**: Check that "GitHub Actions" is selected as source
3. **Images Not Loading**: Verify images are in the `images/` directory
4. **PHP Errors**: The deployment converts PHP to HTML automatically

### Local Development:
1. **PHP Not Found**: Install PHP or use XAMPP
2. **Port Already in Use**: Try different port: `php -S localhost:8001`
3. **Images Not Showing**: Check file paths and case sensitivity

## 📄 License

This project is open source and available under the [MIT License](LICENSE).



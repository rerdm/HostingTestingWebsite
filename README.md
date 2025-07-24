# HostingTestingWebsite - Coffee Shop Website

Ein modernes Kaffee-Shop Website-Projekt mit Tailwind CSS und braunem Theme.

## ✨ Features

- **Vollständig Tailwind CSS**: Keine externen CSS-Dateien - alles mit Tailwind-Utility-Klassen
- **Responsives Design**: Optimiert für Desktop, Tablet und Mobile
- **Interaktiver Image Slider**: Mit echten Kaffee-Bildern, automatischem Wechsel und Touch-Support
- **Coffee Theme**: Warme braune Farbpalette (Amber/Stone)
- **Mobile Navigation**: Hamburger-Menü für mobile Geräte
- **GitHub Pages Ready**: Automatisches Deployment

## 🚀 Schnelles Deployment zu GitHub Pages

### Schritt 1: Repository auf GitHub erstellen
1. Gehen Sie zu [GitHub.com](https://github.com)
2. Klicken Sie auf "New repository"
3. Repository Name: `HostingTestingWebsite`
4. Repository auf **"Public"** setzen (wichtig für GitHub Pages!)
5. "Create repository" klicken

### Schritt 2: Code zu GitHub hochladen
Öffnen Sie ein Terminal/PowerShell in Ihrem Projektordner und führen Sie aus:

```powershell
git init
git add .
git commit -m "Initial commit - Coffee Shop Website"
git branch -M main
git remote add origin https://github.com/[IHR-USERNAME]/HostingTestingWebsite.git
git push -u origin main
```

*Ersetzen Sie `[IHR-USERNAME]` mit Ihrem GitHub-Benutzernamen!*

### Schritt 3: GitHub Pages aktivieren
1. Gehen Sie zu Ihrem Repository auf GitHub
2. Klicken Sie auf **"Settings"** (oben rechts)
3. Scrollen Sie zu **"Pages"** (links im Menü)
4. Bei "Source" wählen Sie **"GitHub Actions"**
5. Speichern - der Deployment-Prozess startet automatisch!

### Schritt 4: Website aufrufen
Nach 2-3 Minuten ist Ihre Website live unter:
**`https://[IHR-USERNAME].github.io/HostingTestingWebsite`**

## 📁 Projektstruktur
- **Smooth Animations**: Hover-Effekte und Übergänge
- **PHP-basierte Struktur**: Modulare Includes für Header und Footer

## 🛠️ Technische Details

### Verwendete Technologien:
- **Tailwind CSS** (via CDN)
- **PHP** für serverseitige Logik
- **Vanilla JavaScript** für Interaktivität
- **SVG Icons** für Grafiken

### Removed Dependencies:
- ❌ `css/style.css` - Ersetzt durch Tailwind-Klassen
- ❌ `css/script.js` - JavaScript in HTML integriert

## 🚀 Development Setup

### Option 1: Five Server (empfohlen)
1. Five Server VS Code Extension installieren
2. `index.php` in VS Code öffnen
3. Rechtsklick und "Open with Five Server" wählen
4. Website öffnet sich unter `http://localhost:5500`

### Option 2: PHP Built-in Server
1. XAMPP mit PHP installieren
2. Terminal im Projektverzeichnis öffnen
3. Ausführen: `C:\xampp\php\php.exe -S localhost:8000`
4. `http://localhost:8000` öffnen für PHP-Version

### Option 3: XAMPP
1. Projekt in `htdocs` Ordner kopieren
2. XAMPP Apache starten
3. `http://localhost/HostingTestingWebsite` aufrufen

## 📁 Projekt Struktur

```
HostingTestingWebsite/
├── index.php              # Hauptseite (vollständig überarbeitet)
├── agb.php                # AGB Seite
├── fiveserver.config.js   # Live Server Konfiguration
├── README.md              # Dokumentation (aktualisiert)
├── images/                # Bilder und Assets
└── includes/              # PHP Includes
    ├── navbar.php         # Navigation (überarbeitet)
    └── footer.php         # Footer (verbessert)
```

## � Neue Features nach Überarbeitung

### Verbesserte Slider Funktionalität:
- **Auto-play**: Automatischer Bildwechsel alle 5 Sekunden
- **Touch Support**: Swipe-Gesten auf mobilen Geräten
- **Hover Pause**: Auto-play pausiert beim Hover
- **Smooth Transitions**: Flüssige Übergänge zwischen Slides
- **Responsive**: Angepasste Größen für verschiedene Bildschirmgrößen

### Enhanced Hover Effects:
- **Button Animations**: Lift-Effekt bei Buttons (`hover:-translate-y-0.5`)
- **Card Hover**: Schatten und Lift-Effekt bei Feature-Karten
- **Navigation**: Verbesserte Hover-Zustände mit Scale-Effekten

### Mobile Optimizations:
- **Responsive Slider**: Kleinere Navigation auf mobilen Geräten
- **Touch-friendly**: Größere Touch-Targets
- **Optimized Typography**: Angepasste Schriftgrößen für mobile Geräte

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



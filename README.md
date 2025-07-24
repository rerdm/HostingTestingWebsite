# ☕ Testing-Coffee-Shop - Static Website Hosting on GitHub Pages

A modern coffee shop website project designed for static hosting on GitHub Pages. This project demonstrates how to build and deploy a responsive web application using Tailwind CSS with automated deployment pipelines.

# Table of Contents

- [📖 Project Overview](#-project-overview)
- [🚀 Quick Start Guide](#-quick-start-guide)
  - [Git Clone & Setup](#git-clone--setup)
  - [Local Development with Five Server](#local-development-with-five-server)
- [🌐 GitHub Pages Deployment](#-github-pages-deployment)
  - [GitHub Pages Capabilities & Limitations](#github-pages-capabilities--limitations)
  - [Manual Deployment Steps](#manual-deployment-steps)
- [⚙️ Pipeline Integration](#️-pipeline-integration)
  - [GitHub Actions Workflow](#github-actions-workflow)
  - [Automated PHP to HTML Conversion](#automated-php-to-html-conversion)
  - [Component Integration for Static Deployment](#component-integration-for-static-deployment)
- [🛠️ Technical Details](#️-technical-details)
- [📁 Project Structure](#-project-structure)
- [🎨 Tailwind CSS Integration](#-tailwind-css-integration)
- [📱 Responsive Design](#-responsive-design)
- [🔧 Troubleshooting](#-troubleshooting)
- [📄 License](#-license)

## 1 Project Overview

This project is a **static coffee shop website** specifically designed for hosting on **GitHub Pages**. This Wbsite ca nbe uses for webtesting purposes. It features:

- ✅ **Static HTML/CSS/JavaScript** - No server-side processing required
- ✅ **Responsive Design** - Mobile-first approach with Tailwind CSS
- ✅ **Automated Deployment** - GitHub Actions pipeline for seamless deployment
- ❌ This website does **not** feature any **database interactions**. All content is static and does not rely on backend data storage or dynamic database queries.

## 2 Local testing the Website with FiveServer

**Five Server Configuration** for optimal local testing (in this configurration we dont use PHP because is not workung on Github Pages) :

### 2.1 Install Five Server Extension 
Install the FiveServer extension.

### 2.2 Configure Five Server

Create a `fiveserver.config.js`in the root directory

   ```javascript
   module.exports = {
     open: 'index.html',
   };
   ```

### 2.3 Start Local Development
   - Right-click on `index.php`
   - Select "Open with Five Server" in th eupper navigation baar
   - Website opens at `http://localhost:5500`


## 3 GitHub Pages Deployment

### 3.1 GitHub Pages Capabilities & Limitations

Github Pages has some limitation in Hosting resoruces. See below.

#### 3.1.1 What GitHub Pages CAN do
- Host static HTML, CSS, JavaScript files
- Custom domains and HTTPS
- GitHub Actions for automated deployment
- CDN distribution worldwide

#### 3.1.2 What GitHub Pages CANNOT do
- Server-side languages (PHP, Python, Node.js)
- Database connections
- Server-side form processing
- Dynamic content generation
- File uploads to server

### 4.2 Pipeline Integration (Workflow)

```yaml
name: Deploy to GitHub Pages

on:
  push:
    branches: [ main, master ]
  workflow_dispatch:

permissions:
  contents: read
  pages: write
  id-token: write

concurrency:
  group: "pages"
  cancel-in-progress: false

jobs:
  build:
    runs-on: ubuntu-latest
    steps:
      - name: Checkout
        uses: actions/checkout@v4

      - name: Convert PHP to HTML and copy assets
        run: |
          # Create output directory
          mkdir -p dist
          
          # Copy images directory
          cp -r images dist/
          
          cp index.html dist/index.html
          
          cp login.html dist/login.html

          cp agb.html dist/agb.html

          cp under_construction.html dist/under_construction.html

      - name: Fix remaining PHP tags and links
        run: |
          # Remove any remaining PHP opening/closing tags
          find dist -name "*.html" -type f -exec sed -i 's/<?php[^>]*>//g' {} \;
          find dist -name "*.html" -type f -exec sed -i 's/?>//g' {} \;
          
          # Ensure all links point to .html files
          find dist -name "*.html" -type f -exec sed -i 's/href="\([^"]*\)\.php"/href="\1.html"/g' {} \;
          find dist -name "*.html" -type f -exec sed -i 's/action="\([^"]*\)\.php"/action="\1.html"/g' {} \;
          
          # Debug: Show what files were created
          echo "Created files:"
          ls -la dist/
          echo "Sample content from index.html:"
          head -10 dist/index.html || true

      - name: Setup Pages
        uses: actions/configure-pages@v4

      - name: Upload artifact
        uses: actions/upload-pages-artifact@v3
        with:
          path: './dist'

  deploy:
    environment:
      name: github-pages
      url: ${{ steps.deployment.outputs.page_url }}
    runs-on: ubuntu-latest
    needs: build
    steps:
      - name: Deploy to GitHub Pages
        id: deployment
        uses: actions/deploy-pages@v4
```


### 4.3 Enable GitHub Pages
   - Go to repository **Settings**
   - Navigate to **Pages** section
   - Source: **Deploy from a branch**
   - Branch: **master** / **main**
   - Folder: **/ (root)**
   - Click **Save**

## 5 Manual Deployment Steps (on push)

At the moment the pipeline will be striggered onyl on `push`.
Other triggers need to be implementes (eg. `workflow_dispatch`)

## 5.2 Upload Files via Git to trigger the Pipeleine - Deployment
   ```bash
   git add .
   git commit -m "<commit message>"
   git push origin master
   ```

## 5.3 Access Your Website:
   ```
   URL: https://<username>.github.io/<repository-name>/
   ```





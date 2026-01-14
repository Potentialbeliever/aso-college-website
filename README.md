# ASO College Website (World‑Class + Admin Upload)

This project is a modern static website designed to run on **GitHub Pages** with an **admin dashboard** for managing the Gallery.

## 1) Host on GitHub Pages
1. Push this folder to your GitHub repo (example: `Potentialbeliever/aso-college-website`).
2. In GitHub: **Settings → Pages**
3. Source:
   - Branch: `main`
   - Folder: `/ (root)`
4. Save.

Your site will appear on your GitHub Pages URL.

## 2) Connect your domain
### If you bought a domain (recommended: Namecheap)
1. In GitHub: **Settings → Pages → Custom domain**
2. Enter your domain (example: `www.yourdomain.com`) and save.
3. Update DNS at your domain registrar:
   - For `www` (CNAME): point **www** to your GitHub Pages domain (the value GitHub shows).
   - For root/apex (`yourdomain.com`): use **A records** to GitHub Pages IPs (GitHub shows these in Pages settings) or use ALIAS/ANAME if your DNS supports it.
4. GitHub will update the `CNAME` file automatically (or you can edit `CNAME` yourself).

Current `CNAME` in this repo: `www.asocos.com` — replace it with your new domain when ready.

## 3) Admin dashboard (upload pictures)
Open: `/admin/`

This site uses **Decap CMS** (formerly Netlify CMS). Because GitHub Pages is static, login requires an **OAuth server**.

### Recommended OAuth server (works with GitHub Pages)
Deploy the open-source **netlify-cms-oauth-provider** (Decap CMS OAuth) to a free host such as Render/Railway/Fly.
- Create a GitHub OAuth App
- Set callback URL to your OAuth server
- Put the OAuth server URL into: `admin/config.yml`

In `admin/config.yml`, replace:
- `base_url: https://YOUR-OAUTH-SERVER.example.com`
- `site_url:` and `display_url:`

After that, your admin can:
- login
- upload images to `images/uploads/`
- edit `data/gallery.json` (gallery items)

## 4) Gallery content
The Gallery page loads items from:
- `data/gallery.json`

To add a photo manually, add a new object inside `items`:
```json
{
  "title": "New Photo",
  "image": "images/uploads/new-photo.jpg",
  "description": "Optional description"
}
```

## Notes
- The UI has been upgraded with modern styling, better mobile experience, and improved gallery cards.
- For best performance, compress large images before uploading.

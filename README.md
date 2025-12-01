# Custom Theme

A custom WordPress theme built from scratch with modern best practices.

## Description

Custom Theme is a clean, responsive WordPress theme designed to be a solid foundation for your website. It includes all the essential WordPress template files and follows WordPress coding standards.

## Features

- **Responsive Design**: Mobile-first approach that works on all devices
- **Custom Logo Support**: Add your own logo through the Customizer
- **Post Thumbnails**: Featured image support for posts and pages
- **HTML5 Markup**: Modern, semantic HTML5 structure
- **Translation Ready**: Fully translatable with text domain
- **SEO Friendly**: Clean code and proper heading structure

## Installation

1. Download the theme files
2. Upload the `custom-theme` folder to `/wp-content/themes/` directory
3. Activate the theme through the 'Appearance > Themes' menu in WordPress
4. Configure theme settings in the WordPress Customizer

## Theme Structure

```
custom-theme/
├── assets/
│   ├── css/
│   └── js/
├── inc/
├── template-parts/
├── 404.php
├── footer.php
├── functions.php
├── header.php
├── index.php
├── README.md
├── sidebar.php
├── single.php
└── style.css
```

## Customization

### Menus
Go to **Appearance > Menus** to create and assign menus to:
- Primary Menu (main navigation)
- Footer Menu

### Widgets
Go to **Appearance > Widgets** to add widgets to:
- Sidebar
- Footer Widget Area

### Logo
Go to **Appearance > Customize > Site Identity** to upload your custom logo.

## Template Files

- `index.php` - Main template file
- `header.php` - Header template
- `footer.php` - Footer template
- `sidebar.php` - Sidebar template
- `single.php` - Single post template
- `page.php` - Page template
- `archive.php` - Archive template (categories, tags, dates)
- `search.php` - Search results template
- `404.php` - 404 error page template

## Template Parts

Located in the `template-parts/` directory:
- `content.php` - Default post content
- `content-single.php` - Single post content
- `content-page.php` - Page content
- `content-search.php` - Search result item
- `content-none.php` - No content found message

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## Credits

- Theme developed by: Your Name
- WordPress Codex: https://codex.wordpress.org/

## License

This theme is licensed under the GPL v2 or later.

## Changelog

### Version 1.0.0
- Initial release
- Basic theme structure
- Responsive design
- Widget areas
- Custom menus
- Post thumbnails support

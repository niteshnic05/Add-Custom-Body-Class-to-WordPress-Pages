# Add Custom Body Class to WordPress Pages
This script provides a way to add custom CSS classes to the `<body>` tag of individual WordPress pages. This is useful when you need specific styling or JavaScript targeting for certain pages.

## How to use
### Step 1: 
Copy functions.php code to your theme functions.php file
### Step 2:
It'll add 'Custom Body Class section' in all page sidebar
### Step 3:
Just add desired class and use it for your custom styling

## Use Case Example

### Step 1: Add a Custom Class
1. Edit a WordPress page in the admin panel.
2. In the sidebar under the **Custom Body Class** section, enter the desired CSS class name (e.g., `my-custom-class`).

### Step 2: Add Custom Styles
In your theme's stylesheet (`style.css`), add styling for the custom class:

```css
body.my-custom-class {
    background-color: #f0f0f0;
    color: #333;
}
```

### Step 3: View the Page
1. Visit the page where you added the custom class.
2. Inspect the <body> tag in the browser's developer tools.
3. The class name entered in the Custom Body Class field will appear as part of the <body> tag.
#### Screenshot :
![alt text](https://codereplica.com/wp-content/uploads/2025/01/Custom-body-class-wp.jpg  "Wordpress Custom body class")

## Benefits
- Allows for dynamic customization of page styles.
- Enables targeted JavaScript functionality for specific pages.
- Easy to manage directly from the WordPress admin interface.

## Compatibility
- Tested on: WordPress 5.0 and later.
- Works with: Most themes that utilize the body_class filter.

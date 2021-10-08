# 4ww3-project1

## Add-On 2
i. Navigation bar logo HTML code sample:
```
<picture>
    <source media="(min-width:1024px)" srcset="logo1.png">
    <img src="logo2.png" alt="logo">
</picture>
```
'logo1.png' is the bigger version at 100x100px, and 'logo2.png' is the smaller one at 50x50px. If you use a desktop browser, where the width is certainly much larger than 1024px, you will see the larger logo. If you use a smaller device, ex. iPad, where the width dimension is just 768px in portrait mode, the logo is noticeably smaller. However, on the iPad, if you rotate to landscape mode, the width becomes 1024px and you will notice the logo is much larger.

ii.
1. If certain formats are not accepted by the browser, you can use a different one; ex. the WebP image format is more lightweight than jpg, but not all browsers can accept it; using `<picture>` and `<source>` fixes that problem
2. In responsive design, it can be used to display different pictures depending on screen size - ex. a very complex logo with lots of small details and colours may look ugly when the DPI is low and the logo must be small, so a simplified version is displayed instead
3. Faster speed when loading page; only the most appropriate picture for the user's display is shown on the screen


iii. It is a relatively new feature so it's possible that some browsers do not yet support it. This is mitigated by using the `<img>` tag inside of the `<picture>` tag so it will always be backwards compatible.
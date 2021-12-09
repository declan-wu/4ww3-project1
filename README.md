# 4ww3-project1
## Group Members
Jennifer Cheng - 400118301 - chengj43
Song Tao (Declan) Wu - 400132033 - wus92

# NEW FOR PART 2 - NOTES TO MARKER
**You must access the https server or else Google Maps API will not work**: Please go to here https://3.23.48.49/index.html

It will say it is not secure - currently only using self-signed certificate - functionality will be the same.

You must turn off any AdBlocker or else some parts of the Google Maps API also doesn't work.


## Notes to Marker (Part 1)
We used Bootstrap, but otherwise everything is plain HTML/CSS.

Please see 3.23.48.49 to view the site.

Here is our GitHub repo: https://github.com/declan-wu/4ww3-project1

On mobile, the navigation bar collapses to a hamburger menu. However, when you click on it, nothing happens because we do not have any JavaScript enabled yet; hopefully this is not a problem. Once we're allowed to use JavaScript, the menu will become clickable to show the navigation bar.

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

# Part 3
## Notes and resources:
- https://stackoverflow.com/questions/219569/best-database-field-type-for-a-url
- http://jayblanchard.net/proper_password_hashing_with_PHP.html
- https://stackoverflow.com/questions/36893238/simple-sql-query-selecting-from-table-where-email-email
- https://winscp.net/eng/docs/guide_amazon_ec2
- https://www.tutsmake.com/how-to-install-phpmyadmin-amazon-ec2-ubuntu/
- https://www.tutsmake.com/upload-file-to-aws-s3-bucket-in-php/
- https://stackoverflow.com/questions/10456113/check-file-extension-in-upload-form-in-php
- https://serverfault.com/questions/151328/setting-apache2-path-environment-variable
- https://bobbyhadz.com/blog/aws-s3-allow-public-read-access


ErrorDocument 404 https://www.iiumoasis.com/notfound.php


RewriteEngine on
RewriteBase /
rewritecond %{http_host} ^iiumoasis.com [nc]
rewriterule ^(.*)$ https://www.iiumoasis.com/$1 [r=301,nc]
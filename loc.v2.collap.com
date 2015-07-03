<VirtualHost *:8001>
    DocumentRoot "/var/www/dpower4/teamroomV3/backend/src"
    ServerAdmin webmaster@afsar.com
    ServerName loc.v2.collap.com
    DirectoryIndex index.php index.html

<Directory /var/www/dpower4/teamroomV3/backend/src>
               Options -Indexes FollowSymLinks Multiviews
               AllowOverride All
               Order allow,deny
               allow from all
        <IfModule mod_php5.c>
                php_value include_path ".:/usr/share/php:/usr/share/pear/php:/usr/share/pear"
        </IfModule>
        <IfModule mod_rewrite.c>
            RewriteEngine on
            #RewriteBase /

	    RewriteRule ^$  /admin                                  [L]

            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteCond %{REQUEST_FILENAME} !-d
            RewriteRule ^api/(.*)?(.*)$ rest_service.php?path=$1&$2 [QSA,L]

            RewriteRule ^lib/memc/$ lib/memc/memcache.php           [L]
            RewriteRule ^index.html$ static/demo/index.html         [L]
            RewriteRule ^static/(.*)$ static/$1                     [L]
            RewriteRule ^views/(.*)$  views/$1                      [L]
            RewriteRule ^thrift/(.*)$ thrift/$1                     [L]

            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteCond %{REQUEST_FILENAME} !-d
            RewriteRule ^(.*)?(.*)$ index.php/$1     [QSA,L]

      </IfModule>
      </Directory>
  
	#LogFormat "[%P] %h %l %u %t %D \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\"" combined
	LogFormat "[%P] %{forensic-id}<n %h %l %u %t %D \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\"" combined
	LogLevel warn
	ErrorLog "/var/log/capillary/apache/errors/collap_error.log"
	CustomLog "/var/log/capillary/apache/access/collap_access.log" combined env=!dontlog
	ServerSignature On
</VirtualHost>

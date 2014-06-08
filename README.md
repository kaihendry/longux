	server {
		server_name long.dabase.com;
		root /srv/www/long.dabase.com;
		charset utf-8;
		access_log /var/log/nginx/long.access.log;
		error_log /var/log/nginx/long.error.log;

		location / {
			index index.php index.html;
		}

		location ~ \.php$ {
			try_files      $uri = 404;
			fastcgi_pass   unix:/run/php-fpm/php-fpm.sock;
			fastcgi_index  index.php;
			include        fastcgi.conf;
		}
	}

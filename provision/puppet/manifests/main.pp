include essentials, php, composer, nginx

node default {
	
	exec { 'apt-get update':
		path => '/usr/bin',
	}

}

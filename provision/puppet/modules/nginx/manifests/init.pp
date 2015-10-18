class nginx {

  # Install the nginx package. This relies on apt-get update
  package { 'nginx':
    ensure => 'present',
    require => Exec['apt-get update'],
  }

  # Make sure that the nginx service is running
  service { 'nginx':
    ensure => running,
    require => Package['nginx'],
  }

  file { 'nginx-config':    
    ensure => file,
    path => '/etc/nginx/nginx.conf',
    source => 'puppet:///modules/nginx/nginx.conf',
    notify => Service['nginx'],
    require => Package['nginx']
  }  

  # Add localhost configuration
  file { 'nginx-localhost':
    path => '/etc/nginx/sites-available/localhost',
    ensure => file,
    require => Package['nginx'],
    source => 'puppet:///modules/nginx/localhost',
  }

  # Disable the default nginx vhost
  file { 'default-nginx-disable':
    path => '/etc/nginx/sites-enabled/default',
    ensure => absent,
    require => Package['nginx'],
  }

  # Symlink our config in sites-enabled to enable it
  file { 'nginx-enable-localhost':
    path => '/etc/nginx/sites-enabled/localhost',
    target => '/etc/nginx/sites-available/localhost',
    ensure => link,
    notify => Service['nginx'],
    require => [
      File['nginx-localhost'],
      File['default-nginx-disable'],
    ],
  }

}

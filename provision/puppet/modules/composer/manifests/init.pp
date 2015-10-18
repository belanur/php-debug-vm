class composer {

  exec {'composer-install':
    command => '/usr/bin/curl -sS https://getcomposer.org/installer | php',
    require => Package['php5-cli']
  }

  exec {'composer-move':
    command => '/bin/mv composer.phar /usr/local/bin/composer',
    require => Exec['composer-install']
  }

  exec {'add-composer-bin-path':
    command => '/bin/echo "export PATH=\"~/.composer/vendor/bin:$PATH\"" >> /home/vagrant/.profile',
    require => Exec['composer-move']
  }

}

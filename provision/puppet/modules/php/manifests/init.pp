class php {

  package { 
    [
        'php5-fpm',
        'php5-cli',
        'php5-phpdbg',
        'php5-curl',
        'php5-intl',
        'php5-xdebug'
    ]:
    ensure => present,
    require => Exec['apt-get update'],
    notify  => Service['php5-fpm']
  }

  file { '/etc/php5/fpm/pool.d/www.conf':
    source  => 'puppet:///modules/php/pool.conf',
    require => Package['php5-fpm'],
    notify  => Service['php5-fpm'],
  }

  file { '/etc/php5/fpm/php.ini':
    source => 'puppet:///modules/php/php.ini',
    require => Package['php5-fpm'],
    notify  => Service['php5-fpm']
  }

  file { '/etc/php5/cli/php.ini':
    source => 'puppet:///modules/php/php.ini',
    require => Package['php5-cli']
  }

  # Make sure php5-fpm is running
  service { 'php5-fpm':
    ensure => running,
    require => Package['php5-fpm'],
  }
}

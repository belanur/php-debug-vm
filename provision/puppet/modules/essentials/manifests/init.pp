class essentials {

  package { 
  	[
  		'git',
  		'ant',
  		'autojump',
  		'zsh'
  	]:
    ensure => present,
    require => Exec['apt-get update']
  }

}

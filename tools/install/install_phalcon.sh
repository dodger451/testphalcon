git clone --depth=1 git://github.com/phalcon/cphalcon.git
cd cphalcon/build
sudo ./install

#Using phpenv
which phpenv && phpenv config-add phalcon.ini

# Ubuntu/Debian: Add a file called 30-phalcon.ini in /etc/php5/conf.d/ with this content:
# extension=phalcon.so

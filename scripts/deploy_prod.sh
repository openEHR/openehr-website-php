#!/bin/sh
echo 'cd  /var/www/vhosts/openehr.org'
cd  /var/www/vhosts/openehr.org
echo 'cp -rup www2.openehr.org/* www.openehr.org'
cp -rup www2.openehr.org/* www.openehr.org


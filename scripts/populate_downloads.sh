#!/bin/bash
#
# Populate the download_files directory under the website root from 
# from /var/www/builds/<domain>/download_files e.g.
# /var/www/builds/openehr.org/download_files
#

#
# ============== Definitions =============
#
domain=openehr.org
src_build_root=/var/www/builds/
src_build_domain_root=$src_build_root$domain/
download_files_dir=download_files
src_domain_files_root=$src_build_domain_root$download_files_dir

sites_root=/var/www/vhosts/$domain

#
# ============== functions =============
#

# run a command in a standard way
# $1 = command string
do_cmd () {
	echo "------ Running: $1"
	eval $1 2>&1
}

#
# ============== Set up paths =============
#
site=${PWD#$sites_root}
site=${site%%/*}
site_dir=$sites_root$site
echo "------ copying $src_domain_files_root to $site_dir/$download_files_dir"


echo "checking existence of $download_files_dir"
cd $site_dir
if [ ! -d $download_files_dir ]; then
	mkdir $download_files_dir
	echo "created $download_files_dir in $site_dir"
fi

#
# ============= get build up to date ============
#

#
# ============= Do the copy =============
#

do_cmd "cp -rup $src_domain_files_root/* $download_files_dir"

#!/bin/bash
#
# Populate the releases/<release>/reference_models/<publisher>/XSD etc directories 
# from /var/www/git/reference_models, which has the structure:
#
#	/models/<publisher>/Release-<release>/XSD/*.xsd, index.html
#                                         BMM/*.bmm, index.html
#
#

#
# ============== Definitions =============
#
domain=openehr.org
git_repo=reference-models
git_repo_clone_dir=/var/www/git/$git_repo
sites_root=/var/www/vhosts/$domain/
git_repo_find_cmd="find . -maxdepth 4 -type d -wholename './models/*/Release-*/*'"
git_remove_local_changes="git clean -d -f"
git_pull_cmd="git pull"
git_archive_cmd="git archive"
git_repo_pub_dir=models

release_dir=releases


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
echo "------ exporting $git_repo Git repo to site $site"


echo "checking existence of $release_dir"
site_dir=$sites_root$site
cd $site_dir
if [ ! -d $release_dir ]; then
	mkdir $release_dir
	echo "created $release_dir in $site_dir"
fi

dest_parent_dir=$site_dir/$release_dir
echo "Target location: $dest_parent_dir"

#
# ============= get Git repo up to date ============
#
cd $git_repo_clone_dir
do_cmd "$git_remove_local_changes"
do_cmd "$git_pull_cmd"

#
# ============= Do the extraction =============
# convert a repo source directory like 
#	./models/<publisher>/Release-<release>/<formalism>
# to a terget directory like:
# 	releases/<release>/reference_models/<publisher>/<formalism>
#

eval $git_repo_find_cmd | while read repo_dir; do
	src_dir=${repo_dir#./}
	targ_parent_dir=$dest_parent_dir$(echo $src_dir | sed -n -e 's!^models/\([^/]*\)/Release-\([0-9.]*\)/.*$!/\2/reference-models/\1!p')
	targ_dir=$dest_parent_dir$(echo $src_dir | sed -n -e 's!^models/\([^/]*\)/Release-\([0-9.]*\)/\(.*\)$!/\2/reference-models/\1/\3!p')
	echo "----- mapping $src_dir to $targ_dir"

	if [ -d $targ_dir ]; then
		rm -rf $targ_dir
	elif [ ! -d $targ_parent_dir ]; then
		mkdir -p $targ_parent_dir
	fi
	do_cmd "cp -rup $src_dir $targ_parent_dir"
done

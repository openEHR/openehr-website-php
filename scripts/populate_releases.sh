#!/bin/bash
#
# Populate the releases directory from /var/www/git/specifications
#

#
# ============== Definitions =============
#
git_repo=specifications
git_repo_clone_dir=/var/www/git/$git_repo
sites_root=/var/www/vhosts/openehr.org/

git_remove_local_changes="git clean -d -f"
git_pull_cmd="git pull"
git_archive_cmd="git archive"
git_repo_pub_dir=publishing

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
# here we cycle through all the git tags of the form "Release-*" in the repo
# and perform the 'git archive' command to extract the bit we want ('publishing' dir)
# and after extracted, rename it to the numerical part of the release
#
git tag | grep Release | while read tagname; do
	
	# convert tagname like "Releaes-0.9" into targ dir name like "0.9"
	tagid=${tagname#Release-}

	# don't bother if it is already there
	targ_dir=$dest_parent_dir/$tagid
	if [ ! -d $targ_dir ]; then
		do_cmd "$git_archive_cmd $tagname $git_repo_pub_dir | tar -x -C $dest_parent_dir"

		# now rename the output dir to its release tag name
		do_cmd "mv $dest_parent_dir/$git_repo_pub_dir $targ_dir"

		# now copy some specific web page files to overwrite some old (ugly) index files
		do_cmd "cp $sites_root$site/pages/programs/specification/releases/$tagid.php $targ_dir/index.php"
	else
		echo $targ_dir already extracted
	fi
done

#
# Now the same thing, but for the repo HEAD version. Note - we already wipe out
# a previous extract in this case, since it's the top (changing) version
#
targ_dir=$dest_parent_dir/trunk
if [ -d $targ_dir ]; then
	echo "------ Wiping out existing $targ_dir"
	rm -rf $targ_dir
fi
do_cmd "$git_archive_cmd master $git_repo_pub_dir | tar -x -C $dest_parent_dir"
do_cmd "mv $dest_parent_dir/$git_repo_pub_dir $targ_dir"


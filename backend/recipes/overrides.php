<?php

namespace Deployer;

/**
 * @override
 * Skip composer install if we are uploading with the upload_vendors option set to true.
 */
desc('Installing vendors');
task('deploy:vendors', function () {
    if (get('strategy') === 'upload' && get('upload_vendors')) {
        return writeln("<fg=yellow;options=bold;>Warning: </><fg=yellow;>option `upload_vendors` is set to true. Skipping...</>");
    }

    if (!commandExist('unzip')) {
        writeln('<comment>To speed up composer installation setup "unzip" command with PHP zip extension https://goo.gl/sxzFcD</comment>');
    }

    run('cd {{release_path}}/backend && {{bin/composer}} {{composer_options}}');
});

task('artisan:command:link', function () {
    run('ln -s {{release_path}}/backend/artisan {{release_path}}/artisan');
});

desc('Creating symlinks for shared files and dirs');
task('deploy:shared', function () {
    $sharedPath = "{{deploy_path}}/shared";
    $subdir = 'backend';

    // Validate shared_dir, find duplicates
    foreach (get('shared_dirs') as $a) {
        foreach (get('shared_dirs') as $b) {
            if ($a !== $b && strpos(rtrim($a, '/') . '/', rtrim($b, '/') . '/') === 0) {
                throw new Exception("Can not share same dirs `$a` and `$b`.");
            }
        }
    }

    foreach (get('shared_dirs') as $dir) {
        // Check if shared dir does not exist.
        if (!test("[ -d $sharedPath/$dir ]")) {
            // Create shared dir if it does not exist.
            run("mkdir -p $sharedPath/$dir");

            // If release contains shared dir, copy that dir from release to shared.
            if (test("[ -d $(echo {{release_path}}/$subdir/$dir) ]")) {
                run("cp -rv {{release_path}}/$subdir/$dir $sharedPath/" . dirname(parse($dir)));
            }
        }

        // Remove from source.
        run("rm -rf {{release_path}}/$subdir/$dir");

        // Create path to shared dir in release dir if it does not exist.
        // Symlink will not create the path and will fail otherwise.
        run("mkdir -p `dirname {{release_path}}/$subdir/$dir`");

        // Symlink shared dir to release dir
        run("{{bin/symlink}} $sharedPath/$dir {{release_path}}/$subdir/$dir");
    }

    foreach (get('shared_files') as $file) {
        $dirname = dirname(parse($file));

        // Create dir of shared file if not existing
        if (!test("[ -d {$sharedPath}/{$dirname} ]")) {
            run("mkdir -p {$sharedPath}/{$dirname}");
        }

        // Check if shared file does not exist in shared.
        // and file exist in release
        if (!test("[ -f $sharedPath/$file ]") && test("[ -f {{release_path}}/$subdir/$file ]")) {
            // Copy file in shared dir if not present
            run("cp -rv {{release_path}}/$subdir/$file $sharedPath/$file");
        }

        // Remove from source.
        run("if [ -f $(echo {{release_path}}/$subdir/$file) ]; then rm -rf {{release_path}}/$subdir/$file; fi");

        // Ensure dir is available in release
        run("if [ ! -d $(echo {{release_path}}/$subdir/$dirname) ]; then mkdir -p {{release_path}}/$subdir/$dirname;fi");

        // Touch shared
        run("touch $sharedPath/$file");

        // Symlink shared dir to release dir
        run("{{bin/symlink}} $sharedPath/$file {{release_path}}/$subdir/$file");
    }
});

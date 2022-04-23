# Publish Gh Pages
To publish github pages, get to the version you want to publish. Make sure the docker is created.


Run inside docker
```bash
make
rm -rf 1 2 docs go_here_for_changes images include
find . -mindepth 1 -maxdepth 1 ! -name "output" -delete
```

Run outside
```bash
git symbolic-ref HEAD refs/heads/gh-pages
git reset
git pull
git add output
```

Commit from here


To get back to master:

```bash
git symbolic-ref HEAD refs/heads/master
git reset --hard
```



# Issues with git pull
If git pull is not working reset hard, pull, and go back to master and build and start over again


# Onetime setup Gh Pages
```bash
git reset --hard
git checkout --orphan gh-pages
git reset --hard
nano index.html
git add index.html
git commit -m "First gh-pages"
git push -u origin gh-pages
git checkout master
```

Then go to https://github.com/esromneb/davidmorseviolins/settings/pages

# see also
* https://jiafulow.github.io/blog/2020/07/09/create-gh-pages-branch-in-existing-repo/

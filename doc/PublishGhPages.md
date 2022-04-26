# Publish Gh Pages
To publish github pages, get to the version you want to publish. Make sure the docker is created.


Run inside docker
```bash
make build delete
```

Run outside
```bash
sudo chown -R ${USER}: .
git symbolic-ref HEAD refs/heads/gh-pages
git reset
git pull
git checkout docs/CNAME
git add .
git status
```

Commit from here


To get back to master:

```bash
git symbolic-ref HEAD refs/heads/master
sudo chown -R ${USER}: .
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


# Notes
* We can use a subfolder, but only if it's `docs`. it's possible there are other valid ones but who cares. I moved my `docs` to `doc` and then rewrite to so `output` goes into `docs`



# see also
* https://jiafulow.github.io/blog/2020/07/09/create-gh-pages-branch-in-existing-repo/


# Make a local build
```bash
local=1 make build makelocal
```

or

```bash
find . | entr -d -s "local=1 make build makelocal"
```

And then from the outside, run python in a new window:

```bash
cd docs
python3 -m http.server
```

Then open http://localhost:8000/



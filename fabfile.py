from __future__ import with_statement
from fabric.api import local, abort, run, cd, env
from fabric.api import settings as fabsettings
from fabric.contrib.console import confirm

def wfdeploy(branch='master'):
    local('git add -p')
    with fabsettings(warn_only=True):
        result = local('git commit')
    local("git push origin %s" % branch)
    code_dir = '~/webapps/ckwilcox_com'
    with cd(code_dir):
        run("git pull origin %s" % branch)

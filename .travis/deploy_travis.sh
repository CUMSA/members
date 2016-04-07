openssl aes-256-cbc -K $encrypted_7edbf22d25f4_key -iv $encrypted_7edbf22d25f4_iv -in .travis/cumsa_ci_rsa.enc -out .travis/cumsa_ci_rsa -d
eval "$(ssh-agent -s)" #start the ssh agent
chmod 600 .travis/cumsa_ci_rsa # this key should have push access
ssh-add .travis/cumsa_ci_rsa
if [ "master" = "$TRAVIS_BRANCH" ] then
    git remote add deploy ssh://cumsaorg@cumsa.org/home/cumsaorg/members-repo
    git push deploy
    ssh cumsaorg@cumsa.org "cd /home/cumsaorg/members-repo && git reset --hard && bash .travis/deploy.sh"
else
    git remote add deploy ssh://cumsaorg@cumsa.org/home/cumsaorg/members-beta-repo
    git push deploy
    ssh cumsaorg@cumsa.org "cd /home/cumsaorg/members-beta-repo/ && git reset --hard && bash .travis/deploy.sh"
fi

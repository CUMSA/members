openssl aes-256-cbc -K $encrypted_7edbf22d25f4_key -iv $encrypted_7edbf22d25f4_iv -in .travis/cumsa_ci_rsa.enc -out .travis/cumsa_ci_rsa -d
eval "$(ssh-agent -s)" #start the ssh agent
chmod 600 .travis/cumsa_ci_rsa # this key should have push access
ssh-add .travis/cumsa_ci_rsa
git remote add deploy ssh://cumsaorg@cumsa.org/home/cumsaorg/members-repo
git push deploy
ssh cumsaorg@cumsa.org "cd /home/cumsaorg/members-repo && bash .travis/deploy.sh"

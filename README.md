![Symfony](app/assets/images/symfony.png)

# Report Repository

This repository is mainly to learn use through the course MVC. Learning object oriented programming in webtechnologies such as PHP, through a course at BTH.

# How to setup git and create a git repository
## Setup
1. Install git
    git --version

2. Create a Github account

3. Set up username and email
    git config --global user.name "Josefine Thorsson"
    git config --global user.email "jotn23@student.bth.se"
    git config --list

4. Create a SSH-key
    ls -la ~/.ssh

5. Add the SSH-key to Github
    cat ~/.ssh/id_ed25519.pub
    ssh -T git@github.com

## Create a repository
1. Navigate to "me/report"

2. Create a local repository
    git init
    ls -la
    git status

3. Create a README-file
    touch README.md
    git status

4. Make the files traceable
    git add .
    git status

5. Commit the files
    git commit -m "Initial release"

6. Create a Github repository
    Create a new repository on Github.

6. Connect the local repository to your remote repository on Github
    git remote add origin git@github.com:JosefineThorsson/MVC
    git branch -M main
    git push -u origin main

## Remove your repository
    rm -rf .git

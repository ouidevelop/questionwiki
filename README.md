# Question Wiki
This is the code that runs the question wiki here: [openquestions.wiki](openquestions.wiki)

# How to start a new wiki with this repo
1. First change the `LocalSettings.php` to be a different file name.
    - Mediawiki knows it needs to setup the db when the project doesn't have a `LocalSettings.php` file
2. Create a mysql db (currently we use heroku's managed mysql db)
3. Deploy wiki (we're using heroku, and that amounts to a `git push`)
4. Go to wiki online and use the setup wizard walkthrough
    - This is the only way to setup the db tables that I've been able to figure out.
5. Download generated `LocalSettings.php` file and run a diff on it and your old settings file to see what's changed. 
6. Anything you want to keep from the new settings that's in the old settings, copy over to the old settings file. Don't copy any passwords or sensitive information
6. there are several bits of information that are hardcoded into the new LocalSettings file that should be added to env variables:
    * `UPGRADE_KEY`
    * `WG_DB_NAME`
    * `WG_DB_PASSWORD`
    * `WG_DB_SERVER`
    * `WG_DB_USER`
    * `WG_META_NAMESPACE`
    * `WG_SECRET_KEY`
    * `WG_SERVER`
    * `WG_SITE_NAME`
7. Once those things have been copied into env variables (on, say, heroku) DELETE the new localsettings file. 
It's important to do this before commiting so you don't commit secrets

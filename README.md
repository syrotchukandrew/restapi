Restapi running instructions
============================

###Step 1: Download the Project
 
Open a terminal, change directory to your public directory and run the
following command to download the project from github:
 
```console
$ git clone https://github.com/syrotchukandrew/restapi.git restapi
```

###Step 2: Change directory

```console
$ cd restapi
```
 edit .env file (DB credentials) 
 
###Step 3: Install project
 
```console
$ ./installScript.sh 
```
and choose item 1 for installing

###Step 4: Run php server

```console
$ php bin/console server:start  
```

you can check API for POST /tmsg on http://127.0.0.1:8000/tmsg in Postman
 

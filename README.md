# book-jacket-api

This is the demo site for the Silex and MVVM talk. It is the component that contains the silex framework, and returns book jacket information. 

It's responsibilities are, return a book for an ISBN, and list books.

See it in action: [book-jacket-api.herokuapp.com](http://book-jacket-api.herokuapp.com)

## Getting started

First ensure vagrant and virtualbox are installed.

You'll need the hosts updater plugin.

```
vagrant plugin install vagrant-hostsupdater
```

### Start the VM
```
vagrant up
vagrant ssh
```
### Install the dependencies.

Inside the VM
```
cd /vagrant
composer install
```

Your service will be running at [book-jacket-api.herokuapp.com](http://book-jacket-api.herokuapp.com)

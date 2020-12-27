## Reset your windows Pc password tru SSH

My son getting out of control playing Mortal Kombat 2 on Windows 10 using DosBox. 
I want to be able to reset the password and shutdown the computer remotely from my phone.

### How to
Setup Windows to run ssh server - https://www.concurrency.com/blog/may-2019/key-based-authentication-for-openssh-on-windows

Create your own ssh keypairs (with `ssh-keygen`) and add them to this directory.
Add the public key portion to the `c:\ProgramData\ssh\administrators_authorized_keys` file on the windows machine.

Replace the IP address of your machine with the one in `hp.sh` file.

Run a docker-compose
`docker-compose up -d`

Login to http://docker-host:8070 try resetting the password.
You should see something like this at the top
```
got your password aaa
me@DESKTOP-D7KOOUE C:\Users\me>rem timeout 10 

me@DESKTOP-D7KOOUE C:\Users\me>setlocal enabledelayedexpansion 
"setting password to aaa"
The command completed successfully.
```

## Benefits
- Peace of mind when you are sleeping - reach out your phone and just reset the password.
- You dont have to know the currrent password to reset since it works with ssh key auth.

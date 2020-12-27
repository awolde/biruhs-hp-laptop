if  [ $# -ne 1 ]; then
	echo "supply a password"
	exit 1
else 
	ssh -o StrictHostKeyChecking=no 192.168.1.214 -l me changepass.cmd $1 | tee -a hp-password.log
fi 

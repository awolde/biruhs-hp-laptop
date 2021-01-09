#!/bin/bash
if [ $# -ne 1 ]; then
	echo "Usage: $0 ON/OFF"
	exit 1
fi
VAL=$1
if [ $VAL == "ON" ]; then
 	sudo cp enabled-rules /etc/shorewall/rules
else
	sudo cp disabled-rules /etc/shorewall/rules
fi
sudo service shorewall reload
sudo journalctl -u shorewall --since "1 min ago" --no-pager

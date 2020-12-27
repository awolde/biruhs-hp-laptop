setlocal enabledelayedexpansion
@echo off
echo "setting password to %1"
net user me %1
shutdown /s /hybrid /t 5
